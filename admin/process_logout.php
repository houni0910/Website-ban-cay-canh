<?php 
session_start();
// Xóa các biến phiên liên quan đến người dùng
unset($_SESSION['admin']);// Xóa thông tin ID của người quản trị
unset($_SESSION['name']);
unset($_SESSION['level']);
header('location:index.php');
?>