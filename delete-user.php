<?php
include 'config.php';
?>

<?php 

$id = $_GET['id'];

$select = "SELECT picher FROM itinfo WHERE id=$id";
$select_result = mysqli_query($conn, $select) ;
$after_assoc = mysqli_fetch_assoc($select_result);
$delete_photo ="uploads/users/".$after_assoc['picher'];
unlink($delete_photo);

$delete = "DELETE FROM itinfo WHERE id=$id";

$delete_result = mysqli_query($conn ,$delete);
header('location:users.php');





?>
