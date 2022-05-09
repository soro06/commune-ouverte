<!--begin::Footer-->
<div class="footer bg-white py-4 d-flex flex-lg-column" id="kt_footer">
    <!--begin::Container-->
    <div class="container-fluid d-flex flex-column flex-md-row align-items-center justify-content-between">
        <!--begin::Copyright-->
        <div class="text-dark order-2 order-md-1">
            <span class="text-muted font-weight-bold mr-2">2022©</span>
            <a href="http://keenthemes.com/metronic" target="_blank" class="text-dark-75 text-hover-primary">MAINTEX 3.0</a>
        </div>
        <!--end::Copyright-->
        <!--begin::Nav-->
        <div class="nav nav-dark">
            <a href="" target="_blank" class="nav-link pl-0 pr-5"><?= lang('App.about') ?></a>
            <a href="https://bbc-partners.com/contactus" target="_blank" class="nav-link pl-0 pr-0"><?= lang('App.contactus') ?></a>
        </div>
        <!--end::Nav-->
    </div>
    <!--end::Container-->
</div>
<!--end::Footer-->
</div>
<!--end::Wrapper-->
</div>
<!--end::Page-->
</div>
<!--end::Main-->
<!-- begin::User Panel-->
<div id="kt_quick_user" class="offcanvas offcanvas-right p-10">
    <!--begin::Header-->
    <div class="offcanvas-header d-flex align-items-center center-content-between pb-3">
        <h3 class="font-weight-bold m-0" style="text-transform: capitalize;"><?= lang('App.user_profile'); ?></h3> 
        <a style="float: right;" href="#" class="btn btn-xs btn-icon btn-light btn-hover-primary" id="kt_quick_user_close">
            <i class="ki ki-close icon-xs text-muted"></i>
        </a>
    </div>
    <div class="separator separator-dashed"></div>
    <!--end::Header-->
    <!--begin::Content-->
    <div class="offcanvas-content pr-3 mr-n3">
        <!--begin::Header-->
        <div class="df">
            <div style="" class="d-flex align-items-center">
                <div style="margin: auto; width: 100%;" class="symbol symbol-100 ">
                    <div class="symbol-label" style="background-image:url('<?php echo site_url('uploads/user_profiles/' . $session->get('user_picture')); ?>'); margin: auto;"></div>
                </div>
            </div>
            <div class="d-flex flex-column text-center">
                <a href="#" class="font-weight-bold font-size-h5 text-dark-75 text-hover-primary"><?= $session->get('user_name') ?> </a>
                <div class="navi text-center mt-2">
                    <a style="" href="<?= base_url('logout') ?>" class="btn btn-sm btn-light-primary font-weight-bolder py-2 px-5"><i class="fa fa-sign-out-alt"></i> <?= lang('App.sign_out'); ?></a>
                </div>
            </div>
        </div>
        <!--end::Header-->
        <!--begin::Nav-->
        <div class="navi navi-spacer-x-0 p-0">
            <!--begin::Item-->
            <a href="<?php echo base_url('users/profile') ?>" class="navi-item">
                <div class="navi-link">
                    <div class="symbol symbol-40 bg-light mr-3">
                        <div class="symbol-label">
                            <span class="svg-icon svg-icon-md svg-icon-success"><i class="fa fa-user"></i></span>
                        </div>
                    </div>
                    <div class="navi-text">
                        <div class="font-weight-bold"><?= lang('App.my_profile'); ?></div>
                        <div class="text-muted"><?= lang('App.account_settings'); ?></div>
                    </div>
                </div>
            </a>
            <!--end:Item-->
            <!--begin::Item-->
            <a onclick="get_pwd_form()" href="javascript:;" class="navi-item">
                <div class="navi-link">
                    <div class="symbol symbol-40 bg-light mr-3">
                        <div class="symbol-label">
                            <span class="svg-icon svg-icon-md svg-icon-warning">
                                <!--begin::Svg Icon | path:assets/media/svg/icons/Shopping/Chart-bar1.svg-->
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24"></rect>
                                <rect fill="#000000" opacity="0.3" x="12" y="4" width="3" height="13" rx="1.5"></rect>
                                <rect fill="#000000" opacity="0.3" x="7" y="9" width="3" height="8" rx="1.5"></rect>
                                <path d="M5,19 L20,19 C20.5522847,19 21,19.4477153 21,20 C21,20.5522847 20.5522847,21 20,21 L4,21 C3.44771525,21 3,20.5522847 3,20 L3,4 C3,3.44771525 3.44771525,3 4,3 C4.55228475,3 5,3.44771525 5,4 L5,19 Z" fill="#000000" fill-rule="nonzero"></path>
                                <rect fill="#000000" opacity="0.3" x="17" y="11" width="3" height="6" rx="1.5"></rect>
                                </g>
                                </svg>
                                <!--end::Svg Icon-->
                            </span>
                        </div>
                    </div>
                    <div class="navi-text">
                        <div class="font-weight-bold"><?= lang('App.my_password'); ?></div>
                        <div class="text-muted"><?= lang('App.change_password'); ?></div>
                    </div>
                </div>
            </a>
            <!--end:Item-->
            <!--begin::Item-->
            <a href="<?php echo base_url('users/company_profile') ?>" class="navi-item">
                <div class="navi-link">
                    <div class="symbol symbol-40 bg-light mr-3">
                        <div class="symbol-label">
                            <span class="svg-icon svg-icon-md svg-icon-primary">
                                <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Mail-opened.svg-->
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24"></rect>
                                <path d="M6,2 L18,2 C18.5522847,2 19,2.44771525 19,3 L19,12 C19,12.5522847 18.5522847,13 18,13 L6,13 C5.44771525,13 5,12.5522847 5,12 L5,3 C5,2.44771525 5.44771525,2 6,2 Z M7.5,5 C7.22385763,5 7,5.22385763 7,5.5 C7,5.77614237 7.22385763,6 7.5,6 L13.5,6 C13.7761424,6 14,5.77614237 14,5.5 C14,5.22385763 13.7761424,5 13.5,5 L7.5,5 Z M7.5,7 C7.22385763,7 7,7.22385763 7,7.5 C7,7.77614237 7.22385763,8 7.5,8 L10.5,8 C10.7761424,8 11,7.77614237 11,7.5 C11,7.22385763 10.7761424,7 10.5,7 L7.5,7 Z" fill="#000000" opacity="0.3"></path>
                                <path d="M3.79274528,6.57253826 L12,12.5 L20.2072547,6.57253826 C20.4311176,6.4108595 20.7436609,6.46126971 20.9053396,6.68513259 C20.9668779,6.77033951 21,6.87277228 21,6.97787787 L21,17 C21,18.1045695 20.1045695,19 19,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,6.97787787 C3,6.70173549 3.22385763,6.47787787 3.5,6.47787787 C3.60510559,6.47787787 3.70753836,6.51099993 3.79274528,6.57253826 Z" fill="#000000"></path>
                                </g>
                                </svg>
                                <!--end::Svg Icon-->
                            </span>
                        </div>
                    </div>
                    <div class="navi-text">
                        <div class="font-weight-bold"><?= lang('App.profile_company'); ?></div>
                        <div class="text-muted"><?= $session->get("company_name"); ?></div>
                    </div>
                </div>
            </a>

            <a href="<?php echo base_url('users/dashboard_setting') ?>" class="navi-item">
                <div class="navi-link">
                    <div class="symbol symbol-40 bg-light mr-3">
                        <div class="symbol-label">
                            <span class="svg-icon svg-icon-md svg-icon-primary">
                                <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Mail-opened.svg-->
                                <span class="svg-icon menu-icon"> 						<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Design/Layers.svg--> 						<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1"> 							<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> 								<polygon points="0 0 24 0 24 24 0 24" /> 								<path d="M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z" fill="#000000" fill-rule="nonzero" /> 								<path d="M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z" fill="#000000" opacity="0.3" /> 							</g> 						</svg> 						<!--end::Svg Icon--> 					</span>
                                <!--end::Svg Icon-->
                            </span>
                        </div>
                    </div>
                    <div class="navi-text">
                        <div class="font-weight-bold"><?= lang('App.dashboard_setting'); ?></div>
                        <div class="text-muted"><?php echo lang("App.dashboard_content_management"); ?></div>
                    </div>
                </div>
            </a>
            <!--end:Item-->

            <!--begin::Item-->

            <!--end:Item-->
            <!--begin::Item-->

            <!--end:Item-->
        </div>
        <!--end::Nav-->

        <!--begin::Notifications-->
        <!--end::Notifications-->
    </div>
    <!--end::Content-->
</div>
<!-- end::User Panel-->

<!--begin::Global Config(global config for global JS scripts)-->
<script>var KTAppSettings = { "breakpoints": { "sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1400 }, "colors": { "theme": { "base": { "white": "#ffffff", "primary": "#3699FF", "secondary": "#E5EAEE", "success": "#1BC5BD", "info": "#8950FC", "warning": "#FFA800", "danger": "#F64E60", "light": "#E4E6EF", "dark": "#181C32" }, "light": { "white": "#ffffff", "primary": "#E1F0FF", "secondary": "#EBEDF3", "success": "#C9F7F5", "info": "#EEE5FF", "warning": "#FFF4DE", "danger": "#FFE2E5", "light": "#F3F6F9", "dark": "#D6D6E0" }, "inverse": { "white": "#ffffff", "primary": "#ffffff", "secondary": "#3F4254", "success": "#ffffff", "info": "#ffffff", "warning": "#ffffff", "danger": "#ffffff", "light": "#464E5F", "dark": "#ffffff" } }, "gray": { "gray-100": "#F3F6F9", "gray-200": "#EBEDF3", "gray-300": "#E4E6EF", "gray-400": "#D1D3E0", "gray-500": "#B5B5C3", "gray-600": "#7E8299", "gray-700": "#5E6278", "gray-800": "#3F4254", "gray-900": "#181C32" } }, "font-family": "Poppins" };</script>
<!--end::Global Config-->
<!--begin::Global Theme Bundle(used by all pages)-->

<script>
    $(document).ready(function () {
        $('.kt_datatable').dataTable({
            'columnDefs': [{'orderable': false, 'targets': [0, - 1], 'width': '1%'}],
            "language": {"url": "<?= site_url('assets/plugins/custom/datatables/language.french.js') ?>"},
            "dom": '<"top"f>rt<"bottom"ilp><"clear">'
        });
    });
    
    function date_picker(inputid){
        $(inputid).datetimepicker({
                  locale: moment.locale('fr'),
                  format: 'DD/MM/YYYY',
                  todayBtn: true,
                  autoclose: true,
                  icons: {
                      time: "fa fa-clock",
                      date: "fa fa-calendar",
                      up: "fa fa-arrow-up",
                      down: "fa fa-arrow-down"
                  }
              });
    }
    
    function date_time_picker(inputid){
        $(inputid).datetimepicker({
                  locale: moment.locale('fr'),
                  format: ' HH:mm',
                  todayBtn: true,
                  autoclose: true,
                  icons: {
                      time: "fa fa-clock",
                      date: "fa fa-calendar",
                      up: "fa fa-arrow-up",
                      down: "fa fa-arrow-down"
                  }
              });
    }
    
    function get_pwd_form(){
        get_form_by_ajax('<?= base_url('users/user_reset_pwd_form') ?>', 'me');
    }
    
    function get_form_by_ajax(Contenturl, size_sm, data, level){
        $(".loader-maintex").animate({
                        height: 'toggle'
                    });
        var level = (typeof level == 'undefined') ? 1:level;
        try {
            if (typeof size_sm == 'undefined') {
                $("#modal_contenair_" + level).removeClass("modal-lg");
                $("#modal_contenair_" + level).removeClass("modal-sm");
                $("#modal_contenair_" + level).removeClass("modal-xl");
            } else {
                switch (size_sm) {
                    case "sm":
                        $("#modal_contenair_" + level).removeClass("modal-lg");
                        $("#modal_contenair_" + level).removeClass("modal-xl");
                        $("#modal_contenair_" + level).addClass("modal-sm");
                        break;
                    case "me":
                    case "medium":
                        $("#modal_contenair_" + level).removeClass("modal-lg");
                        $("#modal_contenair_" + level).removeClass("modal-xl");
                        $("#modal_contenair_" + level).removeClass("modal-sm");
                        break;
                    case "lg":
                        $("#modal_contenair_" + level).addClass("modal-lg");
                        $("#modal_contenair_" + level).removeClass("modal-sm");
                        $("#modal_contenair_" + level).removeClass("modal-xl");
                        break;
                    case "xl":
                        $("#modal_contenair_" + level).addClass("modal-xl");
                        $("#modal_contenair_" + level).removeClass("modal-sm");
                        $("#modal_contenair_" + level).removeClass("modal-lg");
                }
            }
            $.ajax({ 
                type: "POST",
                url: Contenturl,
                data: data,
                dataType: "JSON",
                success: function (data) {
                    $("#modal_body_level_" + level).empty().append(data.view);
                    $("#modal_level_" + level).modal("show");
                    loader_display(500);
                }
            });
        } catch (err) {
            conlog.log(err);
        }
    }
    
    function notify(msg, type){
        $.notify(msg, {
                    type: type,
                    allow_dismiss: true,
                    newest_on_top: true,
                    mouse_over: true
                });
    }
    
    function date_format_from_to(date, from, to) {
        var ___date = '';
        date = date + '';
        from = (typeof (from) === "undefined") ? "db" : from.toLowerCase();
        to = (typeof (to) === "undefined") ? formatdate.toLowerCase() : to.toLowerCase();

        if (date == '' || date == null || date.length < 8) {
            return '';
        }

        date = date.replaceAll('/', '-');
        date = date.replaceAll('.', '-');
        from = from.replaceAll('/', '-');
        from = from.replaceAll('.', '-');

        if (date == '0000-00-00' || date == '0000-00-00 00:00:00' || date == '00-00-0000' || date == '00-00-0000 00:00:00') {
            return '';
        }

        var dd = '';
        var mm = '';
        var yyyy = '';
        var hh = '';
        var ii = '';

        switch (from) {
            case 'yyyy-mm-dd':
            case 'yyyy-mm-dd hh:ii':
            case 'yyyy-mm-dd hh:ii:ss':
            case 'db':
                if (date.length <= 10) {
                    var arFrom = date.split("-");
                    yyyy = arFrom[0];
                    mm = (arFrom[1].length < 2) ? '0' + arFrom[1] : arFrom[1];
                    dd = (arFrom[2].length < 2) ? '0' + arFrom[2] : arFrom[2];
                } else {
                    var date_sp = date.split(" ");
                    var arFrom = date_sp[0].split('-');
                    var heure = date_sp[1].split(':');

                    yyyy = arFrom[0];
                    mm = (arFrom[1].length < 2) ? '0' + arFrom[1] : arFrom[1];
                    dd = (arFrom[2].length < 2) ? '0' + arFrom[2] : arFrom[2];
                    hh = (heure[0].length < 2) ? '0' + heure[0] : heure[0];
                    ii = (heure[1].length < 2) ? '0' + heure[1] : heure[1];
                }
                break;
            case 'yyyy-dd-mm':
            case 'yyyy-dd-mm hh:ii':
            case 'yyyy-dd-mm hh:ii:ss':
                if (date.length <= 10) {
                    var arFrom = date.split("-");
                    yyyy = arFrom[0];
                    mm = (arFrom[2].length < 2) ? '0' + arFrom[2] : arFrom[2];
                    dd = (arFrom[1].length < 2) ? '0' + arFrom[1] : arFrom[1];
                } else {
                    var date_sp = date.split(" ");
                    var arFrom = date_sp[0].split('-');
                    var heure = date_sp[1].split(':');

                    yyyy = arFrom[0];
                    mm = (arFrom[2].length < 2) ? '0' + arFrom[2] : arFrom[2];
                    dd = (arFrom[1].length < 2) ? '0' + arFrom[1] : arFrom[1];
                    hh = (heure[0].length < 2) ? '0' + heure[0] : heure[0];
                    ii = (heure[1].length < 2) ? '0' + heure[1] : heure[1];
                }
                break;
            case 'fr':
            case 'dd-mm-yyyy':
            case 'dd-mm-yyyy hh:ii':
            case 'dd-mm-yyyy hh:ii:ss':
                if (date.length <= 10) {
                    var arFrom = date.split("-");
                    yyyy = arFrom[2];
                    mm = (arFrom[1].length < 2) ? '0' + arFrom[1] : arFrom[1];
                    dd = (arFrom[0].length < 2) ? '0' + arFrom[0] : arFrom[0];
                } else {
                    var date_sp = date.split(" ");
                    var arFrom = date_sp[0].split('-');
                    var heure = date_sp[1].split(':');

                    yyyy = arFrom[2];
                    mm = (arFrom[1].length < 2) ? '0' + arFrom[1] : arFrom[1];
                    dd = (arFrom[0].length < 2) ? '0' + arFrom[0] : arFrom[0];
                    hh = (heure[0].length < 2) ? '0' + heure[0] : heure[0];
                    ii = (heure[1].length < 2) ? '0' + heure[1] : heure[1];
                }
                break;
            case 'date':
                var _date = new Date(date);
                yyyy = _date.getFullYear();
                mm = ("0" + (_date.getMonth() + 1)).slice(-2);
                dd = ("0" + _date.getDate()).slice(-2);
                hh = ("0" + _date.getHours()).slice(-2);
                ii = ("0" + _date.getMinutes()).slice(-2);
                break;
            default:

                break;
        }

        var separator = '/';

        if (to.indexOf('.') > -1) {
            separator = '.';
        } else if (to.indexOf('-') > -1) {
            separator = '-';
        } else if (to == 'db') {
            separator = '-';
            if (date.length <= 10) {
                to = 'yyyy-mm-dd';
            } else {
                to = 'yyyy-mm-dd hh:ii';
            }
        }

        var heure = '';
        if (hh != '' && ii != '') {
            heure = ' ' + hh + ':' + ii;
        }

        switch (to) {
            case 'fr':
            case 'dd/mm/yyyy':
            case 'dd/mm/yyyy hh:ii':
            case 'dd/mm/yyyy hh:ii:ss' :
            case 'dd.mm.yyyy':
            case 'dd.mm.yyyy hh:ii':
            case 'dd.mm.yyyy hh:ii:ss':
            case 'dd-mm-yyyy':
            case 'dd-mm-yyyy hh:ii':
            case 'dd-mm-yyyy hh:ii:ss':
                if (to.length <= 10) {
                    ___date = dd + separator + mm + separator + yyyy;
                } else {
                    ___date = dd + separator + mm + separator + yyyy + heure;
                }
                break;
            case 'db':
            case 'yyyy/mm/dd':
            case 'yyyy/mm/dd hh:ii':
            case 'yyyy/mm/dd hh:ii:ss':
            case 'yyyy.mm.dd':
            case 'yyyy.mm.dd hh:ii':
            case 'yyyy.mm.dd hh:ii:ss':
            case 'yyyy-mm-dd':
            case 'yyyy-mm-dd hh:ii':
            case 'yyyy-mm-dd hh:ii:ss':
                if (to.length <= 10) {
                    ___date = yyyy + separator + mm + separator + dd;
                } else {
                    ___date = yyyy + separator + mm + separator + dd + heure;
                }
                break;
            case 'yyyy/dd/mm':
            case 'yyyy/dd/mm hh:ii':
            case 'yyyy/dd/mm hh:ii:ss':
            case 'yyyy.dd.mm':
            case 'yyyy.dd.mm hh:ii':
            case 'yyyy.dd.mm hh:ii:ss':
            case 'yyyy-dd-mm':
            case 'yyyy-dd-mm hh:ii':
            case 'yyyy-dd-mm hh:ii:ss':
                if (to.length <= 10) {
                    ___date = yyyy + separator + dd + separator + mm;
                } else {
                    ___date = yyyy + separator + dd + separator + mm + heure;
                }
                break;
            case 'mm/dd/yyyy':
            case 'mm/dd/yyyy hh:ii':
            case 'mm/dd/yyyy hh:ii:ss':
            case 'mm.dd.yyyy':
            case 'mm.dd.yyyy hh:ii':
            case 'mm.dd.yyyy hh:ii:ss':
            case 'mm-dd-yyyy':
            case 'mm-dd-yyyy hh:ii':
            case 'mm-dd-yyyy hh:ii:ss':
                if (to.length <= 10) {
                    ___date = mm + separator + dd + separator + yyyy;
                } else {
                    ___date = mm + separator + dd + separator + yyyy + heure;
                }
                break;
            default:

                break;
        }
        return ___date;
    }

</script>      
<!--end::Global Theme Bundle-->
</body>
<!--end::Body-->
</html>