<?php
session_start();
include 'config.php';

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login-from</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="login-regester-assets/css/style.css">
</head>

<body>

    <div class="main">



        <!-- Sing in  Form -->
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="login-regester-assets/images/signin-image.jpg" alt="sing up image"></figure>
                        <a href="ragester.php" class="signup-image-link">Create an account</a>
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Login</h2>
                        <form method="POST" class="register-form" action="users.php" enctype="multipart/form-data" id="login-form">
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" placeholder="Enter Your Email">
                            </div>
                            <div class="form-group ">
                                <input type="password" name="password" class="form-control " placeholder="Enter Your Password">
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit" value="Log in" />
                            </div>
                        </form>
                        <!-- masage start -->
                        <?php if (isset($_SESSION['exist'])) { ?>
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong><?= $_SESSION['exist'];
                                    unset($_SESSION['exist']);
                                    ?></strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <?php } ?>
                        <!-- masage end -->
                    </div>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="login-regester-assets/vendor/jquery/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="/login-regester-assets/js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>






<script>
    function myFunction() {
        var x = document.getElementById("myInput");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }

</script>


<style>
    .jahid_form {
        position: relative;
    }

    .jahid_show_hihe_button {
        position: absolute;
        top: 0px;
        right: 0px;
    }

    .form-control {
        width: 100%;
        display: block;
        border: none;
        border-bottom-color: currentcolor;
        border-bottom-style: none;
        border-bottom-width: medium;
        border-bottom: 1px solid #999;
        padding: 6px 30px;
        font-family: Poppins;
        box-sizing: border-box;
    }

    input[type="radio"] {
        appearance: radio !important;
        -moz-appearance: radio !important;
        -webkit-appearance: radio !important;
        -o-appearance: radio !important;
        -ms-appearance: radio !important;
        /* padding-top: -40px; */
        margin-bottom: -15px;
        color: #1a86e8;
        font-weight: 500
    }

    .man {
        font-family: Poppins;
        color: #1a86e8;
        font-weight: 500
    }

    .Female {
        font-family: Poppins;
        color: #1a86e8;
        font-weight: 500
    }

</style>
