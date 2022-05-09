<form id="frm_profils" name="frm_profils" method="POST" action="<?= base_url('users/menu_favoris_save') ?>">
    <div class="card card-custom">
        <div class="card-header">
            <div class="card-title">
                <span class="card-icon"> <i class="fa fa fa-cubes text-primary"></i>  </span>
                <h3 class="card-label"><?= lang('Admin.favoris') ?></h3>
            </div>
            <div class="card-toolbar">
                <a href="javascript:;" data-dismiss="modal" class="btn btn-sm btn-icon btn-light-danger">
                    <i class="fa fa-times"></i>
                </a>
            </div>
        </div>
        <div class="card-body">
            <div style="height: 300px; overflow: auto;">
                <table class="table table-hover table-striped table-bordered" id="dt_edit" style="margin-top: 13px !important">
                    <thead class="border_bottom">
                        <tr>
                            <th style="width: 50px;" class="text-center">#</th>
                            <th ><?= lang('Admin.actions') ?></th>
                            <th ><?= lang('Admin.designation') ?></th>
                            <th class="text-center"></th>
                        </tr>
                    </thead>
                    <tbody class="border_bottom">
                        <?php
                        if (isset($menu)) {
                            $i = 1;
                            foreach ($menu as $rows) {
                                ?>
                                <tr>
                                    <td class="text-center"><?= $i++ ?></td>
                                    <td><?= $rows->designation ?></td>
                                    <td><input <?= is_null($rows->user_menu_favoris_created_date) ? 'disabled':'' ?> type="text" name="<?= is_null($rows->user_menu_favoris_created_date) ? 'title[]':'' ?>" class="title"  value="<?= $rows->user_menu_title ?>"/></td>
                                    <td style="width: 100px;"><input type="checkbox" class="checkbox" onchange="ed_activate(this)" name="menu[]" data-id="<?= $rows->menu_id ?>" <?= is_null($rows->user_menu_favoris_created_date) ? '':'checked' ?> id="ed_menu_<?= $rows->menu_id ?>" value="<?= $rows->menu_id ?>" /></td>
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
    function ed_activate(me){
        if($(me).is(':checked')){
            $(me).parents('tr').find('.title').attr('name', 'title[]').prop('disabled', false);
        }else{
            $(me).parents('tr').find('.title').removeAttr('name').prop('disabled', true).val('');
        }
    }

</script>