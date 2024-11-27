
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="TopGym Template">
    <meta name="keywords" content="TopGym, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact </title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,300i,400,500,700,900" rel="stylesheet">

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
                                <li><a href="<?= base_url('site/acceuil') ?>">Home</a></li>
                                <li><a href="<?= base_url('site/about') ?>">About us</a></li>
                               <li>
                                <div class="logo">
                            <a href="./index.html">
                                <img src="<?= base_url() ?>/gym/img/logo.png" alt="">
                            </a>
                        </div></li>
                                <li><a href="<?= base_url('site/classes') ?>">Classes</a></li>
                                <li><a href="<?= base_url('site/contact') ?>">Contact</a></li>
                                <li class="search-btn search-trigger p-7 bg-primary"> <a href="<?= base_url('auth/register') ?>" class=" text-light "> Sign Up </a></li>
                            </ul>
                        </nav>
                        <div id="mobile-menu-wrap"></div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header End -->
   
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
                            <p>Pellentesque dictum nisl in nibh dictum volutpat nec a quam. Vivamus suscipit nisl quis
                                nulla pretium, vitae ornare leo.Aenean id auctor libero, gravida venenatis justo. Sed ut
                                arcu nibh. Fusce lacinia arcu in ultrices finibus. Donec vestibulum imperdiet efficitur.
                            </p>
                            <ul class="address">
                                <li>Main Str, no 23, New York</li>
                                <li>+546 990221 123</li>
                                <li>Fitness@contact.com</li>
                            </ul>
                        </div>
                        <div class="contact-form">
                            <form action="#">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <input type="text" placeholder="Name">
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="email" placeholder="Email">
                                    </div>
                                    <div class="col-lg-12">
                                        <input type="text" placeholder="Subject">
                                        <textarea placeholder="Message"></textarea>
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
                            <a href="#"><img src="<?= base_url() ?>/gym/img/logo.png" alt=""></a>
                        </div>
                        <div class="footer-menu">
                        <div class="footer-menu">
                            <ul>
                                <li><a href="<?= base_url('site/acceuil') ?>">Home</a></li>
                                <li><a href="<?= base_url('site/about') ?>">About us</a></li>
                                <li><a href="<?= base_url('site/classes') ?>">Classes</a></li>
                                <li><a href="<?= base_url('site/contact') ?>">Contact</a></li>
                            </ul>
                        </div>
                        </div>
                        <div class="subscribe-form">
                            <form action="#">
                                <input type="text" placeholder="your Email">
                                <button type="submit">Sign Up</button>
                            </form>
                        </div>
                       
                        <div class="footer-icon-img">
                            <img src="<?= base_url() ?>/gym/img/footer-icon.png" alt="">
                        </div>
                        <div class="copyright">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved 
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