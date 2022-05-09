<?php

namespace App\Models;

use App\Models\BaseModel;

class NomenclatureModel extends BaseModel {

    protected $db;

    public function __construct() {
        $this->db = db_connect();
        $this->session = \Config\Services::session();
    }

    public function fetch_user_sector() {
        return $this->db->table('sector')
                        ->select('sector.*, country.country_code as country_code, country.country_designation as country_designation, parent.sector_code as parent_code, parent.sector_designation as parent_designation')
                        ->join('country', 'sector.sector_country_id = country.country_id', 'left')
                        ->join('sector parent', 'sector.sector_parent_id = parent.sector_id', 'left')
                        ->join('user_sector', 'user_sector.user_sector_sector_id = sector.sector_id', 'inner')
                        ->where("user_sector.user_sector_user_id", $this->session->get("user_id"))
                        ->where("sector.company_id", $this->session->get("user_company_id"))
                        ->where("sector.sector_is_deactivated", 0)
                        ->orderBy('sector.sector_id', 'desc')
                        ->get()->getResult();
    }
    
    public function fetch_user_branch() {
        return $this->db->table('branch')
                        ->select('branch.*, country.country_code as country_code, country.country_designation as country_designation, sector.sector_code as sector_code, sector.sector_designation as sector_designation, parent.branch_code as parent_code, parent.branch_designation as parent_designation')
                        ->join('country', 'branch.branch_country_id = country.country_id', 'left')
                        ->join('sector', 'branch.branch_sector_id = sector.sector_id', 'left')
                        ->join('branch parent', 'branch.branch_parent_id = parent.branch_id', 'left')
                        ->join('user_branch', 'user_branch.user_branch_branch_id = branch.branch_id', 'inner')
                        ->where("user_branch.user_branch_user_id", $this->session->get("user_id"))
                        ->where("branch.company_id", $this->session->get("user_company_id"))
                        ->where("branch.branch_is_deactivated", 0)
                        ->orderBy('branch.branch_id', 'desc')
                        ->get()->getResult();
    }
    
    public function fetch_user_cost_center() {
        return $this->db->table('cost_center')
                        ->select('cost_center.*, country.country_code as country_code, country.country_designation as country_designation, analytical_center.analytical_code as analytical_center_code, analytical_center.analytical_designation as analytical_center_designation, branch.branch_code as branch_code, branch.branch_designation as branch_designation')
                        ->join('country', 'cost_center.cost_center_country_id = country.country_id', 'left')
                        ->join('analytical_center', 'cost_center.cost_center_analytical_center_id = analytical_center.analytical_id', 'left')
                        ->join('branch', 'cost_center.cost_center_branch_id = branch.branch_id', 'left')
                        ->join('user_cost_center', 'user_cost_center.user_cost_center_cost_center_id = cost_center.cost_center_id', 'inner')
                        ->where("user_cost_center.user_cost_center_user_id", $this->session->get("user_id"))
                        ->where("cost_center.company_id", $this->session->get("user_company_id"))
                        ->where("cost_center.cost_center_is_deactivated", 0)
                        ->orderBy('cost_center.cost_center_id', 'desc')
                        ->get()->getResult();
    }
    
    public function fetch_user_equipment() {
        return $this->db->table('equipment')
                        ->select('equipment.equip_id, equipment.equip_code, equipment.equip_designation, cost_center_id, cost_center_code, cost_center_designation, '
                                . 'branch_id, branch_code, branch_designation, sector_id, sector_code, sector_designation ')
                        ->join('cost_center', 'cost_center.cost_center_id = equipment.equip_cost_center_id', 'inner')
                        ->join('user_cost_center', 'user_cost_center.user_cost_center_cost_center_id = equipment.equip_cost_center_id', 'inner')
                        ->join('branch', 'cost_center.cost_center_branch_id = branch.branch_id', 'inner')
                        ->join('sector', 'sector.sector_parent_id = branch.branch_sector_id', 'inner')
                        ->where("user_cost_center.user_cost_center_user_id", $this->session->get("user_id"))
                        ->where("equipment.company_id", $this->session->get("user_company_id"))
                        ->where("equipment.equip_is_deactivated", 0)
                        ->orderBy('equipment.equip_id', 'desc')
                        ->get()->getResult();
    }
    
    public function fetch_user_component() {
        return $this->db->table('component')
                        ->select('component.component_id, component.component_code, component.component_designation,'
                                . 'equipment.equip_id, equipment.equip_code, equipment.equip_designation, cost_center_id, cost_center_code, cost_center_designation, '
                                . 'branch_id, branch_code, branch_designation, sector_id, sector_code, sector_designation ')
                        ->join('equipment', 'equipment.equip_id = component.component_id', 'inner')
                        ->join('cost_center', 'cost_center.cost_center_id = equipment.equip_cost_center_id', 'inner')
                        ->join('user_cost_center', 'user_cost_center.user_cost_center_cost_center_id = equipment.equip_cost_center_id', 'inner')
                        ->join('branch', 'cost_center.cost_center_branch_id = branch.branch_id', 'inner')
                        ->join('sector', 'sector.sector_parent_id = branch.branch_sector_id', 'inner')
                        ->where("user_cost_center.user_cost_center_user_id", $this->session->get("user_id"))
                        ->where("equipment.company_id", $this->session->get("user_company_id"))
                        ->where("equipment.equip_is_deactivated", 0)
                        ->orderBy('equipment.equip_id', 'desc')
                        ->get()->getResult();
    }
    
    public function fetch_user_member() {
        $subQuery = $this->db->table('user_cost_center')->select('user_cost_center_cost_center_id')->where('user_cost_center_user_id', $this->session->get("user_id"));
        return $this->db->table('member')
                        ->select('member.*')->distinct()
                        ->join('member_cost_center', 'member.member_id = member_cost_center.member_cost_center_member_id', 'inner')
                        ->whereIn('member_cost_center_cost_center_id', $subQuery)
                        ->where("member.member_is_deactivated", 0)
                        ->orderBy('member.member_id', 'desc')
                        ->get()->getResult();
    }
    
    
}
