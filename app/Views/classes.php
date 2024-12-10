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
                                            <li><a class="dropdown-item " href="<?= base_url('fitheal/profil') ?>"><i
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
    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-area set-bg" data-setbg="<?= base_url() ?>/gym/img/classes/classes-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb-content">
                        <h2>Classes</h2>
                        <div class="links">
                            <a href="./index.html">Home</a>
                            <a href="./classes.html" class="rt-breadcrumb">Classes</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->
    <!-- Classes Section Begin -->
    <section class="classes-section">
        <div class="container">
        <div class="row">
    <div class="col-md-4 col-sm-6">
        <div class="single-classes">
            <div class="classes-img">
                <img src="<?= base_url() ?>/gym/img/classes/classes-1.jpg" alt="">
            </div>
            <div class="classes-text">
                <h5>Pilates</h5>
                <p>Strengthen your core and improve flexibility with Pilates. A perfect blend of physical and mental focus to enhance balance and posture.</p>
            </div>
        </div>
    </div>
    <div class="col-md-4 col-sm-6">
        <div class="single-classes">
            <div class="classes-img">
                <img src="<?= base_url() ?>/gym/img/classes/classes-2.jpg" alt="">
            </div>
            <div class="classes-text">
                <h5>Body Building</h5>
                <p>Build strength and sculpt your physique with targeted workouts. Unlock your potential with expert guidance and structured routines.</p>
            </div>
        </div>
    </div>
    <div class="col-md-4 col-sm-6">
        <div class="single-classes">
            <div class="classes-img">
                <img src="<?= base_url() ?>/gym/img/classes/classes-3.jpg" alt="">
            </div>
            <div class="classes-text">
                <h5>Fitness</h5>
                <p>Achieve your fitness goals with dynamic exercises tailored to your needs. Boost your energy and overall well-being with fun and effective workouts.</p>
            </div>
        </div>
    </div>
    <div class="col-md-4 col-sm-6">
        <div class="single-classes">
            <div class="classes-img">
                <img src="<?= base_url() ?>/gym/img/classes/classes-4.jpg" alt="">
            </div>
            <div class="classes-text">
                <h5>Yoga</h5>
                <p>Relax your mind and strengthen your body with yoga. Experience the perfect harmony of breath, movement, and mindfulness.</p>
            </div>
        </div>
    </div>
    <div class="col-md-4 col-sm-6">
        <div class="single-classes">
            <div class="classes-img">
                <img src="<?= base_url() ?>/gym/img/classes/classes-5.jpg" alt="">
            </div>
            <div class="classes-text">
                <h5>TRX</h5>
                <p>Challenge your strength and stability with TRX suspension training. A versatile workout for full-body conditioning and endurance.</p>
            </div>
        </div>
    </div>
    <div class="col-md-4 col-sm-6">
        <div class="single-classes">
            <div class="classes-img">
                <img src="<?= base_url() ?>/gym/img/classes/classes-6.jpg" alt="">
            </div>
            <div class="classes-text">
                <h5>Spinning</h5>
                <p>Boost your cardio and burn calories with high-energy spinning sessions. Feel the rhythm and ride your way to better fitness.</p>
            </div>
        </div>
    </div>
</div>

        </div>
    </section>
    <!-- Classes Section End -->
    <!-- Fitness Plan Begin -->
    <section class="fitness-section inside-bg">
        <div class="container">
        <div class="row">
    <div class="col-lg-5 col-md-6">
        <div class="single-fitness-feature">
            <div class="fitness-number">
                <span>01</span>
            </div>
            <div class="fitness-text">
                <h4>Get Fitted</h4>
                <p>Take the first step towards fitness with a tailored approach. Experience personalized routines designed to fit your lifestyle and goals.</p>
            </div>
        </div>
        <div class="single-fitness-feature">
            <div class="fitness-number">
                <span>02</span>
            </div>
            <div class="fitness-text">
                <h4>Try Pilates</h4>
                <p>Discover the benefits of Pilates for a stronger core and improved flexibility. Build strength while maintaining balance and grace.</p>
            </div>
        </div>
        <div class="single-fitness-feature">
            <div class="fitness-number">
                <span>03</span>
            </div>
            <div class="fitness-text">
                <h4>Healthy Diet</h4>
                <p>Nourish your body with wholesome, balanced meals. Learn how to make smarter food choices for a healthier and more energized lifestyle.</p>
            </div>
        </div>
    </div>
    <div class="col-lg-5 col-md-6 offset-lg-2 text-md-right text-left">
        <div class="single-fitness-feature">
            <div class="fitness-number left-number">
                <span>04</span>
            </div>
            <div class="fitness-text left-text">
                <h4>Meditation</h4>
                <p>Embrace mindfulness and inner peace through meditation. Reconnect with yourself and reduce stress for overall mental clarity.</p>
            </div>
        </div>
        <div class="single-fitness-feature">
            <div class="fitness-number left-number">
                <span>05</span>
            </div>
            <div class="fitness-text left-text">
                <h4>Diet Plan</h4>
                <p>Create a sustainable diet plan tailored to your needs. Stay consistent with meal planning and enjoy long-term health benefits.</p>
            </div>
        </div>
        <div class="single-fitness-feature">
            <div class="fitness-number left-number">
                <span>06</span>
            </div>
            <div class="fitness-text left-text">
                <h4>Grow Muscles</h4>
                <p>Achieve your strength goals with a structured muscle-building program. Combine effective workouts with proper nutrition for visible results.</p>
            </div>
        </div>
    </div>
</div>

        </div>
    </section>
    <!-- Fitness Plan End -->
    <!-- Classes Call To Action Section -->
    <section class="classes-callto-section set-bg" data-setbg="<?= base_url() ?>/gym/img/classes/classes-callto-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="classes-callto-text">
                        <span>Join our gym now!</span>
                        <h2>25% Discount</h2>
                        <a href="#" class="primary-btn">Join</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Classes Call To Action End -->
   <!-- Footer Section Begin -->
   <footer class="footer-section set-bg" data-setbg="<?= base_url() ?>/gym/img/footer-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-content">
                        <div class="footer-logo">
                            <a href="#"><img src="<?= base_url() ?>/img/logo-foot.png" alt=""></a>
                        </div>
                        <div class="footer-menu">
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="<?= base_url('fitheal/acceuil') ?>">Home</a></li>
                                    <li><a href="<?= base_url('fitheal/about') ?>">About us</a></li>
                                    <li><a href="<?= base_url('fitheal/classes') ?>">Classes</a></li>
                                    <li><a href="<?= base_url('fitheal/contact') ?>">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="copyright">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;
                            <script>document.write(new Date().getFullYear());</script> All rights reserved
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->


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