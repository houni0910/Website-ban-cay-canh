<?php 
require_once '../checkout_super_admin.php';
require_once '../connect.php';

$id = $_GET['id']; // Lấy giá trị của tham số id từ URL
$sql = "delete from classification where id = '$id'"; // Tạo một câu lệnh SQL để xóa một bản ghi trong bảng classification dựa vào giá trị của $id

mysqli_query($connect,$sql); // Hàm mysqli_query gửi câu lệnh SQL tới cơ sở dữ liệu được kết nối (trong tệp connect.php).
mysqli_close($connect); // Đóng kết nối cơ sở dữ liệu
header('location:index.php'); // Sau khi xóa bản ghi, người dùng được chuyển về trang index.php
?>