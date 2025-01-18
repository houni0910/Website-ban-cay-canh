<?php 
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
           font-family: Arial, sans-serif;
           background-color: #f4f4f4;
           margin: 0;
           padding: 0;
        }

        h1 {
           text-align: center;
           margin-top: 50px;
        }

a {
    display: block;
    text-decoration: none;
    color: #007bff;
    margin-bottom: 10px;
}

a:hover {
    text-decoration: underline;
}

form {
    max-width: 300px;
    margin: 0 auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

form input[type="email"],
form input[type="password"],
form button {
    width: 100%;
    margin-bottom: 10px;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

form button {
    background-color: #007bff;
    color: #fff;
    border: none;
    cursor: pointer;
}

form button:hover {
    background-color: #0056b3;
}

.logout-link {
    text-align: center;
    margin-top: 20px;
}
    </style>
</head>
<body>
    <h1>Đây là trang Admin</h1>
    <?php if(isset($_SESSION['admin'])) { ?>
        <a href="./classify/index.php">Trang nhà sản xuất</a>
        <br>
        <a href="./products/index.php">Trang sản phẩm</a>
        <br>
        <a href="./orders/index.php">Quản lí đơn hàng</a>
        <a href="process_logout.php">Đăng xuất</a>
    
    <?php } else { ?>
        <form action="process_login.php" method="POST">
        Email
        <input type="email" name="email">
        <br>
        Mật khẩu 
        <input type="password" name="password">
        <br>
        <button>Đăng nhập</button>
    </form>
    <?php } ?>    
    <br>
    
    
</body>
</html>