<?php

define('ROOT_PATH', realpath(dirname(__FILE__)));
require_once(ROOT_PATH . '/../../connection.php');
// $connection = new PDO("mysql:host=localhost;dbname=myblog", "root", "1234");
$stmt = $connection->prepare("SELECT * FROM homeheaderpost LIMIT :limitNumber");
$stmt->bindValue(":limitNumber", 3, PDO::PARAM_INT);
$stmt->execute();
?>
<section class="hero-wrapper">
    <div class="hero-slider-wrapper">
        <?php
        for ($headerRows = 0; $headerRows < $stmt->rowCount(); $headerRows++) {
            $gotDataForheader = $stmt->fetch();
        ?>
            <div class="slider-item bg-cover" style="background-image: url('admin/uploads/headerArea/<?php echo $gotDataForheader['postImage'] ?>')">
                <div class="container">
                    <div class="hero-content">
                        <div></div>
                        <div>
                            <h1 class="hero-heading">
                                <?php ?>
                            </h1>
                            <div class="post-card">
                                <span class="category"> <?php echo $gotDataForheader['tagName'] ?> </span>
                                <p class="body-text">
                                    <?php echo $gotDataForheader['displayData'] ?>...
                                </p>
                                <div class="post-meta-wrapper">
                                    <div class="meta-left">
                                        <p class="author meta-item">by <span><?php echo $gotDataForheader['Author'] ?></span></p>
                                        <span class="post-date meta-item">
                                            <?php
                                            $datetime_str = $gotDataForheader['addedTime'];
                                            $datetime = DateTime::createFromFormat('Y-m-d H:i:s', $datetime_str);
                                            $formatted_datetime = $datetime->format('M d, Y');
                                            echo $formatted_datetime;
                                            ?>
                                        </span>
                                        <!-- <span class="meta-item comment">
                                            <i class="fal fa-comment"></i>
                                            13
                                        </span> -->
                                    </div>
                                    <a href="single-post.php?postID=<?php echo $gotDataForheader['postID'] ?>" class="button post-button">
                                        <span class="icon">
                                            <img src="assets/img/icons/long-arrow.png" alt="arrow" />
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php
        };
        ?>
    </div>
</section>