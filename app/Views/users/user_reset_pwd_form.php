<form id="frm_pwd_reset" name="frm_pwd_reset" method="POST">
    <div class="card card-custom">
        <div class="card-header">
            <div class="card-title">
                <span class="card-icon"> <i class="fa fa fa-cubes text-primary"></i>  </span>
                <h3 class="card-label"><?= lang('Login.resetpwd') ?></h3>
            </div>
            <div class="card-toolbar">
                <a href="javascript:;" data-dismiss="modal" class="btn btn-sm btn-icon btn-light-danger">
                    <i class="fa fa-times"></i>
                </a>
            </div>
        </div>
        <div class="card-body">
            <div class="row">

                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="form-group row">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label class="col-form-label"><?= lang('Login.old_password') ?></label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <input class="form-control form-control-solid colours" id="old_pwd" name="old_pwd" type="password" placeholder="<?= lang('Login.old_password') ?>" />
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="form-group row">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label class="col-form-label"><?= lang('Login.new_password') ?></label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <input class="form-control form-control-solid colours" name="new_pwd" id="new_pwd" type="password" placeholder="<?= lang('Login.new_password') ?>" />
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="form-group row">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label class="col-form-label"><?= lang('Login.confirm_password') ?></label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <input class="form-control form-control-solid colours" name="conf_pwd" id="conf_pwd" type="password" placeholder="<?= lang('Login.confirm_password') ?>" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary mr-2"><?= lang('Login.save') ?></button>
            <button type="button" data-dismiss="modal" class="btn data-dismiss btn-danger"><?= lang('Login.cancel') ?></button>
        </div>
    </div>
</form>

<script type="text/javascript">
    $(document).ready(function () {

    });
    var jvalidate = $("#frm_pwd_reset").validate({
        ignore: [],
        rules: {
            'old_pwd': {
                required: {
                    required: true,
                    minlength: 5
                },
                remote: {
                    url: "<?= base_url('users/check_old_pwd'); ?>",
                    type: "post",
                    data: {
                        pwd: function () {
                            return $("#old_pwd").val();
                        }
                    }
                }
            },
            'new_pwd': "required",
            'conf_pwd': {
                equalTo: "#new_pwd",
                required: true,
                minlength: 5
            }
        },
        messages: {
            'old_pwd': {
                remote: '<?= lang('Login.password_incorrect') ?>'
            },
        },
        submitHandler: function (form) {
            $.ajax({
                data: $(form).serialize(),
                type: "post",
                dataType: "JSON",
                url: "<?php echo base_url('users/user_account_setting_pwd_save'); ?>",
                success: function (result) {
                    switch ($.trim(result.status)) {
                        case "success":
                            notify("<?= lang('Parametres.succes_operation') ?>",'success');
                            $('.data-dismiss').trigger('click');
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








