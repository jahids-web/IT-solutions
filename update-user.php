<?php
include 'config.php';
?>
<?php



$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$gender = $_POST['gender'];

if ($_FILES['picher']['name'] != '') {
    $select = "SELECT picher FROM itinfo WHERE id=$id";
    $select_result = mysqli_query($conn, $select);
    $after_assoc = mysqli_fetch_assoc($select_result);
    $delete_photo = "uploads/users/" . $after_assoc['picher'];
    unlink($delete_photo);

    $uploaded_file = $_FILES['picher'];
    $after_explode = explode('.', $uploaded_file['name']);
    $extension = end($after_explode);
    $allowed_extension = array('jpg', 'png', 'jpeg', 'gif');


    if (in_array($extension, $allowed_extension)) {
        if ($uploaded_file['size'] <= 200000) {

            $update = "UPDATE itinfo SET name='$name', email='$email', password='$password', gender='$gender' WHERE id=$id";
            $update_result = mysqli_query($conn, $update);

            $file_name = $id . '.' . $extension;
            $new_location = "uploads/users/" . $file_name;
            move_uploaded_file($uploaded_file['tmp_name'], $new_location);

            $update_photo = "UPDATE itinfo SET picher='$file_name' WHERE id=$id";
            $update_photo_result = mysqli_query($conn, $update_photo);
            header('location:users.php');
        } else {
            echo "Size Is To Lurge";
        }
    } else {
        echo "Format Is Not Right";
    }
} else {

    $update = "UPDATE itinfo SET name='$name', email='$email', password='$password', gender='$gender' WHERE id=$id";
    $update_result = mysqli_query($conn, $update);
    header('location:users.php');
}






?>