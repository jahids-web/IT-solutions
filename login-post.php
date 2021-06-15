<?php
session_start();
include 'config.php';

?>

<?php

$email = $_POST['email'];
$password = $_POST['password'];

$select = "SELECT COUNT(*) as login FROM itinfo WHERE email='$email' and password='$password' ";
$select_result = mysqli_query($conn, $select);
$after_assoc = mysqli_fetch_assoc($select_result);

if ($after_assoc['login'] ==1) {
    $_SESSION['login'] = "sucessfully";
    header('location:admin.php');
} 
else {
    $_SESSION['login_err'] = "invalid Email or password";
    header('location:login.php');
}


?>