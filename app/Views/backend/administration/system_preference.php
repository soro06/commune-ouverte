<script src="<?= site_url('assets/plugins/custom/colorpickerlibrary/js/jquery.minicolors.js') ?>"></script>
<link rel="stylesheet" href="<?= site_url('assets/plugins/custom/colorpickerlibrary/css/jquery.minicolors.css') ?>">
<form id="frm_preference" name="frm_preference" method="POST" enctype="multipart/form-data" action="<?= base_url('administration/system_preference_update') ?>">
    <input type="hidden" name="id" value="<?= $preference->settings_id ?>" />
    <!--begin::Content-->
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Subheader-->
        <div class="subheader py-2 py-lg-6 subheader-solid" id="kt_subheader">
            <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
                <div class="d-flex align-items-center flex-wrap mr-1">
                    <div class="d-flex align-items-baseline flex-wrap mr-5">
                        <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                            <li class="breadcrumb-item"><a class="text-muted"><?= lang('Admin.adminitration') ?></a></li>
                            <li class="breadcrumb-item active"><a class="text-muted"><?= lang('Admin.preference') ?></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--end::Subheader-->

        <!--begin::Entry-->
        <div class="d-flex flex-column-fluid">
            <!--begin::Container-->
            <div class="container">
                <div class="card card-custom card-sticky" id="kt_page_sticky_card">
                    <div class="card-header">
                        <div class="card-title"><h3 class="card-label"><?= lang('Admin.preference') ?></h3></div>
                        <div class="card-toolbar">
                        </div>
                    </div>
                    <div class="card-body">
                        <ul class="nav nav-tabs nav-tabs-space-lg nav-tabs-line nav-tabs-bold nav-tabs-line-3x" role="tablist">
                            <li class="nav-item mr-3">
                                <a  class="nav-link active" data-toggle="tab" href="#general">
                                    <span class="nav-text font-weight-bold"><?= lang('Admin.general') ?></span>
                                </a>
                            </li>
                            <li class="nav-item mr-3">
                                <a  class="nav-link" data-toggle="tab" href="#requiredfield">
                                    <span class="nav-text font-weight-bold"><?= lang('Admin.requiredfield') ?></span>
                                </a>
                            </li>
                            <li class="nav-item mr-3">
                                <a  class="nav-link" data-toggle="tab" href="#autre">
                                    <span class="nav-text font-weight-bold"><?= lang('Admin.autre') ?></span>
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content mt-5" id="myTabContent1">
                            <div class="tab-pane fade show active" id="general" role="tabpanel" aria-labelledby="home-tab-1">
                                <h4 style="text-align: center;"><?= lang('Admin.header_footer') ?></h4>
                                <br>
                                <div class="row">
                                    <div class="col-lg-8 col-md-8 col-sm-12">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <div class="form-group row">
                                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                                        <label class="col-form-label"><?= lang('Admin.header_report') ?></label>
                                                    </div>
                                                    <div class="col-lg-8 col-md-8 col-sm-12">
                                                        <div class="input-group" id="kt_daterangepicker_2">
                                                            <input type="file" class="form-control form-control-solid form-control-lg" name="header_report" id="header_report" onchange="PreviewImage('header_report', 'report_header_upload_preview');"/>
                                                            <div class="input-group-append">
                                                                <span class="input-group-text">
                                                                    <a target="_blank" href="<?php echo base_url('uploads/setting/' . $preference->settings_header_report); ?>"><i class="fa fa-download"></i><?= lang('Admin.view') ?></a>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <input type="hidden" class="form-control form-control-solid form-control-lg" name="current_header_report" value="<?= $preference->settings_header_report; ?>"/>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row hide">
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <div class="form-group row">
                                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                                        <label class="col-form-label"><?= lang('Admin.footer_report') ?></label>
                                                    </div>
                                                    <div class="col-lg-8 col-md-8 col-sm-12">
                                                        <div class="input-group" id="kt_daterangepicker_2">
                                                            <input type="file" class="form-control form-control-solid form-control-lg" name="footer_report" id="footer_report" onchange="PreviewImage('footer_report', 'report_footer_upload_preview');"/>
                                                            <div class="input-group-append">
                                                                <span class="input-group-text">
                                                                    <a target="_blank" href="<?php echo base_url('uploads/setting/' . $preference->settings_footer_report); ?>"><i class="fa fa-download"></i><?= lang('Admin.view') ?></a>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <input type="hidden" class="form-control form-control-solid form-control-lg" name="current_footer_report" value="<?= $preference->settings_footer_report; ?>"/>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <div class="form-group row">
                                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                                        <label class="col-form-label"><?= lang('Admin.header_list') ?></label>
                                                    </div>
                                                    <div class="col-lg-8 col-md-8 col-sm-12">
                                                        <div class="input-group" id="kt_daterangepicker_2">
                                                            <input type="file" class="form-control form-control-solid form-control-lg" name="header_list" id="header_list" onchange="PreviewImage('header_list', 'list_header_upload_preview');"/>
                                                            <div class="input-group-append">
                                                                <span class="input-group-text">
                                                                    <a target="_blank" href="<?php echo base_url('uploads/setting/' . $preference->settings_header_list); ?>"><i class="fa fa-download"></i><?= lang('Admin.view') ?></a>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <input type="hidden" class="form-control form-control-solid form-control-lg" name="current_header_list" value="<?= $preference->settings_header_list; ?>"/>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row hide">
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <div class="form-group row">
                                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                                        <label class="col-form-label"><?= lang('Admin.footer_list') ?></label>
                                                    </div>
                                                    <div class="col-lg-8 col-md-8 col-sm-12">
                                                        <div class="input-group" id="kt_daterangepicker_2">
                                                            <input type="file" class="form-control form-control-solid form-control-lg" name="footer_list" id="footer_list" onchange="PreviewImage('footer_list', 'list_footer_upload_preview');"/>
                                                            <div class="input-group-append">
                                                                <span class="input-group-text">
                                                                    <a target="_blank" href="<?php echo base_url('uploads/setting/' . $preference->settings_footer_list); ?>"><i class="fa fa-download"></i><?= lang('Admin.view') ?></a>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <input type="hidden" class="form-control form-control-solid form-control-lg" name="current_footer_list" value="<?= $preference->settings_footer_list; ?>"/>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-12 hide">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <div class="form-group row">
                                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                                        <img id="report_header_upload_preview" src="<?php echo base_url('uploads/setting/' . $preference->settings_header_report); ?>" style="width: 400px; height: 60px;" />
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <div class="form-group row">
                                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                                        <img id="report_footer_upload_preview" src="<?php echo base_url() . 'uploads/setting/' . $preference->settings_footer_report; ?>" style="width: 400px; height: 60px;" />
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <div class="form-group row">
                                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                                        <img id="list_header_upload_preview" src="<?php echo base_url() . 'uploads/setting/' . $preference->settings_header_list; ?>" style="width: 400px; height: 60px;" />
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <div class="form-group row">
                                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                                        <img id="list_footer_upload_preview" src="<?php echo base_url() . 'uploads/setting/' . $preference->settings_footer_list; ?>" style="width: 400px; height: 60px;" />
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <h4 style="text-align: center;"><?= lang('Admin.default_values') ?></h4>
                                <br>
                                <div class="row">
                                    <div class="col-lg-8 col-md-8 col-sm-12">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <div class="form-group row">
                                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                                        <label class="col-form-label"><?= lang('Admin.default_recipient') ?></label>
                                                    </div>
                                                    <div class="col-lg-8 col-md-8 col-sm-12">
                                                        <select name = "default_recipient" id="default_recipient" class="form-control form-control-solid form-control-lg" style="width: 100%;">
                                                            <option selected="" value=""></option>
                                                            <?php
                                                            if ($members) {
                                                                foreach ($members as $memb) {
                                                                    ?>
                                                                    <option value="<?php echo $memb->member_id ?>" <?php echo ($memb->member_id == $preference->settings_default_recipient_id) ? 'selected' : '' ?>><?php echo $memb->member_name ?></option>
                                                                    <?php
                                                                }
                                                            }
                                                            ?>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <div class="form-group row">
                                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                                        <label class="col-form-label"><?= lang('Admin.default_sender') ?></label>
                                                    </div>
                                                    <div class="col-lg-8 col-md-8 col-sm-12">
                                                        <select name = "default_sender" id="default_sender" class="form-control form-control-solid form-control-lg" style="width: 100%;">
                                                            <option selected="" value=""></option>
                                                            <?php
                                                            if ($members) {
                                                                foreach ($members as $memb) {
                                                                    ?>
                                                                    <option value="<?php echo $memb->member_id ?>" <?php echo ($memb->member_id == $preference->settings_default_sender_id) ? 'selected' : '' ?>><?php echo $memb->member_name ?></option>
                                                                    <?php
                                                                }
                                                            }
                                                            ?>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <div class="form-group row">
                                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                                        <label class="col-form-label"><?= lang('Admin.default_member') ?></label>
                                                    </div>
                                                    <div class="col-lg-8 col-md-8 col-sm-12">
                                                        <select name = "default_member" id="default_member" class="form-control form-control-solid form-control-lg" style="width: 100%;">
                                                            <option></option>
                                                            <?php
                                                            if ($members) {
                                                                foreach ($members as $memb) {
                                                                    ?>
                                                                    <option value="<?= $memb->member_id ?>" <?= ($memb->id == $preference->settings_default_member_id) ? 'selected' : '' ?>><?= $memb->member_name ?></option>
                                                                    <?php
                                                                }
                                                            }
                                                            ?>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <div class="form-group row">
                                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                                        <label class="col-form-label"><?= lang('Admin.dateformat') ?></label>
                                                    </div>
                                                    <div class="col-lg-8 col-md-8 col-sm-12">
                                                        <input type="text" name="display_format_date" class="form-control form-control-solid form-control-lg" value="<?= $preference->settings_display_format_date; ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <div class="form-group row">
                                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                                        <label class="col-form-label"><?= lang('Admin.fullbacklog_wr') ?></label>
                                                    </div>
                                                    <div class="col-lg-8 col-md-8 col-sm-12">
                                                        <input type="text" name="backlog_wr" onkeypress="return onlyNumberKey(event)" class="form-control form-control-solid form-control-lg" value="<?= $preference->settings_backlog_wr; ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <div class="form-group row">
                                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                                        <label class="col-form-label"><?= lang('Admin.fullbacklog_wo') ?></label>
                                                    </div>
                                                    <div class="col-lg-8 col-md-8 col-sm-12">
                                                        <input type="text" name="backlog_wo" onkeypress="return onlyNumberKey(event)" class="form-control form-control-solid form-control-lg" value="<?= $preference->settings_backlog_wo; ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <div class="form-group row">
                                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                                        <label class="col-form-label"><?= lang('Admin.backlog_wr') . ': ' . lang('Admin.red') ?></label>
                                                    </div>
                                                    <div class="col-lg-8 col-md-8 col-sm-12">
                                                        <input type="text" name="wr_bl_color_value_red" onkeypress="return onlyNumberKey(event)" class="form-control form-control-solid form-control-lg" value="<?= $preference->settings_wr_bl_color_value_red; ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <div class="form-group row">
                                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                                        <label class="col-form-label"><?= lang('Admin.backlog_wr') . ': ' . lang('Admin.orange') ?></label>
                                                    </div>
                                                    <div class="col-lg-8 col-md-8 col-sm-12">
                                                        <input type="text" name="wr_bl_color_value_orange" onkeypress="return onlyNumberKey(event)" class="form-control form-control-solid form-control-lg" value="<?= $preference->settings_wr_bl_color_value_orange; ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <div class="form-group row">
                                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                                        <label class="col-form-label"><?= lang('Admin.backlog_wo') . ': ' . lang('Admin.red') ?></label>
                                                    </div>
                                                    <div class="col-lg-8 col-md-8 col-sm-12">
                                                        <input type="text" name="wo_bl_color_value_red" onkeypress="return onlyNumberKey(event)" class="form-control form-control-solid form-control-lg" value="<?= $preference->settings_wo_bl_color_value_red; ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <div class="form-group row">
                                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                                        <label class="col-form-label"><?= lang('Admin.backlog_wo') . ': ' . lang('Admin.orange') ?></label>
                                                    </div>
                                                    <div class="col-lg-8 col-md-8 col-sm-12">
                                                        <input type="text" name="wo_bl_color_value_orange" onkeypress="return onlyNumberKey(event)" class="form-control form-control-solid form-control-lg" value="<?= $preference->settings_wo_bl_color_value_orange; ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <div class="form-group row">
                                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                                        <label class="col-form-label"><?= lang('Admin.seuilwrcoleur') . ': ' . lang('Admin.red') ?></label>
                                                    </div>
                                                    <div class="col-lg-8 col-md-8 col-sm-12">
                                                        <input type="text" name="wr_color_value_red" onkeypress="return onlyNumberKey(event)" class="form-control form-control-solid form-control-lg" value="<?= $preference->settings_wr_color_value_red; ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <div class="form-group row">
                                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                                        <label class="col-form-label"><?= lang('Admin.seuilwrcoleur') . ': ' . lang('Admin.orange') ?></label>
                                                    </div>
                                                    <div class="col-lg-8 col-md-8 col-sm-12">
                                                        <input type="text" name="wr_color_value_orange" onkeypress="return onlyNumberKey(event)" class="form-control form-control-solid form-control-lg" value="<?= $preference->settings_wr_color_value_orange; ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <div class="form-group row">
                                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                                        <label class="col-form-label"><?= lang('Admin.seuilwocoleur') . ': ' . lang('Admin.red') ?></label>
                                                    </div>
                                                    <div class="col-lg-8 col-md-8 col-sm-12">
                                                        <input type="text" name="wo_color_value_red" onkeypress="return onlyNumberKey(event)" class="form-control form-control-solid form-control-lg" value="<?= $preference->settings_wo_color_value_red; ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <div class="form-group row">
                                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                                        <label class="col-form-label"><?= lang('Admin.seuilwocoleur') . ': ' . lang('Admin.orange') ?></label>
                                                    </div>
                                                    <div class="col-lg-8 col-md-8 col-sm-12">
                                                        <input type="text" name="wo_color_value_orange" onkeypress="return onlyNumberKey(event)" class="form-control form-control-solid form-control-lg" value="<?= $preference->settings_wo_color_value_orange; ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <div class="form-group row">
                                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                                        <label class="col-form-label"><?= lang('Admin.efficiency_rate') . ': ' . lang('Admin.red') ?></label>
                                                    </div>
                                                    <div class="col-lg-8 col-md-8 col-sm-12">
                                                        <input type="text" name="efficiency_rate_color_value_red" onkeypress="return onlyNumberKey(event)" class="form-control form-control-solid form-control-lg" value="<?= $preference->settings_efficiency_rate_color_value_red; ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <div class="form-group row">
                                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                                        <label class="col-form-label"><?= lang('Admin.efficiency_rate') . ': ' . lang('Admin.orange') ?></label>
                                                    </div>
                                                    <div class="col-lg-8 col-md-8 col-sm-12">
                                                        <input type="text" name="efficiency_rate_color_value_orange" onkeypress="return onlyNumberKey(event)" class="form-control form-control-solid form-control-lg" value="<?= $preference->settings_efficiency_rate_color_value_orange; ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <div class="form-group row">
                                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                                        <label class="col-form-label"><?= lang('Admin.sess_expiration'); ?></label>
                                                    </div>
                                                    <div class="col-lg-8 col-md-8 col-sm-12">
                                                        <div class="input-group" id="kt_daterangepicker_2">
                                                            <input type="text" name="sess_expiration" class="form-control form-control-solid form-control-lg" value="<?= $sess_expiration; ?>">
                                                            <div class="input-group-append">
                                                                <span class="input-group-text">
                                                                    <?= lang('Admin.second') ?>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <div class="form-group row">
                                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                                        <label class="col-form-label"><?= lang('Admin.settings_default_max_rows') ?></label>
                                                    </div>
                                                    <div class="col-lg-8 col-md-8 col-sm-12">
                                                        <input type="text" name="settings_default_max_rows" onkeypress="return onlyNumberKey(event)" class="form-control form-control-solid form-control-lg" value="<?= $preference->settings_default_max_rows; ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <div class="form-group row">
                                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                                        <label class="col-form-label"><?= lang('Admin.settings_password_reset_option') ?></label>
                                                    </div>
                                                    <div class="col-lg-8 col-md-8 col-sm-12">
                                                        <select name = "settings_password_reset_option" id="settings_password_reset_option" class="form-control form-control-solid form-control-lg" style="width: 100%;">
                                                            <option value="local" <?php echo ('local' == $preference->settings_password_reset_option) ? 'selected' : '' ?>><?= lang('Admin.local') ?></option>
                                                            <option value="email" <?php echo ('email' == $preference->settings_password_reset_option) ? 'selected' : '' ?>><?= lang('Admin.email') ?></option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <h4 style="text-align: center;"><?= lang('Admin.colors') ?></h4>
                                <br>
                                <div class="row">
                                    <div class="col-lg-8 col-md-8 col-sm-12">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <div class="form-group row">
                                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                                        <label class="col-form-label"><?= lang('Admin.field_required_color') ?></label>
                                                    </div>
                                                    <div class="col-lg-8 col-md-8 col-sm-12">
                                                        <input type="text" name="color_code" id="hue-demo" class="form-control demo" data-control="hue" value="<?= $preference->settings_color_code; ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-8 col-md-8 col-sm-12">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <div class="form-group row">
                                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                                        <label class="col-form-label"><?= lang('Admin.red_color_code') ?></label>
                                                    </div>
                                                    <div class="col-lg-8 col-md-8 col-sm-12">
                                                        <input type="text" name="red_color_code" id="red-code-hue-demo" class="form-control demo" data-control="hue" value="<?= $preference->settings_red_color_code; ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-8 col-md-8 col-sm-12">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <div class="form-group row">
                                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                                        <label class="col-form-label"><?= lang('Admin.orange_color_code') ?></label>
                                                    </div>
                                                    <div class="col-lg-8 col-md-8 col-sm-12">
                                                        <input type="text" name="orange_color_code" id="orange-hue-demo" class="form-control demo" data-control="hue" value="<?= $preference->settings_orange_color_code; ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-8 col-md-8 col-sm-12">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <div class="form-group row">
                                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                                        <label class="col-form-label"><?= lang('Admin.green_color_code') ?></label>
                                                    </div>
                                                    <div class="col-lg-8 col-md-8 col-sm-12">
                                                        <input type="text" name="green_color_code" id="green-hue-demo" class="form-control demo" data-control="hue" value="<?= $preference->settings_green_color_code; ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <h4 style="text-align: center;"><?= lang('Admin.filter') ?></h4>
                                <br>
                                <div class="row">
                                    <div class="col-lg-8 col-md-8 col-sm-12">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <div class="form-group row">
                                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                                        <label class="col-form-label"><?= lang('Admin.filter_member_list') ?></label>
                                                    </div>
                                                    <div class="col-lg-8 col-md-8 col-sm-12">
                                                        <div class="radio-inline radio-padding">
                                                            <label class="radio">
                                                                <input type="radio" <?= ($preference->settings_filter_member_per_user_cc == 0 ? 'checked' : '') ?> name="filter_member_per_user_cc" id="filter_member_per_user_cc0" value="0" />
                                                                <span></span><?= lang('Admin.no') ?></label>
                                                            <label class="radio">
                                                                <input type="radio" <?= ($preference->settings_filter_member_per_user_cc == 1 ? 'checked' : '') ?> name="filter_member_per_user_cc" id="filter_member_per_user_cc1" value="1" />
                                                                <span></span><?= lang('Admin.yes') ?></label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <h4 style="text-align: center;"><?= lang('Admin.serialnumber') ?></h4>
                                <br>
                                <div class="row">
                                    <div class="col-lg-8 col-md-8 col-sm-12">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <div class="form-group row">
                                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                                        <label class="col-form-label"><?= lang('Admin.wr_number') ?></label>
                                                    </div>
                                                    <div class="col-lg-8 col-md-8 col-sm-12">
                                                        <input type="text" name="current_wr_number" id="current_wr_number" class="form-control" data-control="hue" value="<?= $preference->settings_current_wr_number; ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-8 col-md-8 col-sm-12">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <div class="form-group row">
                                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                                        <label class="col-form-label"><?= lang('Admin.wo_number') ?></label>
                                                    </div>
                                                    <div class="col-lg-8 col-md-8 col-sm-12">
                                                        <input type="text" name="current_wo_number" id="current_wo_number" class="form-control" data-control="hue" value="<?= $preference->settings_current_wo_number; ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade show" id="requiredfield" role="tabpanel" aria-labelledby="home-tab-1">
                                <h4 style="text-align: center;"><?= lang('Admin.work_request') ?></h4>
                                <br>
                                <div class="row">
                                    <div class="col-lg-8 col-md-8 col-sm-12">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <div class="form-group row">
                                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                                        <label class="col-form-label"><?= lang('Admin.incidente_date') ?></label>
                                                    </div>
                                                    <div class="col-lg-8 col-md-8 col-sm-12">
                                                        <div class="form-group">
                                                            <div class="radio-inline radio-padding">
                                                                <label class="radio">
                                                                    <input type="radio" <?= ($preference->settings_wr_incidente_date == 0 ? 'checked' : '') ?> name="wr_incidente_date" id="wr_incidente_date0" value="0" />
                                                                    <span></span><?= lang('Admin.no') ?></label>
                                                                <label class="radio">
                                                                    <input type="radio" <?= ($preference->settings_wr_incidente_date == 1 ? 'checked' : '') ?> name="wr_incidente_date" id="wr_incidente_date1" value="1" />
                                                                    <span></span><?= lang('Admin.yes') ?></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <div class="form-group row">
                                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                                        <label class="col-form-label"><?= lang('Admin.priority') ?></label>
                                                    </div>
                                                    <div class="col-lg-8 col-md-8 col-sm-12">
                                                        <div class="form-group">
                                                            <div class="radio-inline radio-padding">
                                                                <label class="radio">
                                                                    <input type="radio" <?= ($preference->settings_wr_priority == 0 ? 'checked' : '') ?> name="wr_priority" id="wr_priority0" value="0" />
                                                                    <span></span><?= lang('Admin.no') ?></label>
                                                                <label class="radio">
                                                                    <input type="radio" <?= ($preference->settings_wr_priority == 1 ? 'checked' : '') ?> name="wr_priority" id="wr_priority1" value="1" />
                                                                    <span></span><?= lang('Admin.yes') ?></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-12">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <div class="form-group row">
                                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                                        <label class="col-form-label"><?= lang('Admin.cost_center') ?></label>
                                                    </div>
                                                    <div class="col-lg-8 col-md-8 col-sm-12">
                                                        <div class="form-group">
                                                            <div class="radio-inline radio-padding">
                                                                <label class="radio">
                                                                    <input type="radio" <?= ($preference->settings_wr_cost_center == 0 ? 'checked' : '') ?> name="wr_cost_center" id="wr_cost_center0" value="0" />
                                                                    <span></span><?= lang('Admin.no') ?></label>
                                                                <label class="radio">
                                                                    <input type="radio" <?= ($preference->settings_wr_cost_center == 1 ? 'checked' : '') ?> name="wr_cost_center" id="wr_cost_center1" value="1" />
                                                                    <span></span><?= lang('Admin.yes') ?></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <div class="form-group row">
                                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                                        <label class="col-form-label"><?= lang('Admin.location') ?></label>
                                                    </div>
                                                    <div class="col-lg-8 col-md-8 col-sm-12">
                                                        <div class="form-group">
                                                            <div class="radio-inline radio-padding">
                                                                <label class="radio">
                                                                    <input type="radio" <?= ($preference->settings_wr_location == 0 ? 'checked' : '') ?> name="wr_location" id="wr_location0" value="0" />
                                                                    <span></span><?= lang('Admin.no') ?></label>
                                                                <label class="radio">
                                                                    <input type="radio" <?= ($preference->settings_wr_location == 1 ? 'checked' : '') ?> name="wr_location" id="wr_location1" value="1" />
                                                                    <span></span><?= lang('Admin.yes') ?></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <h4 style="text-align: center;"><?= lang('Admin.work_order') ?></h4>
                                <div class="row">
                                    <div class="col-lg-8 col-md-8 col-sm-12">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <div class="form-group row">
                                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                                        <label class="col-form-label"><?= lang('Admin.cost_center') ?></label>
                                                    </div>
                                                    <div class="col-lg-8 col-md-8 col-sm-12">
                                                        <div class="form-group">
                                                            <div class="radio-inline radio-padding">
                                                                <label class="radio">
                                                                    <input type="radio"  <?= ($preference->settings_wo_cost_center == 0 ? 'checked' : '') ?> name="wo_cost_center" id="wo_cost_center0" value="0" />
                                                                    <span></span><?= lang('Admin.no') ?></label>
                                                                <label class="radio">
                                                                    <input type="radio"  <?= ($preference->settings_wo_cost_center == 1 ? 'checked' : '') ?> name="wo_cost_center" id="wo_cost_center1" value="1" />
                                                                    <span></span><?= lang('Admin.yes') ?></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <div class="form-group row">
                                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                                        <label class="col-form-label"><?= lang('Admin.symptom') ?></label>
                                                    </div>
                                                    <div class="col-lg-8 col-md-8 col-sm-12">
                                                        <div class="form-group">
                                                            <div class="radio-inline radio-padding">
                                                                <label class="radio">
                                                                    <input type="radio" <?= ($preference->settings_wo_symptom == 0 ? 'checked' : '') ?> name="wo_symptom" id="wo_symptom0" value="0" />
                                                                    <span></span><?= lang('Admin.no') ?></label>
                                                                <label class="radio">
                                                                    <input type="radio" <?= ($preference->settings_wo_symptom == 1 ? 'checked' : '') ?> name="wo_symptom" id="wo_symptom1" value="1" />
                                                                    <span></span><?= lang('Admin.yes') ?></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <div class="form-group row">
                                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                                        <label class="col-form-label"><?= lang('Admin.main_member') ?></label>
                                                    </div>
                                                    <div class="col-lg-8 col-md-8 col-sm-12">
                                                        <div class="form-group">
                                                            <div class="radio-inline radio-padding">
                                                                <label class="radio">
                                                                    <input type="radio" <?= ($preference->settings_wo_member == 0 ? 'checked' : '') ?> name="wo_member" id="wo_member0" value="0" />
                                                                    <span></span><?= lang('Admin.no') ?></label>
                                                                <label class="radio">
                                                                    <input type="radio" <?= ($preference->settings_wo_member == 1 ? 'checked' : '') ?> name="wo_member" id="wo_member1" value="1" />
                                                                    <span></span><?= lang('Admin.yes') ?></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <div class="form-group row">
                                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                                        <label class="col-form-label"><?= lang('Admin.supplier') ?></label>
                                                    </div>
                                                    <div class="col-lg-8 col-md-8 col-sm-12">
                                                        <div class="form-group">
                                                            <div class="radio-inline radio-padding">
                                                                <label class="radio">
                                                                    <input type="radio" <?= ($preference->settings_wo_supplier == 0 ? 'checked' : '') ?> name="wo_supplier" id="wo_supplier0" value="0" />
                                                                    <span></span><?= lang('Admin.no') ?></label>
                                                                <label class="radio">
                                                                    <input type="radio" <?= ($preference->settings_wo_supplier == 1 ? 'checked' : '') ?> name="wo_supplier" id="wo_supplier1" value="1" />
                                                                    <span></span><?= lang('Admin.yes') ?></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <div class="form-group row">
                                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                                        <label class="col-form-label"><?= lang('Admin.time_class') ?></label>
                                                    </div>
                                                    <div class="col-lg-8 col-md-8 col-sm-12">
                                                        <div class="form-group">
                                                            <div class="radio-inline radio-padding">
                                                                <label class="radio">
                                                                    <input type="radio" <?= ($preference->settings_wo_class == 0 ? 'checked' : '') ?> name="wo_class" id="wo_class0" value="0" />
                                                                    <span></span><?= lang('Admin.no') ?></label>
                                                                <label class="radio">
                                                                    <input type="radio" <?= ($preference->settings_wo_class == 1 ? 'checked' : '') ?> name="wo_class" id="wo_class1" value="1" />
                                                                    <span></span><?= lang('Admin.yes') ?></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <div class="form-group row">
                                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                                        <label class="col-form-label"><?= lang('Admin.priority') ?></label>
                                                    </div>
                                                    <div class="col-lg-8 col-md-8 col-sm-12">
                                                        <div class="form-group">
                                                            <div class="radio-inline radio-padding">
                                                                <label class="radio">
                                                                    <input type="radio" <?= ($preference->settings_wo_priority == 0 ? 'checked' : '') ?> name="wo_priority" id="wo_priority0" value="0" />
                                                                    <span></span><?= lang('Admin.no') ?></label>
                                                                <label class="radio">
                                                                    <input type="radio" <?= ($preference->settings_wo_priority == 1 ? 'checked' : '') ?> name="wo_priority" id="wo_priority1" value="1" />
                                                                    <span></span><?= lang('Admin.yes') ?></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <div class="form-group row">
                                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                                        <label class="col-form-label"><?= lang('Admin.estimated_cost') ?></label>
                                                    </div>
                                                    <div class="col-lg-8 col-md-8 col-sm-12">
                                                        <div class="form-group">
                                                            <div class="radio-inline radio-padding">
                                                                <label class="radio">
                                                                    <input type="radio" <?= ($preference->settings_wo_estimated_cost == 0 ? 'checked' : '') ?> name="wo_estimated_cost" id="wo_estimated_cost0" value="0" />
                                                                    <span></span><?= lang('Admin.no') ?></label>
                                                                <label class="radio">
                                                                    <input type="radio" <?= ($preference->settings_wo_estimated_cost == 1 ? 'checked' : '') ?> name="wo_estimated_cost" id="wo_estimated_cost1" value="1" />
                                                                    <span></span><?= lang('Admin.yes') ?></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <div class="form-group row">
                                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                                        <label class="col-form-label"><?= lang('Admin.component') ?></label>
                                                    </div>
                                                    <div class="col-lg-8 col-md-8 col-sm-12">
                                                        <div class="form-group">
                                                            <div class="radio-inline radio-padding">
                                                                <label class="radio">
                                                                    <input type="radio" <?= ($preference->settings_wo_component == 0 ? 'checked' : '') ?> name="wo_component" id="wo_component0" value="0" />
                                                                    <span></span><?= lang('Admin.no') ?></label>
                                                                <label class="radio">
                                                                    <input type="radio" <?= ($preference->settings_wo_component == 1 ? 'checked' : '') ?> name="wo_component" id="wo_component1" value="1" />
                                                                    <span></span><?= lang('Admin.yes') ?></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <div class="form-group row">
                                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                                        <label class="col-form-label"><?= lang('Admin.component_status') ?></label>
                                                    </div>
                                                    <div class="col-lg-8 col-md-8 col-sm-12">
                                                        <div class="form-group">
                                                            <div class="radio-inline radio-padding">
                                                                <label class="radio">
                                                                    <input type="radio" <?= ($preference->settings_wo_componentstatus == 0 ? 'checked' : '') ?> name="wo_componentstatus" id="wo_componentstatus0" value="0" />
                                                                    <span></span><?= lang('Admin.no') ?></label>
                                                                <label class="radio">
                                                                    <input type="radio" <?= ($preference->settings_wo_componentstatus == 1 ? 'checked' : '') ?> name="wo_componentstatus" id="wo_componentstatus1" value="1" />
                                                                    <span></span><?= lang('Admin.yes') ?></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <div class="form-group row">
                                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                                        <label class="col-form-label"><?= lang('Admin.wo_status') ?></label>
                                                    </div>
                                                    <div class="col-lg-8 col-md-8 col-sm-12">
                                                        <div class="form-group">
                                                            <div class="radio-inline radio-padding">
                                                                <label class="radio">
                                                                    <input type="radio" <?= ($preference->settings_wo_status == 0 ? 'checked' : '') ?> name="wo_status" id="wo_status0" value="0" />
                                                                    <span></span><?= lang('Admin.no') ?></label>
                                                                <label class="radio">
                                                                    <input type="radio" <?= ($preference->settings_wo_status == 1 ? 'checked' : '') ?> name="wo_status" id="wo_status1" value="1" />
                                                                    <span></span><?= lang('Admin.yes') ?></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <div class="form-group row">
                                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                                        <label class="col-form-label"><?= lang('Admin.routine') ?> </label>
                                                    </div>
                                                    <div class="col-lg-8 col-md-8 col-sm-12">
                                                        <div class="form-group">
                                                            <div class="radio-inline radio-padding">
                                                                <label class="radio">
                                                                    <input type="radio" <?= ($preference->settings_wo_routine == 0 ? 'checked' : '') ?> name="wo_routine" id="wo_routine0" value="0" />
                                                                    <span></span><?= lang('Admin.no') ?></label>
                                                                <label class="radio">
                                                                    <input type="radio" <?= ($preference->settings_wo_routine == 1 ? 'checked' : '') ?> name="wo_routine" id="wo_routine1" value="1" />
                                                                    <span></span><?= lang('Admin.yes') ?></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-12">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <div class="form-group row">
                                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                                        <label class="col-form-label"><?= lang('Admin.project') ?></label>
                                                    </div>
                                                    <div class="col-lg-8 col-md-8 col-sm-12">
                                                        <div class="form-group">
                                                            <div class="radio-inline radio-padding">
                                                                <label class="radio">
                                                                    <input type="radio" <?= ($preference->settings_wo_project == 0 ? 'checked' : '') ?> name="wo_project" id="wo_project0" value="0" />
                                                                    <span></span><?= lang('Admin.no') ?></label>
                                                                <label class="radio">
                                                                    <input type="radio" <?= ($preference->settings_wo_project == 1 ? 'checked' : '') ?> name="wo_project" id="wo_project0" value="1" />
                                                                    <span></span><?= lang('Admin.yes') ?></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <div class="form-group row">
                                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                                        <label class="col-form-label"><?= lang('Admin.contract') ?></label>
                                                    </div>
                                                    <div class="col-lg-8 col-md-8 col-sm-12">
                                                        <div class="form-group">
                                                            <div class="radio-inline radio-padding">
                                                                <label class="radio">
                                                                    <input type="radio" <?= ($preference->settings_wo_contract == 0 ? 'checked' : '') ?> name="wo_contract" id="wo_contract0" value="0" />
                                                                    <span></span><?= lang('Admin.no') ?></label>
                                                                <label class="radio">
                                                                    <input type="radio" <?= ($preference->settings_wo_contract == 1 ? 'checked' : '') ?> name="wo_contract" id="wo_contract1" value="1" />
                                                                    <span></span><?= lang('Admin.yes') ?></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <div class="form-group row">
                                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                                        <label class="col-form-label"><?= lang('Admin.wished_begin_date') ?></label>
                                                    </div>
                                                    <div class="col-lg-8 col-md-8 col-sm-12">
                                                        <div class="form-group">
                                                            <div class="radio-inline radio-padding">
                                                                <label class="radio">
                                                                    <input type="radio" <?= ($preference->settings_wo_wished_begin_date == 0 ? 'checked' : '') ?> name="wo_wished_begin_date" id="wo_wished_begin_date0" value="0" />
                                                                    <span></span><?= lang('Admin.no') ?></label>
                                                                <label class="radio">
                                                                    <input type="radio" <?= ($preference->settings_wo_wished_begin_date == 1 ? 'checked' : '') ?> name="wo_wished_begin_date" id="wo_wished_begin_date1" value="1" />
                                                                    <span></span><?= lang('Admin.yes') ?></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <div class="form-group row">
                                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                                        <label class="col-form-label"><?= lang('Admin.wished_end_date') ?></label>
                                                    </div>
                                                    <div class="col-lg-8 col-md-8 col-sm-12">
                                                        <div class="form-group">
                                                            <div class="radio-inline radio-padding">
                                                                <label class="radio">
                                                                    <input type="radio" <?= ($preference->settings_wo_wished_end_date == 0 ? 'checked' : '') ?> name="wo_wished_end_date" id="wo_wished_end_date0" value="0" />
                                                                    <span></span><?= lang('Admin.no') ?></label>
                                                                <label class="radio">
                                                                    <input type="radio" <?= ($preference->settings_wo_wished_end_date == 1 ? 'checked' : '') ?> name="wo_wished_end_date" id="wo_wished_end_date1" value="1" />
                                                                    <span></span><?= lang('Admin.yes') ?></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <div class="form-group row">
                                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                                        <label class="col-form-label"><?= lang('Admin.wo_begin_date') ?></label>
                                                    </div>
                                                    <div class="col-lg-8 col-md-8 col-sm-12">
                                                        <div class="form-group">
                                                            <div class="radio-inline radio-padding">
                                                                <label class="radio">
                                                                    <input type="radio" <?= ($preference->settings_wo_begin_date == 0 ? 'checked' : '') ?> name="wo_begin_date" id="wo_begin_date0" value="0" />
                                                                    <span></span><?= lang('Admin.no') ?></label>
                                                                <label class="radio">
                                                                    <input type="radio" <?= ($preference->settings_wo_begin_date == 1 ? 'checked' : '') ?> name="wo_begin_date" id="wo_begin_date1" value="1" />
                                                                    <span></span><?= lang('Admin.yes') ?></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <div class="form-group row">
                                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                                        <label class="col-form-label"><?= lang('Admin.hour_labour_time') ?></label>
                                                    </div>
                                                    <div class="col-lg-8 col-md-8 col-sm-12">
                                                        <div class="form-group">
                                                            <div class="radio-inline radio-padding">
                                                                <label class="radio">
                                                                    <input type="radio" <?= ($preference->settings_wo_hour_labor_time == 0 ? 'checked' : '') ?> name="wo_hour_labor_time" id="wo_hour_labor_time0" value="0" />
                                                                    <span></span><?= lang('Admin.no') ?></label>
                                                                <label class="radio">
                                                                    <input type="radio" <?= ($preference->settings_wo_hour_labor_time == 1 ? 'checked' : '') ?> name="wo_hour_labor_time" id="wo_hour_labor_time1" value="1" />
                                                                    <span></span><?= lang('Admin.yes') ?></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <div class="form-group row">
                                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                                        <label class="col-form-label"><?= lang('Admin.equipment_downtime') ?></label>
                                                    </div>
                                                    <div class="col-lg-8 col-md-8 col-sm-12">
                                                        <div class="form-group">
                                                            <div class="radio-inline radio-padding">
                                                                <label class="radio">
                                                                    <input type="radio" <?= ($preference->settings_wo_equipment_downtime == 0 ? 'checked' : '') ?> name="wo_equipment_downtime" id="wo_equipment_downtime0" value="0" />
                                                                    <span></span><?= lang('Admin.no') ?></label>
                                                                <label class="radio">
                                                                    <input type="radio" <?= ($preference->settings_wo_equipment_downtime == 1 ? 'checked' : '') ?> name="wo_equipment_downtime" id="wo_equipment_downtime1" value="1" />
                                                                    <span></span><?= lang('Admin.yes') ?></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <div class="form-group row">
                                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                                        <label class="col-form-label"><?= lang('Admin.component_downtime') ?></label>
                                                    </div>
                                                    <div class="col-lg-8 col-md-8 col-sm-12">
                                                        <div class="form-group">
                                                            <div class="radio-inline radio-padding">
                                                                <label class="radio">
                                                                    <input type="radio" <?= ($preference->settings_wo_component_downtime == 0 ? 'checked' : '') ?> name="wo_component_downtime" id="wo_component_downtime0" value="0" />
                                                                    <span></span><?= lang('Admin.no') ?></label>
                                                                <label class="radio">
                                                                    <input type="radio" <?= ($preference->settings_wo_component_downtime == 1 ? 'checked' : '') ?> name="wo_component_downtime" id="wo_component_downtime1" value="1" />
                                                                    <span></span><?= lang('Admin.yes') ?></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <div class="form-group row">
                                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                                        <label class="col-form-label"><?= lang('Admin.comment') ?></label>
                                                    </div>
                                                    <div class="col-lg-8 col-md-8 col-sm-12">
                                                        <div class="form-group">
                                                            <div class="radio-inline radio-padding">
                                                                <label class="radio">
                                                                    <input type="radio" <?= ($preference->settings_wo_comment == 0 ? 'checked' : '') ?> name="wo_comment" id="wo_comment0" value="0" />
                                                                    <span></span><?= lang('Admin.no') ?></label>
                                                                <label class="radio">
                                                                    <input type="radio" <?= ($preference->settings_wo_comment == 1 ? 'checked' : '') ?> name="wo_comment" id="wo_comment1" value="1" />
                                                                    <span></span><?= lang('Admin.yes') ?></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <div class="form-group row">
                                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                                        <label class="col-form-label"><?= lang('Admin.operating_mode') ?></label>
                                                    </div>
                                                    <div class="col-lg-8 col-md-8 col-sm-12">
                                                        <div class="form-group">
                                                            <div class="radio-inline radio-padding">
                                                                <label class="radio">
                                                                    <input type="radio" <?= ($preference->settings_wo_operating_mode == 0 ? 'checked' : '') ?> name="wo_operating_mode" id="wo_operating_mode0" value="0" />
                                                                    <span></span><?= lang('Admin.no') ?></label>
                                                                <label class="radio">
                                                                    <input type="radio" <?= ($preference->settings_wo_operating_mode == 1 ? 'checked' : '') ?> name="wo_operating_mode" id="wo_operating_mode1" value="1" />
                                                                    <span></span><?= lang('Admin.yes') ?></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                            </div>
                            <div class="tab-pane fade show" id="autre" role="tabpanel" aria-labelledby="home-tab-1">
                                <h4 style="text-align: center;"><?= lang('Admin.notification') ?></h4>
                                <br>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <div class="form-group row">
                                                    <div class="col-lg-7 col-md-7 col-sm-12">
                                                        <label class="col-form-label"><?= lang('Admin.send_email_after_wr_creating') ?></label>
                                                    </div>
                                                    <div class="col-lg-5 col-md-5 col-sm-12">
                                                        <div class="form-group">
                                                            <div class="radio-inline radio-padding">
                                                                <label class="radio">
                                                                    <input type="radio" <?= ($preference->settings_wr_send_email == 0 ? 'checked' : '') ?> name="wr_send_email" id="wr_send_email0" value="0" />
                                                                    <span></span><?= lang('Admin.no') ?></label>
                                                                <label class="radio">
                                                                    <input type="radio" <?= ($preference->settings_wr_send_email == 1 ? 'checked' : '') ?> name="wr_send_email" id="wr_send_email1" value="1" />
                                                                    <span></span><?= lang('Admin.yes') ?></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <div class="form-group row">
                                                    <div class="col-lg-7 col-md-7 col-sm-12">
                                                        <label class="col-form-label"><?= lang('Admin.alert_for_exist_wr_equipment') ?></label>
                                                    </div>
                                                    <div class="col-lg-5 col-md-5 col-sm-12">
                                                        <div class="form-group">
                                                            <div class="radio-inline radio-padding">
                                                                <label class="radio">
                                                                    <input type="radio" <?= ($preference->settings_wr_display_alert == 0 ? 'checked' : '') ?> name="wr_display_alert" id="wr_display_alert0" value="0" />
                                                                    <span></span><?= lang('Admin.no') ?></label>
                                                                <label class="radio">
                                                                    <input type="radio" <?= ($preference->settings_wr_display_alert == 1 ? 'checked' : '') ?> name="wr_display_alert" id="wr_display_alert1" value="1" />
                                                                    <span></span><?= lang('Admin.yes') ?></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <div class="form-group row">
                                                    <div class="col-lg-7 col-md-7 col-sm-12">
                                                        <label class="col-form-label"><?= lang('Admin.send_email_after_wo_time_expired') ?></label>
                                                    </div>
                                                    <div class="col-lg-5 col-md-5 col-sm-12">
                                                        <div class="form-group">
                                                            <div class="radio-inline radio-padding">
                                                                <label class="radio">
                                                                    <input type="radio" <?= ($preference->settings_wo_send_email == 0 ? 'checked' : '') ?> name="wo_send_email" id="wo_send_email0" value="0" />
                                                                    <span></span><?= lang('Admin.no') ?></label>
                                                                <label class="radio">
                                                                    <input type="radio" <?= ($preference->settings_wo_send_email == 1 ? 'checked' : '') ?> name="wo_send_email" id="wo_send_email1" value="1" />
                                                                    <span></span><?= lang('Admin.yes') ?></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <div class="form-group row">
                                                    <div class="col-lg-7 col-md-7 col-sm-12">
                                                        <label class="col-form-label"><?= lang('Admin.send_email_after_preventive_wo_generate') ?></label>
                                                    </div>
                                                    <div class="col-lg-5 col-md-5 col-sm-12">
                                                        <div class="form-group">
                                                            <div class="radio-inline radio-padding">
                                                                <label class="radio">
                                                                    <input type="radio" <?= ($preference->settings_wo_send_email_wo_generate == 0 ? 'checked' : '') ?> name="wo_send_email_wo_generate" id="wo_send_email_wo_generate" value="0" />
                                                                    <span></span><?= lang('Admin.no') ?></label>
                                                                <label class="radio">
                                                                    <input type="radio" <?= ($preference->settings_wo_send_email_wo_generate == 1 ? 'checked' : '') ?> name="wo_send_email_wo_generate" id="wo_send_email_wo_generate1" value="1" />
                                                                    <span></span><?= lang('Admin.yes') ?></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <div class="form-group row">
                                                    <div class="col-lg-7 col-md-7 col-sm-12">
                                                        <label class="col-form-label"><?= lang('Admin.alert_for_exist_wo_equipment') ?></label>
                                                    </div>
                                                    <div class="col-lg-5 col-md-5 col-sm-12">
                                                        <div class="form-group">
                                                            <div class="radio-inline radio-padding">
                                                                <label class="radio">
                                                                    <input type="radio" <?= ($preference->settings_wo_display_alert == 0 ? 'checked' : '') ?> name="wo_display_alert" id="wo_display_alert0" value="0" />
                                                                    <span></span><?= lang('Admin.no') ?></label>
                                                                <label class="radio">
                                                                    <input type="radio" <?= ($preference->settings_wo_display_alert == 1 ? 'checked' : '') ?> name="wo_display_alert" id="wo_display_alert1" value="1" />
                                                                    <span></span><?= lang('Admin.yes') ?></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <div class="form-group row">
                                                    <div class="col-lg-7 col-md-7 col-sm-12">
                                                        <label class="col-form-label"><?= lang('Admin.delay_wo_campaign_generation') ?></label>
                                                    </div>
                                                    <div class="col-lg-5 col-md-5 col-sm-12">
                                                        <div class="form-group">
                                                            <div class="input-group mb-3">
                                                                <input type="text" onkeypress="return onlyNumberKey(event)" class="form-control" name="wo_generation_delay_day" id="wo_generation_delay_day" value="<?= $preference->settings_wo_generation_delay_day ?>">
                                                                <div class="input-group-append">
                                                                    <span class="input-group-text"><?= lang('Admin.days') ?></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-12">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <div class="form-group row">
                                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                                        <label class="col-form-label"><?= lang('Admin.time_limit') ?></label>
                                                    </div>
                                                    <div class="col-lg-8 col-md-8 col-sm-12">
                                                        <div class="input-group mb-3">
                                                            <input type="text" onkeypress="return onlyNumberKey(event)" class="form-control" name="wo_send_email_delay" value="<?= $preference->settings_wo_send_email_delay ?>" id="wo_send_email_delay">
                                                            <div class="input-group-append">
                                                                <span class="input-group-text"><?= lang('Admin.days') ?></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary mr-2"><?= lang('Admin.save') ?></button>
                        <a href="<?= base_url('home') ?>" class="btn data-dismiss btn-danger"><?= lang('Admin.cancel') ?></a>
                    </div>
                </div>
            </div>
            <!--end::Container-->
        </div>
        <!--end::Entry-->
    </div>
</form>
<!--end::Content-->
<script>
    $(document).ready(function () {
        $('.select2').select2({allowClear: true});
    });
    $(document).ready(function () {

        $('.demo').each(function () {

            $(this).minicolors({
                control: $(this).attr('data-control') || 'hue',
                defaultValue: $(this).attr('data-defaultValue') || '',
                format: $(this).attr('data-format') || 'hex',
                keywords: $(this).attr('data-keywords') || '',
                inline: $(this).attr('data-inline') === 'true',
                letterCase: $(this).attr('data-letterCase') || 'lowercase',
                opacity: $(this).attr('data-opacity'),
                position: $(this).attr('data-position') || 'bottom',
                swatches: $(this).attr('data-swatches') ? $(this).attr('data-swatches').split('|') : [],
                change: function (value, opacity) {
                    if (!value)
                        return;
                    if (opacity)
                        value += ', ' + opacity;
                    if (typeof console === 'object') {
                        console.log(value);
                    }
                },
                theme: 'bootstrap'
            });

        });

    });
    function PreviewImage(input_id, img_id) {
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById(input_id).files[0]);
        oFReader.onload = function (oFREvent) {
            document.getElementById(img_id).src = oFREvent.target.result;

        };
    }
</script>
