<?php 

require_once '../connect.php';

$id = $_GET['id'];
$status = $_GET['status'];

$sql = "update orders set status = $status where id = '$id' ";
mysqli_query($connect,$sql);
mysqli_close($connect);
header('location:index.php');
?>