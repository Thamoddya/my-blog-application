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
    <title><?php echo $PageName ?></title>
    <meta name="description" content="Thamoddya Rashmitha Blog - Knowledge Addict">
    <meta name="keywords" content="Thamoddya, Rashmitha, Blog, Science Blog, Technology Blog, Java Institute,Latest Post,Blog Post,Knowledge Addict">

    <?php
    include_once "./components/head.imports.php";
    include_once "./components/viewTraffic.component.php";
    ?>
</head>

<body>
<?php
    include_once "./components/preloader.component.php";
    ?>

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
                                                <div>

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

                                                        <button class="continue-application" onclick="adminValidate();" id="validateButton">
                                                            <div>
                                                                <div class="pencil"></div>
                                                                <div class="folder">
                                                                    <div class="top">
                                                                        <svg viewBox="0 0 24 27">
                                                                            <path d="M1,0 L23,0 C23.5522847,-1.01453063e-16 24,0.44771525 24,1 L24,8.17157288 C24,8.70200585 23.7892863,9.21071368 23.4142136,9.58578644 L20.5857864,12.4142136 C20.2107137,12.7892863 20,13.2979941 20,13.8284271 L20,26 C20,26.5522847 19.5522847,27 19,27 L1,27 C0.44771525,27 6.76353751e-17,26.5522847 0,26 L0,1 C-6.76353751e-17,0.44771525 0.44771525,1.01453063e-16 1,0 Z"></path>
                                                                        </svg>
                                                                    </div>
                                                                    <div class="paper"></div>
                                                                </div>
                                                            </div>
                                                            Continue Login
                                                        </button>
                                                        <button class="btn d-none" id="validateLoader">
                                                            <div class="spinner-grow text-primary" role="status">
                                                                <span class="visually-hidden">Loading...</span>
                                                            </div>
                                                        </button>
                                                    </div>

                                                    <a class="small text-muted" href="./contact.php">Forgot password?</a>
                                                    <p class="mb-5 pb-lg-2" style="color: #393f81;">Don't have an account? <a href="./contact.php" style="color: #393f81;">Contact Admin</a></p>
                                                </div>
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

    <script>
        function adminValidate() {

            var email = $("#userEmail").val();
            var password = $("#userPassword").val();

            if (email.trim() === '' || password.trim() === '') {
                $('#userEmail').addClass('border border-danger');
                $('#userPassword').addClass('border border-danger');
                return;
            }

            $('#validateButton').addClass('d-none');
            $('#validateLoader').removeClass('d-none');

            $.ajax({
                url: "process/writerReg.process.php",
                method: "POST",
                data: {
                    email: email,
                    password: password
                },
                success: function(response) {
                    console.log(response);
                    if (response === "success") {
                        window.location.href ='./writer/index.writer.php';
                    } else {
                        $('#validateLoader').addClass('d-none');
                        $('#validateButton').removeClass('d-none');
                    }
                },
                error: function() {
                    console.log("An error occurred during the login process.");
                }
            });
        }
    </script>
</body>

</html>