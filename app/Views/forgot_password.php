<!DOCTYPE html>
<html class="h-100" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Quixlab - Bootstrap Admin Dashboard Template by Themefisher.com</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url() ?>/dash/assets/images/favicon.png">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
        integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="<?= base_url() ?>/dash/css/style.css" rel="stylesheet">

</head>

<div class="h-100">

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->


    <div class="login-form-bg h-100">
    <div class="container h-100">
        <div class="row justify-content-center h-100">
            <div class="col-xl-6">
                <div class="form-input-content">
                    <div class="card login-form mb-0">
                        <div class="card-body pt-5">
                            <a class="text-center" href="<?= base_url('/') ?>">
                                <h4>Fitheal</h4>
                            </a>

                            <?php if (session()->getFlashdata('error')): ?>
                                <div class="alert alert-danger">
                                    <?= session()->getFlashdata('error') ?>
                                </div>
                            <?php endif; ?>

                            <?php if (session()->getFlashdata('success')): ?>
                                <div class="alert alert-success">
                                    <?= session()->getFlashdata('success') ?>
                                </div>
                            <?php endif; ?>

                            <?= form_open('auth/process_forgot_password') ?>
                            <div class="mt-5 mb-5 login-input">
                                <div class="form-group">
                                    <input type="email" class="form-control" name="email" placeholder="Email" required>
                                </div>
                                <button type="submit" class="btn login-form__btn submit w-100">Send Password</button>
                            </div>
                            <?= form_close() ?>

                            <p class="mt-5 login-form__footer">
                                Back to <a href="<?= base_url('auth/login') ?>" class="text-primary">Sign in</a>.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>





<!--**********************************
        Scripts
    ***********************************-->
<script src="<?= base_url() ?>/dash/plugins/common/common.min.js"></script>
<script src="<?= base_url() ?>/dash/js/custom.min.js"></script>
<script src="<?= base_url() ?>/dash/js/settings.js"></script>
<script src="<?= base_url() ?>/dash/js/gleek.js"></script>
<script src="<?= base_url() ?>/dash/js/styleSwitcher.js"></script>