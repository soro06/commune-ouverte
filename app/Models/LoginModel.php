<?php

namespace App\Models;

use CodeIgniter\Model;

class LoginModel extends Model {

    protected $db;

    public function __construct() {
        $this->db = db_connect();
        $this->session = \Config\Services::session();
    }
    
    public function check_pwd_reset_request($user) {
        $query = $this->db->table('user_forget_password')
                            ->where("user_forget_password_user_id", $user)
                            ->where('user_forget_password_treated_date is null')
                            ->get();
        if ($query->getNumRows() > 0) {
            return $query->getRow();
        } else {
            return false;
        }
    }
    
    public function authenticate($login, $password) {
        $query = $this->db->table('sys_user')
                ->select('sys_user.*, sys_commune.designation as commune')
                ->join('sys_commune', 'sys_commune.id = sys_user.idCommune')
                ->where('login', $login)
                ->where('pwd', md5($password))
                ->where("isActivated", 1)
                ->get();
        if ($query->getNumRows() == 1) {
            $this->set_user_session($query->getRow());
            return true;
        } else {
            return false;
        }
    }

    public function set_user_session($user) {
        $userdata = array(
            'user_id' => $user->id,
            'user_profile' => $user->idProfile,
            'commune_id' => $user->idCommune,
            'commune' => $user->commune,
            'nompren' => $user->nompren,
            'is_authenticated' => TRUE,
        );
        $this->session->set($userdata);
    }

}
