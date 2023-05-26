<?php
session_start();
if (empty($_SESSION['adminEmail'])) {
    header('Location: ./adminLogin.php');
}
include_once "../connection.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN - KNOWLADGE ADDICYT</title>
    <?php
    include_once "./includes/adminHead.include.php";
    ?>
</head>

<body class="bg-dark">
    <?php
    include_once "./components/navbar.admin.php";
    ?>


    <div class="container-fluid mt-3">
        <div class="row">
            <div class="col-md-4 ">
                <?php
                include_once "./components/detailtable.admin.component.php";
                ?>
                <div class="row mt-2">
                    <div class="col-12">
                        <div>
                            <canvas id="mainPageDetailChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <?php
                include_once "./components/table.admin.component.php";
                ?>
            </div>
        </div>
    </div>

    <div class="container-fluid mt-4">
        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="postTitle" class="form-label text-white">POST TITLE</label>
                    <input type="text" class="form-control" id="postTitle" placeholder="POST TITLE">
                </div>
                <div class="input-group mb-1">
                    <label class="input-group-text" for="inputGroupFile01">POST IMAGE (1320*750)</label>
                    <input type="file" class="form-control" id="postImage">
                </div>
                <div class="mb-1">
                    <label for="postAuthor" class="form-label text-white">POST AUTHOR</label>
                    <input type="text" class="form-control" id="postAuthor" placeholder="POST AUTHOR">
                </div>
                <div class="mb-1">
                    <label for="postDisplayData" class="form-label text-white">POST DISPLAY DATA</label>
                    <textarea class="form-control" id="postDisplayData" rows="3"></textarea>
                </div>
                <div class="mb-1">
                    <label for="posttagName" class="form-label text-white">TAG NAME</label>
                    <input type="text" class="form-control" id="posttagName" placeholder="POST TAG NAME">
                </div>
                <select class="form-select" aria-label="Default select example" id="postCategory">
                    <option selected disabled>POST CATEGORY</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>

                <button class="btn btn-primary col-12 my-2" onclick="createPost();" >UPLOAD</button>
            </div>
        </div>
    </div>

    <?php
    include_once "./includes/adminBody.include.php";
    ?>

</body>

</html>