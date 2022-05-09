<?php

namespace App\Models\Nomenclature\Equipment;

use App\Models\BaseModel;

class EquipmentModel extends BaseModel {

    protected $db;

    public function __construct() {
        $this->db = db_connect();
        $this->session = \Config\Services::session();
    }

    public function fetch_equipment($param = array()) {
        return $this->db->table('equipment')
                        ->select('equipment.*, cost_center.cost_center_code as cost_center_code, cost_center.cost_center_designation as cost_center_designation,'
                                . ' parent.equip_code as parent_code, parent.equip_designation as parent_designation,'
                                . ' equipment_family.equip_family_code as family_code, equipment_family.equip_family_designation as family_designation,'
                                . 'equipment_subfamily.equip_subfamily_code as subfamily_code, equipment_subfamily.equip_subfamily_designation as subfamily_designation,'
                                . 'equipment_group.equip_group_code as group_code, equipment_group.equip_group_designation as group_designation,'
                                . 'time_table_class.time_class_code as time_class_code, time_table_class.time_class_designation as time_class_designation,'
                                . 'supplier.supplier_code as supplier_code, supplier.supplier_designation as supplier_designation,'
                                . 'equipment_type.equip_type_code as type_code, equipment_type.equip_type_designation as type_designation,'
                                . 'mark.mark_code as mark_code, mark.mark_designation as mark_designation,'
                                . 'm1.member_code as responsible_code, m1.member_name as responsible_designation,'
                                . 'm2.member_code as recipient_code, m2.member_name as recipient_designation,'
                                . 'equipment_state.equip_state_code as state_code, equipment_state.equip_state_state as equip_state_state , equipment_state.equip_state_designation as state_designation,'
                                . 'geographic_location.geo_location_code as location_code, geographic_location.geo_location_designation as location_designation,'
                                . 'criticality.criticality_code as criticality_code, criticality.criticality_designation as criticality_designation')
                        ->join('cost_center', 'equipment.equip_cost_center_id = cost_center.cost_center_id', 'left')
                        ->join('equipment parent', 'equipment.equip_equipment_parent_id = equipment.equip_id', 'left')
                        ->join('equipment_family', 'equipment.equip_equipment_family_id = equipment_family.equip_family_id', 'left')
                        ->join('equipment_subfamily', 'equipment.equip_equipment_subfamily_id = equipment_subfamily.equip_subfamily_id', 'left')
                        ->join('equipment_group', 'equipment.equip_equipment_group_id = equipment_group.equip_group_id', 'left')
                        ->join('time_table_class', 'equipment.equip_time_class_id = time_table_class.time_class_id', 'left')
                        ->join('supplier', 'equipment.equip_supplier_id = supplier.supplier_id', 'left')
                        ->join('equipment_type', 'equipment.equip_type_id = equipment_type.equip_type_id', 'left')
                        ->join('mark', 'equipment.equip_mark_id = mark.mark_id', 'left')
                        ->join('member m1', 'equipment.equip_responsible_id = m1.member_id', 'left')
                        ->join('member m2', 'equipment.equip_work_order_recipient_id = m2.member_id', 'left')
                        ->join('equipment_state', 'equipment.equip_equipment_state_id = equipment_state.equip_state_id', 'left')
                        ->join('geographic_location', 'equipment.equip_geographic_location_id = geographic_location.geo_location_id', 'left')
                        ->join('criticality', 'equipment.equip_criticality_id = criticality.criticality_id', 'left')
                        ->where("equipment.company_id", $this->session->get("user_company_id"))
                        ->where($param)
                        ->orderBy('equipment.equip_id', 'desc')
                        ->get()->getResult();
    }

    
    public function fetch_equipment_family($id) {
        return $this->db->table('equipment_family')
                        ->select('equipment_family.*')
                       ->where("equipment_family.company_id", $this->session->get("user_company_id"))
                        ->where("equip_family_id", $id)
                       ->where("equip_family_automatic_numbering", 1)
                        ->get()->getResult();
                                
    }
    
    public function fetch_equipment_state($id) {
        return $this->db->table('equipment')
                        ->select('equipment_state.equip_state_state as equip_state_state')
                        ->join('equipment_state', 'equipment.equip_equipment_state_id = equipment_state.equip_state_id', 'left')
                        ->where("equipment.company_id", $this->session->get("user_company_id"))
                        ->where("equipment.equip_id", $id)
                        ->get()->getResult();
    }
    
    public function equipment_get_meter($para) {
        return $this->db->table('meter_unit')
                        ->select('meter_unit.*, meter_meter_value, meter_created_date, meter_id')
                        ->join('meter', 'meter.meter_unit_id = meter_unit.meter_unit_id', 'inner')
                        ->where("meter_unit.company_id", $this->session->get("user_company_id"))
                        ->where($para)
                        ->get()->getResult();
    }
    
}
