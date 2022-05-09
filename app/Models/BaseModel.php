<?php

namespace App\Models;

use CodeIgniter\Model;

class BaseModel extends Model {

    protected $db;

    public function __construct() {
        $this->db = \Config\Database::connect();
    }
    
    public function count_table($tname, $para = array()) {
        return $this->db->table($tname)
                        ->where("company_id", $this->session->get("user_company_id"))
                        ->where($para)
                        ->countAllResults();
    }
    
    public function fetch_table($tname, $para = array(), $select = '*') {
        return $this->db->table($tname)
                        ->where("company_id", $this->session->get("user_company_id"))
                        ->select($select)
                        ->where($para)
                        ->get()->getResult();
    }

    public function insert_table($tname, $data) {
        $builder = $this->db->table($tname)
                    ->insert($data);
        if ($builder) {
            $id = $this->db->insertID();
            if (is_null($id) || $id == "") {
                $id = TRUE;
            }
            return $id;
        } else {
            return 0;
        }
    }

    public function update_table($tname, $data, $where) {
        $builder = $this->db->table($tname)
                ->update($data, $where);
        if ($builder) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function delete_table($tname, $where) {
        $builder = $this->db->table($tname)
                ->delete($where);
        if ($builder) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

}
