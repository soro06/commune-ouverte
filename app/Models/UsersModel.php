<?php

namespace App\Models;

use App\Models\BaseModel;

class UsersModel extends BaseModel {

    protected $db;

    public function __construct() {
        $this->db = db_connect();
        $this->session = \Config\Services::session();
    }
    
    public function get_favoris_menu() {
        $f = 'menu_' . $this->session->get('user_language') . "_designation";
        $query = $this->db->table('menu m')
                ->select("m.*, user_menu_favoris_created_date, user_menu_title, concat(if(ml3.menu_id is null,'', concat(ml3.menu_id,',')), if(ml2.menu_id is null,'', concat(ml2.menu_id,',')), if(ml1.menu_id is null,'',concat(ml1.menu_id,',')), ifnull(m.menu_id,'')) as list_id , concat(if(ml3.$f is null,'', concat(ml3.$f,' / ')), if(ml2.$f is null,'', concat(ml2.$f,' / ')), if(ml1.$f is null,'',concat(ml1.$f,' / ')), ifnull(m.$f,'')) as designation ")
                ->join('menu ml1', "m.menu_id_parent = ml1.menu_id", 'left')
                ->join('menu ml2', "ml1.menu_id_parent = ml2.menu_id ", 'left')
                ->join('menu ml3', "ml2.menu_id_parent = ml3.menu_id ", 'left')
                ->join('user_menu_favoris f', "f.user_menu_favoris_menu_id = m.menu_id and f.user_menu_favoris_user_id = ".$this->session->get("user_id"). " and f.user_menu_favoris_profile_id = ".$this->session->get("user_profile"), 'left')
                ->join("user_profile_privacy_settings p", "m.menu_id = p.privacy_settings_menu_id", "inner")
                ->where("p.privacy_settings_user_profile_id", $this->session->get("user_profile"))
                ->where("m.menu_url !=", 'javascript:;')
                ->where("m.menu_is_not_view_in_saas", 0)
                ->orderBy('m.menu_id_parent,m.menu_order_by', 'ASC')
                ->get();
        return $query->getResult();
    }
    
    public function get_user_infos() {
        $query = $this->db->table('user')
                ->select('user.*, user_profile.user_profile_designation')
                ->join('user_company', 'user_company.user_company_user_id = user.user_id')
                ->join('user_profile', 'user_profile.user_profile_id = user_company.user_company_profile_id')
                ->where('user_company.user_company_user_id', $this->session->get("user_id"))
                ->where('user_company.user_company_company_id', $this->session->get("user_company_id"))
                ->get();
        if ($query->getNumRows() == 1) {
            return $query->getRow();
        } else {
            return false;
        }
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
