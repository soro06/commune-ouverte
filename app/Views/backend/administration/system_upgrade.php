<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Subheader-->
    <div class="subheader py-2 py-lg-6 subheader-solid" id="kt_subheader">
        <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <div class="d-flex align-items-center flex-wrap mr-1">
                <div class="d-flex align-items-baseline flex-wrap mr-5">
                    <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                        <li class="breadcrumb-item"><a class="text-muted"><?= lang('Admin.adminitration') ?></a></li>
                        <li class="breadcrumb-item active"><a class="text-muted"><?= lang('Admin.sys_update') ?></a></li>
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
                    <div class="card-title"><h3 class="card-label"><?= lang('Admin.sys_update') ?></h3></div>
                    <div class="card-toolbar">
                    </div>
                </div>
                <div class="card-body">
                    <div id="main_content" style="display: none;" class="d-flex align-items-center justify-content-between p-4 flex-lg-wrap flex-xl-nowrap">
                    <div class="d-flex flex-column mr-5">
                        <a href="#" class="h4 text-dark text-hover-primary mb-5">
                            <?= lang('Admin.maintexupgrator') ?>
                        </a>
                        <p conf_upload_fileclass="text-dark-50">
                            <?= lang('Admin.urusingmaint') ?> <?php  echo $current_version ?>
                        </p>
                        <p class="text-dark-50">
                            <?= lang('Admin.toupdlic') ?> <br/> <a href="<?php echo base_url('setup/license_upgrade') ?>"><?= lang('Admin.pleaseclikici') ?></a> .
                        </p>
                        <hr/>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="form-group row">
                                    <div class="col-md-5 col-sm-12">
                                        <label class="col-form-label"><?= lang('Admin.updfile') ?></label>
                                    </div>
                                    <div class="col-md-7 col-sm-12">
                                        <form action="<?php echo base_url(); ?>admin/system_update_upload_upgrator" method="POST" class="form-horizontal" id="frm_upgrador" enctype="multipart/form-data">
                                            <input  class="form-control form-control-solid form-control-lg" id="upgrator" name="upgrator" type="file" value="" placeholder="" />
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="ml-6 ml-lg-0 ml-xxl-6 flex-shrink-0">
                        <a href="javascript:;" onclick="conf_upload_file()"  class="btn font-weight-bolder text-uppercase btn-light-warning py-4 px-6">
                            <?= lang('Admin.updatnow') ?>
                        </a>
                    </div>
                </div>
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
