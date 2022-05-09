<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Subheader-->
    <div class="subheader py-2 py-lg-6 subheader-solid" id="kt_subheader">
        <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <div class="d-flex align-items-center flex-wrap mr-1">
                <div class="d-flex align-items-baseline flex-wrap mr-5">
                    <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                        <li class="breadcrumb-item"><a class="text-muted"><?= lang('Login.parameter') ?></a></li>
                        <li class="breadcrumb-item active"><a class="text-muted"><?= lang('Login.userprofil') ?></a></li>
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
            <form id="frm_famille" name="frm_famille" method="POST" action='<?= base_url('users/profile_update') ?>' enctype="multipart/form-data">
                <input type='hidden' name="currentPicture" value="<?= $user->user_image ?>" />
                <div class="card card-custom card-sticky" id="kt_page_sticky_card">
                    <div class="card-header">
                        <div class="card-title"><h3 class="card-label"><?= lang('Login.monprofil') ?></h3></div>
                        <div class="card-toolbar"></div>
                    </div>
                    <div class="card-body">
                        <!--begin::Body-->
                        <div class="form-group row">
                            <label class="col-xl-2 col-lg-2 col-form-label"></label>
                            <div class="col-lg-9 col-xl-6">
                                <div class="image-input image-input-outline" id="kt_profile_avatar" style="background-image: url(assets/media/users/blank.png)">
                                    <div class="image-input-wrapper" style="background-image: url(<?php echo site_url('uploads/user_profiles/' . $session->get('user_picture')); ?>);"></div>
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
                        <div class="form-group row">
                            <label class="col-xl-2 col-lg-2 col-form-label"><?= lang('Login.code') ?></label>
                            <div class="col-lg-9 col-xl-6">
                                <input class="form-control form-control-solid" type="text" name="user_code" value="<?= $user->user_code ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-xl-2 col-lg-2 col-form-label"><?= lang('Login.nom') ?></label>
                            <div class="col-lg-9 col-xl-6">
                                <input class="form-control form-control-solid" type="text" name="user_designation" value="<?= $user->user_designation ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-xl-2 col-lg-2 col-form-label"><?= lang('Login.profil') ?></label>
                            <div class="col-lg-9 col-xl-6">
                                <input disabled class="form-control form-control-solid" type="text" name="user_profile_designation" value="<?= $user->user_profile_designation ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-xl-2 col-lg-2 col-form-label"><?= lang('Login.langue') ?></label>
                            <div class="col-lg-9 col-xl-6">
                                <select name="user_language" id="language" class="form-control form-control-solid colours" >
                                    <option value=""></option>
                                    <option <?= ($user->user_language == 'english') ? 'selected' : '' ?> value="english">Anglais</option>
                                    <option <?= ($user->user_language == 'french') ? 'selected' : '' ?> value="french">Français</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-xl-3"></label>
                            <div class="col-lg-9 col-xl-6">
                                <h5 class="font-weight-bold mt-10 mb-6"><?= lang('Login.additionnalinfo') ?></h5>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-xl-2 col-lg-2 col-form-label"><?= lang('Login.adresse') ?></label>
                            <div class="col-lg-9 col-xl-6">
                                <input class="form-control form-control-solid" type="text" name="user_address" value="<?= $user->user_address ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-xl-2 col-lg-2 col-form-label"><?= lang('Login.bp') ?></label>
                            <div class="col-lg-9 col-xl-6">
                                <input class="form-control form-control-solid" type="text" name="user_zip_code" value="<?= $user->user_zip_code ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-xl-2 col-lg-2 col-form-label"><?= lang('Login.pays') ?></label>
                            <div class="col-lg-9 col-xl-6">
                                <select data-placeholder="<?= lang('Login.pays') ?>" name = "user_country_id" id="country" class="form-control form-control-solid" style="width: 100%;">
                                    <option selected="" value=""></option>
                                    <?php foreach ($country as $rows) { ?>
                                        <option <?php echo ($rows->country_id == $user->user_country_id) ? 'selected' : '' ?> class="option_color" value="<?php echo $rows->country_id; ?>"><?php echo $rows->country_code . ' - ' . $rows->country_designation; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-xl-2 col-lg-2 col-form-label"><?= lang('Login.ville') ?></label>
                            <div class="col-lg-9 col-xl-6">
                                <input class="form-control form-control-solid" type="text" name="user_city" value="<?= $user->user_city ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-xl-2 col-lg-2 col-form-label"><?= lang('Login.numtel') ?></label>
                            <div class="col-lg-9 col-xl-6">
                                <input class="form-control form-control-solid" type="text" name="user_phone_number" value="<?= $user->user_phone_number ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-xl-2 col-lg-2 col-form-label"><?= lang('Login.email') ?></label>
                            <div class="col-lg-9 col-xl-6">
                                <input class="form-control form-control-solid" type="text" name="user_email" value="<?= $user->user_email ?>">
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

</script>