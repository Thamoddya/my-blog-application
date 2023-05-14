<?php
session_start();
$PageName = "Contact page";
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
    ?>

    <!-- ============= CONTACT TOP ============= -->
    <section class="contact-wrapper single-post-wrapper blog-list-wrapper">
        <div class="container">
            <div class="section-head">
                <h2 class="heading-secondary">Contact</h2>
                <ul class="c-bredcrumb">
                    <li>
                        <a href="#"> Home </a>
                    </li>
                    <li><a href="#"> Contact </a></li>
                </ul>
            </div>
            <div class="row align-items-center gy-5 gy-lg-0">
                <div class="col-lg-6">
                    <div class="left-content">
                        <h2 class="heading-primary">Get in touch</h2>
                        <p class="body-text mt-20 mb-30">
                            After you submit your request using this form, we will answer any of your questions
                            within some minutes.
                        </p>

                        <div class="contact-profile">
                            <div class="profile-item">
                                <div class="profile-avatar bg-cover" style="background-image: url('assets/img/recent-post/post-author1.png')"></div>
                                <div class="profile-details">
                                    <h3 class="name">Thamoddya Rashmitha</h3>
                                    <span class="role body-text">Developer and Owner</span>
                                    <ul class="contact-medium mt-10">
                                        <li class="medium-item">+94 76 945 8554</li>
                                        <li class="medium-item">thamoddya.working@gmail.com</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1">
                    <div class="right-content">
                        <div class="contact_us_contact_form contact-form">
                            <div id="contact-form">
                                <h3 class="form-heading heading-2 white mb-20">Send a message</h3>
                                <input type="text" class="form-control form-field" id="name" name="full_name" placeholder="Enter Name" required />
                                <input type="email" class="form-control form-field" id="email" name="email" placeholder="Enter Email" required />
                                <input type="text" class="form-control form-field" id="InputSubject" name="subject" placeholder="Enter Subject" />
                                <textarea class="form-control form-text-field" id="message" name="message" placeholder="Enter Message" required></textarea>
                                <button class="button button-primary mt-10" onclick="sendEmail();">Send Message</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <script>
        const sendEmail = () => {

            var formdata = new FormData();
            formdata.append("name", $('#name').val());
            formdata.append("email", $('#email').val());
            formdata.append("message", $('#message').val());

            $.ajax({
                type: 'POST',
                url: './process/sendEmail.process.php',
                data: formdata,
                processData: false,
                contentType: false,
                success: function(response) {
                    console.log(response);
                }
            });

        };
    </script>


    <?php
    include_once "./components/footer.component.php";
    include_once "./components/body.imports.php";
    ?>

</body>



</html>