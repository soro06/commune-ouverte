<?php

namespace App\Models;

use App\Models\BaseModel;

class AdminModel extends BaseModel {

    protected $db;

    public function __construct() {
        $this->db = db_connect();
        $this->session = \Config\Services::session();
    }
    
    public function fetch_table_cost_center() {
       $query = $this->db->table('cost_center')
                ->select("cost_center.*,branch.branch_code,branch_designation,sector.sector_id,sector.sector_code, sector_designation")
                ->join('branch', "branch.branch_id = cost_center.cost_center_branch_id", "left")
                ->join('sector', "sector.sector_id = branch.branch_sector_id", "left")
                ->where('cost_center.company_id', $this->session->get("user_company_id"))
                ->get();
        return $query->getResult();
    }
    
    public function fetch_table_branch() {
       $query = $this->db->table('branch')
                ->select("branch.*,,sector.sector_id,sector.sector_code, sector_designation")
                ->join('sector', "sector.sector_id = branch.branch_sector_id", "left")
                ->where('branch.company_id', $this->session->get("user_company_id"))
                ->get();
        return $query->getResult();
    }
    
    public function fetch_table_sector_user($user) {
        $query = $this->db->table('sector')
                ->select("sector.*, user_sector.user_sector_user_id")
                ->join('user_sector', "user_sector.user_sector_sector_id = sector.sector_id and user_sector.user_sector_user_id = $user", "left")
                ->where('sector.company_id', $this->session->get("user_company_id"))
                ->get();
        return $query->getResult();
    }

    public function fetch_table_branch_user($user) {
        $query = $this->db->table('branch')
                ->select("branch.*,sector.sector_id,sector.sector_code, sector_designation, user_branch_user_id")
                ->join('user_branch', "user_branch.user_branch_branch_id = branch.branch_id and user_branch.user_branch_user_id = $user", "left")
                ->join('sector', "sector.sector_id = branch.branch_sector_id", "left")
                ->where('branch.company_id', $this->session->get("user_company_id"))
                ->get();
        return $query->getResult();
    }
    
    public function fetch_table_cost_center_user($user) {
        $query = $this->db->table('cost_center')
                ->select("cost_center.*,branch.branch_code,branch_designation,sector.sector_id,sector.sector_code, sector_designation, user_cost_center_cost_center_id")
                ->join('user_cost_center', "user_cost_center.user_cost_center_cost_center_id = cost_center.cost_center_id and user_cost_center.user_cost_center_user_id = $user", "left")
                ->join('branch', "branch.branch_id = cost_center.cost_center_branch_id", "left")
                ->join('sector', "sector.sector_id = branch.branch_sector_id", "left")
                ->where('cost_center.company_id', $this->session->get("user_company_id"))
                ->get();
        return $query->getResult();
    }
    
    public function get_menu_profil($profil) {
        $f = 'menu_' . $this->session->get('user_language') . "_designation";
        $query = $this->db->table('menu m')
                ->select("m.*, upm.privacy_settings_menu_id as mck, upm.privacy_settings_view as mck_view, upm.privacy_settings_add as mck_add, upm.privacy_settings_edit as mck_edit, upm.privacy_settings_delete as mck_delete,"
                        . " concat(if(ml3.menu_id is null,'', concat(ml3.menu_id,',')), if(ml2.menu_id is null,'', concat(ml2.menu_id,',')), if(ml1.menu_id is null,'',concat(ml1.menu_id,',')), ifnull(m.menu_id,'')) as list_id , concat(if(ml3.$f is null,'', concat(ml3.$f,' / ')), if(ml2.$f is null,'', concat(ml2.$f,' / ')), if(ml1.$f is null,'',concat(ml1.$f,' / ')), ifnull(m.$f,'')) as designation")
                ->join('menu ml1', "m.menu_id_parent = ml1.menu_id", 'left')
                ->join('menu ml2', "ml1.menu_id_parent = ml2.menu_id ", 'left')
                ->join('menu ml3', "ml2.menu_id_parent = ml3.menu_id ", 'left')
                ->join('user_profile_privacy_settings upm', "upm.privacy_settings_menu_id = m.menu_id and upm.privacy_settings_user_profile_id = $profil", 'left')
                ->where("m.menu_url !=", 'javascript:;')
                ->where("m.menu_is_not_view_in_saas", 0)
                ->orderBy('m.menu_id_parent,m.menu_order_by', 'ASC')
                ->get();
        return $query->getResult();
    }

    public function get_menu() {
        $f = 'menu_' . $this->session->get('user_language') . "_designation";
        $query = $this->db->table('menu m')
                ->select("m.*, concat(if(ml3.menu_id is null,'', concat(ml3.menu_id,',')), if(ml2.menu_id is null,'', concat(ml2.menu_id,',')), if(ml1.menu_id is null,'',concat(ml1.menu_id,',')), ifnull(m.menu_id,'')) as list_id , concat(if(ml3.$f is null,'', concat(ml3.$f,' / ')), if(ml2.$f is null,'', concat(ml2.$f,' / ')), if(ml1.$f is null,'',concat(ml1.$f,' / ')), ifnull(m.$f,'')) as designation ")
                ->join('menu ml1', "m.menu_id_parent = ml1.menu_id", 'left')
                ->join('menu ml2', "ml1.menu_id_parent = ml2.menu_id ", 'left')
                ->join('menu ml3', "ml2.menu_id_parent = ml3.menu_id ", 'left')
                ->where("m.menu_url !=", 'javascript:;')
                ->where("m.menu_is_not_view_in_saas", 0)
                ->orderBy('m.menu_id_parent,m.menu_order_by', 'ASC')
                ->get();
        return $query->getResult();
    }

    public function get_user_accounts($para = array()) {
        return $this->db->table('user')
                        ->select('user.*, user_profile_id, user_profile.user_profile_designation, country_designation')
                        ->join('country', 'country.country_id = user.user_country_id', 'left')
                        ->join('user_company', 'user_company.user_company_user_id = user.user_id')
                        ->join('user_profile', 'user_profile.user_profile_id = user_company.user_company_profile_id')
                        ->where('user_company.user_company_company_id', $this->session->get("user_company_id"))
                        ->where($para)
                        ->get()->getResult();
    }
    
    public function get_user_pwd_reset($para = array()) {
        return $this->db->table('user')
                        ->select('user.*, user_profile_id, user_profile.user_profile_designation, country_designation')
                        ->join('country', 'country.country_id = user.user_country_id', 'left')
                        ->join('user_company', 'user_company.user_company_user_id = user.user_id')
                        ->join('user_profile', 'user_profile.user_profile_id = user_company.user_company_profile_id')
                        ->where('user_company.user_company_company_id', $this->session->get("user_company_id"))
                        ->where($para)
                        ->get()->getResult();
    }

    public function get_company_infos() {
        $query = $this->db->table('company')
                ->select('company.*')
                ->where('company_id', $this->session->get("user_company_id"))
                ->get();
        if ($query->getNumRows() == 1) {
            return $query->getRow();
        } else {
            return false;
        }
    }

}
