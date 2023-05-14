<?php
session_start();
$postID = $_GET['postID'];

if (empty($postID)) {
    header('Location: ./index.php');
    exit();
};

include_once "./connection.php";

$getDataSQLQuery = $connection->prepare("SELECT * FROM allblogs INNER JOIN category ON category.id = allblogs.categoryID INNER JOIN postviews ON postviews.postID = allblogs.postID WHERE allblogs.postID = :postID");
$getDataSQLQuery->bindValue(":postID", $postID, PDO::PARAM_INT);
$getDataSQLQuery->execute();
$allPostData = $getDataSQLQuery->fetch();

$getBlogDataSQLQuery = $connection->prepare("SELECT * FROM blog WHERE postID = :postID");
$getBlogDataSQLQuery->bindValue(":postID", $postID, PDO::PARAM_INT);
$getBlogDataSQLQuery->execute();
if ($getBlogDataSQLQuery->rowCount() > 0) {
    $allBlogData = $getBlogDataSQLQuery->fetch();
} else {
    echo "Not Still Added";
    exit();
}

print_r($allPostData);
$PageName = $allPostData['postTitle'];


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



    <!-- ============= SINGLE POST ============= -->
    <section class="single-post-wrapper blog-list-wrapper section-padding">
        <div class="container">
            <div class="section-head">
                <h2 class="heading-secondary"><?php echo $allPostData['categoryName'] ?></h2>
                <ul class="c-bredcrumb">
                    <li>
                        <a href="#"> <?php echo $allPostData['tagName'] ?> </a>
                    </li>
                    <!-- tag Name -->
                    <li><a href="#">Single Post</a></li>
                    <!-- Post Title -->
                    <li><a href="#"><?php echo $allPostData['postTitle'] ?></a></li>
                </ul>
            </div>
            <div class="row gy-5">
                <div class="col-lg-9">
                    <div class="left-content">
                        <!-- Post card -->
                        <div class="post-card">
                            <div class="card-thumb bg-cover" style="background-image: url('admin/uploads/blogUpload/<?php echo $allPostData['postImage'] ?>')"></div>
                            <div class="card-content">
                                <div class="card-meta">
                                    <div class="meta-item post-author">
                                        <span class="category"><?php echo $allPostData['tagName'] ?></span>
                                        <a href="#" class="author-name"><?php echo $allPostData['Author'] ?></a>
                                    </div>
                                    <span class="meta-item">
                                        <?php
                                        $datetime_str = $allPostData['addedTime'];
                                        $datetime = DateTime::createFromFormat('Y-m-d H:i:s', $datetime_str);
                                        $formatted_datetime = $datetime->format('M d, Y');
                                        echo $formatted_datetime;
                                        ?>
                                    </span>
                                    <span class="meta-item">
                                        <i class="fal fa-comment"></i>
                                        13
                                    </span>
                                    <span class="meta-item">
                                        <i class="fal fa-share"></i>
                                    </span>
                                </div>
                                <div class="post-content">
                                    <div>

                                        <h3 class="heading-primary">
                                            <?php echo $allPostData['postTitle'] ?>
                                        </h3>


                                        <p class="body-text">
                                            Pariatur cupidatat Lorem irure nisi. Velit qui irure consectetur do cupi
                                            roident id est ex sunt nostrud nisi mine consectetur do cupi roident id
                                            est ex sunt nostrud nisi minim ut. Cupidatat velit dolore consectetur
                                            deserunt laboris magna eiusmod aliquip consectetur commodo in eiusmod
                                            aliqua cupidatat. Nostrud laboris et eu mollit qui esse dolore
                                            exercitation in dolore sint nisi eu aliqua. Sit ipsum cillum commodo
                                            enim eiusmod. Eiusmod et anim laborum consectetur. Proident nostrud anim
                                            nisi sunt veniam. Labore amet eiusmod dolor adipisicing Lorem tempor
                                            cillum incididunt proident consequat laborum. Velit anim minim est
                                            consequat commodo eu reprehenderit eiusmod nisi amet quis tempor
                                            incididunt. Irure proident aute non sit adipisicing nulla sit proident
                                            dolore sunt. Aute aute Lorem sint sunt et fugiat laborum. Qui incididunt
                                            aute pariatur aute laborum elit nulla amet magna enim.
                                        </p>
                                        <p class="body-text">
                                            Pariatur cupidatat Lorem irure nisi. Velit qui irure consectetur do cupi
                                            roident id est ex sunt nostrud nisi mine consectetur do cupi roident id
                                            est ex sunt nostrud nisi minim ut. Cupidatat velit dolore consectetur
                                            deserunt laboris magna eiusmod aliquip consectetur commodo in eiusmod
                                            aliqua cupidatat. Nostrud laboris et eu mollit qui esse dolore
                                            exercitation in dolore sint nisi eu aliqua. Sit ipsum cillum commodo
                                            enim eiusmod. Eiusmod et anim laborum consectetur. Proident nostrud anim
                                            nisi sunt veniam. Labore amet eiusmod dolor adipisicing Lorem tempor
                                            cillum incididunt proident consequat laborum. Velit anim minim est
                                            consequat commodo eu reprehenderit eiusmod nisi amet quis tempor
                                            incididunt. Irure proident aute non sit adipisicing nulla sit proident
                                            dolore sunt. Aute aute Lorem sint sunt et fugiat laborum. Qui incididunt
                                            aute pariatur aute laborum elit nulla amet magna enim.
                                        </p>
                                        <p class="body-text">
                                            Pariatur cupidatat Lorem irure nisi. Velit qui irure consectetur do cupi
                                            roident id est ex sunt nostrud nisi mine consectetur do cupi roident id
                                            est ex sunt nostrud nisi minim ut. Cupidatat velit dolore consectetur
                                            deserunt laboris magna eiusmod aliquip consectetur commodo in eiusmod
                                            aliqua cupidatat. Nostrud laboris et eu mollit qui esse dolore
                                            exercitation in dolore sint nisi eu aliqua. Sit ipsum cillum commodo
                                            enim eiusmod. Eiusmod et anim laborum consectetur. Proident nostrud anim
                                            nisi sunt veniam. Labore amet eiusmod dolor adipisicing Lorem tempor
                                            cillum incididunt proident consequat laborum. Velit anim minim est
                                            consequat commodo eu reprehenderit eiusmod nisi amet quis tempor
                                            incididunt. Irure proident aute non sit adipisicing nulla sit proident
                                            dolore sunt. Aute aute Lorem sint sunt et fugiat laborum. Qui incididunt
                                            aute pariatur aute laborum elit nulla amet magna enim.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Post quote -->
                        <div class="post-quote">
                            <p class="body-text">
                                “As a participatory media culture, social media platforms or social networking sites
                                are forms of mass communication that, through media technologies, allow large
                                amounts of product and distribution of content to reach the largest audience
                                possible. “
                            </p>
                            <div class="quote-bottom">
                                <a href="#" class="author">Ralph Edwards</a>
                                <span class="gradient-bar small"></span>
                            </div>

                            <img class="quote-icon" src="assets/img/single-post/quote-icon.png" alt="" />
                        </div>
                        <!-- Conclution point -->
                        <div class="post-point">
                            <h3 class="heading-secondary">Final Conclusion</h3>
                            <p class="body-text">
                                Pariatur cupidatat Lorem irure nisi. Velit qui irure consectetur do cupi roident id
                                est ex sunt nostrud nisi mine consectetur do cupi roident id est ex sunt nostrud
                                nisi minim ut. Cupidatat velit dolore consectetur deserunt laboris magna eiusmod
                                aliquip consectetur commodo in eiusmod aliqua cupidatat. Nostrud laboris et eu
                                mollit qui esse dolore exercitation in dolore sint nisi eu aliqua.
                            </p>
                        </div>
                        <!-- Tags -->
                        <div class="tags">
                            <h3 class="heading-secondary">Tags</h3>
                            <div class="categories-tags">
                                <a href="single-post.php"> kitchen </a>
                                <a href="single-post.php"> garden </a>
                                <a href="single-post.php"> cars </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="right-content">
                        <!-- Widget search box -->

                        <h3 class="heading-tertiary">Recent Posts</h3>
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
                                <a href="single-post.php">
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
                                <a href="single-post.php">
                                    <h3 class="heading-secondary">The Beautiful French Village Of Saint-Emilion</h3>
                                </a>
                            </div>
                        </div>

                        <!-- Widget add banner
                        <div class="widget-ad-banner bg-cover" style="background-image: url('assets/img/blog/sidebar-add-banner.png')">
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
                        </div> -->
                        <!-- Widget social profile -->
                        <div class="widget-social-profile">
                            <h3 class="heading-tertiary mb-10">Follow us</h3>
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
                        <!-- Widget popular post -->
                        <!-- Widget popular post -->
                        <div class="widget-popular-post mt-30">
                            <h3 class="heading-tertiary mb-20">Popular posts</h3>
                            <!-- Cat item -->
                            <div class="widget-category">
                                <div class="cat-thumb bg-cover" style="background-image: url('assets/img/blog/recent-post-sm1.png')"></div>
                                <div class="cat-content">
                                    <a href="#">
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
                                    <a href="#">
                                        <h4 class="cat-title">
                                            Mental Shoot Tips to Cope With the End of Summer
                                        </h4>
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
                                    <a href="#">
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



</body>



</html>