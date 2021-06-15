<?php
session_start();
require 'dashboard-part/header.php';
include 'config.php';
?>


<?php
$select = "SELECT * FROM itinfo ";
$select_result = mysqli_query($conn, $select);
?>




<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>users page</title>
</head>

<body>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 border ">
                    <div class="position-absolute">
                        <a href="logout.php" class="btn btn-danger">Logout</a>
                    </div>
                    <div class="head text-center py-3 bg-info text-white">
                        <h3>Users indormation</h3>
                    </div>

                    <table class="table table-striped table-bordered bg-light">
                        <thead>
                            <tr class="table  table-striped ">
                                <th>id</th>
                                <th>NAME</th>
                                <th>EMAIL</th>
                                <th>PASSWORD</th>
                                <th>GENDER</th>
                                <th>picher</th>
                                <th>ACTION</th>
                            </tr>

                            <?php foreach ($select_result as $users_info) { ?>
                                <tr>
                                    <td><?php echo $users_info['id'] ?></td>
                                    <td><?php echo $users_info['name'] ?></td>
                                    <td><?php echo $users_info['email'] ?></td>
                                    <td>*********</td>
                                    <td><?php echo $users_info['gender'] ?></td>

                                    <td><img src="uploads/users/<?php echo $users_info['picher'] ?>" alt="" width="80"></td>
                                    <!-- btn -->
                                    <td><a href="single-view.php?id=<?php echo $users_info['id'] ?>" class="btn btn-primary">View</a>
                                        <a href="edit-user.php?id=<?php echo $users_info['id'] ?>" class="btn btn-info">Edit</a>
                                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal<?php echo $users_info['id'] ?>">
                                            Delete
                                        </button>
                                    </td>
                                    <!-- btn -->
                                </tr>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal<?php echo $users_info['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Are you Sure?</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                Delete has its roots in Latin and was first used to mean destroy. In modern usage, delete means to remove completely.
                                                Delete used in writing means to edit by removing, often done by drawing a line through the text to be deleted .
                                                This process is also called “blue-penciling,” due to the use of the blue colored pencil that some editors use.
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-info" data-dismiss="modal">Not</button>
                                                <a href="delete-user.php?id=<?php echo $users_info['id'] ?> " class="btn btn-danger">Yes</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Modal -->
                            <?php } ?>
                            <?php if ($select_result->num_rows == 0) { ?>
                                <tr>
                                    <td>No Data Available</td>
                                </tr>

                            <?php } ?>
                        </thead>
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
require 'dashboard-part/footer.php'

?>
<style>
    .table th img,
    .jsgrid .jsgrid-table th img,
    .table td img,
    .jsgrid .jsgrid-table td img {
        width: 80px;
        height: 80px;
         border-radius: 0%;
    }
</style>