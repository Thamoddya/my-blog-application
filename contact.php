<?php
session_start();
$PageName = "Contact page";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- =============== PAGE TITLE =============== -->
    <title>Thamoddya Rashmitha - <?php echo $PageName ?></title>

    <?php
    include_once "./components/head.imports.php";
    ?>
</head>

<body>
    <!-- SCROLL TO TOP -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>

    <?php
    include_once "./components/navbar.component.php";
    ?>

    <!-- ============= CONTACT TOP ============= -->
    <section class="contact-wrapper single-post-wrapper blog-list-wrapper">
        <div class="container">
            <div class="section-head">
                <h2 class="heading-secondary">Contact</h2>
                <ul class="c-bredcrumb">
                    <li>
                        <a href="#"> Home </a>
                    </li>
                    <li><a href="#"> Contact </a></li>
                </ul>
            </div>
            <div class="row align-items-center gy-5 gy-lg-0">
                <div class="col-lg-6">
                    <div class="left-content">
                        <h2 class="heading-primary">Get in touch</h2>
                        <p class="body-text mt-20 mb-30">
                            After you submit your request using this form, we will answer any of your questions
                            within some minutes.
                        </p>

                        <div class="contact-profile">
                            <div class="profile-item">
                                <div class="profile-avatar bg-cover" style="background-image: url('assets/img/recent-post/post-author1.png')"></div>
                                <div class="profile-details">
                                    <h3 class="name">Thamoddya Rashmitha</h3>
                                    <span class="role body-text">Developer and Owner</span>
                                    <ul class="contact-medium mt-10">
                                        <li class="medium-item">+94 76 945 8554</li>
                                        <li class="medium-item">thamoddya.working@gmail.com</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1">
                    <div class="right-content">
                        <div class="contact_us_contact_form contact-form">
                            <form name="contact-form" id="ContactForm">
                                <h3 class="form-heading heading-2 white mb-20">Send a message</h3>
                                <input type="text" class="form-control form-field" id="InputName" name="full_name" placeholder="Enter Name" />
                                <input type="email" class="form-control form-field" id="InputEmail" name="email" placeholder="Enter Email" />
                                <input type="text" class="form-control form-field" id="InputMobile" name="mobile" placeholder="Enter Mobile" />
                                <input type="text" class="form-control form-field" id="InputSubject" name="subject" placeholder="Enter Subject" />
                                <textarea class="form-control form-text-field" id="InputMessage" name="message" placeholder="Enter Message"></textarea>

                                <button class="button button-primary mt-10" type="submit">Send Message</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============= CONTACT MAP ============= -->
    <div class="map-box clearfix section-padding">
        <div class="container">
            <div id="map_container">
                <div id="map_creadom" style="height: 400px"></div>
            </div>
        </div>
    </div>

    <!-- ============= FOOTER ============= -->
    <footer class="footer-wrapper">
        <div class="footer-top">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-4">
                        <div class="widget-about">
                            <h3 class="footer-heading">About</h3>
                            <p class="body-text">
                                Consequat quis laboris excepteur sint. Culpa quis cillum qui sunt in ad sint eu est
                                consectetur. Do cupidatat pariatur nulla ad ad proident qui culpa duis velit
                                pariatur.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="widget-categories">
                            <h3 class="footer-heading">Categories</h3>
                            <div class="categories-tags">
                                <a href="single-post.html" class="active"> travel </a>
                                <a href="single-post.html"> kitchen </a>
                                <a href="single-post.html"> cars </a>
                                <a href="single-post.html"> garden </a>
                                <a href="single-post.html"> home </a>
                                <a href="single-post.html"> holiday </a>
                                <a href="single-post.html"> software </a>
                                <a href="single-post.html"> health </a>
                                <a href="single-post.html"> appliences </a>
                                <a href="single-post.html"> money </a>
                                <a href="single-post.html"> pets </a>
                                <a href="single-post.html"> office </a>
                                <a href="single-post.html"> electronics </a>
                                <a href="single-post.html"> hobby </a>
                                <a href="single-post.html"> baby </a>
                                <a href="single-post.html"> digital </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 offset-xl-1">
                        <div class="widget-search">
                            <h3 class="footer-heading">Search</h3>
                            <p class="body-text">A breakdown or a flat tire can happen</p>
                            <div class="widget-search-box">
                                <input type="text" placeholder="Search" />
                                <button class="search-btn">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="bottom-content">
                    <div class="bottom-left">
                        <p>©Newlog 2022. All rights reserved.</p>
                    </div>
                    <div class="bottom-right">
                        <div class="footer-bottom-links">
                            <a href="#">Privacy Policy</a>
                            <span>|</span>
                            <a href="#">Terms and conditions</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- ============= VENDORS JS ============= -->
    <script src="assets/js/vendors/jquery-1.12.4.min.js"></script>
    <script src="assets/js/vendors/bootstrap.min.js"></script>
    <!--GOOGEL MAP -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDmj6teVibo65eAAix-ZKeEhwwBrRcCbj8"></script>
    <!--GOOGEL MAP -->
    <script type="text/javascript" src="assets/contact-form/google-map.js"></script>

    <!--validate -->
    <script type="text/javascript" src="assets/contact-form/jquery.validate.min.js"></script>
    <!--contact -->
    <script type="text/javascript" src="assets/contact-form/contact.js"></script>
    <script src="assets/js/vendors/jquery.waypoints.min.js"></script>
    <script src="assets/js/vendors/slick.min.js"></script>
    <script src="assets/js/vendors/metismenu.js"></script>

    <!-- ============= MAIN JS ============= -->
    <script src="assets/js/active.js"></script>
</body>

<!-- Mirrored from html.themesdeveloper.net/newlog/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 13 May 2023 04:56:38 GMT -->

</html>