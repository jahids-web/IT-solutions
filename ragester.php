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
    <title>Ragester-from</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="login-regester-assets/css/style.css">
</head>

<body>

    <div class="main">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Ragester</h2>
                        <form method="POST" class="register-form" id="register-form" action="ragester-post.php" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name" id="name" placeholder="Your Name" />
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your Email" />
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="far fa-key"></i></label>
                                <input type="password" name="password" id="pass" placeholder="Password" />
                            </div>
                            <div class="form-group jahid_form">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" class="form-control" name="password" placeholder="Enter RE-Password" id="myInput">
                                <button type="button" onclick="myFunction()" class="btn btn-primary jahid_show_hihe_button">Show/Hide</button>
                            </div>

                            <div class="form-group py-3">
                                <input type="file" name="picher" class="form-control" onchange="document.getElementByID('img').src = window.URL.createObjectURL(files[0])">
                                <div class="">
                                    <img src="" alt="" id="picher">
                                </div>
                            </div>

                            <div class="form-group text-center text-dark">
                                <div class="man">
                                    <input name="gender" value="male" type="radio">Male
                                </div>
                                <div class="Female">
                                    <input name="gender" value="female" type="radio">Female
                                </div>


                            </div>


                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Register" />
                            </div>
                        </form>

                         <!-- masage start -->
                         <?php if(isset($_SESSION['success'])){ ?>
                          <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong><?=$_SESSION['success'];
                            unset($_SESSION['success']);
                            ?></strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                        <?php } ?>
                    <!-- masage end -->

                    <!-- masage start -->
                        <?php if(isset($_SESSION['exist'])){ ?>
                          <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong><?=$_SESSION['exist'];
                            unset($_SESSION['exist']);
                            ?></strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                        <?php } ?>
                    <!-- masage end -->
                    </div>
                    <div class="signup-image">
                        <figure><img src="login-regester-assets/images/signup-image.jpg" alt="sing up image"></figure>
                      
                    </div>
                </div>
            </div>
        </section>

        <!-- Sing in  Form -->


    </div>

    <!-- JS -->
    <script src="login-regester-assets/vendor/jquery/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="/login-regester-assets/js/e8b72830d1.js"></script>
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
        background: #6dabe4;
        width: 100px;
        height: 35px;
        border-radius: 6px;
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

    .signup-form h2 {
        color: #1a86e8
    }
</style>