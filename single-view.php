<?php
require 'dashboard-part/header.php';
include 'config.php';

?>

<?php
$id = $_GET ['id'];
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

    <title>Individual Information</title>
</head>

<body>
    <section>
        <div class="container border border-info">
            <div class="row">
                <div class="col-lg-12 border border-primary">
                    <div class="head text-center py-3 bg-info text-white">
                        <h3>Individual Information</h3>
                    </div>
                    <table class="table  table-striped">
                      
                        <tr>
                            <td>Name:</td>
                            <td><?= $after_assoc ['name']?></td>
                        </tr>
                        <tr>
                            <td>Email:</td>
                            <td><?= $after_assoc ['email']?></td>
                        <tr>
                            <td>password:</td>
                            <td><?= $after_assoc ['password']?></td>
                        </tr>
                        <tr>
                            <td>Gender:</td>
                            <td><?= $after_assoc ['gender']?></td>
                        </tr>

                    </table>

                </div>
            </div>
        </div>
    </section>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>


</body>

</html>
<?php
require 'dashboard-part/footer.php';
?>