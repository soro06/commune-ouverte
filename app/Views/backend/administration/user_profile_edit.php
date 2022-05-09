<form id="frm_profils" name="frm_profils" method="POST">
    <input type="hidden" name="id" value="<?= $profil->user_profile_id ?>" />
    <div class="card card-custom">
        <div class="card-header">
            <div class="card-title">
                <span class="card-icon"> <i class="fa fa fa-cubes text-primary"></i>  </span>
                <h3 class="card-label"><?= lang('Admin.profils') ?></h3>
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
                        <div class="col-lg-3 col-md-3 col-sm-12">
                            <label class="col-form-label"><?= lang('Parametres.code') ?></label>
                        </div>
                        <div class="col-lg-5 col-md-5 col-sm-12">
                            <input class="form-control form-control-solid colours" name="code" id="code" type="text" value="<?= $profil->user_profile_code; ?>" placeholder="<?= lang('Parametres.code') ?>"/>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="form-group row">
                        <div class="col-lg-3 col-md-3 col-sm-12">
                            <label class="col-form-label"><?= lang('Parametres.designation') ?></label>
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-12">
                            <input class="form-control form-control-solid colours" name="designation" type="text" value="<?= $profil->user_profile_designation; ?>" placeholder="<?= lang('Parametres.designation') ?>">
                        </div>
                    </div>
                </div>
            </div>
            <div style="height: 300px; overflow: auto;">
                <table class="table table-hover table-striped table-bordered" id="dt_edit" style="margin-top: 13px !important">
                    <thead class="border_bottom">

                        <tr>
                            <th style="width: 50px;" class="text-center">#</th>
                            <th ><?= lang('Admin.designation') ?></th>
                            <th class="text-center"><?= lang('Admin.view') ?></th>
                            <th class="text-center"><?= lang('Admin.new') ?></th>
                            <th class="text-center"><?= lang('Admin.edit') ?></th>
                            <th class="text-center"><?= lang('Admin.delete') ?></th>
                        </tr>
                    </thead>
                    <tbody class="border_bottom">
                        <?php
                        if (isset($menu)) {
                            foreach ($menu as $rows) {
                                ?>
                                <tr>
                                    <td style="width: 100px;"><input <?= is_null($rows->mck) ? '':'checked' ?> type="checkbox" class="checkbox" onchange="ed_activate_action(this)" name="menu[]" data-id="<?= $rows->menu_id ?>" id="ed_menu_<?= $rows->menu_id ?>" value="<?= $rows->list_id ?>" /></td>
                                    <td><input type="hidden" id="del_menu_<?= $rows->menu_id ?>" value="<?= $rows->menu_id ?>"/><?= $rows->designation ?></td>
                                    <td class="text-center"><input type="hidden" class="p_input p_view" id="ed_menu_p_view_<?= $rows->menu_id ?>" value="0"/><input <?= ($rows->mck_view == 1) ? 'checked':'' ?> <?= is_null($rows->mck) ? 'disabled':'' ?> onchange="ed_set_p_value(this)" type="checkbox" class="ck_action checkbox view"  data-target="#ed_menu_p_view_<?= $rows->menu_id ?>" id="ed_menu_view_<?= $rows->menu_id ?>" /></td>
                                    <td class="text-center"><input type="hidden" class="p_input p_new" id="ed_menu_p_new_<?= $rows->menu_id ?>" value="0"/><input <?= ($rows->mck_add == 1) ? 'checked':'' ?> <?= is_null($rows->mck) ? 'disabled':'' ?> onchange="ed_set_p_value(this)" type="checkbox" class="ck_action checkbox new" data-target="#ed_menu_p_new_<?= $rows->menu_id ?>" id="ed_menu_new_<?= $rows->menu_id ?>" /></td>
                                    <td class="text-center"><input type="hidden" class="p_input p_edit" id="ed_menu_p_edit_<?= $rows->menu_id ?>" value="0"/><input <?= ($rows->mck_edit == 1) ? 'checked':'' ?> <?= is_null($rows->mck) ? 'disabled':'' ?> onchange="ed_set_p_value(this)" type="checkbox" class="ck_action checkbox edit" data-target="#ed_menu_p_edit_<?= $rows->menu_id ?>" id="ed_menu_edit_<?= $rows->menu_id ?>" /></td>
                                    <td class="text-center"><input type="hidden" class="p_input p_delete" id="ed_menu_p_delete_<?= $rows->menu_id ?>" value="0"/><input <?= ($rows->mck_delete == 1) ? 'checked':'' ?> <?= is_null($rows->mck) ? 'disabled':'' ?> onchange="ed_set_p_value(this)" type="checkbox" class="ck_action checkbox delete" data-target="#ed_menu_p_delete_<?= $rows->menu_id ?>" id="ed_menu_delete_<?= $rows->menu_id ?>" /></td>
                                </tr>
                                <?php
                            }
                        }
                        ?>
                    </tbody>
                </table>
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

    function activate_action(me) {
        if ($(me).is(':checked')) {
            var tr = $(me).parents('tr');
            var id = $(me).attr('data-id');
            $(tr).find('.ck_action').prop('disabled', false);
            $('#menu_p_view_' + id).attr('name', 'action_view[]');
            $('#menu_p_new_' + id).attr('name', 'action_new[]');
            $('#menu_p_edit_' + id).attr('name', 'action_edit[]');
            $('#menu_p_delete_' + id).attr('name', 'action_delete[]');
        } else {
            var tr = $(me).parents('tr');
            var id = $(me).attr('data-id');
            $(tr).find('.ck_action').prop('checked', false).prop('disabled', true);
            $(tr).find('.p_input').removeAttr('name');
        }
    }

    function set_p_value(me) {
        if ($(me).is(':checked')) {
            $($(me).attr('data-target')).val(1);
        } else {
            $($(me).attr('data-target')).val(0);
        }
    }

    function ed_activate_action(me) {
        if ($(me).is(':checked')) {
            var tr = $(me).parents('tr');
            var id = $(me).attr('data-id');
            $(tr).find('.ck_action').prop('disabled', false);
            $('#ed_menu_p_view_' + id).attr('name', 'action_view[]');
            $('#ed_menu_p_new_' + id).attr('name', 'action_new[]');
            $('#ed_menu_p_edit_' + id).attr('name', 'action_edit[]');
            $('#ed_menu_p_delete_' + id).attr('name', 'action_delete[]');
            $('#del_menu_' + id).removeAttr('name');
        } else {
            var tr = $(me).parents('tr');
            var id = $(me).attr('data-id');
            $(tr).find('.ck_action').prop('checked', false).prop('disabled', true);
            $(tr).find('.p_input').removeAttr('name');
            $('#del_menu_' + id).attr('name', 'del_profil[]');
        }
    }

    function ed_set_p_value(me) {
        if ($(me).is(':checked')) {
            $($(me).attr('data-target')).val(1);
        } else {
            $($(me).attr('data-target')).val(0);
        }
    }

    var jvalidate = $("#frm_profils").validate({
        ignore: [],
        rules: {
            'code': {
                required: true,
                remote: {
                    url: "<?php echo base_url('administration/user_profile_is_exists'); ?>",
                    type: "post",
                    data: {
                        code: function () {
                            return $("#code").val();
                        },
                        id: '<?= $profil->user_profile_id; ?>'
                    }
                }
            },
            'designation': {
                required: true
            },
        },
        messages: {
            'code': {
                remote: '<?= lang('Admin.code_already_exists') ?>'
            }
        },
        submitHandler: function (form) {
            $.ajax({
                data: $(form).serialize(),
                type: "post",
                dataType: "JSON",
                url: "<?php echo base_url('administration/user_profile_update'); ?>",
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