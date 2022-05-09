<form id="frm_user_account" name="frm_user_account" method="POST">
    <div class="card card-custom">
        <div class="card-header">
            <div class="card-title">
                <span class="card-icon"> <i class="fa fa fa-cubes text-primary"></i>  </span>
                <h3 class="card-label"><?= lang('Admin.pwdresetlst') ?></h3>
            </div>
            <div class="card-toolbar">
                <a href="javascript:;" data-dismiss="modal" class="btn btn-sm btn-icon btn-light-danger">
                    <i class="fa fa-times"></i>
                </a>
            </div>
        </div>
        <div class="card-body">
            <table class="datatable-table table table-hover table-striped table-bordered kt_datatable dt-responsive" id="dt_pwd_reset" style="margin-top: 13px !important">
                <thead>
                    <tr>
                        <th style="width: 30%;"><?= lang('Admin.code') ?></th>
                        <th><?= lang('Admin.name') ?></th> 
                        <th class="none"><?= lang('Admin.phone_number') ?></th>
                        <th class="none"><?= lang('Admin.email') ?></th>
                        <th class="none"><?= lang('Admin.periodvalidity') ?></th>
                        <th class="none"><?= lang('Admin.accesmobile') ?></th>
                        <th class="none"><?= lang('Admin.statut') ?></th>
                        <th class="none text-center" ><?= lang('Admin.actions') ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 1;
                    foreach ($dataset as $row) {
                        ?>
                        <tr>
                            <td style="width: 30%;"><?= $row->user_code; ?></td>
                            <td><?= $row->user_designation; ?></td>
                            <td><?= $row->user_phone_number; ?></td>
                            <td><?= $row->user_email; ?></td>
                            <td><?= $row->user_validity_period; ?></td>
                            <td><?= ($row->user_is_mobile_acces) ? lang('Admin.yes') : lang('Admin.no'); ?></td>
                            <td class="text-center">
                                <?php
                                if ($row->user_is_valid_user == 1)
                                    echo "<span class='label label-danger label-pill label-inline mr-2'>" . lang('Admin.deactivate') . "</span>";
                                else
                                    echo "<span class='label label-success label-pill label-inline mr-2'>" . lang('Admin.activate') . "</span>";
                                ?>
                            </td>
                            <td class="text-center" style="width: 10%;">
                                <div class="input-group">
                                    <input type="text" id="inpt_pwd_<?= $row->user_id; ?>" class="form-control" placeholder="<?= lang('Admin.password') ?> ...">
                                    <div class="input-group-append">
                                        <button data-id="<?= $row->user_id; ?>" onclick="confirm_reset_pwd_row(this)" class="btn btn-xs btn-primary" type="button"><?= lang('Admin.ok') ?></button>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
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
        $('#dt_pwd_reset').dataTable({
            'columnDefs': [{'orderable': false, 'targets': [0, -1], 'width': '1%'}],
            "language": {"url": "<?= site_url('assets/plugins/custom/datatables/language.' . $lang . '.js') ?>"},
            "dom": '<"top"f>rt<"bottom"ilp><"clear">'
        });
    });
    
    function confirm_reset_pwd_row(me) {
        Swal.fire({
            title: '<?= lang('Admin.are_you_sure') ?>',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            cancelButtonText: '<?= lang('Admin.cancel') ?>',
            confirmButtonText: '<?= lang('Admin.continuer') ?>'
        }).then((result) => {
            if (result.isConfirmed) {
                reset_pwd_row(me);
            }
        });
    }

    function reset_pwd_row(me) {
        $.ajax({
            type: "POST",
            url: '<?= base_url('administration/user_accounts_pwd_reset_save') ?>',
            data: {
                id: $(me).attr('data-id'),
                pwd: $('#inpt_pwd_' + $(me).attr('data-id')).val()
            },
            dataType: "JSON",
            success: function (result) {
                switch ($.trim(result.status)) {
                    case "success":
                        notify("<?= lang('Admin.succes_operation') ?>", 'success');
                        var oTable = $("#dt_pwd_reset").DataTable();
                        oTable.row($(me).parents("tr")).remove().draw();
                        break;
                    default :
                        notify("<?= lang('Admin.fail_operation') ?>", 'danger');
                        break;
                }
            }
        });
    }
    
</script>