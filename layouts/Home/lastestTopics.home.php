<?php


require_once(ROOT_PATH . '/../../connection.php');
$stmt = $connection->prepare("SELECT * FROM homeheaderpost LIMIT :limitNumber");
$stmt->bindValue(":limitNumber", 3, PDO::PARAM_INT);
$stmt->execute();

for ($headerRows = 0; $headerRows < $stmt->rowCount(); $headerRows++) {
    $gotDataForheader = $stmt->fetch();

?>

    <div class="featured-topics-card">
        <div class="card-thumb bg-cover" style="background-image: url('./admin//uploads//headerArea//hero-bg1.png')"></div>
        <span class="topic-category">Design</span>
        <div class="card-content">
            <a href="blog-list.php">
                <h3 class="heading-secondary">News Brief: December Updates From The Google News</h3>
            </a>
            <p class="body-text">
                A breakdown or a flat tire can happen to anyone at any time, and what you have in
                your car can make the difference between getting back on the ...
            </p>

            <div class="post-meta">
                <p class="author">by <span>Julius Kenny</span></p>
                <span class="post-date"> Feb 06, 2022 </span>
            </div>
            <a href="blog-list.php" class="button icon-button">
                <span class="icon">
                    <i class="fas fa-chevron-right"></i>
                </span>
            </a>
        </div>
    </div>
<?php
}

?>