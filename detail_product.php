<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }

        #middle {
            width: 80%;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #333;
            text-align: center;
            margin-bottom: 20px;
        }

        img {
            display: block;
            margin: 0 auto;
            max-width: 100%;
            height: auto;
        }

        p {
            color: #666;
            text-align: center;
            font-size: 18px;
        }
    </style>
</head>
<body>
    <?php
    require_once 'admin/connect.php';
    // Lấy giá trị của tham số id từ URL
    $id = $_GET['id'];
    // Truy vấn SQL lấy thông tin của sản phẩm có id tương ứng từ bảng products.
    $sql = "select * from products where id ='$id'";
    $result = mysqli_query($connect,$sql);
    $each = mysqli_fetch_array($result);
    ?>
    <!--Hiển thị thông tin sản phẩm: -->
    <div id="middle">
        <h1>
            <?php  echo $each['name']?>
        </h1>
        <img src="admin/images/<?php echo $each['image'] ?>" alt="">
        <p> Giá : <?php echo $each['price'] ?> VND</p>
    </div>
</body>
</html>
<!-- hiển thị chi tiết thông tin của một sản phẩm -->