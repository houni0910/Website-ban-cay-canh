<?php 
require_once 'admin/connect.php';
//Ghi lại thông tin đầu vào từ Form đăng nhập
$email = $_POST['email'];
$password = $_POST['password'];
//Kiểm tra xem tùy chọn 'remember' đã được chọn chưa
if(isset($_POST['remember'])){
    $remember = true;
} else{
    $remember = false;
}
// Kiểm tra thông tin người dùng trong cơ sở dữ liệu
$sql = "select * from users where email = '$email' 
and password = '$password'";
$result = mysqli_query($connect,$sql);
$number_rows = mysqli_num_rows($result);

if($number_rows == 1){
    session_start();
    //Lấy dữ liệu người dùng từ tập kết quả:
    $each = mysqli_fetch_array($result);
    // Lưu trữ dữ liệu người dùng trong các biến phiên
    $id = $each['id'];
    $_SESSION['user'] = $id;
    $_SESSION['name'] = $each['name'];

    if($remember){
        // Tạo mã thông báo duy nhất
        $token = uniqid('user_',true);
        
        // Cập nhật bản ghi của người dùng vào cơ sở dữ liệu bằng token
        $sql = "update users set token = '$token'
        where id ='$id'";

        mysqli_query($connect,$sql);

        // Đặt cookie trên trình duyệt của người dùng trong 30 ngày
        setcookie('remember',$token,time() + 60*60*24*30 );
    }
    header('location:user.php');
    exit;
} else {
    echo "Đăng nhập sai!";
}


?>
<!-- đăng nhập xác thực người dùng và tùy chọn ghi nhớ thông tin đăng nhập của họ bằng cookie. -->