<?php 
session_start(); // Bắt đầu một phiên (session)
if(!isset($_SESSION['level'])){ // Kiểm tra xem biến $_SESSION['level'] có tồn tại không
    header('location:../index.php?error=Bạn đăng nhập sai!'); // Nếu không, chuyển hướng đến trang đăng nhập với thông báo lỗi
}
?>