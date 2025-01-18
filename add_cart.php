<?php 

    session_start();

    // Kết nối cơ sở dữ liệu
    require_once 'admin/connect.php';
    // Lấy ID sản phẩm từ đường link
    $id = $_GET['id'];

    // Kiểm tra nếu sản phẩm này chưa có trong giỏ hàng
    if(empty($_SESSION['cart'][$_SESSION['user']][$id])){
    // Nếu sản phẩm chưa có trong giỏ hàng => thêm sản phẩm mới
        $sql = "select * from products where id = '$id'"; // Truy vấn lấy thông tin sản phẩm từ cơ sở dữ liệu
        $result = mysqli_query($connect,$sql); // Thực thi truy vấn
        $each = mysqli_fetch_array($result);// Lấy thông tin của sản phẩm từ kết quả truy vấn

        // Lưu thông tin sản phẩm vào giỏ hàng (session)
        $_SESSION['cart'][$_SESSION['user']][$id]['name'] = $each['name'];
        $_SESSION['cart'][$_SESSION['user']][$id]['image'] = $each['image'];
        $_SESSION['cart'][$_SESSION['user']][$id]['price'] = $each['price'];
        $_SESSION['cart'][$_SESSION['user']][$id]['quantity'] = 1; // Mặc định số lượng sản phẩm là 1
    } 
    else {
         // Nếu sản phẩm đã có trong giỏ hàng => tăng số lượng lên 1
        $_SESSION['cart'][$_SESSION['user']][$id]['quantity']++;
    }

// Chuyển hướng người dùng tới trang giỏ hàng
header('location:view_cart.php');
?>