<?php

namespace App\Models;

use App\Models\BaseModel;

class SuiviEquipement extends BaseModel {

    protected $db;

    public function __construct() {
        $this->db = db_connect();
        $this->session = \Config\Services::session();
    }

    public function meterupdate_datatable_data($para = array(), $limit_length = null, $limit_start = null, $search = '', $orderby = '') {
        $query = $this->db->table('meter_update')
                ->select("meter_update.*,concat(equipment.equip_code, ' - ', equipment.equip_designation) as equipment_designation,component.component_designation, meter_unit.meter_unit_designation as meterunit_designation,member.member_name as member_designation,"
                        . "work_order.work_order_number as wo, work_request.work_request_number as wr, activity.act_number as activite, campaign.campaign_code as campagne")
                ->join('equipment', 'meter_update.meter_update_equipment_id = equipment.equip_id', "left")
                ->join('cost_center', 'equipment.equip_cost_center_id = cost_center.cost_center_id', "left")
                ->join('branch', 'cost_center.cost_center_branch_id = branch.branch_id', "left")
                ->join('user_cost_center', "equipment.equip_cost_center_id = user_cost_center.user_cost_center_cost_center_id AND user_cost_center.user_cost_center_user_id = " . $this->session->get("user_id"), "inner")
                ->join('component', 'meter_update.meter_update_component_id = component.component_id', "left")
                ->join('meter_unit', 'meter_update.meter_update_unit_id = meter_unit.meter_unit_id', "left")
                ->join('member', 'meter_update.meter_update_member_id = member.member_id', "left")
                ->join('work_order', 'work_order.work_order_id = meter_update.meter_update_work_order_id', "left")
                ->join('work_request', 'work_request.work_request_id = meter_update.meter_update_work_request_id', "left")
                ->join('activity', 'activity.act_id = meter_update.meter_update_activity_id', "left")
                ->join('campaign', 'campaign.campaign_id = meter_update.meter_update_campaign_id', "left")
                ->where("meter_update.company_id", $this->session->get("user_company_id"))
                ->where($para);

        if ($search != '') {
            $query->groupStart()
                    ->like('equipment.equip_designation', $search, 'both')
                    ->orLike('component.component_designation', $search, 'both')
                    ->orLike('component.component_code', $search, 'both')
                    ->orLike('meter_unit.meter_unit_designation', $search, 'both')
                    ->orLike('member.member_name', $search, 'both')
                    ->orLike('meter_update.meter_update_description', $search, 'both')
                    ->groupEnd();
        }
        
        if (!is_null($limit_length) && !is_null($limit_start)) {
            $query->limit($limit_length, $limit_start);
        }
        if ($orderby != '') {
            $query->orderBy($orderby);
        } else {
            $query->orderBy("meter_update.meter_update_id", "desc");
        }
        
        return $query->get()->getResult();
    }

}
