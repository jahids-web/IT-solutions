<?php
session_start();
require 'dashboard-part/header.php';
include 'config.php';

?>
<?php
$select = "SELECT * FROM banner ";
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
               
                    <div class="head text-center py-3 bg-info text-white">
                        <h3>Users indormation</h3>
                    </div>

                    <table class="table table-striped table-bordered bg-light">
                        <thead>
                            <tr class="table  table-striped ">
                                <th>id</th>
                                <th>Banner Title</th>
                                <th>Banner Descriotion</th>
                                <th>Banner Button</th>
                                <th>Banner Images</th>
                                <th>Action</th>
                                <th>Action</th>
                                <th>Action</th>

                            </tr>

                            <?php foreach ($select_result as $banner_info) { ?>
                                <tr>
                                    <td><?php echo $banner_info['id'] ?></td>
                                    <td><?php echo $banner_info['banner_title'] ?></td>
                                    <td><?php echo substr($banner_info['banner_desp'],0,20 ).'....More' ?></td>
                                    <td><?php echo $banner_info['banner_btn'] ?></td>
                                    <td><img src="uploads/banner/<?php echo $banner_info['banner_img'] ?>" alt="" width="100"></td>
                                    <!-- btn -->
                                    <td><a href="single-view.php?id=<?php echo $banner_info['id'] ?>" class="btn btn-primary">View</a></td>
                                    
                                    <td><a href="edit-user.php?id=<?php echo $banner_info['id'] ?>" class="btn btn-info">Edit</a></td>
                                    <td>
                                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal<?php echo $banner_info['id'] ?>">
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
    .table th img, .jsgrid .jsgrid-table th img, .table td img, .jsgrid .jsgrid-table td img {
	width: 100px;
	height: 65px;
	 border-radius: 0%; 
}
</style>