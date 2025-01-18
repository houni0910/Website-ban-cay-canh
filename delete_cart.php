<?php 
session_start();
$id = $_GET['id']; //Lấy ID sản phẩm từ URL:
// sẽ xóa sản phẩm có ID $id khỏi giỏ hàng của người dùng có ID $_SESSION['user']
unset($_SESSION['cart'][$_SESSION['user']][$id]);
header("location:view_cart.php");
?>
<!--xóa một sản phẩm khỏi giỏ hàng của người dùng -->