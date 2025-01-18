<?php 
require_once '../checkout_super_admin.php';
require_once '../connect.php';

$id = $_POST['id'];
$name = $_POST['name'];
$sql = "update classification
set name = '$name' where id = '$id'";

mysqli_query($connect,$sql);
mysqli_close($connect);

header('location:index.php');
?>