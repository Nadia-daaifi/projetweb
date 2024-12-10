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
    <section class="breadcrumb-area set-bg" data-setbg="<?= base_url() ?>/gym/img/contact/contact-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb-content">
                        <h2>Contact</h2>
                        <div class="links">
                            <a href="./index.html">Home</a>
                            <a href="./contact.html" class="rt-breadcrumb">Contact</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->
    <!-- Contact Section Begin -->
    <section class="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="contact-info">
                        <div class="contact-details">
                            <h2>Get in Touch</h2>
                            <p>We’d love to hear from you! Reach out to us for any inquiries, feedback, or support.
                                Whether you have questions about our services or need guidance on your fitness journey,
                                we’re here to help. Let’s work together to achieve your goals and create a healthier,
                                happier you.</p>
                        </div>
                        <div class="contact-form">
                            <?php if (session()->getFlashdata('success')): ?>
                                <p style="color: green;"><?= session()->getFlashdata('success') ?></p>
                            <?php endif; ?>

                            <?php if (session()->getFlashdata('errors')): ?>
                                <ul style="color: red;">
                                    <?php foreach (session()->getFlashdata('errors') as $error): ?>
                                        <li><?= esc($error) ?></li>
                                    <?php endforeach; ?>
                                </ul>
                            <?php endif; ?>
                            <?php
                            echo form_open('fitheal/store');
                            ?>
                            <div class="row">
                                <div class="col-lg-6">
                                    <input type="text" name="name" placeholder="Name">
                                </div>
                                <div class="col-lg-6">
                                    <input type="email" name="email" placeholder="Email">
                                </div>
                                <div class="col-lg-12">
                                    <input type="text" name="subject" placeholder="Subject">
                                    <textarea name="message" placeholder="Message"></textarea>
                                    <button type="submit" class="site-btn">Send Message</button>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="map"><iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48359.89302507648!2d-73.95762813994347!3d40.75117343692072!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2592bc7bab159%3A0x56156cc4c5ee8e31!2sLong+Island+City%2C+Queens%2C+NY%2C+USA!5e0!3m2!1sen!2sbd!4v1561474745218!5m2!1sen!2sbd"
                style="border:0" allowfullscreen></iframe></div>
    </section>
    <!-- Contact Section End -->
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