"use strict";

// Class Definition
var KTLogin = function () {
    var _login;

    var _showForm = function (form) {
        var cls = 'login-' + form + '-on';
        var form = 'kt_login_' + form + '_form';

        _login.removeClass('login-forgot-on');
        _login.removeClass('login-signin-on');
        _login.removeClass('login-signup-on');

        _login.addClass(cls);

        KTUtil.animateClass(KTUtil.getById(form), 'animate__animated animate__backInUp');
    }

    var _handleSignInForm = function () {
        var validation;

        // Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
        validation = FormValidation.formValidation(
                KTUtil.getById('kt_login_signin_form'),
                {
                    fields: {
                        username: {
                            validators: {
                                notEmpty: {
                                    message: 'Username is required'
                                }
                            }
                        },
                        password: {
                            validators: {
                                notEmpty: {
                                    message: 'Password is required'
                                }
                            }
                        }
                    },
                    plugins: {
                        trigger: new FormValidation.plugins.Trigger(),
                        submitButton: new FormValidation.plugins.SubmitButton(),
                        //defaultSubmit: new FormValidation.plugins.DefaultSubmit(), // Uncomment this line to enable normal button submit after form validation
                        bootstrap: new FormValidation.plugins.Bootstrap()
                    }
                }
        );

        $('#kt_login_signin_submit').on('click', function (e) {
            e.preventDefault();

            validation.validate().then(function (status) {
                if (status == 'Valid') {
                    $.ajax({
                        data: {
                            login: $('#username').val(),
                            password: $('#password').val()
                        },
                        type: "post",
                        url: "login/check_login",
                        success: function (result) {
                            var abc = JSON.parse(result);
                            switch (abc['status']) {
                                case 'fail-wrongpwd':
                                    $.notify('Mot de passe ou login incorrect !', {
                                        type: 'danger',
                                        allow_dismiss: true,
                                        newest_on_top: true,
                                        mouse_over: true
                                    });

                                    break;
                                case 'fail-formdata':
                                    break;
                                case 'success':
                                    window.location = "home";
                                    break;
                                default:
                                    var notify = $.notify('Le serveur ne repond pas !', {
                                        type: 'danger',
                                        allow_dismiss: true,
                                        newest_on_top: true,
                                        mouse_over: true
                                    });
                                    // code block
                            }
                        }
                    });
                } else {
                    swal.fire({
                        text: "Sorry, looks like there are some errors detected, please try again.",
                        icon: "error",
                        buttonsStyling: false,
                        confirmButtonText: "Ok, got it!",
                        customClass: {
                            confirmButton: "btn font-weight-bold btn-light-primary"
                        }
                    }).then(function () {
                        KTUtil.scrollTop();
                    });
                }
            });
        });

        // Handle forgot button
        $('#kt_login_forgot').on('click', function (e) {
            e.preventDefault();
            _showForm('forgot');
        });

        // Handle signup
        $('#kt_login_signup').on('click', function (e) {
            e.preventDefault();
            _showForm('signup');
        });
    }

    var _handleForgotForm = function (e) {
        var validation;

        // Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
        validation = FormValidation.formValidation(
                KTUtil.getById('kt_login_forgot_form'),
                {
                    fields: {
                        email: {
                            validators: {
                                notEmpty: {
                                    message: '...'
                                }
                            }
                        }
                    },
                    plugins: {
                        trigger: new FormValidation.plugins.Trigger(),
                        bootstrap: new FormValidation.plugins.Bootstrap()
                    }
                }
        );

        // Handle submit button
        $('#kt_login_forgot_submit').on('click', function (e) {
            $.ajax({
                data: {
                    email: $('#fgt_email').val(),
                },
                type: "post",
                url: "login/login_forgot",
                success: function (result) {
                    var abc = JSON.parse(result);
                    switch (abc['status']) {
                        case 'fail-u404':
                            $.notify('Aucun compte utilisateur associé trouvé !', {
                                type: 'danger',
                                allow_dismiss: true,
                                newest_on_top: true,
                                mouse_over: true
                            });
                            break;
                        case 'success':
                            $.notify(abc['message'], {
                                type: 'success',
                                allow_dismiss: true,
                                newest_on_top: true,
                                mouse_over: true
                            });
                            $('#kt_login_forgot_cancel').click();
                            break;    
                        default:
                            var notify = $.notify('Le serveur ne repond pas !', {
                                type: 'danger',
                                allow_dismiss: true,
                                newest_on_top: true,
                                mouse_over: true
                            });
                            // code block
                    }
                }
            });
                    
            e.preventDefault();

            validation.validate().then(function (status) {
                if (status == 'Valid') {
                    // Submit form
                    KTUtil.scrollTop();
                } else {
                    swal.fire({
                        text: "Sorry, looks like there are some errors detected, please try again.",
                        icon: "error",
                        buttonsStyling: false,
                        confirmButtonText: "Ok, got it!",
                        customClass: {
                            confirmButton: "btn font-weight-bold btn-light-primary"
                        }
                    }).then(function () {
                        KTUtil.scrollTop();
                    });
                }
            });
        });

        // Handle cancel button
        $('#kt_login_forgot_cancel').on('click', function (e) {
            e.preventDefault();

            _showForm('signin');
        });
    }

    // Public Functions
    return {
        // public functions
        init: function () {
            _login = $('#kt_login');
            _handleSignInForm();
            _handleForgotForm();
        }
    };
}();

// Class Initialization
jQuery(document).ready(function () {
    KTLogin.init();
});
