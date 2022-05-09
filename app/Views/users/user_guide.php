<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Subheader-->
    <div class="subheader py-2 py-lg-6 subheader-solid" id="kt_subheader">
        <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <div class="d-flex align-items-center flex-wrap mr-1">
                <div class="d-flex align-items-baseline flex-wrap mr-5">
                    <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                        <li class="breadcrumb-item"><a class="text-muted"><?= lang('Login.parameter') ?></a></li>
                        <li class="breadcrumb-item active"><a class="text-muted"><?= lang('Login.userguide') ?></a></li>
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
                    <div class="card-title"><h3 style="color: #fff; " class="card-label"><?= lang('Login.userguide') ?></h3></div>
                </div>
                <div class="">
                    <div id="report_engine_displayer" class="width-100 ks-rpt-contenair">
                        <object style='width: 100%; height: 100%;' data='<?php echo site_url('uploads/user_guide/ug_' . $lang . '.pdf') ?>' type='application/pdf'> <p>Not found</p></object> 
                    </div>
                </div>
            </div>
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
</div>
<!--end::Content-->
<style>
    .label{
        width: 70px !important;
    }
    
    .card-header {
        background: #38383d !important;
        color: #fff !important;
        font-weight: bold !important;
    }
    
    .category-grath {
        font-size: 20px !important;
        text-align: center !important;
        background: #066cb4 !important;
        color: #fff !important;
        font-weight: bolder !important;
        padding: 10px !important;
        margin-bottom: 20px !important;
    }
    
    .ks-rpt-contenair {
        height: 800px;
        border-style: solid;
        border-width: 1px 1px 10px 1px;
        border-color: #38383d;
        background: #38383d;
        border-radius: 0 0 10px 10px;
    }
</style>

