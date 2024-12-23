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
    <section class="breadcrumb-area set-bg" data-setbg="<?= base_url() ?>/gym/img/breadcrumb-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb-content">
                        <h2>About us</h2>
                        <div class="links">
                            <a href="./index.html">Home</a>
                            <a href="./about-us.html" class="rt-breadcrumb">About us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->
    <!-- About Us Begin -->
    <section class="about-us-area spad-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>Features</span>
                        <h2>Who We Are</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-7">
                    <div class="about-text">
                        <p class="t-text">At TopGym, we are dedicated to helping you achieve your fitness goals. With a
                            commitment to excellence, we provide personalized guidance, top-notch facilities, and a
                            supportive community to ensure you succeed on your journey to a healthier and stronger you.
                        </p>
                        <div class="about-features">
                            <div class="about-features-item">
                                <div class="about-feature-img">
                                    <img src="<?= base_url() ?>/gym/img/check.png" alt="">
                                </div>
                                <div class="about-feature-text">
                                    <h4>We Have the Best Gym Trainers</h4>
                                    <p>Our certified trainers are here to guide you every step of the way. From
                                        personalized workout plans to expert advice, they ensure you train effectively
                                        and safely while staying motivated.</p>
                                </div>
                            </div>
                            <div class="about-features-item">
                                <div class="about-feature-img">
                                    <img src="<?= base_url() ?>/gym/img/check.png" alt="">
                                </div>
                                <div class="about-feature-text">
                                    <h4>The Best Fitness Facilities</h4>
                                    <p>Our state-of-the-art gym is equipped with cutting-edge machines and a welcoming
                                        atmosphere. Experience a fitness center designed for optimal performance and
                                        comfort.</p>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="primary-btn">Read More About Fitheal</a>
                    </div>
                </div>
                <div class="col-lg-5">
                    <img class="about-img" src="<?= base_url() ?>/gym/img/about-us.jpg" alt="">
                </div>
            </div>
        </div>

    </section>
    <!-- About Us End -->
    <!-- Skills Section Begin -->
    <section class="skill-section set-bg" data-setbg="<?= base_url() ?>/gym/img/about-bg-2.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>Features</span>
                        <h2>Why Choose Us?</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-5">
                    <div class="skill-text">
                        <p>At Fitheal, we are committed to helping you achieve your fitness goals with the best
                            facilities, expert trainers, and a supportive community. Whether you’re a beginner or a
                            seasoned athlete, our tailored programs ensure your journey is as effective and enjoyable as
                            possible.</p>
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-1">
                    <div class="skill-bar">
                        <div id="bar1" class="single-bar barfiller">
                            <span class="fill" data-percentage="75"></span>
                            <h5>Bodybuilding</h5>
                            <div class="tipWrap">
                                <span class="tip"></span>
                            </div>
                        </div>
                        <div id="bar2" class="single-bar barfiller">
                            <span class="fill" data-percentage="95"></span>
                            <h5>Training</h5>
                            <div class="tipWrap">
                                <span class="tip"></span>
                            </div>
                        </div>
                        <div id="bar3" class="single-bar barfiller">
                            <span class="fill" data-percentage="85"></span>
                            <h5>Fitness</h5>
                            <div class="tipWrap">
                                <span class="tip"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-50">
                <div class="col-lg-4 col-sm-6">
                    <div class="single-counter">
                        <div class="counter-icon">
                            <img src="<?= base_url() ?>/gym/img/shirt-icon.png" alt="">
                        </div>
                        <span class="counter">561</span>
                        <p>Happy Members</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single-counter">
                        <div class="counter-icon">
                            <img src="<?= base_url() ?>/gym/img/certify.png" alt="">
                        </div>
                        <span class="counter">12</span>
                        <p>Expert Trainers</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single-counter">
                        <div class="counter-icon">
                            <img src="<?= base_url() ?>/gym/img/award-icon.png" alt="">
                        </div>
                        <span class="counter">25</span>
                        <p>Awards Won</p>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- Skills Section End -->
    <!-- Testimonial Section Begin -->
    <section class="testimonial-section spad-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>What Clients Say</span>
                        <h2>Testimonials</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="testimonial-content">
                        <div class="testimonial-pic set-bg"
                            data-setbg="<?= base_url() ?>/gym/img/testimonial/testimonial-1.png"></div>
                        <div class="testimonial-text">
                            <h4>Megan Smith, <span>Client</span></h4>
                            <p>"Fitheal completely changed my fitness journey. The trainers are so supportive and the
                                facilities are top-notch. I've achieved results I never thought were possible!"</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="testimonial-content">
                        <div class="testimonial-pic set-bg"
                            data-setbg="<?= base_url() ?>/gym/img/testimonial/testimonial-2.png"></div>
                        <div class="testimonial-text">
                            <h4>Michael Joe, <span>Client</span></h4>
                            <p>"Joining Fitheal was one of the best decisions I've ever made. The personalized training
                                programs and positive atmosphere keep me motivated every day!"</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- Testimonial Section End -->
    <!-- Call To Action Section Begin -->
    <section class="about-callto-section set-bg" data-setbg="<?= base_url() ?>/gym/img/callto-bg.png">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="about-callto-text">
                        <div class="cl-left">
                            <h2>Join our gym now!</h2>

                        </div>
                        <div class="cl-right">
                            <a href="#" class="primary-btn">Join</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Call To Action Section End -->
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