<?php
require_once 'admin/connect.php';

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$phone = $_POST['phone'];
$address = $_POST['address'];

$sql1 = "select count(*) from users where email ='$email'";
//dem xem trong bang da xuat hien email nay chua
$result1 = mysqli_query($connect,$sql1);

$number_rows = mysqli_fetch_array($result1)['count(*)'];
//lay thang dau tien tai cot count(*)
if($number_rows == 1){
    header('location:register.php?error=Email đã tồn tại!');
    exit;
    //dung code ngay tai day
}

$sql2 = "insert into users(name,email,password,phone,address) 
value ('$name','$email','$password','$phone','$address')";

mysqli_query($connect,$sql2);

$title = "Đăng kí thành công!";
$content = "Bạn đã đăng kí thành công trên Website của chúng tôi";

require_once 'send_mail.php';
sendMail($email,$name,$content,$title);

$sql3 = "select id from users where email = '$email'";
//loc id tu email cua minh
$result2 = mysqli_query($connect,$sql3);

$id = mysqli_fetch_array($result2)['id'];
//lay thang dau tien tai cot id cua no

session_start();
$_SESSION['user'] = $id;
$_SESSION['name'] = $name;

mysqli_close($connect);
header('location:index.php');
?>