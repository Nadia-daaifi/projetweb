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
    <!-- Header End -->

    <!-- Hero Slider Section Begin -->
    <section class="hero-slider">
        <div class="slide-items owl-carousel">
            <div class="single-slide set-bg active" data-setbg="<?= base_url() ?>/gym/img/bg.jpg">

                <h1>Be Fit.Top Gym</h1>
                <a href="#" class="primary-btn">Read More</a>
            </div>
            <div class="single-slide set-bg" data-setbg="<?= base_url() ?>/gym/img/bg-2.jpg">

                <h1>Be Fit.Top Trainer</h1>
                <a href="#" class="primary-btn">Read More</a>
            </div>
            <div class="single-slide set-bg" data-setbg="<?= base_url() ?>/gym/img/bg-3.jpg">

                <h1>Be Fit.Top Body</h1>
                <a href="#" class="primary-btn">Read More</a>
            </div>
        </div>
    </section>
    <!-- Hero Slider End -->
    <!-- Features Section Begin -->
    <section class="features-section spad">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="single-features">
                    <div class="features-img">
                        <img src="<?= base_url() ?>/gym/img/features/feature-1.jpg" alt="">
                    </div>
                    <div class="feature-text">
                        <div class="feature-icon">
                            <img src="<?= base_url() ?>/gym/img/features/icon-1.png" alt="">
                        </div>
                        <h5>Amazing Setting</h5>
                        <p>Our gym offers a beautiful and motivating environment, designed to help you stay focused and achieve your fitness goals. Enjoy a modern and inspiring space while working on your health.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="single-features">
                    <div class="features-img">
                        <img src="<?= base_url() ?>/gym/img/features/feature-2.jpg" alt="">
                    </div>
                    <div class="feature-text">
                        <div class="feature-icon">
                            <img src="<?= base_url() ?>/gym/img/features/icon-2.png" alt="">
                        </div>
                        <h5>Best Trainers</h5>
                        <p>Our professional trainers are dedicated to helping you reach your fitness goals. With years of experience and passion for fitness, they provide personalized coaching to ensure you get the best results.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="single-features">
                    <div class="features-img">
                        <img src="<?= base_url() ?>/gym/img/features/feature-3.jpg" alt="">
                    </div>
                    <div class="feature-text">
                        <div class="feature-icon">
                            <img src="<?= base_url() ?>/gym/img/features/icon-3.png" alt="">
                        </div>
                        <h5>Diet Plans</h5>
                        <p>Achieve your fitness goals faster with our personalized diet plans. Our nutrition experts create a tailored meal plan that supports your fitness objectives, whether you're aiming to lose weight or build muscle.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services Section Begin -->
<section class="services-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="section-title">
                    <span>Features</span>
                    <h2>Services</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="single-service">
                    <img src="<?= base_url() ?>/gym/img/icon-1.png" alt="">
                    <h5>Pilates</h5>
                    <p>Our Pilates classes offer a full-body workout that enhances flexibility, strength, and posture. Join us to improve your core strength and overall fitness.</p>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-service c-text">
                    <img src="<?= base_url() ?>/gym/img/icon-2.png" alt="">
                    <h5>Free Lifting</h5>
                    <p>Free weight lifting is perfect for building muscle and improving strength. Our gym is equipped with high-quality free weights for all fitness levels, from beginners to experienced lifters.</p>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-service">
                    <img src="<?= base_url() ?>/gym/img/icon-3.png" alt="">
                    <h5>Yoga</h5>
                    <p>Yoga is the perfect way to enhance flexibility, reduce stress, and improve your overall well-being. Our yoga classes cater to all skill levels, from beginner to advanced practitioners.</p>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-service">
                    <img src="<?= base_url() ?>/gym/img/icon-4.png" alt="">
                    <h5>Spinning</h5>
                    <p>Our high-energy spinning classes are designed to improve your cardiovascular health and burn calories while enjoying an intense, group-based workout.</p>
                </div>
            </div>
        </div>
        <div class="row p-70">
            <div class="col-lg-12 text-center">
                <a href="#" class="service-btn primary-btn">See all the services</a>
            </div>
        </div>
    </div>
</section>
<!-- Services Section End -->

<!-- Trainer Section Begin -->
<section class="trainer-section set-bg" data-setbg="<?= base_url() ?>/gym/img/trainer-bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="section-title">
                    <span>The Best</span>
                    <h2>Trainers</h2>
                    <a href="#" class="primary-btn trainer-btn">See All</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="single-trainer">
                    <div class="trainer-img">
                        <img src="<?= base_url() ?>/gym/img/trainer/trainer-1.jpg" alt="">
                        <div class="img-hover">
                            <a href="#"><i class="fa fa-plus"></i></a>
                        </div>
                    </div>
                    <div class="trainer-text">
                        <h5>Rachel Smith <span>Aerobics Instructor</span></h5>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="single-trainer">
                    <div class="trainer-img">
                        <img src="<?= base_url() ?>/gym/img/trainer/trainer-2.jpg" alt="">
                        <div class="img-hover">
                            <a href="#"><i class="fa fa-plus"></i></a>
                        </div>
                    </div>
                    <div class="trainer-text">
                        <h5>Micheal Williams <span>Aerobics Instructor</span></h5>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="single-trainer">
                    <div class="trainer-img">
                        <img src="<?= base_url() ?>/gym/img/trainer/trainer-3.jpg" alt="">
                        <div class="img-hover">
                            <a href="#"><i class="fa fa-plus"></i></a>
                        </div>
                    </div>
                    <div class="trainer-text">
                        <h5>James Brown <span>Aerobics Instructor</span></h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Trainer Section End -->

<!-- Upcoming Event Begin -->
<section class="upcoming-event-section spad-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="upcoming-classes">
                    <div class="up-title">
                        <span>Next</span>
                        <h5>Upcoming Classes</h5>
                    </div>
                    <ul class="classes-time">
                        <li><img src="<?= base_url() ?>/gym/img/stopwatch.png" alt=""> Gym Fitness <span>11:00 - 12:00</span></li>
                        <li><img src="<?= base_url() ?>/gym/img/stopwatch.png" alt=""> Pilates <span>12:00 - 13:00</span></li>
                        <li><img src="<?= base_url() ?>/gym/img/stopwatch.png" alt=""> Spinning <span>13:00 - 14:00</span></li>
                        <li><img src="<?= base_url() ?>/gym/img/stopwatch.png" alt=""> Yoga <span>14:00 - 15:00</span></li>
                        <li><img src="<?= base_url() ?>/gym/img/stopwatch.png" alt=""> Gym Fitness <span>15:00 - 16:00</span></li>
                        <li><img src="<?= base_url() ?>/gym/img/stopwatch.png" alt=""> Pilates <span>16:00 - 17:00</span></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="membership-card set-bg" data-setbg="<?= base_url() ?>/gym/img/m-card.jpg">
                    <div class="membership-details">
                        <div class="up-title">
                            <span>Next</span>
                            <h5>Membership Cards</h5>
                        </div>
                        <div class="discount">
                            <h1>25% <span>Discount</span></h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="member-sign-up set-bg" data-setbg="<?= base_url() ?>/gym/img/signup-bg.jpg">
                    <div class="up-title">
                        <span>New</span>
                        <h5>Personal Trainer</h5>
                    </div>
                    <p>Sign up for a personal trainer and take your fitness journey to the next level. Whether you're aiming for weight loss or muscle gain, our trainers will help you achieve your personal goals.</p>
                    <div class="member-signup-btn">
                        <a href="#" class="primary-btn">Sign up Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Upcoming Event Section End -->
    <!-- Upcoming Event End -->
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