<?php
session_start();
if (empty($_SESSION['adminEmail'])) {
    header('Location: ./adminLogin.php');
}

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

    <div class="container-fluid ">
        <div class="row">
            <div class="col-12 position-relative">
                <div id="mainNavigation">
                    <nav role="navigation">
                        <div class="py-3 text-center border-bottom">
                            <img src="./assets/images/Knowladge Addict new Logo 1.png" alt="" class="invert">
                        </div>
                    </nav>
                    <div class="navbar-expand-md">
                        <div class="navbar-dark text-center my-2">
                            <button class="navbar-toggler w-75" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span> <span class="align-middle">Menu</span>
                            </button>
                        </div>
                        <div class="text-center mt-3 collapse navbar-collapse" id="navbarNavDropdown">
                            <ul class="navbar-nav mx-auto ">
                                <li class="nav-item">
                                    <a class="nav-link active " aria-current="page" href="#">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " href="#">Analytics</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Client</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Manage</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        More
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                        <li><a class="dropdown-item" href="#">Portfolio</a></li>
                                        <li><a class="dropdown-item" href="#">About Us</a></li>
                                        <li><a class="dropdown-item" href="#">Header</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid mt-3">
        <div class="row">
            <div class="col-md-4 ">
                <table class="table table-bordered border-primary">
                    <tbody>
                        <tr>
                            <td class="table-active text-white text-center "><i class="bi bi-eye-fill"></i> 50</td>
                            <td class="table-active text-white text-center "><i class="bi bi-file-earmark-font"></i> 30</td>
                        </tr>
                        <tr>
                            <td class="table-active text-white text-center "><i class="bi bi-file-person-fill"></i> 12</td>
                            <td class="table-active text-white text-center "><i class="bi bi-person-circle"></i> 15 </td>
                        </tr>
                    </tbody>
                </table>

                <div class="row mt-2">

                    <div class="col-12">
                        <div>
                            <canvas id="myChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <section class="ftco-section">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="table-wrap">
                                    <table class="tableBlog table-responsive-xl">
                                        <thead class="tableheader">
                                            <tr>
                                                <th>&nbsp;</th>
                                                <th>Email</th>
                                                <th>Username</th>
                                                <th>Status</th>
                                                <th>&nbsp;</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="alert" role="alert">
                                                <td>
                                                    <label class="checkbox-wrap checkbox-primary">
                                                        <input type="checkbox" checked>
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </td>
                                                <td class="d-flex align-items-center">
                                                    <div class="img" style="background-image: url(images/person_1.jpg);"></div>
                                                    <div class="pl-3 email">
                                                        <span>markotto@email.com</span>
                                                        <span>Added: 01/03/2020</span>
                                                    </div>
                                                </td>
                                                <td>Markotto89</td>
                                                <td class="status"><span class="active">Active</span></td>
                                                <td>
                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                        <span aria-hidden="true"><i class="fa fa-close"></i></span>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr class="alert" role="alert">
                                                <td>
                                                    <label class="checkbox-wrap checkbox-primary">
                                                        <input type="checkbox">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </td>
                                                <td class="d-flex align-items-center">
                                                    <div class="img" style="background-image: url(images/person_2.jpg);"></div>
                                                    <div class="pl-3 email">
                                                        <span>jacobthornton@email.com</span>
                                                        <span>Added: 01/03/2020</span>
                                                    </div>
                                                </td>
                                                <td>Jacobthornton</td>
                                                <td class="status"><span class="waiting">Waiting for Resassignment</span></td>
                                                <td>
                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                        <span aria-hidden="true"><i class="fa fa-close"></i></span>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr class="alert" role="alert">
                                                <td>
                                                    <label class="checkbox-wrap checkbox-primary">
                                                        <input type="checkbox">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </td>
                                                <td class="d-flex align-items-center">
                                                    <div class="img" style="background-image: url(images/person_3.jpg);"></div>
                                                    <div class="pl-3 email">
                                                        <span>larrybird@email.com</span>
                                                        <span>Added: 01/03/2020</span>
                                                    </div>
                                                </td>
                                                <td>Larry_bird</td>
                                                <td class="status"><span class="active">Active</span></td>
                                                <td>
                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                        <span aria-hidden="true"><i class="fa fa-close"></i></span>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr class="alert" role="alert">
                                                <td>
                                                    <label class="checkbox-wrap checkbox-primary">
                                                        <input type="checkbox">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </td>
                                                <td class="d-flex align-items-center">
                                                    <div class="img" style="background-image: url(images/person_4.jpg);"></div>
                                                    <div class="pl-3 email">
                                                        <span>johndoe@email.com</span>
                                                        <span>Added: 01/03/2020</span>
                                                    </div>
                                                </td>
                                                <td>Johndoe1990</td>
                                                <td class="status"><span class="active">Active</span></td>
                                                <td>
                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                        <span aria-hidden="true"><i class="fa fa-close"></i></span>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr class="alert" role="alert">
                                                <td class="border-bottom-0">
                                                    <label class="checkbox-wrap checkbox-primary">
                                                        <input type="checkbox">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </td>
                                                <td class="d-flex align-items-center border-bottom-0">
                                                    <div class="img" style="background-image: url(images/person_1.jpg);"></div>
                                                    <div class="pl-3 email">
                                                        <span>garybird@email.com</span>
                                                        <span>Added: 01/03/2020</span>
                                                    </div>
                                                </td>
                                                <td class="border-bottom-0">Garybird_2020</td>
                                                <td class="status border-bottom-0"><span class="waiting">Waiting for Resassignment</span></td>
                                                <td class="border-bottom-0">
                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                        <span aria-hidden="true"><i class="fa fa-close"></i></span>
                                                    </button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                </section>
            </div>

        </div>
    </div>


    <?php
    include_once "./includes/adminBody.include.php";
    ?>
</body>

</html>