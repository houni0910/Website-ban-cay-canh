<?php 
require_once 'connect.php';// Kết nối với cơ sở dữ liệu

// Lấy dữ liệu từ form đăng nhập
$email = $_POST['email']; 
$password = $_POST['password'];

// Truy vấn cơ sở dữ liệu để kiểm tra thông tin đăng nhập
$sql = "select * from admin where email = '$email'
and password = '$password'";
$result = mysqli_query($connect,$sql);
if(mysqli_num_rows($result) == 1){ // Nếu chỉ có một kết quả trả về (tức là thông tin đăng nhập hợp lệ)
    $each = mysqli_fetch_array($result);// Lấy thông tin của người dùng

    // Bắt đầu phiên làm việc
    session_start();
    $_SESSION['admin'] = $each['id']; // Lưu ID người quản trị
    $_SESSION['level'] = $each['level'];
    $_SESSION['name'] = $each['name'];
    // Chuyển hướng đến trang quản trị chính
    header('location:index.php');

}
// Nếu thông tin đăng nhập không đúng, chuyển hướng về trang đăng nhập
header('location:index.php');
?>