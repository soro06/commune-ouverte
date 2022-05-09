<?php

namespace App\Controllers;

class Home extends BaseController {
    
    public function __construct() {
         parent::__construct();
        $this->session = \Config\Services::session();
        if (!$this->session->get('is_authenticated')) {
            return $this->login();
        }
        $this->home_model = new \App\Models\HomeModel();
    }
    
    public function index() {
        $this->session->set(array("session_menu" => "dashboard", 'session_submenu' => '', 'session_childmenu' => ''));
        
        $this->load_backend_view('index');
    }
    
    public function datatable_intervention() {
        $setting = $this->load_company_setting();
        $draw = $this->request->getPost("draw") * 1;
        $start = $this->request->getPost("start") * 1;
        $length = $this->request->getPost("length") * 1;
        $cc_wr_details = [];
        $cc_wr_details_limited = [];
        $data = [];
        $order_by_direction = $this->request->getPost('order')[0]['dir'];
        $oderby = '';
        switch ($this->request->getPost('order')[0]['column']) {
            case '0':
                $oderby = 'cost_center.cost_center_designation ' . $order_by_direction;
                break;
            default:
                break;
        }
        if (empty($this->request->getPost('search')['value'])) {
            $cc_wr_details = $this->home_model->get_cc_wr_by_company();
            $cc_wr_details_limited = $this->home_model->get_cc_wr_by_company($length, $start, '', $oderby);
        } else {
            $search = $this->request->getPost('search')['value'];
            $cc_wr_details = $this->home_model->get_cc_wr_by_company(null, null, $search);
            $cc_wr_details_limited = $this->home_model->get_cc_wr_by_company($length, $start, $search, $oderby);
        }

        $nt = sizeof($cc_wr_details);
        $n = sizeof($cc_wr_details_limited);

        if ($n > 0) {
            $i = 1;
            foreach ($cc_wr_details_limited as $row) {
                                                    $icon1 = '';
                                                    $total = $row->inprogress + $row->accepted + $row->created;
                                                    $color1 = $setting->green_color_code;
                                                    if ($total >= $setting->wr_color_value_red) {
                                                        $icon1 = 'fa fa-frown';
                                                        $color1 = $setting->red_color_code;
                                                    } elseif ($total < $setting->wr_color_value_red && $total >= $setting->wr_color_value_orange) {
                                                        $icon1 = 'fa fa-frown-open';
                                                        $color1 = $setting->orange_color_code;
                                                    } else {
                                                        $icon1 = 'fa fa-grin-beam';
                                                        $color1 = $setting->green_color_code;
                                                    }


                $is_favoris = '';
                if ($row->is_favoris) {
                    $is_favoris = '<i onclick="conf_set_dashboard_favoris(0, ' . $row->cost_id . ', 3)" style="color: orange; cursor: pointer; font-size: 20px;" class="fa fa-star"></i> ';
                } else {
                    $is_favoris = '<i onclick="conf_set_dashboard_favoris(1, ' . $row->cost_id . ', 3)" style="color: #8a8b8b; cursor: pointer; font-size: 20px;" class="fa fa-star"></i> ';
                }
                $data[] = array(
                    $is_favoris . $row->cost_center_code . ' - ' . $row->designation,
                    '<div class="text-center">' . $row->created . '</div>',
                    '<div class="text-center">' . $row->accepted . '</div>',
                    '<div class="text-center">' . $row->inprogress . '</div>',
                    '<div style="width: 80px;" class="text-center">
                       <span style="margin-top: 1px;float: left;margin-right: 5px;"><i style="color: '.$color1 .'; cursor: pointer; font-size: 20px;" class="fa '.$icon1 .'"></i> </span>  
                       <span style="background: '.$color1 .'" class="label  label-pill label-inline">'. $total .'</span>
                   </div>'
                );
            }
        }

        $output = array(
            "draw" => $draw,
            "recordsTotal" => $nt,
            "recordsFiltered" => $nt,
            "data" => $data
        );
        echo json_encode($output);
    }

    public function datatable_wo() {
        $setting = $this->load_company_setting();
        $draw = $this->request->getPost("draw") * 1;
        $start = $this->request->getPost("start") * 1;
        $length = $this->request->getPost("length") * 1;
        $cc_wo_details = [];
        $cc_wo_details_limited = [];
        $data = [];
        $order_by_direction = $this->request->getPost('order')[0]['dir'];
        $oderby = '';
        switch ($this->request->getPost('order')[0]['column']) {
            case '0':
                $oderby = 'cost_center.cost_center_designation ' . $order_by_direction;
                break;
            default:
                break;
        }
        if (empty($this->request->getPost('search')['value'])) {
            $cc_wo_details = $this->home_model->get_cc_wo_by_company();
            $cc_wo_details_limited = $this->home_model->get_cc_wo_by_company($length, $start, '', $oderby);
        } else {
            $search = $this->request->getPost('search')['value'];
            $cc_wo_details = $this->home_model->get_cc_wo_by_company(null, null, $search);
            $cc_wo_details_limited = $this->home_model->get_cc_wo_by_company($length, $start, $search, $oderby);
        }

        $nt = sizeof($cc_wo_details);
        $n = sizeof($cc_wo_details_limited);

        if ($n > 0) {
            $i = 1;
            foreach ($cc_wo_details_limited as $row) {
                $total = $row->total;
                $icon = '';
                $color = $setting->green_color_code;
                if ($total >= $setting->wo_color_value_red) {
                    $icon = 'fa fa-frown';
                    $color = $setting->red_color_code;
                } elseif ($total < $setting->wo_color_value_red && $total >= $setting->wo_color_value_orange) {
                    $icon = 'fa fa-frown-open';
                    $color = $setting->orange_color_code;
                } else {
                    $icon = 'fa fa-grin-beam';
                    $color = $setting->green_color_code;
                }


                $is_favoris = '';
                if ($row->is_favoris) {
                    $is_favoris = '<i onclick="conf_set_dashboard_favoris(0, ' . $row->cost_id . ', 3)" style="color: orange; cursor: pointer; font-size: 20px;" class="fa fa-star"></i> ';
                } else {
                    $is_favoris = '<i onclick="conf_set_dashboard_favoris(1, ' . $row->cost_id . ', 3)" style="color: #8a8b8b; cursor: pointer; font-size: 20px;" class="fa fa-star"></i> ';
                }
                $data[] = array(
                    $is_favoris . $row->cost_center_code . ' - ' . $row->designation,
                    '<div class="text-center">' . $row->nonaff . '</div>',
                    '<div class="text-center">' . $row->encours . '</div>',
                    '<div class="text-center">' . $row->enretard . '</div>',
                    '<div style="width: 80px;" class="text-center">
                        <span style="margin-top: 1px;float: left;margin-right: 5px;"><i style="color: ' . $color . '; cursor: pointer; font-size: 20px;" class="fa ' . $icon . '"></i> </span> 
                        <span style="background: ' . $color . '" class="label  label-pill label-inline">' . $total . '</span>
                   </div>'
                );
            }
        }

        $output = array(
            "draw" => $draw,
            "recordsTotal" => $nt,
            "recordsFiltered" => $nt,
            "data" => $data
        );
        echo json_encode($output);
    }

    public function datatable_temps_immobilisation() {
        $draw = $this->request->getPost("draw") * 1;
        $start = $this->request->getPost("start") * 1;
        $length = $this->request->getPost("length") * 1;
        $temps_immobilisation_details = [];
        $temps_immobilisation_details_limited = [];
        $data = [];
        $order_by_direction = $this->request->getPost('order')[0]['dir'];
        $oderby = '';
        switch ($this->request->getPost('order')[0]['column']) {
            case '1':
                $oderby = 'equipment.equipment ' . $order_by_direction;
                break;
            default:
                break;
        }
        if (empty($this->request->getPost('search')['value'])) {
            $temps_immobilisation_details = $this->home_model->get_equipement_tmp();
            $temps_immobilisation_details_limited = $this->home_model->get_equipement_tmp($length, $start, '', $oderby);
        } else {
            $search = $this->request->getPost('search')['value'];
            $temps_immobilisation_details = $this->home_model->get_equipement_tmp(null, null, $search);
            $temps_immobilisation_details_limited = $this->home_model->get_equipement_tmp($length, $start, $search, $oderby);
        }

        $nt = sizeof($temps_immobilisation_details);
        $n = sizeof($temps_immobilisation_details_limited);

        if ($n > 0) {
            $i = 1;
            foreach ($temps_immobilisation_details_limited as $row) {
                $is_favoris = '';
                if ($row->is_favoris) {
                    $is_favoris = '<i onclick="conf_set_dashboard_favoris(0, ' . $row->id . ', 4)" style="color: orange; cursor: pointer; font-size: 20px;" class="fa fa-star"></i> ';
                } else {
                    $is_favoris = '<i onclick="conf_set_dashboard_favoris(1, ' . $row->id . ', 4)" style="color: #8a8b8b; cursor: pointer; font-size: 20px;" class="fa fa-star"></i> ';
                }
                $data[] = array(
                    $is_favoris . $row->equipment,
                    '<div class="text-center">' . $row->equip_unavail_rate . '%</div>'
                );
            }
        }

        $output = array(
            "draw" => $draw,
            "recordsTotal" => $nt,
            "recordsFiltered" => $nt,
            "data" => $data
        );
        echo json_encode($output);
    }

    public function datatable_equipment_performance() {
        $draw = $this->request->getPost("draw") * 1;
        $start = $this->request->getPost("start") * 1;
        $length = $this->request->getPost("length") * 1;
        $equipment_performance_details = [];
        $equipment_performance_details_limited = [];
        $data = [];
        $order_by_direction = $this->request->getPost('order')[0]['dir'];
        $oderby = '';
        switch ($this->request->getPost('order')[0]['column']) {
            case '1':
                $oderby = 'equipment.equipment ' . $order_by_direction;
                break;
            default:
                break;
        }
        if (empty($this->request->getPost('search')['value'])) {
            $equipment_performance_details = $this->home_model->get_equipement_tmp();
            $equipment_performance_details_limited = $this->home_model->get_equipement_tmp($length, $start, '', $oderby);
        } else {
            $search = $this->request->getPost('search')['value'];
            $equipment_performance_details = $this->home_model->get_equipement_tmp(null, null, $search);
            $equipment_performance_details_limited = $this->home_model->get_equipement_tmp($length, $start, $search, $oderby);
        }

        $nt = sizeof($equipment_performance_details);
        $n = sizeof($equipment_performance_details_limited);

        if ($n > 0) {
            $i = 1;
            foreach ($equipment_performance_details_limited as $row) {
                $is_favoris = '';
                if ($row->is_favoris) {
                    $is_favoris = '<i onclick="conf_set_dashboard_favoris(0, ' . $row->id . ', 4)" style="color: orange; cursor: pointer; font-size: 20px;" class="fa fa-star"></i> ';
                } else {
                    $is_favoris = '<i onclick="conf_set_dashboard_favoris(1, ' . $row->id . ', 4)" style="color: #8a8b8b; cursor: pointer; font-size: 20px;" class="fa fa-star"></i> ';
                }
                $data[] = array(
                    $is_favoris . $row->equipment,
                    '<div class="text-center">' . $row->equip_mtbf . '</div>',
                    '<div class="text-center">' . $row->equip_mttr . '</div>'
                );
            }
        }

        $output = array(
            "draw" => $draw,
            "recordsTotal" => $nt,
            "recordsFiltered" => $nt,
            "data" => $data
        );
        echo json_encode($output);
    }

    public function datatable_type_intervention_type_cout() {
        $draw = $this->request->getPost("draw") * 1;
        $start = $this->request->getPost("start") * 1;
        $length = $this->request->getPost("length") * 1;
        $cout_type_intervention_type_cout_details = [];
        $cout_type_intervention_type_cout_details_limited = [];
        $data = [];
        $order_by_direction = $this->request->getPost('order')[0]['dir'];
        $oderby = '';
        switch ($this->request->getPost('order')[0]['column']) {
            case '1':
                $oderby = 'nature.designation ' . $order_by_direction;
                break;
            default:
                break;
        }
        if (empty($this->request->getPost('search')['value'])) {
            $cout_type_intervention_type_cout_details = $this->home_model->get_cout_type_intervention_type_cout_tmp();
            $cout_type_intervention_type_cout_details_limited = $this->home_model->get_cout_type_intervention_type_cout_tmp($length, $start, '', $oderby);
        } else {
            $search = $this->request->getPost('search')['value'];
            $cout_type_intervention_type_cout_details = $this->home_model->get_cout_type_intervention_type_cout_tmp(null, null, $search);
            $cout_type_intervention_type_cout_details_limited = $this->home_model->get_cout_type_intervention_type_cout_tmp($length, $start, $search, $oderby);
        }

        $nt = sizeof($cout_type_intervention_type_cout_details);
        $n = sizeof($cout_type_intervention_type_cout_details_limited);
        
        $item_cost = 0;
        $labour_cost = 0;
        $invoice_cost = 0;
        $total = 0;
        
        if ($n > 0) {
            foreach ($cout_type_intervention_type_cout_details as $row) {
                $item_cost += $row->item_cost;
                $labour_cost += $row->labour_cost;
                $invoice_cost += $row->invoice_cost;
                $total += $row->labour_cost + $row->invoice_cost + $row->item_cost;
            }
            $i = 1;
            foreach ($cout_type_intervention_type_cout_details_limited as $row) {
                $data[] = array(
                    '<div class="text-center">' . ($i++) . '</div>',
                     $this->lang->line($row->type_intervention),
                    '<div class="text-right">' . format_money($row->item_cost) . '</div>',
                    '<div class="text-right">' . format_money($row->labour_cost) . '</div>',
                    '<div class="text-right">' . format_money($row->invoice_cost) . '</div>',
                    '<div class="text-right">' . format_money($row->item_cost + $row->invoice_cost + $row->labour_cost) . '</div>'
                );
            }
        }

        $output = array(
            "item_cost" => format_money($item_cost),
            "labour_cost" => format_money($labour_cost),
            "invoice_cost" => format_money($invoice_cost),
            "total" => format_money($total),
            "draw" => $draw,
            "recordsTotal" => $nt,
            "recordsFiltered" => $nt,
            "data" => $data
        );
        echo json_encode($output);
    }

    public function datatable_cout_division() {
        $draw = $this->request->getPost("draw") * 1;
        $start = $this->request->getPost("start") * 1;
        $length = $this->request->getPost("length") * 1;
        $cout_division_details = [];
        $cout_division_details_limited = [];
        $data = [];
        $order_by_direction = $this->request->getPost('order')[0]['dir'];
        $oderby = '';
        switch ($this->request->getPost('order')[0]['column']) {
            case '1':
                $oderby = 'cost.designation ' . $order_by_direction;
                break;
            default:
                break;
        }
        if (empty($this->request->getPost('search')['value'])) {
            $cout_division_details = $this->home_model->get_cout_intervention_division_tmp();
            $cout_division_details_limited = $this->home_model->get_cout_intervention_division_tmp($length, $start, '', $oderby);
        } else {
            $search = $this->request->getPost('search')['value'];
            $cout_division_details = $this->home_model->get_cout_intervention_division_tmp(null, null, $search);
            $cout_division_details_limited = $this->home_model->get_cout_intervention_division_tmp($length, $start, $search, $oderby);
        }

        $nt = sizeof($cout_division_details);
        $n = sizeof($cout_division_details_limited);
        
        $item_cost = 0;
        $labour_cost = 0;
        $invoice_cost = 0;
        $total = 0;
        
        if ($n > 0) {
            $i = 1;
            foreach ($cout_division_details as $row) {
                $item_cost += $row->item_cost;
                $labour_cost += $row->labour_cost;
                $invoice_cost += $row->invoice_cost;
                $total += $row->labour_cost + $row->invoice_cost + $row->item_cost;
            }
            foreach ($cout_division_details_limited as $row) {
                $is_favoris = '';
                if ($row->is_favoris) {
                    $is_favoris = '<i onclick="conf_set_dashboard_favoris(0, ' . $row->id . ', 2)" style="color: orange; cursor: pointer; font-size: 20px;" class="fa fa-star"></i> ';
                } else {
                    $is_favoris = '<i onclick="conf_set_dashboard_favoris(1, ' . $row->id . ', 2)" style="color: #8a8b8b; cursor: pointer; font-size: 20px;" class="fa fa-star"></i> ';
                }
                $data[] = array(
                    '<div class="text-center">' . ($i++) . '</div>',
                    $is_favoris . $row->branch,
                    '<div class="text-right">' . format_money($row->item_cost) . '</div>',
                    '<div class="text-right">' . format_money($row->labour_cost) . '</div>',
                    '<div class="text-right">' . format_money($row->invoice_cost) . '</div>',
                    '<div class="text-right">' . format_money($row->item_cost + $row->invoice_cost + $row->labour_cost) . '</div>'
                );
            }
        }

        $output = array(
            "item_cost" => format_money($item_cost),
            "labour_cost" => format_money($labour_cost),
            "invoice_cost" => format_money($invoice_cost),
            "total" => format_money($total),
            "draw" => $draw,
            "recordsTotal" => $nt,
            "recordsFiltered" => $nt,
            "data" => $data
        );
        echo json_encode($output);
    }

    public function datatable_cost_per_cc() {
        $draw = $this->request->getPost("draw") * 1;
        $start = $this->request->getPost("start") * 1;
        $length = $this->request->getPost("length") * 1;
        $cout_cc_details = [];
        $cout_cc_details_limited = [];
        $data = [];
        $order_by_direction = $this->request->getPost('order')[0]['dir'];
        $oderby = '';
        switch ($this->request->getPost('order')[0]['column']) {
            case '1':
                $oderby = 'cost.designation ' . $order_by_direction;
                break;
            default:
                break;
        }

        if (empty($this->request->getPost('search')['value'])) {
            $cout_cc_details = $this->home_model->get_cout_intervention_par_cc_tmp();
            $cout_cc_details_limited = $this->home_model->get_cout_intervention_par_cc_tmp($length, $start, '', $oderby);
        } else {
            $search = $this->request->getPost('search')['value'];
            $cout_cc_details = $this->home_model->get_cout_intervention_par_cc_tmp(null, null, $search);
            $cout_cc_details_limited = $this->home_model->get_cout_intervention_par_cc_tmp($length, $start, $search, $oderby);
        }

        $nt = sizeof($cout_cc_details);
        $n = sizeof($cout_cc_details_limited);
        
        $item_cost = 0;
        $labour_cost = 0;
        $invoice_cost = 0;
        $total = 0;
        
        if ($n > 0) {
            foreach ($cout_cc_details as $row) {
                $item_cost += $row->item_cost;
                $labour_cost += $row->labour_cost;
                $invoice_cost += $row->invoice_cost;
                $total += $row->labour_cost + $row->invoice_cost + $row->item_cost;
            }
            $i = 1;
            foreach ($cout_cc_details_limited as $row) {
                $is_favoris = '';
                if ($row->is_favoris) {
                    $is_favoris = '<i onclick="conf_set_dashboard_favoris(0, ' . $row->id . ', 3)" style="color: orange; cursor: pointer; font-size: 20px;" class="fa fa-star"></i> ';
                } else {
                    $is_favoris = '<i onclick="conf_set_dashboard_favoris(1, ' . $row->id . ', 3)" style="color: #8a8b8b; cursor: pointer; font-size: 20px;" class="fa fa-star"></i> ';
                }
                $data[] = array(
                    '<div class="text-center">' . ($i++) . '</div>',
                    $is_favoris . $row->costcenter,
                    '<div class="text-right">' . format_money($row->item_cost) . '</div>',
                    '<div class="text-right">' . format_money($row->labour_cost) . '</div>',
                    '<div class="text-right">' . format_money($row->invoice_cost) . '</div>',
                    '<div class="text-right">' . format_money($row->item_cost + $row->invoice_cost + $row->labour_cost) . '</div>'
                );
            }
        }

        $output = array(
            "item_cost" => format_money($item_cost),
            "labour_cost" => format_money($labour_cost),
            "invoice_cost" => format_money($invoice_cost),
            "total" => format_money($total),
            "draw" => $draw,
            "recordsTotal" => $nt,
            "recordsFiltered" => $nt,
            "data" => $data
        );
        echo json_encode($output);
    }

    public function datatable_equipment() {
        $draw = $this->request->getPost("draw") * 1;
        $start = $this->request->getPost("start") * 1;
        $length = $this->request->getPost("length") * 1;
        $cout_equipment_details = [];
        $cout_equipment_details_limited = [];
        $data = [];
        $order_by_direction = $this->request->getPost('order')[0]['dir'];
        $oderby = '';
        switch ($this->request->getPost('order')[0]['column']) {
            case '1':
                $oderby = 'equipment.equipment ' . $order_by_direction;
                break;
            default:
                break;
        }

        if (empty($this->request->getPost('search')['value'])) {
            $cout_equipment_details = $this->home_model->get_cout_par_equipment_tmp();
            $cout_equipment_details_limited = $this->home_model->get_cout_par_equipment_tmp($length, $start, '', $oderby);
        } else {
            $search = $this->request->getPost('search')['value'];
            $cout_equipment_details = $this->home_model->get_cout_par_equipment_tmp(null, null, $search);
            $cout_equipment_details_limited = $this->home_model->get_cout_par_equipment_tmp($length, $start, $search, $oderby);
        }

        $nt = sizeof($cout_equipment_details);
        $n = sizeof($cout_equipment_details_limited);
        
        $item_cost = 0;
        $labour_cost = 0;
        $invoice_cost = 0;
        $total = 0;
            
        if ($n > 0) {
            $i = 1;
            
            foreach ($cout_equipment_details as $row) {
                $item_cost += $row->item_cost;
                $labour_cost += $row->labour_cost;
                $invoice_cost += $row->invoice_cost;
                $total += $row->labour_cost + $row->invoice_cost + $row->item_cost;
            }
            foreach ($cout_equipment_details_limited as $row) {
                $is_favoris = '';
                if ($row->is_favoris) {
                    $is_favoris = '<i onclick="conf_set_dashboard_favoris(0, ' . $row->id . ', 4)" style="color: orange; cursor: pointer; font-size: 20px;" class="fa fa-star"></i> ';
                } else {
                    $is_favoris = '<i onclick="conf_set_dashboard_favoris(1, ' . $row->id . ', 4)" style="color: #8a8b8b; cursor: pointer; font-size: 20px;" class="fa fa-star"></i> ';
                }
                $data[] = array(
                    '<div class="text-center">' . ($i++) . '</div>',
                    $is_favoris.$row->equipment,
                    '<div class="text-right">' . format_money($row->item_cost) . '</div>',
                    '<div class="text-right">' . format_money($row->labour_cost) . '</div>',
                    '<div class="text-right">' . format_money($row->invoice_cost) . '</div>',
                    '<div class="text-right">' . format_money($row->item_cost + $row->invoice_cost + $row->labour_cost) . '</div>'
                );
            }
        }

        $output = array(
            "item_cost" => format_money($item_cost),
            "labour_cost" => format_money($labour_cost),
            "invoice_cost" => format_money($invoice_cost),
            "total" => format_money($total),
            "draw" => $draw,
            "recordsTotal" => $nt,
            "recordsFiltered" => $nt,
            "data" => $data
        );
        echo json_encode($output);
    }

}
