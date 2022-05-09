<form id="frm_user_account" name="frm_user_account" method="POST">
    <input type="hidden" name="id" value="<?= $user->user_id ?>" />
    <div class="card card-custom">
        <div class="card-header">
            <div class="card-title">
                <span class="card-icon"> <i class="fa fa fa-cubes text-primary"></i>  </span>
                <h3 class="card-label"><?= lang('Admin.user_accounts') ?></h3>
            </div>
            <div class="card-toolbar">
                <a href="javascript:;" data-dismiss="modal" class="btn btn-sm btn-icon btn-light-danger">
                    <i class="fa fa-times"></i>
                </a>
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
                    <a  class="nav-link" data-toggle="tab" href="#infocontact">
                        <span class="nav-text font-weight-bold"><?= lang('Admin.infocontact') ?></span>
                    </a>
                </li>
                <li class="nav-item mr-3">
                    <a  class="nav-link" data-toggle="tab" href="#acsector">
                        <span class="nav-text font-weight-bold"><?= lang('Admin.acsector') ?></span>
                    </a>
                </li>
                <li class="nav-item mr-3">
                    <a  class="nav-link" data-toggle="tab" href="#acbranch">
                        <span class="nav-text font-weight-bold"><?= lang('Admin.acbranch') ?></span>
                    </a>
                </li>
                <li class="nav-item mr-3">
                    <a  class="nav-link" data-toggle="tab" href="#accostcenter">
                        <span class="nav-text font-weight-bold"><?= lang('Admin.accostcenter') ?></span>
                    </a>
                </li>
            </ul>
            <div class="tab-content mt-5" id="myTabContent1">
                <div class="tab-pane fade show active" id="general" role="tabpanel" aria-labelledby="home-tab-1">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="form-group row">
                                <div class="col-lg-3 col-md-3 col-sm-12">
                                    <label class="col-form-label"><?= lang('Admin.code') ?></label>
                                </div>
                                <div class="col-lg-5 col-md-5 col-sm-12">
                                    <input class="form-control form-control-solid colours" name="code" id="code" type="text" value="<?= $user->user_code ?>" placeholder="<?= lang('Admin.code') ?>"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="form-group row">
                                <div class="col-lg-3 col-md-3 col-sm-12">
                                    <label class="col-form-label"><?= lang('Admin.name') ?></label>
                                </div>
                                <div class="col-lg-9 col-md-9 col-sm-12">

                                    <input class="form-control form-control-solid colours" id="designation" name="designation" type="text" value="<?= $user->user_designation ?>" placeholder="<?= lang('Admin.name') ?>"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="form-group row">
                                <div class="col-lg-3 col-md-3 col-sm-12">
                                    <label class="col-form-label"><?= lang('Admin.profile') ?></label>
                                </div>
                                <div class="col-lg-5 col-md-5 col-sm-12">
                                    <select data-placeholder="<?= lang('Admin.profile') ?>" name = "profile" id="profile" class="form-control form-control-solid colours " style="width: 100%;">
                                        <option selected="" value=""></option>
                                        <?php foreach ($profile as $row) { ?>
                                            <option <?= ($user->user_profile_id == $row->user_profile_id) ? 'selected':'' ?> class="option_color" value="<?php echo $row->user_profile_id; ?>"><?php echo $row->user_profile_designation; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <select data-placeholder="<?= lang('Admin.language') ?>" name = "language" id="language" class="form-control form-control-solid colours " style="width: 100%;">
                                        <option selected="" value=""></option>
                                        <option <?= ($user->user_language == 'english') ? 'selected':'' ?> value="english"><?= lang('Admin.english') ?></option>
                                        <option <?= ($user->user_language == 'french') ? 'selected':'' ?> value="french"><?= lang('Admin.french') ?></option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="form-group row">
                                <div class="col-lg-3 col-md-3 col-sm-12">
                                    <label class="col-form-label"><?= lang('Admin.member') ?></label>
                                </div>
                                <div class="col-lg-9 col-md-9 col-sm-12">
                                    <select data-placeholder="<?= lang('Admin.member') ?>" name = "member" id="member" class="form-control form-control-solid " style="width: 100%;">
                                        <option selected="" value=""></option>
                                        <?php foreach ($member as $rows) { ?>
                                            <option <?= ($user->user_member_id == $rows->member_id) ? 'selected':'' ?> class="option_color" value="<?php echo $rows->member_id; ?>"><?php echo $rows->member_code.' - '.$rows->member_name; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="form-group row">
                                <div class="col-lg-3 col-md-3 col-sm-12">
                                    <label class="col-form-label"><?= lang('Admin.validity_period') ?></label>
                                </div>
                                <div class="col-lg-5 col-md-5 col-sm-12">
                                    <input class="form-control form-control-solid" name="validityperiod" id="validityperiod" type="text" value="<?= $user->user_validity_period ?>" placeholder="<?= lang('Admin.validity_period') ?>" />
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-12">
                                    <label class="col-form-label"><?= lang('Admin.mobile_acces') ?></label>
                                </div>
                                <div class="col-lg-1 col-md-1 col-sm-12">
                                    <label class="checkbox newcheckb">
                                        <input <?= ($user->user_is_mobile_acces) ? 'checked':'' ?>  type="checkbox" name="mobile_acces" id="mobile_acces" class="checkbox" value="1" />
                                        <span></span></label> 
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="form-group row">
                                <div class="col-lg-3 col-md-3 col-sm-12">
                                    <label class="col-form-label"><?= lang('Admin.user_is_valid_user') ?></label>
                                </div>
                                <div class="col-lg-5 col-md-5 col-sm-12">
                                    <label class="checkbox newcheckb">
                                        <input <?= ($user->user_is_valid_user) ? 'checked':'' ?>  type="checkbox" name="user_is_valid_user" id="user_is_valid_user" class="checkbox" value="1" />
                                        <span></span>
                                    </label> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade show" id="infocontact" role="tabpanel" aria-labelledby="home-tab-1">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="form-group row">
                                <div class="col-lg-3 col-md-3 col-sm-12">
                                    <label class="col-form-label"><?= lang('Admin.address') ?></label>
                                </div>
                                <div class="col-lg-9 col-md-9 col-sm-12">

                                    <input class="form-control form-control-solid" id="address" name="address" type="text" value="<?= $user->user_address ?>" placeholder="<?= lang('Admin.address') ?>" />
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="form-group row">
                                <div class="col-lg-3 col-md-3 col-sm-12">
                                    <label class="col-form-label"><?= lang('Admin.zip_code') ?></label>
                                </div>
                                <div class="col-lg-5 col-md-5 col-sm-12">
                                    <input class="form-control form-control-solid" name="zipcode" id="zipcode" type="text" value="<?= $user->user_zip_code ?>" placeholder="<?= lang('Admin.zip_code') ?>" />
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="form-group row">
                                <div class="col-lg-3 col-md-3 col-sm-12">
                                    <label class="col-form-label"><?= lang('Admin.country') ?></label>
                                </div>
                                <div class="col-lg-5 col-md-5 col-sm-12">
                                    <select data-placeholder="<?= lang('Admin.country') ?>" name = "country" id="country" class="form-control form-control-solid" style="width: 100%;">
                                        <option selected="" value=""></option>
                                        <?php foreach ($country as $rows) { ?>
                                            <option <?= ($user->user_country_id == $rows->country_id) ? 'selected':'' ?> class="option_color" value="<?php echo $rows->country_id; ?>"><?php echo $rows->country_code . ' - ' . $rows->country_designation; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="form-group row">
                                <div class="col-lg-3 col-md-3 col-sm-12">
                                    <label class="col-form-label"><?= lang('Admin.city') ?></label>
                                </div>
                                <div class="col-lg-5 col-md-5 col-sm-12">
                                    <input class="form-control form-control-solid" name="city" id="city" type="text" value="<?= $user->user_city ?>" placeholder="<?= lang('Admin.city') ?>" />
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="form-group row">
                                <div class="col-lg-3 col-md-3 col-sm-12">
                                    <label class="col-form-label"><?= lang('Admin.phone_number') ?></label>
                                </div>
                                <div class="col-lg-5 col-md-5 col-sm-12">
                                    <input class="form-control form-control-solid" name="phoneno" id="phoneno" type="text" value="<?= $user->user_phone_number ?>" placeholder="<?= lang('Admin.phone_number') ?>" />
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="form-group row">
                                <div class="col-lg-3 col-md-3 col-sm-12">
                                    <label class="col-form-label"><?= lang('Admin.email') ?></label>
                                </div>
                                <div class="col-lg-9 col-md-9 col-sm-12">
                                    <input class="form-control form-control-solid" id="email" name="email" type="text" value="<?= $user->user_email ?>" placeholder="<?= lang('Admin.email') ?>" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade show" id="acsector" role="tabpanel" aria-labelledby="home-tab-1">
                    <div style=" height: 380px; overflow: auto;" class="table_two">
                        <!--begin: Datatable-->
                        <table class="dt-responsive table table-striped table-hover" id="kt_datatable2" style="margin-top: 13px !important">
                            <thead class="border_bottom">
                                <tr>
                                    <th style="width:100px;" class="text-center"><input onchange="check_all_2(this)" type="checkbox" /></th>
                                    <th><?= lang('Admin.code') ?></th>
                                    <th><?= lang('Admin.designation') ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if ($sector) {
                                    foreach ($sector as $row) {
                                        ?>
                                        <tr>
                                            <td class="text-center"><input <?= (is_null($row->user_sector_user_id)) ? '':'checked' ?> id="ck_sector_<?= $row->sector_id ?>" onchange ="filter_branch(this)" type="checkbox" name="sectors[]"  value="<?= $row->sector_id ?>" /></td>
                                            <td><?= $row->sector_code ?></td>
                                            <td><?= $row->sector_designation ?></td>
                                        </tr>
                                        <?php
                                    }
                                }
                                ?>
                            </tbody>
                        </table>

                    </div>
                </div>
                <div class="tab-pane fade show" id="acbranch" role="tabpanel" aria-labelledby="home-tab-1">
                    <div div style=" height: 380px; overflow: auto;" class="table_two">
                        <!--begin: Datatable-->
                        <table class="dt-responsive table table-striped table-hover" id="kt_datatable3" style="margin-top: 13px !important">
                            <thead class="border_bottom">
                                <tr>
                                    <th style="width:100px;" class="text-center"><input onchange="check_all_3(this)" type="checkbox" /></th>
                                    <th><?= lang('Admin.code') ?></th>
                                    <th><?= lang('Admin.designation') ?></th>
                                    <th><?= lang('Admin.sector') ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if ($branch) {
                                    foreach ($branch as $row) {
                                        ?>
                                        <tr>
                                            <td class="text-center"><input <?= (is_null($row->user_branch_user_id)) ? '':'checked' ?> id="ck_branch_<?= $row->branch_id ?>" onchange ="filter_cost_center(this)" data-sector ="<?= $row->branch_sector_id ?>" class="ck_branch" type="checkbox" name="branchs[]" value="<?= $row->branch_id ?>" /></td>
                                            <td><?= $row->branch_code ?></td>
                                            <td><?= $row->branch_designation ?></td>
                                            <td><?= $row->sector_code ?></td>
                                        </tr>
                                        <?php
                                    }
                                }
                                ?>
                            </tbody>
                        </table>

                    </div>
                </div>
                <div class="tab-pane fade show" id="accostcenter" role="tabpanel" aria-labelledby="home-tab-1">
                    <div div style=" height: 380px; overflow: auto;" class="table_two">
                        <!--begin: Datatable-->
                        <table class="dt-responsive table table-striped table-hover"  id="kt_datatable5" style="margin-top: 13px !important">
                            <thead class="border_bottom">

                                <tr>
                                    <th style="width:100px;" class="text-center"><input onchange="check_all_5(this)" type="checkbox" /></th>
                                    <th><?= lang('Admin.code') ?></th>
                                    <th><?= lang('Admin.designation') ?></th>
                                    <th><?= lang('Admin.branch') ?></th>
                                    <th><?= lang('Admin.sector') ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if ($cost_center) {
                                    foreach ($cost_center as $row) {
                                        ?>
                                        <tr>
                                            <td class="text-center"><input <?= (is_null($row->user_cost_center_cost_center_id)) ? '':'checked' ?> data-branch ="<?= $row->cost_center_branch_id ?>" data-sector ="<?= $row->sector_id ?>" class="ck_cost_center" type="checkbox" name="cost_centers[]" value="<?= $row->cost_center_id ?>" /></td>
                                            <td><?= $row->cost_center_code ?></td>
                                            <td><?= $row->cost_center_designation ?></td>
                                            <td><?= $row->branch_code ?></td>
                                            <td><?= $row->sector_code ?></td>
                                        </tr>
                                        <?php
                                    }
                                }
                                ?>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary mr-2"><?= lang('Admin.save') ?></button>
            <button type="button" data-dismiss="modal" class="btn data-dismiss btn-danger"><?= lang('Admin.cancel') ?></button>
        </div>
    </div>
</form>
<style>
    .checkbox {
        margin: auto !important;
    }
</style>
<script>
    $(document).ready(function () {
        $('#frm_user_account select').select2({allowClear: true});
        filter_branch();
        filter_cost_center();
    });
    
    function check_all_2(me) {
        if ($(me).is(':checked')) {
            $('#kt_datatable2 input[name^="sectors"]').prop('checked', true);
        } else {
            $('#kt_datatable2 input[name^="sectors"]').prop('checked', false);
        }
        filter_branch();
        filter_cost_center();
    }

    function check_all_3(me) {
        if ($(me).is(':checked')) {
            $('#kt_datatable3 input[name^="branchs"]').prop('checked', true);
        } else {
            $('#kt_datatable3 input[name^="branchs"]').prop('checked', false);
        }
        filter_branch();
        filter_cost_center();
    }

    function check_all_5(me) {
        if ($(me).is(':checked')) {
            $('#kt_datatable5 input[name^="cost_centers"]').prop('checked', true);
        } else {
            $('#kt_datatable5 input[name^="cost_centers"]').prop('checked', false);
        }
        filter_branch();
        filter_cost_center();
    }

    function filter_branch() {
        $('.ck_branch').each(function () {
            sector = $(this).attr('data-sector');
            if ($('#ck_sector_' + sector).is(':checked')) {
                $(this).parents('tr').show();
            } else {
                $(this).prop('checked', false).parents('tr').hide();
            }
        });
        $('.ck_cost_center').each(function () {
            sector = $(this).attr('data-sector');
            if ($('#ck_sector_' + sector).is(':checked')) {
                $(this).parents('tr').show();
            } else {
                $(this).prop('checked', false).parents('tr').hide();
            }
        });
    }

    function filter_cost_center() {
        $('.ck_cost_center').each(function () {
            branch = $(this).attr('data-branch');
            if ($('#ck_branch_' + branch).is(':checked')) {
                $(this).parents('tr').show();
            } else {
                $(this).prop('checked', false).parents('tr').hide();
            }
        });
    }
    
    var jvalidate = $("#frm_user_account").validate({
        ignore: [],
        rules: {
            'code': {
                required: true,
                minlength: 2,
                maxlength: 20,
                remote: {
                    url: "<?php echo base_url('administration/user_accounts_is_exists'); ?>",
                    type: "post",
                    data: {
                        id: '<?= $user->user_id ?>',
                        code: function () {
                            return $("#code").val();
                        }
                    }
                }
            },
            'designation': {
                required: true
            },
            'profile': {
                required: true
            },
            'language': {
                required: true
            },

            'validityperiod': {
                number: true
            },
            'email': {
                email: true
            },
            'password': "required",
            'cpassword': {
                equalTo: "#password",
                required: true
            }
        },
        messages: {
            'code': {
                remote: '<?= lang('Admin.code_already_exists') ?>'
            },
        },
        submitHandler: function (form) {
            $.ajax({
                data: $(form).serialize(),
                type: "post",
                dataType: "JSON",
                url: "<?php echo base_url('administration/user_accounts_update'); ?>",
                success: function (result) {
                    switch ($.trim(result.status)) {
                        case "success":
                            notify("<?= lang('Admin.succes_operation') ?>",'success');
                            $(this).parents('.card-footer').find('.data-dismiss').trigger('click');
                            window['<?= $callbackfct ?>'](result);
                            break;
                        default :
                            notify("<?= lang('Parametres.fail_operation') ?>",'danger');
                            break;
                    }
                }
            });
        }
    });
</script>