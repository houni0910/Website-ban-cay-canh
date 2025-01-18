<?php 
require_once '../checkout_super_admin.php';
require_once '../connect.php';

$name = $_POST['name']; // Lấy dữ liệu từ biểu mẫu (form) với tên trường là name.
$sql = "insert into classification(name) values('$name')"; /* Chèn dữ liệu vào bảng classification với giá trị $name */

mysqli_query($connect,$sql);
mysqli_close($connect);

header('location:index.php');
?>