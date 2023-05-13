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

                            <!-- Categories item -->
                            <a href="blog-list.php" class="cat-item-link">
                                <div class="cat-item">
                                    <div class="cat-thumb" style="background-image: url('assets/img/blog/cat-1.png')">
                                    </div>
                                    <p class="cat-name">
                                        Home & garden
                                        <span>(15)</span>
                                    </p>
                                    <div class="button cat-button">
                                        <span>
                                            <i class="fal fa-chevron-right"></i>
                                        </span>
                                    </div>
                                </div>
                            </a>
                            <!-- Categories item -->
                            <a href="blog-list.php" class="cat-item-link">
                                <div class="cat-item">
                                    <div class="cat-thumb" style="background-image: url('assets/img/blog/cat-2.png')">
                                    </div>
                                    <p class="cat-name">
                                        Lifestyle
                                        <span>(15)</span>
                                    </p>
                                    <div class="button cat-button">
                                        <span>
                                            <i class="fal fa-chevron-right"></i>
                                        </span>
                                    </div>
                                </div>
                            </a>
                            <!-- Categories item -->
                            <a href="blog-list.php" class="cat-item-link">
                                <div class="cat-item">
                                    <div class="cat-thumb" style="background-image: url('assets/img/blog/cat-3.png')">
                                    </div>
                                    <p class="cat-name">
                                        Technology
                                        <span>(15)</span>
                                    </p>
                                    <div class="button cat-button">
                                        <span>
                                            <i class="fal fa-chevron-right"></i>
                                        </span>
                                    </div>
                                </div>
                            </a>
                            <!-- Categories item -->
                            <a href="blog-list.php" class="cat-item-link">
                                <div class="cat-item">
                                    <div class="cat-thumb" style="background-image: url('assets/img/blog/cat-4.png')">
                                    </div>
                                    <p class="cat-name">
                                        Travel
                                        <span>(15)</span>
                                    </p>
                                    <div class="button cat-button">
                                        <span>
                                            <i class="fal fa-chevron-right"></i>
                                        </span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="widget-ad-banner two bg-cover" style="background-image: url('assets/img/blog/sidebar-add-banner.png')">
                            <div class="content">
                                <span class="discount">20% off</span>
                                <h2 class="heading-secondary">Home Garden</h2>
                                <p class="body-text">Magna incididunt commodo aute consectetur cupida.</p>
                                <a href="#" class="button icon-button active">
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
                <div class="col-lg-5">
                    <div class="trending-card bg-cover" style="background-image: url('assets/img/blog/trending-post1.png')">
                        <div class="card-content">
                            <span class="category"> Creative </span>
                            <a href="blog-list.php">
                                <h3 class="heading-primary">
                                    Stock futures are flat ahead of Fed’s Jackson Hole symposium
                                </h3>
                            </a>

                            <a href="blog-list.php" class="author"> by Roxanne Mac</a>

                            <a href="blog-list.php" class="button icon-button">
                                <span class="icon">
                                    <i class="fas fa-chevron-right"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="trending-card bg-cover" style="background-image: url('assets/img/blog/trending-post2.png')">
                        <div class="card-content">
                            <span class="category"> Digital </span>
                            <a href="blog-list.php">
                                <h3 class="heading-primary">top 10 spring destinations to visit this year</h3>
                            </a>

                            <a href="blog-list.php" class="author"> Jillian Kinney </a>

                            <a href="blog-list.php" class="button icon-button">
                                <span class="icon">
                                    <i class="fas fa-chevron-right"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="trending-card bg-cover" style="background-image: url('assets/img/blog/trending-post1.png')">
                        <div class="card-content">
                            <span class="category"> Innovation </span>
                            <a href="blog-list.php">
                                <h3 class="heading-primary">How to Avoid the Comparison Game</h3>
                            </a>

                            <a href="blog-list.php" class="author"> by Nojus Paul</a>

                            <a href="blog-list.php" class="button icon-button">
                                <span class="icon">
                                    <i class="fas fa-chevron-right"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============= DISCUSSED POST ============= -->
    <section class="discussed-post-wrapper section-padding">
        <div class="container">
            <div class="section-head">
                <h2 class="heading-primary">Most discussed post</h2>
                <a href="blog-list.php" class="button button-minimal">
                    View all
                    <span class="icon">
                        <img src="assets/img/icons/long-arrow.png" alt="arrow" />
                    </span>
                </a>
            </div>
            <div class="row gy-5">
                <div class="col-lg-9 left-content">
                    <div class="discussed-post bg-cover" style="background-image: url('assets/img/blog/discussed-post-bg.png')">
                        <div class="post-card">
                            <span class="category"> Lifestyle </span>
                            <a href="blog-list.php">
                                <h3 class="heading-secondary">
                                    Backpacking Essentials for a <br />
                                    Weekend Hiking Trip
                                </h3>
                            </a>
                            <div class="post-meta-wrapper">
                                <div class="meta-left">
                                    <p class="author meta-item">by <span>Julius Kenny</span></p>
                                    <span class="post-date meta-item"> Feb 06, 2022 </span>
                                    <span class="meta-item comment">
                                        <i class="fal fa-comment"></i>
                                        13
                                    </span>
                                </div>
                                <a href="blog-list.php" class="button post-button">
                                    <span class="icon">
                                        <img src="assets/img/icons/long-arrow.png" alt="arrow" />
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="sidebar-widget">
                        <div class="gradient-bar mb-30"></div>
                        <!-- Cat item -->
                        <div class="widget-category">
                            <div class="cat-thumb bg-cover" style="background-image: url('assets/img/blog/recent-post-sm1.png')"></div>
                            <div class="cat-content">
                                <a href="blog-list.php">
                                    <h4 class="cat-title">How to Make Every Trip the Best Trip Ever</h4>
                                </a>
                                <div class="cat-meta">
                                    <span class="post-date meta-item"> Feb 06, 2022 </span>
                                    <span class="meta-item comment">
                                        <i class="fal fa-comment"></i>
                                        13
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!-- Cat item -->
                        <div class="widget-category">
                            <div class="cat-thumb bg-cover" style="background-image: url('assets/img/blog/recent-post-sm2.png')"></div>
                            <div class="cat-content">
                                <a href="blog-list.php">
                                    <h4 class="cat-title">Mental Shoot Tips to Cope With the End of Summer</h4>
                                </a>
                                <div class="cat-meta">
                                    <span class="post-date meta-item"> Feb 06, 2022 </span>
                                    <span class="meta-item comment">
                                        <i class="fal fa-comment"></i>
                                        13
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!-- Cat item -->
                        <div class="widget-category">
                            <div class="cat-thumb bg-cover" style="background-image: url('assets/img/blog/recent-post-sm3.png')"></div>
                            <div class="cat-content">
                                <a href="blog-list.php">
                                    <h4 class="cat-title">The Beautiful French Village Of Saint-Emilion</h4>
                                </a>
                                <div class="cat-meta">
                                    <span class="post-date meta-item"> Feb 06, 2022 </span>
                                    <span class="meta-item comment">
                                        <i class="fal fa-comment"></i>
                                        13
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!-- WIDGET SOCIAL PROFILE -->
                        <div class="widget-social-profile">
                            <h3 class="heading-secondary">Follow us</h3>
                            <p class="body-text">You can find us here</p>
                            <div class="social-items">
                                <a href="#" class="social-link">
                                    <span class="icon">
                                        <i class="fab fa-facebook-f"></i>
                                    </span>
                                </a>
                                <a href="#" class="social-link">
                                    <span class="icon">
                                        <i class="fab fa-linkedin-in"></i>
                                    </span>
                                </a>
                                <a href="#" class="social-link">
                                    <span class="icon">
                                        <i class="fab fa-twitter"></i>
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
                <h2 class="heading-primary">Recent in newlog</h2>
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
                    <div class="recent-post-card">
                        <div class="card-thumb bg-cover" style="background-image: url('assets/img/recent-post/thumb1.png')"></div>
                        <div class="card-content">
                            <div class="post-meta">
                                <span class="meta-item"> Design </span>
                                <span class="meta-item"> Feb 06, 2022 </span>
                                <span class="meta-item">
                                    <i class="fal fa-comment"></i>
                                    13
                                </span>
                            </div>
                            <a href="blog-list.php">
                                <h3 class="heading-secondary">
                                    Animated Cartoon Is The New Future Of Entertainment
                                </h3>
                            </a>
                        </div>
                    </div>
                    <div class="recent-post-card">
                        <div class="card-thumb bg-cover" style="background-image: url('assets/img/recent-post/thumb2.png')"></div>
                        <div class="card-content">
                            <div class="post-meta">
                                <span class="meta-item"> Food </span>
                                <span class="meta-item"> Feb 06, 2022 </span>
                                <span class="meta-item">
                                    <i class="fal fa-comment"></i>
                                    13
                                </span>
                            </div>
                            <a href="blog-list.php">
                                <h3 class="heading-secondary">The Beautiful French Village Of Saint-Emilion</h3>
                            </a>
                        </div>
                    </div>
                    <!-- Ad banner -->
                    <div class="widget-ad-banner bg-cover" style="background-image: url('assets/img/recent-post/add-banner2.png')">
                        <div class="content">
                            <span class="discount">20% off</span>
                            <h2 class="heading-primary">Jewelry IWO</h2>
                            <p class="body-text">Magna incididunt commodo aute consectetur cupida.</p>
                            <a href="#" class="button icon-button active">
                                <span>
                                    <i class="fas fa-chevron-right"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="row gy-4 main-post-card-wrapper">
                        <div class="col-md-6">
                            <!-- Post item -->
                            <div class="main-post-card">
                                <div class="card-thumb bg-cover" style="background-image: url('assets/img/recent-post/thumb3.png')"></div>
                                <span class="category">Careers</span>
                                <div class="card-content">
                                    <div class="card-meta">
                                        <div class="meta-item post-author">
                                            <div class="author-avatar bg-cover" style="
                                                        background-image: url('assets/img/recent-post/post-author1.png');
                                                    "></div>
                                            <a href="blog-list.php" class="author-name">Terence Whittle</a>
                                        </div>
                                        <span class="meta-item"> Feb 06, 2022 </span>
                                        <span class="meta-item">
                                            <i class="fal fa-share-alt"></i>
                                        </span>
                                    </div>
                                    <a href="blog-list.php">
                                        <h3 class="heading-tertiary">
                                            How digital transformation enables broader sustainability performance
                                        </h3>
                                    </a>
                                    <a href="blog-list.php" class="button">
                                        <span>
                                            <img src="assets/img/icons/long-arrow.png" alt="arrow" />
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <!-- Post item -->
                            <div class="main-post-card">
                                <div class="card-thumb bg-cover" style="background-image: url('assets/img/recent-post/thumb4.png')"></div>
                                <span class="category">Lifestyle</span>
                                <div class="card-content">
                                    <div class="card-meta">
                                        <div class="meta-item post-author">
                                            <div class="author-avatar bg-cover" style="
                                                        background-image: url('assets/img/recent-post/post-author1.png');
                                                    "></div>
                                            <a href="blog-list.php" class="author-name">Roscoe Gaines</a>
                                        </div>
                                        <span class="meta-item"> Feb 06, 2022 </span>
                                        <span class="meta-item">
                                            <i class="fal fa-share-alt"></i>
                                        </span>
                                    </div>
                                    <a href="blog-list.php">
                                        <h3 class="heading-tertiary">
                                            We can all contribute to safer, greener and healthier city streets
                                        </h3>
                                    </a>
                                    <a href="blog-list.php" class="button">
                                        <span>
                                            <img src="assets/img/icons/long-arrow.png" alt="arrow" />
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <!-- Post item -->
                            <div class="main-post-card">
                                <div class="card-thumb bg-cover" style="background-image: url('assets/img/recent-post/thumb5.png')"></div>
                                <span class="category">Lifestyle</span>
                                <div class="card-content">
                                    <div class="card-meta">
                                        <div class="meta-item post-author">
                                            <div class="author-avatar bg-cover" style="
                                                        background-image: url('assets/img/recent-post/post-author1.png');
                                                    "></div>
                                            <a href="blog-list.php" class="author-name">Shakeel Chandler</a>
                                        </div>
                                        <span class="meta-item"> Feb 06, 2022 </span>
                                        <span class="meta-item">
                                            <i class="fal fa-share-alt"></i>
                                        </span>
                                    </div>
                                    <a href="blog-list.php">
                                        <h3 class="heading-tertiary">
                                            Top 10 Hipster things to do in Canggu where you can chill & party
                                        </h3>
                                    </a>
                                    <a href="blog-list.php" class="button">
                                        <span>
                                            <img src="assets/img/icons/long-arrow.png" alt="arrow" />
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <!-- Post item -->
                            <div class="main-post-card">
                                <div class="card-thumb bg-cover" style="background-image: url('assets/img/recent-post/thumb6.png')"></div>
                                <span class="category">Lifestyle</span>
                                <div class="card-content">
                                    <div class="card-meta">
                                        <div class="meta-item post-author">
                                            <div class="author-avatar bg-cover" style="
                                                        background-image: url('assets/img/recent-post/post-author1.png');
                                                    "></div>
                                            <a href="blog-list.php" class="author-name">Indigo Russo</a>
                                        </div>
                                        <span class="meta-item"> Feb 06, 2022 </span>
                                        <span class="meta-item">
                                            <i class="fal fa-share-alt"></i>
                                        </span>
                                    </div>
                                    <a href="blog-list.php">
                                        <h3 class="heading-tertiary">
                                            Asean Aims for 23 Pct Renewables in Energy Mix by 2025
                                        </h3>
                                    </a>
                                    <a href="blog-list.php" class="button">
                                        <span>
                                            <img src="assets/img/icons/long-arrow.png" alt="arrow" />
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
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