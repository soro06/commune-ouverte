<?php

namespace App\Models;

use App\Models\BaseModel;

class HomeModel extends BaseModel {

    protected $db;

    public function __construct() {
        $this->db = db_connect();
        $this->session = \Config\Services::session();
    }
    
    public function count_table_wo_dashboard($dd, $df, $situation) {
        return $this->db->table('work_order')
                        ->where("company_id", $this->session->get("user_company_id"))
                        ->where("work_order_created_date >=", $dd)
                        ->where("work_order_created_date <=", $df)
                        ->whereIn("work_order_situation_id", $situation)
                        ->countAllResults();
    }
    
    public function wr_backlog_n($dd, $df) {
        return $this->db->table('work_request')
                        ->join('cost_center', 'cost_center.cost_center_id = work_request_cost_center_id', 'inner')
                        ->where("work_request.company_id", $this->session->get("user_company_id"))
                        ->where("work_request_created_date >=", $dd)
                        ->where("work_request_created_date <=", $df)
                        ->whereIn("work_request_situation_id", [1, 2, 3, 4, 5, 6, 7, 8])
                        ->countAllResults();
    }

    public function wo_backlog_n($dd, $df) {
        return $this->db->table('work_order')
                        ->join('cost_center', 'cost_center.cost_center_id = work_order_cost_center_id', 'inner')
                        ->where("work_order.company_id", $this->session->get("user_company_id"))
                        ->where("work_order_created_date >=", $dd)
                        ->where("work_order_created_date <=", $df)
                        ->whereIn("work_order_situation_id", [1, 2, 3, 4, 5, 6, 7, 8])
                        ->countAllResults();
    }
    
    public function wo_get_cout_par_type_cout() {
        $dd = gmdate('Y-m-d', strtotime('first day of last month'));
        $df = gmdate('Y-m-d', strtotime('+ 1 days', strtotime('last day of last month')));
        return $this->db->table('work_order')
                ->select("SUM(IFNULL(work_order_labour_cost,0)) as labour_cost, SUM(IFNULL(work_order_item_cost,0)) as item_cost, SUM(IFNULL(work_order_invoice_cost,0)) as invoice_cost ")
                ->where('work_order.work_order_end_date  >=', $dd)
                ->where('work_order.work_order_end_date  <=', $df)
                ->where("company_id", $this->session->get("user_company_id"))
                ->get()->getResult();
    }
    
    public function wo_get_cout_par_type_intervention() {
        $dd = gmdate('Y-m-d', strtotime('first day of last month'));
        $df = gmdate('Y-m-d', strtotime('+ 1 days', strtotime('last day of last month')));
        return $this->db->table('work_order')
                ->join('nature', 'nature.nature_id = work_order.work_order_nature_id', "inner")
                ->select("nature.nature_category, SUM(IFNULL(work_order_labour_cost,0)+ IFNULL(work_order_item_cost,0)+ IFNULL(work_order_invoice_cost,0)) as amount")
                ->groupBy('nature.nature_category')
                ->where('work_order.work_order_end_date >=', $dd)
                ->where('work_order.work_order_end_date <=', $df)
                ->where("work_order.company_id", $this->session->get("user_company_id"))
                ->get()->getResult();
    }
    
    public function wo_get_cost_by_year($year) {
       return $this->db->table('work_order')
                ->select('date_format(work_order_end_date,"_%m") as mois, SUM(IFNULL(work_order_labour_cost,0)) as item_cost, SUM(IFNULL(work_order_labour_cost,0)) as labour_cost, SUM(IFNULL(work_order_invoice_cost,0)) as invoice_cost')
                ->groupBy('date_format(work_order_end_date,"_%m")')
                ->where("DATE_FORMAT(work_order_end_date,'%Y')", $year)
                ->where("work_order.company_id", $this->session->get("user_company_id"))
                ->get()->getResult();
    }
    
    public function get_preventive_rate($dd = null, $df = null) {
        if (is_null($dd) || is_null($df)) {
            $dd = gmdate('Y-m-d', strtotime('first day of last month'));
            $df = gmdate('Y-m-d', strtotime('last day of last month'));
        }
        
        return $this->db->table('activity')
                ->select("SUM(act_time_spent) AS totaltime_spent")
                ->select("SUM(case when nature.nature_category=1 then act_time_spent else 0 end) as preventivetime")
                ->join('nature', 'nature_id = act_nature_id', 'left')
                ->where('activity.act_end_date >=', $dd)
                ->where('activity.act_end_date <=', $df)
                ->where("activity.company_id", $this->session->get("user_company_id"))
                ->get()->getResult();
    }
    
    public function get_cc_wr_by_company($limit_length = null, $limit_start = null, $search = '', $orderby = '') {
        $builder = $this->db->table('work_request')
                        ->join('cost_center', 'cost_center.cost_center_id = work_request.work_request_cost_center_id', 'inner')
                        ->join('user_dashbord_favoris', 'user_dashbord_favoris.user_dashbord_favoris_id = cost_center.cost_center_id and user_dashbord_favoris.user_dashbord_favoris_user_id = ' . $this->session->get("user_id") . ' and user_dashbord_favoris_type_favoris = 3', 'left')
                        ->select("cost_center.cost_center_id, work_request.work_request_cost_center_id, if(user_dashbord_favoris_user_id is null, 0,1) as is_favoris, cost_center.cost_center_code,cost_center.cost_center_designation")
                        ->select("SUM(case when work_request.work_request_situation_id=1 then 1 else 0 end) as created")
                        ->select("SUM(case when work_request.work_request_situation_id=2 then 1 else 0 end) as accepted")
                        ->select("SUM(case when work_request.work_request_situation_id=3 or work_request.work_request_situation_id=4 or work_request.work_request_situation_id=5 or work_request.work_request_situation_id=6 or work_request.work_request_situation_id=7 or work_request.work_request_situation_id=8 then 1 else 0 end) as inprogress")
                        ->where("work_request.company_id", $this->session->get("user_company_id"))
                        ->groupBy("work_request.work_request_cost_center_id, cost_center.cost_center_id, user_dashbord_favoris.user_dashbord_favoris_favoris_id")
                        ->orderBy('cost_center.cost_center_order_number, cost_center.cost_center_code', 'DESC');

        if ($search != '') {
            $builder->group_start()
                    ->like('cost_center.cost_center_code', $search, 'both')
                    ->or_like('cost_center.cost_center_designation', $search, 'both')
                    ->group_end();
        }

        if (!is_null($limit_length) && !is_null($limit_start)) {
            $builder->limit($limit_length, $limit_start);
        }

        if ($orderby != '') {
            $builder->orderBy($orderby);
        } else {
            $builder->orderBy("user_dashbord_favoris.user_dashbord_favoris_favoris_id", "desc");
        }

        return $builder->get()->getResult();
    }

    public function get_cc_wo_by_company($limit_length = null, $limit_start = null, $search = '', $orderby = '') {
        $builder = $this->db->table('work_order')
                            ->join('cost_center', 'cost_center.cost_center_id = work_order.work_order_cost_center_id', 'inner')
                            ->join('user_dashbord_favoris', 'user_dashbord_favoris.user_dashbord_favoris_favoris_id = cost_center.cost_center_id and user_dashbord_favoris.user_dashbord_favoris_user_id = ' . $this->session->get("user_company_id") . ' and user_dashbord_favoris_type_favoris = 3', 'left')
                            ->select("cost_center.cost_center_id, work_order.work_order_cost_center_id, if(user_dashbord_favoris.user_dashbord_favoris_favoris_id is null, 0,1) as is_favoris, cost_center.cost_center_code,cost_center.cost_center_designation")
                            ->select("SUM(case when work_order.work_order_situation_id=2 or work_order.work_order_situation_id=4 or work_order.work_order_situation_id=5 then 1 else 0 end) as encours")
                            ->select("SUM(case when work_order.work_order_situation_id=3 then 1 else 0 end) as toclosed")
                            ->select("SUM(case when work_order.work_order_situation_id=1 then 1 else 0 end) as nonaff")
                            ->select("SUM(case when work_order.work_order_end_date is null and work_order.work_order_wished_end_date >='" . gmdate('Y-m-d') . "' then 1 else 0 end) as enretard")
                            ->select("SUM(case when work_order.work_order_situation_id != 6 and work_order.work_order_situation_id != 7  then 1 else 0 end) as total")
                            ->where("work_order.company_id", $this->session->get("user_company_id"))
                            ->groupBy("work_order.work_order_cost_center_id, cost_center.cost_center_id, user_dashbord_favoris.user_dashbord_favoris_favoris_id");

        if ($search != '') {
            $builder->group_start()
                    ->like('cost_center.cost_center_code', $search, 'both')
                    ->or_like('cost_center.cost_center_designation', $search, 'both')
                    ->group_end();
        }

        if (!is_null($limit_length) && !is_null($limit_start)) {
            $builder->limit($limit_length, $limit_start);
        }

        if ($orderby != '') {
            $builder->orderBy($orderby);
        } else {
            $builder->orderBy("user_dashbord_favoris.user_dashbord_favoris_favoris_id", "desc");
        }
        return $builder->get()->getResult();
    }
    
    public function get_equipement_tmp($limit_length = null, $limit_start = null, $search = '', $orderby = '') {
        $builder = $this->db->table('equipment')
                            ->select("equipment.equip_id as id, concat(equipment.equip_code, ' - ', equipment.equip_designation) equipment, if(user_dashbord_favoris.user_dashbord_favoris_id is null, 0,1) as is_favoris, equip_unavail_rate, equip_mtbf, equip_mttr")
                            ->join('time_table_class', 'time_table_class.time_class_id = equipment.equip_time_class_id', "left")
                            ->join('user_dashbord_favoris', 'user_dashbord_favoris.user_dashbord_favoris_favoris_id = equipment.equip_id and user_dashbord_favoris.user_dashbord_favoris_user_id = ' . $this->session->get("user_id") . ' and user_dashbord_favoris_favoris_id = 4', 'left')
                            ->where("equipment.company_id", $this->session->get("user_company_id"));

        if ($search != '') {
           $builder->group_start()
                    ->like('equipment.equipment', $search, 'both')
                    ->or_like('equipment.designation', $search, 'both')
                    ->group_end();
        }

        if (!is_null($limit_length) && !is_null($limit_start)) {
            $builder->limit($limit_length, $limit_start);
        }

        if ($orderby != '') {
            $builder->orderBy($orderby);
        } else {
            $builder->orderBy("user_dashbord_favoris.user_dashbord_favoris_favoris_id", "desc");
        }

        return $builder->get()->getResult();
    }
    
    public function get_cout_type_intervention_type_cout_tmp($limit_length = null, $limit_start = null, $search = '', $orderby = '') {
        $builder = $this->db->table('tmp_type_intervention_cost')
                ->select("*")
                ->where("company_id", $this->session->get("user_company_id"));

        if (!is_null($limit_length) && !is_null($limit_start)) {
            $builder->limit($limit_length, $limit_start);
        }

        if ($orderby != '') {
            $builder->orderBy($orderby);
        } else {
            $builder->orderBy("tmp_type_intervention_cost_type_intervention", "desc");
        }
        return $builder->get()->getResult();
    }
    
    public function get_cout_intervention_division_tmp($limit_length = null, $limit_start = null, $search = '', $orderby = '') {
        $builder = $this->db->table('branch')
                ->select("branch.branch_id as id, branch.branch_designation as branch, if(user_dashbord_favoris.user_dashbord_favoris_favoris_id is null, 0,1) as is_favoris, tmp_branch_cost.tmp_branch_cost_labour_cost as labour_cost, tmp_branch_cost.tmp_branch_cost_item_cost as item_cost, tmp_branch_cost.tmp_branch_cost_invoice_cost as invoice_cost ")
                ->join('user_dashbord_favoris', 'user_dashbord_favoris.user_dashbord_favoris_favoris_id = branch.branch_id and user_dashbord_favoris.user_dashbord_favoris_user_id = ' . $this->session->get("user_id") . ' and user_dashbord_favoris_type_favoris = 2', 'left')
                ->join('tmp_branch_cost', 'tmp_branch_cost.tmp_branch_cost_branch_id = branch.branch_id', "left")
                ->where("branch.company_id", $this->session->get("user_company_id"));

        if ($search != '') {
            $builder->group_start()
                    ->like('branch.designation', $search, 'both')
                    ->or_like('branch.branch_code', $search, 'both')
                    ->group_end();
        }

        if (!is_null($limit_length) && !is_null($limit_start)) {
            $builder->limit($limit_length, $limit_start);
        }

        if ($orderby != '') {
            $builder>orderBy($orderby);
        } else {
            $builder->orderBy("user_dashbord_favoris.user_dashbord_favoris_favoris_id", "desc");
        }
        return $builder->get()->getResult();
    }

    public function get_cout_par_equipment_tmp($limit_length = null, $limit_start = null, $search = '', $orderby = '') {
        $builder = $this->db->table('equipment')
                ->select("equipment.equip_id as id, if(user_dashbord_favoris.user_dashbord_favoris_favoris_id is null, 0,1) as is_favoris, CONCAT(equipment.equip_code, ' - ',equipment.equip_designation) as equipment, tmp_equipment_cost.tmp_equipment_cost_labour_cost as labour_cost, tmp_equipment_cost.tmp_equipment_cost_item_cost as item_cost, tmp_equipment_cost.tmp_equipment_cost_invoice_cost as invoice_cost ")
                ->join('user_dashbord_favoris', 'user_dashbord_favoris.user_dashbord_favoris_favoris_id = equipment.equip_id and user_dashbord_favoris.user_dashbord_favoris_user_id = ' . $this->session->get("user_id") . ' and user_dashbord_favoris_type_favoris = 4', 'left')
                ->join('tmp_equipment_cost', 'tmp_equipment_cost.tmp_equipment_cost_equipment_id = equipment.equip_id', "left")
                ->where("equipment.company_id", $this->session->get("user_company_id"));

        if ($search != '') {
            $builder->group_start()
                    ->like('equipment.equipment', $search, 'both')
                    ->or_like('equipment.designation', $search, 'both')
                    ->group_end();
        }

        if (!is_null($limit_length) && !is_null($limit_start)) {
            $builder->limit($limit_length, $limit_start);
        }

        if ($orderby != '') {
            $builder->orderBy($orderby);
        } else {
            $builder->orderBy("user_dashbord_favoris.user_dashbord_favoris_favoris_id", "desc");
        }
        return $builder->get()->getResult();
    }

     public function get_cout_intervention_par_cc_tmp($limit_length = null, $limit_start = null, $search = '', $orderby = '') {
       $builder = $this->db->table('cost_center')
                        ->select("cost_center.cost_center_id as id, cost_center.cost_center_designation as costcenter, if(user_dashbord_favoris.user_dashbord_favoris_favoris_id is null, 0,1) as is_favoris, tmp_cost_center_cost.tmp_cost_center_cost_labour_cost as labour_cost, tmp_cost_center_cost.tmp_cost_center_cost_item_cost as item_cost, tmp_cost_center_cost.tmp_cost_center_cost_invoice_cost as invoice_cost ")
                        ->join('user_dashbord_favoris', 'user_dashbord_favoris.user_dashbord_favoris_favoris_id = cost_center.cost_center_id and user_dashbord_favoris.user_dashbord_favoris_user_id = ' . $this->session->get("user_id") . ' and user_dashbord_favoris_type_favoris = 3', 'left')
                        ->join('tmp_cost_center_cost', 'tmp_cost_center_cost.tmp_cost_center_cost_cost_center_id = cost_center.cost_center_id', "left")
                        ->where("cost_center.company_id", $this->session->get("user_company_id"));
        if ($search != '') {
            $builder->group_start()
                    ->like('cost_center.cost_center_code', $search, 'both')
                    ->or_like('cost_center.cost_center-designation', $search, 'both')
                    ->group_end();
        }

        if (!is_null($limit_length) && !is_null($limit_start)) {
            $builder->limit($limit_length, $limit_start);
        }

        if ($orderby != '') {
            $builder->orderBy($orderby);
        } else {
            $builder->orderBy("user_dashbord_favoris.user_dashbord_favoris_favoris_id", "desc");
        }
        return $builder->get()->getResult();
    }
}
