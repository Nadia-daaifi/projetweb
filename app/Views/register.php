<!DOCTYPE html>
<html class="h-100" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Fitheal</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url() ?>/dash/assets/images/favicon.png">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
        integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="<?= base_url() ?>/dash/css/style.css" rel="stylesheet">

</head>

<body class="h-100">

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
                                <a class="text-center" href="index.html">
                                    <h4>Fitheal</h4>
                                </a>
                                <?php
                                $errors = session()->getFlashdata('errors');
                                if (!empty($errors)) {
                                    ?>
                                    <div class="alert alert-danger" role="alert">
                                        <ul>
                                            <?php foreach ($errors as $error): ?>
                                                <li><?= esc($error) ?></li>
                                            <?php endforeach ?>
                                        </ul>
                                    </div>
                                <?php } ?>
                                <?php
                                if (session()->getFlashdata('succes')) { ?>
                                    <div class="alert alert-success" role="alert">
                                        Registration successful
                                    </div><?php } ?>
                                <?php
                                echo form_open('auth/save_register', ['enctype' => 'multipart/form-data']);
                                ?>
                                <div class="mt-5 mb-5 login-input">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="username" placeholder="Username"
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" placeholder="Email"
                                            required>
                                    </div>
                                    <div class="form-group ">
                                        <br> Sexe :
                                        &nbsp;&nbsp;&nbsp; <input type="radio" value="male" name="sexe"> male &nbsp;&nbsp;&nbsp; 
                                        <input type="radio" value="female" name="sexe"> female
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-5">
                                            <input type="number" class="form-control" name="age" placeholder="Age">
                                        </div>
                                        <div class="form-group col-md-5">
                                            <input type="text" class="form-control" name="phone_num"
                                                placeholder="Phone number" required />
                                        </div>

                                    </div>
                                    <div class="form-group">
                                        <input type="file" class="form-control" name="photo" accept="image/*"
                                            required />
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" name="password"
                                            placeholder="Password" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" name="repassword"
                                            placeholder="Retype Password" required>
                                    </div>
                                    <button type="submit" class="btn login-form__btn submit w-100">Sign in</button>
                                </div>
                                <?php
                                echo form_close('');
                                ?>
                                <p class="mt-5 login-form__footer">Have account <a href="<?= base_url('auth/login') ?>"
                                        class="text-primary">Sign Up </a> now</p>
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
</body>

</html>