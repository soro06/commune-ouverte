<?php

namespace App\Controllers;

class Users extends BaseController {

    private $users_model;

    public function __construct() {
        parent::__construct();
        $this->session = \Config\Services::session();
        if (!$this->session->get('is_authenticated')) {
            return $this->login();
        }
        $this->users_model = new \App\Models\UsersModel();
    }

    public function profile() {
        $this->session->set(array("session_menu" => "", 'session_submenu' => '', 'session_childmenu' => ''));

        $data['country'] = $this->users_model->fetch_table('country');
        $data['user'] = $this->users_model->get_user_infos();
        $data['user_profil'] = $this->session->get("user_id");
        $this->load_view('users/user_profile', $data);
    }
    
    public function menu_favoris_setting() {
        $data['callbackfct'] = $this->request->getPost('callbackfct');
        $data['menu'] = $this->users_model->get_favoris_menu();
        print json_encode(array("status" => "success", 'view' => view('users/menu_favoris_setting', $data)));
    }
    
    public function menu_favoris_save() {
        $menu = $this->request->getPost('menu');
        $title = $this->request->getPost('title');
        $data = array(
            'user_menu_favoris_user_id' => $this->session->get("user_id"),
            'user_menu_favoris_profile_id' => $this->session->get("user_profile"),
            'company_id' => $this->session->get("user_company_id"),
        );
        $this->users_model->delete_table('user_menu_favoris', $data);
        if ($menu) {
            $n = sizeof($menu);
            for ($i = 0; $i < $n; $i++) {
                $data = array(
                    'user_menu_favoris_user_id' => $this->session->get("user_id"),
                    'user_menu_favoris_profile_id' => $this->session->get("user_profile"),
                    'user_menu_title' => $title[$i],
                    'company_id' => $this->session->get("user_company_id"),
                    'user_menu_favoris_menu_id' => $menu[$i]
                );
                $this->users_model->insert_table('user_menu_favoris', $data);
            }
        }
        return redirect()->to('/'); 
    }

    public function profile_update() {
        $user_data = array(
            'user_code' => $this->request->getPost('user_code'),
            'user_designation' => $this->request->getPost('user_designation'),
            'user_language' => $this->request->getPost('user_language'),
            'user_address' => $this->request->getPost('user_address'),
            'user_zip_code' => $this->request->getPost('user_zip_code'),
            'user_city' => $this->request->getPost('user_city'),
            'user_country_id' => $this->request->getPost('user_country_id'),
            'user_phone_number' => $this->request->getPost('user_phone_number'),
            'user_email' => $this->request->getPost('user_email'),
            'user_updated_date' => gmdate('Y-m-d H:i:s', time()),
        );
        $fname = $this->request->getPost('currentPicture');
        if (!empty($_FILES['profile_avatar']['name'])) {
            $fname = 'user_' . date('Ymdhis') . '.' . pathinfo($_FILES["profile_avatar"]["name"], PATHINFO_EXTENSION);
            @move_uploaded_file($_FILES["profile_avatar"]["tmp_name"], 'uploads/user_profiles/' . $fname);
            $user_data['user_image'] = $fname;
            if (file_exists('uploads/user_profiles/' . $this->request->getPost('currentPicture')) && $this->request->getPost('currentPicture') != 'default.png') {
                @unlink('uploads/user_profiles/' . $this->request->getPost('currentPicture'));
            }
        }

        $this->users_model->update_table('user', $user_data, array('user_id' => $this->session->get("user_id")));
        $userdata = array(
            'user_name' => $this->request->getPost('user_designation'),
            'user_language' => $this->request->getPost('user_language'),
            'user_picture' => (file_exists('uploads/user_profiles/' . $fname)) ? $fname : 'default.png',
        );
        $this->session->set($userdata);
        return redirect()->to('home');
    }

    public function user_reset_pwd_form() {
        print json_encode(array("status" => "success", 'view' => view('users/user_reset_pwd_form')));
    }

    public function check_old_pwd() {
        header('Content-type: application/json');
        $result = $this->users_model->fetch_table('user', array('user_password' => md5($this->request->getPost('old_pwd')), 'user_id' => $this->session->get("user_id")));
        if ($result) {
            $valid = 'true';
        } else {
            $valid = 'false';
        }
        echo $valid;
    }

    public function user_account_setting_pwd_save() {
        $data = array(
            'user_password' => md5($this->request->getPost('old_pwd')),
            'user_updated_date' => date('Y-m-d H:i:s', time()),
        );

        $result = $this->users_model->update_table('user', $data, array('user_id' => $this->session->get("user_id")));
        if ($result) {
            print json_encode(array("status" => "success"));
        } else {
            print json_encode(array("status" => "fail"));
        }
    }

    public function dashboard_setting() {
        $this->session->set(array("session_menu" => "", 'session_submenu' => '', 'session_childmenu' => ''));

        $data['user'] = $this->users_model->get_user_infos();
        $this->load_view('users/dashboard_setting', $data);
    }
    
    public function dashboard_setting_save() {
       $data = array(
           'user_dashbord_display_raw_1' => is_null($this->request->getPost('user_dashbord_display_raw_1')) ? 0:1,
           'user_dashbord_display_raw_2' => is_null($this->request->getPost('user_dashbord_display_raw_2')) ? 0:1,
           'user_dashbord_display_raw_3' => is_null($this->request->getPost('user_dashbord_display_raw_3')) ? 0:1,
           'user_dashbord_display_raw_4' => is_null($this->request->getPost('user_dashbord_display_raw_4')) ? 0:1,
           'user_dashbord_display_raw_5' => is_null($this->request->getPost('user_dashbord_display_raw_5')) ? 0:1,
           'user_dashbord_display_raw_6' => is_null($this->request->getPost('user_dashbord_display_raw_6')) ? 0:1,
           'user_dashbord_display_raw_7' => is_null($this->request->getPost('user_dashbord_display_raw_7')) ? 0:1,
           'user_dashbord_display_raw_8' => is_null($this->request->getPost('user_dashbord_display_raw_8')) ? 0:1,
           'user_dashbord_display_raw_9' => is_null($this->request->getPost('user_dashbord_display_raw_9')) ? 0:1,
           'user_dashbord_display_raw_10' => is_null($this->request->getPost('user_dashbord_display_raw_10')) ? 0:1
        );

        $this->users_model->update_table('user', $data, array('user_id' => $this->session->get("user_id")));
        return redirect()->to('home');
    }
    
    
    public function company_profile() {
        $this->session->set(array("session_menu" => "analytical_nomenclature", 'session_submenu' => 'company_profile', 'session_childmenu' => ''));

        $data['country'] = $this->users_model->fetch_table('country');
        $data['currency'] = $this->users_model->fetch_table('currency');
        $data['company'] = $this->users_model->get_company_infos();
        $data['user_profil'] = $this->session->get("user_id");
        $this->load_view('users/company_profile', $data);
    }
    
    public function company_profile_update() {
        $user_data = array(
            'company_code' => $this->request->getPost('company_code'),
            'company_designation' => $this->request->getPost('company_designation'),
            'company_address' => $this->request->getPost('company_address'),
            'company_zip_code' => $this->request->getPost('company_zip_code'),
            'company_country_id' => $this->request->getPost('company_country_id'),
            'company_city' => $this->request->getPost('company_city'),
            'company_phone_number' => $this->request->getPost('company_phone_number'),
            'company_fax_number' => $this->request->getPost('company_fax_number'),
            'company_email' => $this->request->getPost('company_email'),
            'company_website' => $this->request->getPost('company_website'),
            'company_siret_number' => $this->request->getPost('company_siret_number'),
            'company_ape_number' => $this->request->getPost('company_ape_number'),
            'company_vat_ecc_number' => $this->request->getPost('company_vat_ecc_number'),
            'company_currency_id' => $this->request->getPost('company_currency_id'),
            'company_updated_date' => gmdate('Y-m-d H:i:s', time()),
        );
        $fname = $this->request->getPost('currentPicture');
        if (!empty($_FILES['profile_avatar']['name'])) {
            $fname = 'profile_' . date('Ymdhis') . '.' . pathinfo($_FILES["profile_avatar"]["name"], PATHINFO_EXTENSION);
            @move_uploaded_file($_FILES["profile_avatar"]["tmp_name"], 'uploads/company_logo/' . $fname);
            $user_data['company_logo'] = $fname;
            if (file_exists('uploads/company_logo/' . $this->request->getPost('currentPicture')) && $this->request->getPost('currentPicture') != 'default.png') {
                @unlink('uploads/company_logo/' . $this->request->getPost('currentPicture'));
            }
        }
       
        $this->users_model->update_table('company', $user_data, array('company_id' => $this->session->get("user_id")));
        $userdata = array(
            'company_logo' => (file_exists('uploads/company_logo/' . $fname)) ? $fname:'default.png',
        );
        $this->session->set($userdata);
        return redirect()->to('home');
    }
    
    public function user_guide() {
        $this->session->set(array("session_menu" => "userguide", 'session_submenu' => '', 'session_childmenu' => ''));
        $data['lang'] = $this->session->get('user_language');
        $this->load_view('users/user_guide', $data);
    }
}

?>