<html lang="en">
    <!--begin::Head-->
    <head>
        <meta charset="utf-8" />
        <title>COMMUNE - BF</title>
        <meta name="description" content="Base form control examples" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <!--begin::Fonts-->
        <link href="<?= site_url('assets/fonts/font_googleapis.css') ?>" rel="stylesheet" type="text/css" />
        <!--end::Fonts-->
        <!--begin::Global Theme Styles(used by all pages)-->
        <link href="<?= site_url('assets/plugins/global/plugins.bundle.css') ?>" rel="stylesheet" type="text/css" />
        <link href="<?= site_url('assets/plugins/custom/prismjs/prismjs.bundle.css') ?>" rel="stylesheet" type="text/css" />
        <link href="<?= site_url('assets/css/style.bundle.css') ?>" rel="stylesheet" type="text/css" />
        <!--end::Global Theme Styles-->
        <!--begin::Layout Themes(used by all pages)-->
        <link href="<?= site_url('assets/css/themes/layout/header/base/light.css') ?>" rel="stylesheet" type="text/css" />
        <link href="<?= site_url('assets/css/themes/layout/header/menu/light.css') ?>" rel="stylesheet" type="text/css" />
        <link href="<?= site_url('assets/css/themes/layout/brand/dark.css') ?>" rel="stylesheet" type="text/css" />
        <link href="<?= site_url('assets/css/themes/layout/aside/dark.css') ?>" rel="stylesheet" type="text/css" />
        <!--end::Layout Themes-->
        <link rel="shortcut icon" href="<?= site_url('assets/img/favicon.png') ?>" />

        <script src="<?= site_url('assets/plugins/global/plugins.bundle.js') ?>"></script>
        <script src="<?= site_url('assets/plugins/custom/prismjs/prismjs.bundle.js') ?>"></script>
        <script src="<?= site_url('assets/js/scripts.bundle.js') ?>"></script>

        <script src="<?= site_url('assets/maintex/js/app.js') ?>"></script>
        <link href="<?= site_url('assets/maintex/css/app.css') ?>" rel="stylesheet" type="text/css" />
        
        <script src="<?= site_url('assets/plugins/custom/jquery-validation/jquery.validate.min.js') ?>"></script>
        
        <link href="<?= site_url('assets/plugins/custom/datatables/css/dataTables.bootstrap4.min.css') ?>" rel="stylesheet" type="text/css">
        <link href="<?= site_url('assets/plugins/custom/datatables/css/responsive.bootstrap4.min.css') ?>" rel="stylesheet" type="text/css" />
        <link href="<?= site_url('assets/plugins/custom/datatables/css/buttons.dataTables.min.css') ?>" rel="stylesheet" type="text/css" />
        <script src="<?= site_url('assets/plugins/custom/datatables/jquery.dataTables.min.js') ?>"></script>
        <script src="<?= site_url('assets/plugins/custom/datatables/dataTables.bootstrap4.min.js') ?>"></script>
        <script src="<?= site_url('assets/plugins/custom/datatables/dataTables.responsive.min.js') ?>"></script>
        <script src="<?= site_url('assets/plugins/custom/datatables/dataTables.buttons.min.js') ?>"></script>
        <script src="<?php echo base_url("assets/plugins/custom/jquery-accounting/jquery.accounting_french.js"); ?>"></script>
        <script>
            $(window).on("load", function () {
                "use strict";
                loader_display(200);
            });
            function loader_display(timer) {
                setTimeout(function () {
                    $(".loader-maintex").animate({
                        height: 'toggle'
                    });
                }, timer);
            }
            
            function get_favoris_settings_frm(){
                get_form_by_ajax('<?= base_url('users/menu_favoris_setting') ?>', 'xl');
            }
        </script>    
        <style>
            /* ================================= */
            /* ---------- Loader Css ----------- */
            /* ================================= */
            .loader-maintex {
                position: fixed;
                z-index: 10000;
                height: 100%;
                width: 100%;
                left: 0;
                right: 0;
                overflow: hidden;
                top: 0;
                bottom: 0;
                background: #eef0f8;
            }
            .cssload-svg img{
                width: 5%;
                min-width: 60px;
                position: absolute;
                transform: translate(-50%,-50%);
                left: 50%;
                top: 40%;
                overflow:hidden;
            }

            .cssload-svg p{
                top: 47%;
                position: absolute;
                margin: auto;
                text-align: center;
                width: 100%;
                color: #888989;
                font-size: 20px;
            }
            
            .lds-ellipsis {
                display: inline-block;
                position: absolute;
                width: 100px;
                height: 80px;
                top: 50%;
                margin: auto 47%;
            }
            .lds-ellipsis div {
                position: absolute;
                top: 33px;
                width: 13px;
                height: 13px;
                border-radius: 50%;
                background: #066cb4;
                animation-timing-function: cubic-bezier(0, 1, 1, 0);
            }
            .lds-ellipsis div:nth-child(1) {
                left: 8px;
                animation: lds-ellipsis1 0.6s infinite;
            }
            .lds-ellipsis div:nth-child(2) {
                left: 8px;
                animation: lds-ellipsis2 0.6s infinite;
            }
            .lds-ellipsis div:nth-child(3) {
                left: 32px;
                animation: lds-ellipsis2 0.6s infinite;
            }
            .lds-ellipsis div:nth-child(4) {
                left: 56px;
                animation: lds-ellipsis3 0.6s infinite;
            }
            @keyframes lds-ellipsis1 {
                0% {
                    transform: scale(0);
                }
                100% {
                    transform: scale(1);
                }
            }
            @keyframes lds-ellipsis3 {
                0% {
                    transform: scale(1);
                }
                100% {
                    transform: scale(0);
                }
            }
            @keyframes lds-ellipsis2 {
                0% {
                    transform: translate(0, 0);
                }
                100% {
                    transform: translate(24px, 0);
                }
            }   
            /* ================================= */
            /* ---------- Loader Css ----------- */
            /* ================================= */
            .df {
                box-shadow: rgba(5, 97, 163, 0.4) 0px 5px, rgba(5, 97, 163, 0.3) 0px 10px, rgba(5, 97, 163, 0.2) 0px 15px, rgba(5, 97, 163, 0.1) 0px 20px, rgba(5, 97, 163, 0.05) 0px 25px;
                margin-bottom: 30px;
                padding: 10px 0;
            }

            .dataTables_wrapper .dataTable td, .dataTables_wrapper .dataTable th {
                text-align: left;
            }
            div.dataTables_wrapper div.dataTables_filter {
                text-align: right;
            }

            .dataTables_length{
                float: right;
                margin-right: 30px;
                margin-top: 3px;
            }

            div.dataTables_wrapper div.dataTables_info {
                float: right !important;
            }

            div.dataTables_wrapper div.dataTables_length select {
                width: 45% !important;
            }

            div.dataTables_wrapper div.dataTables_paginate ul.pagination {
                justify-content: flex-start !important;
            }

            div.dataTables_wrapper div.dataTables_filter {
                text-align: left;
            }

            .dataTables_filter .form-control{
                background: url(https://cdn3.iconfinder.com/data/icons/financial-28/16/v2_search-small-512.png);
                background-size: 21px;
                background-repeat: no-repeat;
                background-position: 4px 4px !important;
                padding-left: calc(0.6em + 1.3rem + 2px) !important;
            }

            .dataTables_wrapper .dataTable th {
                text-align: center;
                padding: 1em 1.6em 1em 1em !important;
            }

            thead th {
                color: #fff !important;
                font-size: .9rem !important;
                text-transform: uppercase;
                font-weight: 600 !important;
                letter-spacing: .1rem !important;
                background-color: #046cb3 !important;
            }

            table th{
                color: #fff !important;
            }

            .table td{
                padding-top: .4rem !important;
                padding-bottom: .4rem !important;
            }

            .dataTables_wrapper .dataTable td, .dataTables_wrapper .dataTable th {
                text-align: left;
            }

            .modal.card-body{
                padding: 0 !important;
            }

            .modal-body{
                padding: 0.5rem !important;
            }
            .hide{
                display: none !important;
            }
            .error{
                color: #f64e60 !important;
            }
            .input-group > .select2-container--bootstrap {
                width: auto;
                flex: 1 1 auto;
            }
            .input-group > .select2-container--bootstrap .select2-selection--single {
                height: 100%;
                line-height: inherit;
                padding: 0.5rem 1rem;
            }
            .select2-container--default .select2-results__option[aria-disabled=true] {
                display: none !important;
            }
        </style>
    </head>
    <!--end::Head-->
    <!--begin::Body-->
    <body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
        <div class="modal fade" data-backdrop="static" id="modal_level_1" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable" id="modal_contenair_1" >
                <div class="modal-content">
                    <div class="modal-body" id="modal_body_level_1">
                        <div class="col-lg-1 col-md-1 col-sm-1">
                            <a href="#" data-target="#modal_level_2" data-toggle="modal"><i class="fa fa-plus" style="margin-top: 10px;margin-left: -15px;"></i>QSQSQ</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       <div class="modal fade" style="background: rgba(0, 0, 0, 0.6);" data-backdrop="static" id="modal_level_2" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable" id="modal_contenair_2" >
                <div class="modal-content">
                    <div class="modal-body" id="modal_body_level_2">
                        <div class="col-lg-1 col-md-1 col-sm-1">
                            <a href="#" data-target="#modal_level_2" data-toggle="modal"><i class="fa fa-plus" style="margin-top: 10px;margin-left: -15px;"></i>QSQSQ</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--begin::Main-->
        <div class="loader-maintex">
            <div class="lds-ellipsis"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
            <div style="text-align: center;" class="cssload-svg">
                <img  src="<?php echo site_url('assets/img/favicon.png') ?>" alt="image">
                <p>
                    L'excellence opérationnelle !
                </p>
            </div>
        </div>
        <div class="d-flex flex-column flex-root">
            <!--begin::Page-->
            <div class="d-flex flex-row flex-column-fluid page">
                <!--begin::Aside-->
                <div class="aside aside-left aside-fixed d-flex flex-column flex-row-auto" id="kt_aside">
                    <!--begin::Brand-->
                    <div class="brand flex-column-auto" id="kt_brand">
                        <!--begin::Logo-->
                        <a href="<?= base_url('home'); ?>" class="brand-logo">
                            <img style="width: 90%;" alt="Logo" src="<?php echo site_url('assets/img/logo-color.png'); ?>">
                        </a>
                        <!--end::Logo-->
                        <!--begin::Toggle-->
                        <button class="brand-toggle btn btn-sm px-0" id="kt_aside_toggle">
                            <span class="svg-icon svg-icon svg-icon-xl">
                                <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Angle-double-left.svg-->
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <polygon points="0 0 24 0 24 24 0 24" />
                                <path d="M5.29288961,6.70710318 C4.90236532,6.31657888 4.90236532,5.68341391 5.29288961,5.29288961 C5.68341391,4.90236532 6.31657888,4.90236532 6.70710318,5.29288961 L12.7071032,11.2928896 C13.0856821,11.6714686 13.0989277,12.281055 12.7371505,12.675721 L7.23715054,18.675721 C6.86395813,19.08284 6.23139076,19.1103429 5.82427177,18.7371505 C5.41715278,18.3639581 5.38964985,17.7313908 5.76284226,17.3242718 L10.6158586,12.0300721 L5.29288961,6.70710318 Z" fill="#000000" fill-rule="nonzero" transform="translate(8.999997, 11.999999) scale(-1, 1) translate(-8.999997, -11.999999)" />
                                <path d="M10.7071009,15.7071068 C10.3165766,16.0976311 9.68341162,16.0976311 9.29288733,15.7071068 C8.90236304,15.3165825 8.90236304,14.6834175 9.29288733,14.2928932 L15.2928873,8.29289322 C15.6714663,7.91431428 16.2810527,7.90106866 16.6757187,8.26284586 L22.6757187,13.7628459 C23.0828377,14.1360383 23.1103407,14.7686056 22.7371482,15.1757246 C22.3639558,15.5828436 21.7313885,15.6103465 21.3242695,15.2371541 L16.0300699,10.3841378 L10.7071009,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(15.999997, 11.999999) scale(-1, 1) rotate(-270.000000) translate(-15.999997, -11.999999)" />
                                </g>
                                </svg>
                                <!--end::Svg Icon-->
                            </span>
                        </button>
                        <!--end::Toolbar-->
                    </div>
                    <!--end::Brand-->
                    <!--begin::Aside Menu-->
                    <div class="aside-menu-wrapper flex-column-fluid" id="kt_aside_menu_wrapper">
                        <!--begin::Menu Container-->
                        <div id="kt_aside_menu" class="aside-menu my-4" data-menu-vertical="1" data-menu-scroll="1" data-menu-dropdown-timeout="500">
                            <!--begin::Menu Nav-->
                            <ul class="menu-nav">

                                <?php
                                $menu_level_1 = gl_array_filter_by_value($menu, 'menu_id_parent', 0);
                                if ($menu_level_1)
                                    foreach ($menu_level_1 as $m) {
                                        if ($m['n'] > 0) {
                                            $menu_level_2 = gl_array_filter_by_value($menu, 'menu_id_parent', $m['menu_id']);
                                            echo '<li class="menu-item ' . ((($session->get('session_menu') == $m['menu_code'])) ? ' menu-item-open ' : '') . '" aria-haspopup="true" data-menu-toggle="hover">
                                                    <a href="javascript:;" class="menu-link menu-toggle">
                                                        <span class="svg-icon menu-icon">' . $m['menu_icon'] . '</span>
                                                        <span class="menu-text">' . $m['titremenu'] . '</span>
                                                        <i class="menu-arrow"></i>
                                                    </a>
                                                    <div class="menu-submenu" kt-hidden-height="160">
                                                        <i class="menu-arrow"></i>
                                                        <ul class="menu-subnav">
                                                    ';
                                            if ($menu_level_2)
                                                foreach ($menu_level_2 as $m2) {
                                                    if ($m2['n'] > 0) {
                                                        $menu_level_3 = gl_array_filter_by_value($menu, 'menu_id_parent', $m2['menu_id']);
                                                        echo '<li class="menu-item menu-item-submenu ' . ((($session->get('session_submenu') == $m2['menu_code'])) ? 'menu-item-open menu-item-here ' : '') . '" aria-haspopup="true" data-menu-toggle="hover">
                                        <a href="javascript:;" class="menu-link menu-toggle">
                                            <i class="menu-bullet menu-bullet-dot">
                                                <span></span>
                                            </i>
                                            <span class="menu-text">' . $m2['titremenu'] . '</span>
                                            <i class="menu-arrow"></i>
                                        </a>
                                        <div class="menu-submenu" style="display: visible; overflow: hidden;">
                                            <i class="menu-arrow"></i>
                                            <ul class="menu-subnav">';
                                                        if ($menu_level_3)
                                                            foreach ($menu_level_3 as $m3) {
                                                                echo '<li class="menu-item ' . ((($session->get('session_childmenu') == $m3['menu_code'])) ? 'menu-item-active' : '') . '" aria-haspopup="true">
                                                    <a href="' . base_url($m3['menu_url']) . '" class="menu-link">
                                                        <i class="menu-bullet menu-bullet-dot">
                                                            <span></span>
                                                        </i>
                                                        <span class="menu-text">' . $m3['titremenu'] . '</span>
                                                    </a>
                                                </li>';
                                                            }
                                                        echo ' </ul>
                                        </div>
                                    </li>';
                                                    } else {
                                                        echo '<li class="menu-item ' . ((($session->get('session_submenu') == $m2['menu_code'])) ? ' menu-item-active ' : '') . '" aria-haspopup="true">
                                    <a href="' . base_url($m2['menu_url']) . '" class="menu-link">
                                        <i class="menu-bullet menu-bullet-dot">
                                            <span></span>
                                        </i>
                                        <span class="menu-text">' . $m2['titremenu'] . '</span>
                                    </a>
                                </li>';
                                                    }
                                                }
                                            echo ' 
                                </ul>
                            </div>
                        </li>';
                                        } else {
                                            echo '<li class="menu-item ' . ((($session->get('session_menu') == $m['menu_code'])) ? 'menu-item-active' : '') . '" aria-haspopup="true">
                                <a href="' . base_url($m['menu_url']) . '" class="menu-link">
                                    <span class="svg-icon menu-icon">' . $m['menu_icon'] . '</span>
                                    <span class="menu-text">' . $m['titremenu'] . '</span>
                                </a>
                            </li>';
                                        }
                                        ?>

                                    <?php } ?>
                                <li class="menu-item <?php echo ((($session->get('session_menu') == 'userguide')) ? 'menu-item-active' : '') ?>" aria-haspopup="true">
                                    <a href="<?php echo base_url('users/user_guide') ?>" class="menu-link">
                                        <span class="svg-icon menu-icon"><span class="fa fa-question"></span></span>
                                        <span class="menu-text"><?php echo ($session->get('user_language') == 'english') ? 'User guide' : 'Manuel d\'utilisation' ?></span>
                                    </a>
                                </li>
                            </ul>
                            <!--end::Menu Nav-->
                        </div>
                        <!--end::Menu Container-->
                    </div>
                    <!--end::Aside Menu-->
                </div>
                <!--end::Aside-->
                <!--begin::Wrapper-->
                <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
                    <!--begin::Header-->
                    <div id="kt_header" class="header header-fixed">
                        <!--begin::Container-->
                        <div class="container-fluid d-flex align-items-stretch justify-content-between">
                            <div id="kt_header_menu" class="header-menu header-menu-mobile header-menu-layout-default">
                                <ul class="menu-nav">
                                    <li class="menu-item menu-item-open menu-item-here menu-item-submenu menu-item-rel menu-item-open menu-item-here menu-item-active" data-menu-toggle="click" aria-haspopup="true">
                                        <a style="padding: 0;" href="<?php echo base_url('users/company_profile'); ?>" class="btn">
                                            <img  class="img-thumbnail" src="<?php echo site_url('uploads/company_logo/' . $session->get('company_logo')); ?>" style="height: 50px;" /> 
                                        </a>
                                        <a style="padding: 0;"  href="<?php echo base_url('users/company_profile'); ?>" class="btn">
                                            <span style="font-size: 20px;font-weight: 600;margin: 10px;color: #066cb4;" class="menu-text"><?php echo mb_strtoupper($session->get("company_name")); ?></span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!--begin::Header Menu Wrapper-->
                            <div class="header-menu-wrapper header-menu-wrapper-left" id="kt_header_menu_wrapper">
                                <!--begin::Header Menu-->

                                <!--end::Header Menu-->
                            </div>
                            <!--end::Header Menu Wrapper-->
                            <!--begin::Topbar-->
                            <div class="topbar">
                                <div id="kt_header_mobile" class="header-mobile align-items-center header-mobile-fixed">
                                    <!--begin::Logo-->
                                    <a href="index.html">
                                        <img alt="Logo" src="<?php echo site_url('assets/media/logos/logo-light.png') ?>">
                                    </a>
                                    <!--end::Logo-->
                                    <!--begin::Toolbar-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Aside Mobile Toggle-->
                                        <button class="btn p-0 burger-icon burger-icon-left" id="kt_aside_mobile_toggle">
                                            <span></span>
                                        </button>
                                        <!--end::Aside Mobile Toggle-->
                                        <!--begin::Header Menu Mobile Toggle-->
                                        <button class="btn p-0 burger-icon ml-4" id="kt_header_mobile_toggle">
                                            <span></span>
                                        </button>
                                        <!--end::Header Menu Mobile Toggle-->
                                        <!--begin::Topbar Mobile Toggle-->
                                        <button class="btn btn-hover-text-primary p-0 ml-2" id="kt_header_mobile_topbar_toggle">
                                            <span class="svg-icon svg-icon-xl">
                                                <!--begin::Svg Icon | path:assets/media/svg/icons/General/User.svg-->
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <polygon points="0 0 24 0 24 24 0 24"></polygon>
                                                <path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                                                <path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero"></path>
                                                </g>
                                                </svg>
                                                <!--end::Svg Icon-->
                                            </span>
                                        </button>
                                        <!--end::Topbar Mobile Toggle-->
                                    </div>
                                    <!--end::Toolbar-->
                                </div>

                                <div class="dropdown">
                                    <!--begin::Toggle-->
                                    <div class="topbar-item" data-toggle="dropdown" data-offset="10px,0px" aria-expanded="false">
                                        <div class="btn btn-icon btn-clean btn-dropdown btn-lg mr-1 pulse pulse-primary">
                                            <span class="svg-icon svg-icon-xl svg-icon-warning">
                                                <!--begin::Svg Icon | path:assets/media/svg/icons/Code/Compiling.svg-->
                                                <span class="svg-icon svg-icon-2x"><!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo1\dist/../src/media/svg/icons\General\Star.svg-->
                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="width: 2.6rem !important; height: 2.6rem !important;" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <polygon points="0 0 24 0 24 24 0 24"/>
                                                    <path d="M12,18 L7.91561963,20.1472858 C7.42677504,20.4042866 6.82214789,20.2163401 6.56514708,19.7274955 C6.46280801,19.5328351 6.42749334,19.309867 6.46467018,19.0931094 L7.24471742,14.545085 L3.94038429,11.3241562 C3.54490071,10.938655 3.5368084,10.3055417 3.92230962,9.91005817 C4.07581822,9.75257453 4.27696063,9.65008735 4.49459766,9.61846284 L9.06107374,8.95491503 L11.1032639,4.81698575 C11.3476862,4.32173209 11.9473121,4.11839309 12.4425657,4.36281539 C12.6397783,4.46014562 12.7994058,4.61977315 12.8967361,4.81698575 L14.9389263,8.95491503 L19.5054023,9.61846284 C20.0519472,9.69788046 20.4306287,10.2053233 20.351211,10.7518682 C20.3195865,10.9695052 20.2170993,11.1706476 20.0596157,11.3241562 L16.7552826,14.545085 L17.5353298,19.0931094 C17.6286908,19.6374458 17.263103,20.1544017 16.7187666,20.2477627 C16.5020089,20.2849396 16.2790408,20.2496249 16.0843804,20.1472858 L12,18 Z" fill="#000000"/>
                                                    </g>
                                                    </svg><!--end::Svg Icon--></span>
                                                <!--end::Svg Icon-->
                                            </span>
                                            <span class="pulse-ring"></span>
                                        </div>
                                    </div>
                                    <!--end::Toggle-->
                                </div> 
                                <!--begin::Languages-->
                                <div class="dropdown">
                                    <!--begin::Toggle-->
                                    <div class="topbar-item" data-toggle="dropdown" data-offset="10px,0px">
                                        <div class="btn btn-icon btn-clean btn-dropdown btn-lg mr-1">
                                            <img class="h-20px w-20px rounded-sm"  src="<?= site_url('assets/img/lang/' . $session->get('user_language')) ?>.svg" alt="">
                                        </div>
                                    </div>
                                    <!--end::Toggle-->
                                    <!--begin::Dropdown-->
                                    <div class="dropdown-menu p-0 m-0 dropdown-menu-anim-up dropdown-menu-sm dropdown-menu-right">
                                        <!--begin::Nav-->
                                        <ul class="navi navi-hover py-4">
                                            <!--begin::Item-->
                                            <li class="navi-item">
                                                <a href="#" onclick="getlang('english');" class="navi-link">
                                                    <span class="symbol symbol-20 mr-3">
                                                        <img src="<?= site_url('assets/img/lang/english.svg') ?>" alt="">
                                                    </span>
                                                    <span class="navi-text"><?= lang('App.english'); ?></span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" onclick="getlang('french');"  class="navi-link">
                                                    <span class="symbol symbol-20 mr-3">
                                                        <img src="<?= site_url('assets/img/lang/french.svg') ?>" alt="">
                                                    </span>
                                                    <span class="navi-text"><?= lang('App.french'); ?></span>
                                                </a>
                                            </li>
                                            <!--end::Item-->
                                        </ul>
                                        <!--end::Nav-->
                                    </div>
                                    <!--end::Dropdown-->
                                </div>
                                <!--end::Languages-->
                                <!--begin::User-->
                                <div class="topbar-item">
                                    <div class="btn btn-icon btn-icon-mobile w-auto btn-clean d-flex align-items-center btn-lg px-2" id="kt_quick_user_toggle">
                                        <span class="text-dark-50 font-weight-bolder font-size-base d-none d-md-inline mr-3"><?= $session->get('user_name') ?></span>
                                        <span class="text-muted font-weight-bold font-size-base d-none d-md-inline mr-1"><i class="fa fa-user"></i></span>
                                    </div>
                                </div>
                                <!--end::User-->
                            </div>
                            <!--end::Topbar-->
                        </div>
                        <!--end::Container-->
                    </div>
                    <!--end::Header-->

