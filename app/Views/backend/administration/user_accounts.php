<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Subheader-->
    <div class="subheader py-2 py-lg-6 subheader-solid" id="kt_subheader">
        <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <div class="d-flex align-items-center flex-wrap mr-1">
                <div class="d-flex align-items-baseline flex-wrap mr-5">
                    <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                        <li class="breadcrumb-item"><a class="text-muted"><?= lang('Admin.adminitration') ?></a></li>
                        <li class="breadcrumb-item active"><a class="text-muted"><?= lang('Admin.user_accounts') ?></a></li>
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
                    <div class="card-title"><h3 class="card-label"><?= lang('Admin.user_accounts') ?></h3></div>
                    <div class="card-toolbar">
                        <a onclick="pwdresetlst();" href="javascript:;" class="btn btn-sm btn-warning font-weight-bolder mr-3"><i class="la la-lock"></i><?= lang('Admin.pwdresetlst') ?></a>
                        <a onclick="add_user();" href="javascript:;" class="btn btn-sm btn-primary font-weight-bolder mr-3"><i class="la la-plus"></i><?= lang('Admin.add') ?></a>
                    </div>
                </div>
                <div class="card-body">
                    <table class="datatable-table table table-hover table-striped table-bordered kt_datatable dt-responsive" id="dt_liste" style="margin-top: 13px !important">
                        <thead>
                            <tr>
                                <th style="width: 50px;" class="text-center">#</th>
                                <th><?= lang('Admin.code') ?></th>
                                <th><?= lang('Admin.name') ?></th> 
                                <th class="none"><?= lang('Admin.language') ?></th>
                                <th class="none"><?= lang('Admin.address') ?></th>
                                <th class="none"><?= lang('Admin.zip_code') ?></th>
                                <th class="none"><?= lang('Admin.country') ?></th>
                                <th class="none"><?= lang('Admin.city') ?></th>
                                <th><?= lang('Admin.phone_number') ?></th>
                                <th><?= lang('Admin.email') ?></th>
                                <th class="none"><?= lang('Admin.periodvalidity') ?></th>
                                <th class="none"><?= lang('Admin.accesmobile') ?></th>
                                <th class="text-center"><?= lang('Admin.statut') ?></th>
                                <th class="all text-center" style="width: 100px;"><?= lang('Admin.actions') ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $i = 1;
                            foreach ($dataset as $row) { ?>
                                <tr>
                                    <td style="width: 50px;" class="text-center"><?= $i++; ?></td>
                                    <td><?= $row->user_code; ?></td>
                                    <td><?= $row->user_designation; ?></td>
                                    <td><?= $row->user_language; ?></td>
                                    <td><?= $row->user_address; ?></td>
                                    <td><?= $row->user_zip_code; ?></td>
                                    <td><?= $row->country_designation; ?></td>
                                    <td><?= $row->user_city; ?></td>
                                    <td><?= $row->user_phone_number; ?></td>
                                    <td><?= $row->user_email; ?></td>
                                    <td><?= $row->user_validity_period ; ?></td>
                                    <td><?= ($row->user_is_mobile_acces) ? lang('Admin.yes'):lang('Admin.no'); ?></td>
                                    <td class="text-center">
                                        <?php
                                            if ($row->user_is_valid_user == 1)
                                                echo "<span class='label label-danger label-pill label-inline mr-2'>".lang('Admin.deactivate')."</span>";
                                            else
                                                echo "<span class='label label-success label-pill label-inline mr-2'>".lang('Admin.activate')."</span>";
                                        ?>
                                    </td>
                                    <td class="text-center" style="width: 100px;">
                                        <a id="btn_edit_<?= $row->user_id; ?>" href="javascript:;" title="<?= lang('Admin.edit') ?>" onclick="edit_row(<?= $row->user_id; ?>)" class="btn btn-icon btn-outline-primary btn-xs"><i class="fa fa-edit"></i></a>
                                        <a id="btn_del_<?= $row->user_id; ?>" data-id="<?= $row->user_id; ?>" href="javascript:;" title="<?= lang('Admin.delete') ?>" onclick="confirm_delete_row(this)" class="btn hide btn-icon btn-outline-danger btn-xs"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
</div>
<!--end::Content-->
<script type="text/javascript">
    $(document).ready(function () {
    });
    
    function pwdresetlst() {
        get_form_by_ajax('<?= base_url('administration/user_accounts_pwd_reset') ?>', 'lg', 'callbackfct=refrech_list');
    }
    
    function add_user() {
        get_form_by_ajax('<?= base_url('administration/user_accounts_new') ?>', 'lg', 'callbackfct=refrech_list');
    }
    
    function edit_row(id) {
        get_form_by_ajax('<?= base_url('administration/user_accounts_edit') ?>', 'lg', 'callbackfct=refrech_list&id=' + id);
    }

    function refrech_list() {
        window.location.reload();
    }
    
    function confirm_delete_row(me) {
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
                delete_row(me);
            }
        });
    }

    function delete_row(me) {
        $.ajax({
            type: "POST",
            url: '<?= base_url('administration/user_accounts_delete') ?>',
            data: {
                id: $(me).attr('data-id')
            },
            dataType: "JSON",
            success: function (result) {
                switch ($.trim(result.status)) {
                    case "success":
                        notify("<?= lang('Admin.succes_operation') ?>", 'success');
                        var oTable = $("#dt_liste").DataTable();
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
