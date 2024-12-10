<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="TopGym Template">
    <meta name="keywords" content="TopGym, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fitheal</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url() ?>/img/logo1.png">


    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,300i,400,500,700,900" rel="stylesheet">
    <!-- CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- JavaScript Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Css Styles -->
    <link rel="stylesheet" href="<?= base_url() ?>/gym/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url() ?>/gym/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url() ?>/gym/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url() ?>/gym/css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url() ?>/gym/css/barfiller.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url() ?>/gym/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url() ?>/gym/css/style.css" type="text/css">
    <link href="<?= base_url() ?>/dash/css/style.css" rel="stylesheet">

</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>
    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="main-menu">
                        <nav class="mobile-menu">
                            <ul>
                                <li><a href="<?= base_url('fitheal/acceuil') ?>">Home</a></li>
                                <li><a href="<?= base_url('fitheal/about') ?>">About us</a></li>
                                <li>
                                    <div class="logo">
                                        <a href="./index.html">
                                            <img src="<?= base_url() ?>/img/logo.png" alt="">
                                        </a>
                                    </div>
                                </li>
                                <li><a href="<?= base_url('fitheal/classes') ?>">Classes</a></li>
                                <li><a href="<?= base_url('fitheal/contact') ?>">Contact</a></li>

                                <?php if (session()->get('log')): ?>
                                    <!-- Menu après connexion -->
                                    <li class="nav-item dropdown ">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <img src="<?= base_url('/img/' . session()->get('photo')) ?>" alt="User Photo"
                                                class="rounded-circle" style="width: 30px; height: 30px;">
                                            <?= esc(session()->get('username')) ?>
                                        </a>
                                        <ul class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown">
                                            <li><a class="dropdown-item " href="<?= base_url('admin/profil') ?>"><i
                                                        class="fa fa-user"></i> Profile</a></li>
                                            <li><a class="dropdown-item " href="<?= base_url('auth/logout') ?>">
                                                    <i class=" fa fa-key"></i> Logout</a></li>
                                        </ul>
                                    </li>

                                <?php else: ?>
                                    <!-- Menu avant connexion -->
                                    <li class="search-btn search-trigger p-7 bg-primary">
                                        <a href="<?= base_url('auth/register') ?>" class="text-light">Sign Up</a>
                                    </li>
                                <?php endif; ?>
                            </ul>
                        </nav>
                        <div id="mobile-menu-wrap"></div>
                    </div>
                </div>

            </div>
        </div>
    </header>
    <section class="classes-section">
        <div class="container">
            <div class="row my-5">
                <div class="col-lg-8 col-xl-8 my-8  m-5">
                    <div class="card">
                        <div class="card-body">
                            <div class="media align-items-center mb-4">
                                <img class="mr-3" src="<?= base_url('img/' . session()->get('photo')) ?>" width="120"
                                    height="120" alt="">
                                <div class="media-body">
                                    <h3 class="mb-0"><?= $user['username'] ?></h3>
                                </div>
                            </div>
                            <hr>
                            <br>
                            <h4>About Me</h4>
                            <ul class="card-profile__info">
                                <li><strong class="text-dark mr-4">Name</strong>
                                    <span><?= $user['username']  ?></span>
                                </li>
                                <li class="mb-1"><strong class="text-dark mr-4">Mobile</strong>
                                        <span><?= $user['phone_num']  ?></span>
                                    </li>
                                <li><strong class="text-dark mr-4">Email</strong>
                                    <span><?= $user['email']  ?></span>
                                </li>
                                <li><strong class="text-dark mr-4">sexe</strong>
                                    <span><?= $user['sexe']  ?></span>
                                </li>
                                <li><strong class="text-dark mr-4">Age</strong>
                                    <span><?= $user['age']  ?></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- #/ container -->
        </div>
        </section>
        <!-- Js Plugins -->
        <script src="<?= base_url() ?>/gym/js/jquery-3.3.1.min.js"></script>
        <script src="<?= base_url() ?>/gym/js/bootstrap.min.js"></script>
        <script src="<?= base_url() ?>/gym/js/jquery.slicknav.js"></script>
        <script src="<?= base_url() ?>/gym/js/owl.carousel.min.js"></script>
        <script src="<?= base_url() ?>/gym/js/jquery.magnific-popup.min.js"></script>
        <script src="<?= base_url() ?>/gym/js/circle-progress.min.js"></script>
        <script src="<?= base_url() ?>/gym/js/jquery.barfiller.js"></script>
        <script src="<?= base_url() ?>/gym/js/main.js"></script>


</body>

</html>