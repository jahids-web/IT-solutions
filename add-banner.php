<?php
session_start();
include 'config.php';
require 'dashboard-part/header.php';
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>jahid it Solutions</title>
</head>

<body class="bg-light">

    <section>
        <div class="container">
            <div class="row ">
                <div class="col-lg-12 text-center  m-auto pb-3  ">
                    <div class="head bg-info text-white py-3 mb-4 ">
                        <h2>Add Banner</h2>
                    </div>
                    <form method="post" action="banner-post.php" enctype="multipart/form-data">
                    <div class="form-group">
                            <input type="text" class="form-control" name="banner_title" placeholder="Enter title">
                        </div>

                        <div class="form-group">
                            <textarea name="banner_desp"cols="122" placeholder="banner_description" class="from-control"></textarea>
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" name="banner_btn" placeholder="Enter button name">
                        </div>

                        <div class="form-group py-3">
                            <input type="file" name="banner_img" class="form-control"
                            onchange="document.getElementByID('img').src = window.URL.createObjectURL(files[0])">
                            <div class="">
                              <img src="" alt="" id="img">
                            </div>
                        </div>
    
                        <button type="submit" class="btn btn-primary ">Submit</button>

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
            display: block;
            width: 100%;
            height: 40px;
            padding: .375rem .75rem;
            font-size: 15px;
            font-weight: 400;
            line-height: 1.5;
            color: #495057;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid #ced4da;
            border-radius: 15px;
            transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
        }

        textarea {
            overflow: auto;
            resize: vertical;
            border-radius: 15px;
            box-shadow: none;
        }
    </style>












    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>
<?php
require 'dashboard-part/footer.php';
?>