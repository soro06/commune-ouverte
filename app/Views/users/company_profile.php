<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Subheader-->
    <div class="subheader py-2 py-lg-6 subheader-solid" id="kt_subheader">
        <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <div class="d-flex align-items-center flex-wrap mr-1">
                <div class="d-flex align-items-baseline flex-wrap mr-5">
                    <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                        <li class="breadcrumb-item"><a class="text-muted"><?= lang('Login.parameter') ?></a></li>
                        <li class="breadcrumb-item active"><a class="text-muted"><?= lang('Login.company_profil') ?></a></li>
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
            <form id="frm_company" name="frm_company" method="POST" action='<?= base_url('users/company_profile_update') ?>' enctype="multipart/form-data">
                <input type='hidden' name="currentPicture" value="<?= $company->company_logo ?>" />
                <div class="card card-custom card-sticky" id="kt_page_sticky_card">
                    <div class="card-header">
                        <div class="card-title"><h3 class="card-label"><?= lang('Login.company_profil') ?></h3></div>
                        <div class="card-toolbar"></div>
                    </div>
                    <div class="card-body">
                        <!--begin::Body-->
                        <div class="form-group row">
                            <label class="col-xl-2 col-lg-2 col-form-label"><?= lang('Login.logo') ?></label>
                            <div class="col-lg-9 col-xl-6">
                                <div class="image-input image-input-outline" id="kt_profile_avatar" style="background-image: url(<?php echo site_url('uploads/company_logo/' . $session->get('company_logo')); ?>)">
                                    <div class="image-input-wrapper" style="background-image: url(<?php echo site_url('uploads/company_logo/' . $session->get('company_logo')); ?>);"></div>
                                    <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar">
                                        <i class="fa fa-pen icon-sm text-muted"></i>
                                        <input type="file" name="profile_avatar" accept=".png, .jpg, .jpeg">
                                        <input type="hidden" name="profile_avatar_remove" value="0">
                                    </label>
                                    <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="" data-original-title="Cancel avatar">
                                        <i class="ki ki-bold-close icon-xs text-muted"></i>
                                    </span>
                                    <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="remove" data-toggle="tooltip" title="" data-original-title="Remove avatar">
                                        <i class="ki ki-bold-close icon-xs text-muted"></i>
                                    </span>
                                </div>
                                <span class="form-text text-muted">(png, jpg, jpeg)</span>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="form-group row">
                                <div class="col-lg-2 col-md-2 col-sm-12">
                                    <label class="col-form-label"><?= lang('Login.code') ?></label>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-12">
                                    <input class="form-control form-control-solid" id="company_code" name="company_code" type="text" value="<?= $company->company_code ?>" placeholder="<?= lang('Login.code') ?>">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="form-group row">
                                <div class="col-lg-2 col-md-2 col-sm-12">
                                    <label class="col-form-label"><?= lang('Login.designation') ?></label>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-12">
                                    <input class="form-control form-control-solid" id="company_designation" name="company_designation" type="text" value="<?= $company->company_designation ?>" placeholder="<?= lang('Login.designation') ?>">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12" data-select2-id="9">
                            <div class="form-group row" data-select2-id="8">
                                <div class="col-lg-2 col-md-2 col-sm-12">
                                    <label class="col-form-label"><?= lang('Login.pays') ?></label>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <div class="input-group">
                                        <select placeholder="<?= lang('Login.pays') ?>" name = "company_country_id" id="company_country_id" class="form-control form-control-solid">
                                            <option selected="" value=""></option>
                                            <?php foreach ($country as $rows) { ?>
                                                <option <?php echo ($rows->country_id == $company->company_country_id) ? 'selected' : '' ?> class="option_color" value="<?php echo $rows->country_id; ?>"><?php echo $rows->country_code . ' - ' . $rows->country_designation; ?></option>
                                            <?php } ?>
                                        </select>
                                        <div class="input-group-append">
                                            <button type='button' onclick="add_country()" class="btn btn-primary" type="button"><i class="fa fa-plus-square"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-12">
                                    <label class="col-form-label"><?= lang('Login.ville') ?></label>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <input type="text" class="form-control form-control-solid" id="company_city" name="company_city" placeholder="<?= lang('Login.ville') ?>" value="<?= $company->company_city ?>">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="form-group row">
                                <div class="col-lg-2 col-md-2 col-sm-12">
                                    <label class="col-form-label"><?= lang('Login.adresse') ?></label>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <input class="form-control form-control-solid" id="company_address" name="company_address" type="text" value="<?= $company->company_address ?>" placeholder="<?= lang('Login.adresse') ?>">
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-12">
                                    <label class="col-form-label"><?= lang('Login.zipcode') ?></label>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <input class="form-control form-control-solid" id="company_zip_code" name="company_zip_code" type="text" value="<?= $company->company_zip_code ?>" placeholder="<?= lang('Login.zipcode') ?>">
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="form-group row">
                                <div class="col-lg-2 col-md-2 col-sm-12">
                                    <label class="col-form-label"><?= lang('Login.tel') ?></label>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <input class="form-control form-control-solid" id="company_phone_number" name="company_phone_number" type="text" value="<?= $company->company_phone_number ?>" placeholder="<?= lang('Login.tel') ?>">
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-12">
                                    <label class="col-form-label"><?= lang('Login.fax') ?></label>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <input class="form-control form-control-solid" id="company_fax_number" name="company_fax_number" type="text" value="<?= $company->company_fax_number ?>" placeholder="<?= lang('Login.fax') ?>">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="form-group row">
                                <div class="col-lg-2 col-md-2 col-sm-12">
                                    <label class="col-form-label"><?= lang('Login.email') ?></label>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-12">
                                    <input class="form-control form-control-solid" id="company_email" name="company_email" type="text" value="<?= $company->company_email ?>" placeholder="<?= lang('Login.email') ?>">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="form-group row">
                                <div class="col-lg-2 col-md-2 col-sm-12">
                                    <label class="col-form-label"><?= lang('Login.siteweb') ?></label>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-12">
                                    <input class="form-control form-control-solid" id="company_website" name="company_website" type="text" value="<?= $company->company_website ?>" placeholder="<?= lang('Login.siteweb') ?>">
                                </div>
                            </div>
                        </div>


                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group row">
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <label class="col-form-label"><?= lang('Login.siret') ?></label>
                                </div>
                                <div class="col-lg-8 col-md-8 col-sm-12">
                                    <input type="text" class="form-control form-control-solid" id="company_siret_number" name="company_siret_number" placeholder="<?= lang('Login.siret') ?>" value="<?= $company->company_siret_number ?>">
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group row">
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <label class="col-form-label"><?= lang('Login.ape') ?></label>
                                </div>
                                <div class="col-lg-8 col-md-8 col-sm-12">
                                    <input type="text" class="form-control form-control-solid" id="company_ape_number" name="company_ape_number" placeholder="<?= lang('Login.ape') ?>" value="<?= $company->company_ape_number ?>">
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group row">
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <label class="col-form-label"><?= lang('Login.tva') ?></label>
                                </div>
                                <div class="col-lg-8 col-md-8 col-sm-12">
                                    <input type="text" class="form-control form-control-solid" id="company_vat_ecc_number" name="company_vat_ecc_number" placeholder="<?= lang('Login.tva') ?>" value="<?= $company->company_vat_ecc_number ?>">
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group row">
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <label class="col-form-label"><?= lang('Login.devise') ?></label>
                                </div>
                                <div class="col-lg-8 col-md-8 col-sm-12">
                                    <div class="input-group">
                                        <select data-placeholder="<?= lang('Login.devise') ?>" name = "company_currency_id" id="company_currency_id" class="form-control form-control-solid" >
                                            <option selected="" value=""></option>
                                            <?php foreach ($currency as $rows) { ?>
                                                <option <?php echo ($rows->currency_id == $company->company_currency_id) ? 'selected' : '' ?> class="option_color" value="<?php echo $rows->currency_id; ?>"><?php echo $rows->currency_code . ' - ' . $rows->currency_designation; ?></option>
                                            <?php } ?>
                                        </select>
                                        <div class="input-group-append">
                                            <button onclick="add_currency()" type='button' class="btn btn-primary" type="button"><i class="fa fa-plus-square"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
    
    function refresh_combo_pays(result){
        $("#company_country_id").append($('<option selected>').val(result.id).text(result.code + ' - ' + result.designation));
        $('.data-dismiss').trigger('click');
    }
    
    function add_currency() {
        get_form_by_ajax('<?= base_url('parametres/currency/currency_new') ?>', 'lg', 'callbackfct=refresh_combo_devise');
    }
    
    function refresh_combo_devise(result){
        $("#company_currency_id").append($('<option selected>').val(result.id).text(result.code + ' - ' + result.designation));
        $('.data-dismiss').trigger('click');
    }
    
</script>