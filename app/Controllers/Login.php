<?php

namespace App\Controllers;

use CodeIgniter\HTTP\RequestInterface;

class Login extends BaseController {

    public function __construct() {
        
    }

    public function index() {
        if ($this->session->get('is_authenticated')) {
            return redirect()->to('home'); 
        } else {
            echo view('login');
        }
    }

    public function check_login() {
        if ($this->session->get('is_authenticated')) {
            print json_encode(array("status" => "success"));
        }
        $loginHandler = new \App\Models\LoginModel();
        if ($loginHandler->authenticate($this->request->getPost('login'), $this->request->getPost('password'))) {
            print json_encode(array("status" => "success"));
        } else {
            print json_encode(array("status" => "fail-wrongpwd"));
        }
    }
    
    public function login_forgot() {
        $loginHandler = new \App\Models\LoginModel();
        $user = $loginHandler->check_login($this->request->getPost('email'));
        if ($user) {
            $demande = $loginHandler->check_pwd_reset_request($user->user_id);
            $setting = $this->load_company_setting($user->company_id);
            if(!$demande){
                $data = array(
                        'user_forget_password_user_id' => $user->user_id,
                        'user_forget_password_email' => $user->user_email,
                        'user_forget_password_created_date' => gmdate('Y-m-d H:i:s'),
                        'user_forget_password_token' => sha1($user->user_id . strtotime(gmdate('Y-m-d H:i:s'))),
                        'user_forget_password_token_expired_date' => gmdate('Y-m-d H:i', strtotime('+ 3 days')),
                        'company_id' => $user->company_id,
                    );
                $this->db->table('user_forget_password')->insert($data);
            }
            
            if($setting->settings_password_reset_option == 'local'){
                print json_encode(array("status" => "success", "message" => lang('Login.local_reset_succes')));
            } else {
                $res = $this->email_sender($user->user_email, '', lang('Login.pwdrenew'), '', '');
                print json_encode(array("status" => "success", "option" => $res));
            }
        } else {
            print json_encode(array("status" => "fail-u404"));
        }
    }
}
