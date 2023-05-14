<?php
session_start();
$postID = $_GET['postID'];

if (empty($postID)) {
    header('Location: ./index.php');
    exit();
};

require_once "./connection.php";
$PageName = "All Blog List";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
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

    <!-- ============= BLOG LIST ============= -->
    <section class="blog-list-wrapper section-padding">
        <div class="container">
            <div class="section-head">
                <h2 class="heading-secondary">Lifestye</h2>
                <ul class="c-bredcrumb">
                    <li>
                        <a href="#"> Home </a>
                    </li>
                    <li><a href="#">Lifestyle</a></li>
                </ul>
            </div>
            <div class="row gy-5">
                <div class="col-lg-9">
                    <div class="left-content">
                        <!-- Post card -->
                        <div class="post-card">
                            <div class="card-thumb bg-cover" style="background-image: url('assets/img/post-list/post1.png')"></div>
                            <div class="card-content">
                                <div class="card-meta">
                                    <div class="meta-item post-author">
                                        <span class="category">Travel</span>
                                        <a href="single-post.html" class="author-name">Terence Whittle</a>
                                    </div>
                                    <span class="meta-item"> Feb 06, 2022 </span>
                                    <span class="meta-item">
                                        <i class="fal fa-comment"></i>
                                        13
                                    </span>
                                    <span class="meta-item">
                                        <i class="fal fa-share-alt"></i>
                                    </span>
                                </div>
                                <div class="post-content">
                                    <div>
                                        <a href="single-post.html">
                                            <h3 class="heading-primary">
                                                Stock futures are flat ahead of Fed’s Jackson Hole symposium
                                            </h3>
                                        </a>
                                        <p class="body-text">
                                            A breakdown or a flat tire can happen to anyone at any time, and what
                                            you have in your car can make the difference between getting back on the
                                            ...
                                        </p>
                                    </div>
                                    <a href="single-post.html" class="button icon-button">
                                        <span class="icon">
                                            <i class="fas fa-chevron-right"></i>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- Post card -->
                        <div class="post-card">
                            <div class="card-thumb bg-cover" style="background-image: url('assets/img/post-list/post2.png')"></div>
                            <div class="card-content">
                                <div class="card-meta">
                                    <div class="meta-item post-author">
                                        <span class="category">Lifestyle</span>
                                        <a href="single-post.html" class="author-name"> Finn Hills</a>
                                    </div>
                                    <span class="meta-item"> Feb 06, 2022 </span>
                                    <span class="meta-item">
                                        <i class="fal fa-comment"></i>
                                        13
                                    </span>
                                    <span class="meta-item">
                                        <i class="fal fa-share-alt"></i>
                                    </span>
                                </div>
                                <div class="post-content">
                                    <div>
                                        <a href="single-post.html">
                                            <h3 class="heading-primary">
                                                What It Feels Like to No Longer Worry About Money
                                            </h3>
                                        </a>
                                        <p class="body-text">
                                            A breakdown or a flat tire can happen to anyone at any time, and what
                                            you have in your car can make the difference between getting back on the
                                            ...
                                        </p>
                                    </div>
                                    <a href="single-post.html" class="button icon-button">
                                        <span class="icon">
                                            <i class="fas fa-chevron-right"></i>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- Post card -->
                        <div class="post-card">
                            <div class="card-thumb bg-cover" style="background-image: url('assets/img/post-list/post3.png')"></div>
                            <div class="card-content">
                                <div class="card-meta">
                                    <div class="meta-item post-author">
                                        <span class="category">Creative</span>
                                        <a href="single-post.html" class="author-name"> Raheel Newman</a>
                                    </div>
                                    <span class="meta-item"> Feb 06, 2022 </span>
                                    <span class="meta-item">
                                        <i class="fal fa-comment"></i>
                                        13
                                    </span>
                                    <span class="meta-item">
                                        <i class="fal fa-share-alt"></i>
                                    </span>
                                </div>
                                <div class="post-content">
                                    <div>
                                        <a href="single-post.html">
                                            <h3 class="heading-primary">
                                                It Really Have Good Feeling When You Enjoy Nature
                                            </h3>
                                        </a>
                                        <p class="body-text">
                                            A breakdown or a flat tire can happen to anyone at any time, and what
                                            you have in your car can make the difference between getting back on the
                                            ...
                                        </p>
                                    </div>
                                    <a href="single-post.html" class="button icon-button">
                                        <span class="icon">
                                            <i class="fas fa-chevron-right"></i>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- PAGINATION -->
                    <ul class="pagination-wrapper">
                        <li><a href="#" class="active">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                    </ul>
                    <!-- ============= AD CAMPAIGN-2 ============= -->

                  <?php
                    include_once "./components/largeWidthAd.component.php";
                  ?>

                </div>
                <div class="col-lg-3">
                    <div class="right-content">
                        <!-- Widget search box -->
                        <div class="widget-search-box">
                            <input type="text" placeholder="Search" />
                            <button class="search-btn">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                        <h3 class="heading-tertiary">Recent stories</h3>

                        <?php
                        include_once "./layouts/blogList/recent.blogList.php";
                        ?>

                        <!-- Widget category -->
                        <div class="widget-categories">
                            <h3 class="footer-heading mb-20">Categories</h3>
                            <div class="categories-tags">

                                <?php
                                include_once "./layouts/blogList/widgetCategory.blogList.php";
                                ?>

                            </div>
                        </div>
                        <!-- Widget ad banner -->
                        <?php

                        include_once "./components/smalllAd2.component.php";
                        include_once "./components/socialprofile.component.php";
                        ?>

                        <!-- Widget popular post -->
                        <div class="widget-popular-post mt-30">
                            <h3 class="heading-tertiary mb-20">Popular posts</h3>
                            <!-- Cat item -->
                            <?php
                            include_once "./layouts//singlePost/popularPost.singlepost.php";
                            ?>
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