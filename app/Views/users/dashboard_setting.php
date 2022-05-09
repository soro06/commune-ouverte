<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Subheader-->
    <div class="subheader py-2 py-lg-6 subheader-solid" id="kt_subheader">
        <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <div class="d-flex align-items-center flex-wrap mr-1">
                <div class="d-flex align-items-baseline flex-wrap mr-5">
                    <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                        <li class="breadcrumb-item"><a class="text-muted"><?= lang('Login.parameter') ?></a></li>
                        <li class="breadcrumb-item active"><a class="text-muted"><?= lang('Login.dashboard_setting') ?></a></li>
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
            <form id="frm_dashbord" name="frm_dashbord" method="POST" action='<?= base_url('users/dashboard_setting_save') ?>' enctype="multipart/form-data">
                <div class="card card-custom card-sticky" id="kt_page_sticky_card">
                    <div class="card-header">
                        <div class="card-title"><h3 class="card-label"><?= lang('Login.dashboard_setting') ?></h3></div>
                        <div class="card-toolbar"></div>
                    </div>
                    <div class="card-body">
                        <table class="datatable-table table table-hover table-striped table-bordered kt_datatable dt-responsive" id="dt_liste" style="margin-top: 13px !important">
                            <thead class="border_bottom">
                                <tr>
                                    <th style="width: 100px;" class="text-center">#</th>
                                    <th><?= lang('Login.designation') ?></th>
                                    <th style="width: 200px;" class="all text-center"><?= lang('Login.actions') ?></th>
                                </tr>
                            </thead>
                            <tbody class="border_bottom">
                                <tr>
                                    <td style="width: 100px;" class="text-center">1</td>
                                    <td><?= lang('Login.workrequest') ?></td>
                                    <td style="width: 200px;">
                                        <div class="checkbox-inline">
                                            <label style="margin:auto;" class="checkbox checkbox-lg">
                                                <input type="checkbox" value="1" <?php echo ($user->user_dashbord_display_raw_1) ? 'checked' : '' ?>  name="user_dashbord_display_raw_1">
                                                <span></span></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">2</td>
                                    <td><?= lang('Login.workorder') ?></td>
                                    <td style="width: 200px;">
                                        <div class="checkbox-inline">
                                            <label style="margin:auto;" class="checkbox checkbox-lg">
                                                <input type="checkbox" value="1" <?php echo ($user->user_dashbord_display_raw_2) ? 'checked' : '' ?>  name="user_dashbord_display_raw_2">
                                                <span></span></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">3</td>
                                    <td><?= lang('Login.efficiency_and_preventive_rate') ?></td>
                                    <td style="width: 200px;">
                                        <div class="checkbox-inline">
                                            <label style="margin:auto;" class="checkbox checkbox-lg">
                                                <input type="checkbox" value="1" <?php echo ($user->user_dashbord_display_raw_3) ? 'checked' : '' ?>  name="user_dashbord_display_raw_3">
                                                <span></span></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">4</td>
                                    <td><?= lang('Login.downtime_and_performance_result') ?></td>
                                    <td style="width: 200px;">
                                        <div class="checkbox-inline">
                                            <label style="margin:auto;" class="checkbox checkbox-lg">
                                                <input type="checkbox" value="1" <?php echo ($user->user_dashbord_display_raw_4) ? 'checked' : '' ?>  name="user_dashbord_display_raw_4">
                                                <span></span></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">5</td>
                                    <td><?= lang('Login.cost_by_cost_type_and_cost_by_intervention_type') ?></td>
                                    <td style="width: 200px;">
                                        <div class="checkbox-inline">
                                            <label style="margin:auto;" class="checkbox checkbox-lg">
                                                <input type="checkbox" value="1" <?php echo ($user->user_dashbord_display_raw_5) ? 'checked' : '' ?>  name="user_dashbord_display_raw_5">
                                                <span></span></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">6</td>
                                    <td><?= lang('Login.maintenance_cost_trend') ?></td>
                                    <td style="width: 200px;">
                                        <div class="checkbox-inline">
                                            <label style="margin:auto;" class="checkbox checkbox-lg">
                                                <input type="checkbox" value="1" <?php echo ($user->user_dashbord_display_raw_6) ? 'checked' : '' ?>  name="user_dashbord_display_raw_6">
                                                <span></span></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">7</td>
                                    <td><?= lang('Login.cost_by_intervention_type') ?></td>
                                    <td style="width: 200px;">
                                        <div class="checkbox-inline">
                                            <label style="margin:auto;" class="checkbox checkbox-lg">
                                                <input type="checkbox" value="1" <?php echo ($user->user_dashbord_display_raw_7) ? 'checked' : '' ?>  name="user_dashbord_display_raw_7">
                                                <span></span></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">8</td>
                                    <td><?= lang('Login.cost_by_branch') ?></td>
                                    <td style="width: 200px;">
                                        <div class="checkbox-inline">
                                            <label style="margin:auto;" class="checkbox checkbox-lg">
                                                <input type="checkbox" value="1" <?php echo ($user->user_dashbord_display_raw_8) ? 'checked' : '' ?>  name="user_dashbord_display_raw_8">
                                                <span></span></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">9</td>
                                    <td><?= lang('Login.cost_by_cost_center') ?></td>
                                    <td style="width: 200px;">
                                        <div class="checkbox-inline">
                                            <label style="margin:auto;" class="checkbox checkbox-lg">
                                                <input type="checkbox" value="1" <?php echo ($user->user_dashbord_display_raw_9) ? 'checked' : '' ?>  name="user_dashbord_display_raw_9">
                                                <span></span></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">10</td>
                                    <td><?= lang('Login.cost_by_equipment') ?></td>
                                    <td style="width: 200px;">
                                        <div class="checkbox-inline">
                                            <label style="margin:auto;" class="checkbox checkbox-lg">
                                                <input type="checkbox" value="1" <?php echo ($user->user_dashbord_display_raw_10) ? 'checked' : '' ?>  name="user_dashbord_display_raw_10">
                                                <span></span></label>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary mr-2"><?= lang('Login.save') ?></button>
                        <a href='<?= base_url() ?>' class="btn btn-danger"><?= lang('Login.cancel') ?></a>
                    </div>
                </div>
            </form>
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
</div>
<!--end::Content-->

<script type="text/javascript">
    "use strict";

// Class definition
    var KTProfile = function () {
        // Elements
        var avatar;
        var offcanvas;

        // Private functions
        var _initAside = function () {
            // Mobile offcanvas for mobile mode
            offcanvas = new KTOffcanvas('kt_profile_aside', {
                overlay: true,
                baseClass: 'offcanvas-mobile',
                //closeBy: 'kt_user_profile_aside_close',
                toggleBy: 'kt_subheader_mobile_toggle'
            });
        }

        var _initForm = function () {
            avatar = new KTImageInput('kt_profile_avatar');
        }

        return {
            // public functions
            init: function () {
                _initAside();
                _initForm();
            }
        };
    }();

    jQuery(document).ready(function () {
        KTProfile.init();
    });

    function add_country() {
        get_form_by_ajax('<?= base_url('parametres/country/country_new') ?>', 'lg', 'callbackfct=refresh_combo_pays');
    }

    function refresh_combo_pays(result) {
        $("#dashbord_country_id").append($('<option selected>').val(result.id).text(result.code + ' - ' + result.designation));
        $('.data-dismiss').trigger('click');
    }

    function add_currency() {
        get_form_by_ajax('<?= base_url('parametres/currency/currency_new') ?>', 'lg', 'callbackfct=refresh_combo_devise');
    }

    function refresh_combo_devise(result) {
        $("#dashbord_currency_id").append($('<option selected>').val(result.id).text(result.code + ' - ' + result.designation));
        $('.data-dismiss').trigger('click');
    }

</script>