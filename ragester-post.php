<?php
session_start();
include 'config.php';

?>
<?php

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$gender = $_POST['gender'];


//  exist_email //
$select = "SELECT COUNT(*) as exist_email FROM itinfo WHERE email='$email'";
$select_result = mysqli_query($conn, $select);
$after_assoc = mysqli_fetch_assoc($select_result);
//  exist_email end//

// picher uploaded //
$uploaded_file = $_FILES['picher'];
$after_explode = explode('.', $uploaded_file['name']);
$extension = end($after_explode);
$allowed_extension = array('jpg', 'png', 'jpeg', 'gif');

if (in_array($extension, $allowed_extension)) {
    if ($uploaded_file['size'] <= 200000) {

        if ($after_assoc['exist_email'] ==1) { 
            $_SESSION['exist'] = 'Email Already Exist';
            header('location:ragester.php');
        }
         else {
            // insert -start//
            $insert = "INSERT INTO itinfo (name,email,password,gender)VALUES('$name','$email','$password','$gender')";
            $insert_result = mysqli_query($conn, $insert);
            // insert - end//

            $last_id = mysqli_insert_id($conn);
            $file_name = $last_id . '.' . $extension;
            $new_location = "uploads/users/" . $file_name;
            move_uploaded_file($uploaded_file['tmp_name'], $new_location);

            $update = "UPDATE itinfo SET picher='$file_name' WHERE id=$last_id";
            $update_result = mysqli_query($conn, $update);
        }
    } else {
        echo "Size Is To Lurge";
    }
} else {
    echo "Format Is Not Right";
}
// picher uploaded end //
$_SESSION['success'] = 'You have posted your informations successfully!';
header('location:admin.php');
?>
