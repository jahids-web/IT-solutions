<?php
include 'config.php';
require 'dashboard-part/header.php';
?>


<?php
$id = $_GET['id'];

$select = "SELECT * FROM itinfo WHERE id=$id";
$select_result = mysqli_query($conn, $select);
$after_assoc = mysqli_fetch_assoc($select_result);
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>edit-user page</title>
</head>

<body>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 m-auto bg-light">
                    <div class="head bg-primary py-3  text-white text-center mb-5">
                        <h3>Edit Users information</h3>
                    </div>

                    <form method="post" action="update-user.php" enctype="multipart/form-data">
                        <div class="form-group">
                            <input type="hidden" name="id" class="form-control" value="<?php echo $after_assoc['id']; ?>">
                            <input type="text" name="name" class="form-control" value="<?php echo $after_assoc['name']; ?>">
                        </div>

                        <div class="form-group">
                            <input type="email" name="email" class="form-control" value="<?php echo $after_assoc['email']; ?>">
                        </div>
                        <div class="form-group jahid_form">
                            <input type="password" class="form-control" name="password" placeholder="Enter RE-Password" id="myInput" value="<?php echo $after_assoc['password']; ?>">
                            <button type="button" onclick="myFunction()" class="btn btn-primary jahid_show_hihe_button">Show/Hide</button>
                        </div>
                        <div class="form-group text-black  text-center m-4 p-2">
                            <input name="gender" value="male" type="radio" <?php if ($after_assoc['gender'] == 'male') echo 'checked';
                                                                            ?>><label for="gender">Male</label>

                            <input name="gender" value="female" type="radio" <?php if ($after_assoc['gender'] == 'Female') echo 'checked';
                                                                                ?>><label for="gender">Female</label>
                        </div>

                        <div class="form-group jahid_form">
                            <div class="text-center mb-5">
                                <h3>Present Photo</h3>
                                <img src="uploads/users/<?php echo $after_assoc['picher']; ?>" alt="" width="150">
                            </div>
                            <input type="file" name="picher" class="form-control">

                        </div>

                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-info">Update</button>
                        </div>
                        </from>
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

        .form-group label {
            font-size: 0.875rem;
            line-height: 21px;
            vertical-align: top;
        }
    </style>


    <?php
    require 'dashboard-part/footer.php';
    ?>




    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>


</body>

</html>