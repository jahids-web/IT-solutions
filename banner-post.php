<?php
session_start();
include 'config.php';

?>
<?php

$banner_title = $_POST['banner_title'];
$banner_desp = $_POST['banner_desp'];
$banner_btn = $_POST['banner_btn'];



// picher uploaded //
$uploaded_file = $_FILES['banner_img'];
$after_explode = explode('.', $uploaded_file['name']);
$extension = end($after_explode);
$allowed_extension = array('jpg', 'png', 'jpeg', 'gif');

if (in_array($extension, $allowed_extension)) {
    if ($uploaded_file['size'] <= 2000000) {

        // insert -start//
        $insert = "INSERT INTO banner (banner_title,banner_desp,banner_btn)VALUES('$banner_title','$banner_desp','$banner_btn')";
        $insert_result = mysqli_query($conn, $insert);
        // insert - end//

        $last_id = mysqli_insert_id($conn);
        $file_name = $last_id . '.' . $extension;
        $new_location = "uploads/banner/" . $file_name;
        move_uploaded_file($uploaded_file['tmp_name'], $new_location);

        $update = "UPDATE banner SET banner_img='$file_name' WHERE id=$last_id";
        $update_result = mysqli_query($conn, $update);
        header('location:add-banner.php');
    } 
    else {
        echo "img size is Not perfict.";
    }
  }

   else {


   }
// picher uploaded end //
?>
