<?php
session_start();
include_once "./connection.php";
$PageName = "Knowledge Addict - LOGIN";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Thamoddya Rashmitha - <?php echo $PageName ?></title>
    <meta name="description" content="Thamoddya Rashmitha Blog - Knowledge Addict">
    <meta name="keywords" content="Thamoddya, Rashmitha, Blog, Science Blog, Technology Blog, Java Institute,Latest Post,Blog Post,Knowledge Addict">

    <?php
    include_once "./components/head.imports.php";
    include_once "./components/viewTraffic.component.php";
    ?>
</head>

<body>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <section class="vh-100" style="background-color: #9A616D;">
                    <div class="container py-5 h-100">
                        <div class="row d-flex justify-content-center align-items-center h-100">
                            <div class="col col-xl-10">
                                <div class="card" style="border-radius: 1rem;">
                                    <div class="row g-0">
                                        <div class="col-md-6 col-lg-5 d-none d-md-block">
                                            <img src="./assets/img/loginPage.jpg" alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
                                        </div>
                                        <div class="col-md-6 col-lg-7 d-flex align-items-center">
                                            <div class="card-body p-4 p-lg-5 text-black">

                                                <form>

                                                    <div class="d-flex align-items-center mb-3 pb-1">
                                                        <img src="./assets/img/knowladge addict logo.png" alt="Knowledge Addict" style="width: 20%;">
                                                    </div>

                                                    <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account</h5>

                                                    <div class="form-outline mb-4">
                                                        <input type="email" id="userEmail" class="form-control form-control-lg" />
                                                        <label class="form-label" for="userEmail">Email address</label>
                                                    </div>

                                                    <div class="form-outline mb-4">
                                                        <input type="password" id="userPassword" class="form-control form-control-lg" />
                                                        <label class="form-label" for="userPassword">Password</label>
                                                    </div>

                                                    <div class="pt-1 mb-4">
                                                        <button class="btn btn-dark btn-lg btn-block" type="button">Login</button>
                                                    </div>

                                                    <a class="small text-muted" href="./contact.php">Forgot password?</a>
                                                    <p class="mb-5 pb-lg-2" style="color: #393f81;">Don't have an account? <a href="#!" style="color: #393f81;">Contact Admin</a></p>
                                                </form>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>

    <?php
    include_once "./components/footer.component.php";
    include_once "./components/body.imports.php";
    ?>

</body>

</html>