<?php
session_start();
$PageName = "Blog Home ";
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
    include_once "./layouts/Home/hero.home.php";
    ?>


    <!-- ============= FEATURED TOPICS ============= -->
    <section class="featured-topics-wrapper section-padding">
        <div class="container">
            <div class="section-head">
                <h2 class="heading-primary">Latest Topics</h2>
                <a href="#" class="button button-minimal">
                    View all
                    <span class="icon">
                        <img src="assets/img/icons/long-arrow.png" alt="arrow" />
                    </span>
                </a>
            </div>
            <div class="row gy-5">
                <div class="col-lg-9 left-content">

                    <?php
                    include_once "./layouts/Home/lastestTopics.home.php";
                    ?>

                </div>
                <div class="col-lg-3">
                    <div class="featured-topic-slidebar">
                        <div class="sidebar-widget widget-categories">
                            <div class="gradient-bar mb-30"></div>
                            <h3 class="heading-tertiary mb-20">Categories</h3>

                            <?php
                            require_once "./layouts/Home/Categories.home.php";
                            ?>

                            <div class="widget-ad-banner two bg-cover" style="background-image: url('assets/img/blog/sidebar-add-banner.gif')">
                                <div class="content">
                                    <a href="https://thamo.ga/" class="button icon-button active ">
                                        <span>
                                            <i class="fas fa-chevron-right"></i>
                                        </span>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
    </section>

    <!-- ============= AD CAMPAIGN ============= -->
    <div class="container mt-2">
        <div class="ad-campaign bg-cover" style="background-image: url('assets/img/add-campaign-1.png')">
            <div class="content-left">
                <span class="discount">Knowladge Addict</span>
            </div>
            <div class="content-right">
                <div class="content offset-lg-4 d-none d-lg-flex">
                    <a href="#" class="button icon-button active ">
                        <span class="icon">
                            <i class="fas fa-chevron-right"></i>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- ============= TRENDING TOPICS ============= -->
    <section class="trending-wrapper section-padding">
        <div class="container">
            <div class="section-head">
                <h2 class="heading-primary">Trending topics</h2>
                <a href="blog-list.php" class="button button-minimal">
                    View all
                    <span class="icon">
                        <img src="assets/img/icons/long-arrow.png" alt="arrow" />
                    </span>
                </a>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row gy-3">
                <?php
                include_once "./layouts/Home/trending.home.php";
                ?>
            </div>
        </div>
    </section>

    <!-- ============= DISCUSSED POST ============= -->
    <section class="discussed-post-wrapper section-padding">
        <div class="container">
            <div class="section-head">
                <h2 class="heading-primary">Most Engaged Post</h2>
                <a href="blog-list.php" class="button button-minimal">
                    View all
                    <span class="icon">
                        <img src="assets/img/icons/long-arrow.png" alt="arrow" />
                    </span>
                </a>
            </div>
            <div class="row gy-5">
                <div class="col-lg-9 left-content">

                    <?php
                    include_once "./layouts/Home/mostDiscussed.home.php";
                    ?>

                </div>
                <div class="col-lg-3">
                    <div class="sidebar-widget">
                        <div class="gradient-bar mb-30"></div>
                        <!-- Cat item -->

                        <?php
                        include_once "./layouts/Home/engagedPostpreviewPost.home.php";
                        ?>
                        <!-- WIDGET SOCIAL PROFILE -->
                        <div class="widget-social-profile">
                            <h3 class="heading-secondary">Contact Me</h3>
                            <p class="body-text">You Can Find Me Here</p>
                            <div class="social-items">
                                <a href="https://web.facebook.com/Thamoddya" class="social-link">
                                    <span class="icon">
                                        <i class="fab fa-facebook-f"></i>
                                    </span>
                                </a>
                                <a href="https://www.linkedin.com/in/thamoddya-rashmitha/" class="social-link">
                                    <span class="icon">
                                        <i class="fab fa-linkedin-in"></i>
                                    </span>
                                </a>
                                <a href="https://wa.me/0769458554" class="social-link">
                                    <span class="icon">
                                        <i class="fab fa-whatsapp"></i>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============= AD CAMPAIGN ============= -->
    <div class="container mt-1">
        <div class="ad-campaign bg-cover" style="background-image: url('assets/img/add-campaign-2.png')">
            <div class="content-left">
                <span class="discount">20% off</span>
                <h3 class="heading-primary mt-10">Home Furniture</h3>
            </div>
            <div class="content-right">
                <h4>Best quality ever!</h4>
                <div class="content">
                    <p class="body-text">
                        Magna incididunt commodo aute cupidatat duis eiusmo magna elit aliqua nulla incididunt ex.
                    </p>
                    <a href="#" class="button icon-button active">
                        <span class="icon">
                            <i class="fas fa-chevron-right"></i>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- ============= RECENT POST ============= -->
    <section class="recent-post-wrapper section-padding">
        <div class="container">
            <div class="section-head">
                <h2 class="heading-primary">Recent Posts</h2>
                <a href="blog-list.php" class="button button-minimal">
                    View all
                    <span class="icon">
                        <img src="assets/img/icons/long-arrow.png" alt="arrow" />
                    </span>
                </a>
            </div>
            <div class="row gy-5 justify-content-end">
                <div class="col-lg-3 sidebar">
                    <div class="gradient-bar"></div>

                    <?php
                    include_once "./layouts/Home/recentPost1.home.php";
                    ?>
                    <!-- Ad banner -->
                    <div class="widget-ad-banner bg-cover" style="background-image: url('assets/img/blog/sidebar-add-banner.gif')">
                        <div class="content">
                            <a href="https://thamo.ga/" class="button icon-button active ">
                                <span>
                                    <i class="fas fa-chevron-right"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="row gy-4 main-post-card-wrapper">
                        <?php
                        include_once "./layouts/Home/recentFourItemArea.home.php";
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php
    include_once "./components/footer.component.php";
    include_once "./components/body.imports.php";
    ?>

</body>

</html>