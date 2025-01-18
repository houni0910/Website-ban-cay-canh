<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type="text/css">
        #middle{
            text-align:center;
        }
        /* CSS cho phần tìm kiếm */
        .search-form {
            margin-top:20px;
            margin-bottom: 20px;
        }

        /* CSS cho sản phẩm */
        .product {
            text-align:center;
            margin-bottom: 20px; /* Khoảng cách giữa các sản phẩm */
            border: 1px solid #ccc; /* Viền sản phẩm */
            padding: 10px; /* Khoảng cách bên trong sản phẩm */
            width: 200px; /* Độ rộng sản phẩm */
            display: inline-block; /* Hiển thị sản phẩm theo hàng ngang */
            vertical-align: top; /* Căn chỉnh sản phẩm theo phần tử chứa */
        }

        .product h5 {
            margin-bottom: 5px; /* Khoảng cách giữa tiêu đề và hình ảnh */
        }

        .product img {
            width: 150px; /* Kích thước hình ảnh sản phẩm */
            height: 150px;
            margin-bottom: 5px; /* Khoảng cách giữa hình ảnh và giá sản phẩm */
        }

        .product p {
            margin-bottom: 5px; /* Khoảng cách giữa giá sản phẩm và các liên kết */
        }

        .product a {
            text-decoration: none; /* Loại bỏ gạch chân từ liên kết */
            display: block; /* Hiển thị liên kết dạng khối */
            margin-bottom: 5px; /* Khoảng cách giữa các liên kết */
        }

        /* CSS cho phân trang */
        #middle a {
            text-decoration: none; /* Loại bỏ gạch chân từ liên kết */
            margin-right: 5px; /* Khoảng cách giữa các liên kết */
        }
        .search-form-container {
            margin-bottom: 20px;
        }

        .search-form {
            text-align:center;
            
        }

        .search-form input[type="search"] {
            text-align:center;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .search-form input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 8px 16px;
            border-radius: 4px;
            cursor: pointer;
        }

        .search-form input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
<?php

    require_once 'admin/connect.php';
    $page = 1;

    if(isset($_GET['page'])){
    //neu co so trang duoc gui len
       $page = $_GET['page'];
    }

    $search = '';

    // cho mac dinh $tim_kiem la chuoi rong
    if(isset($_GET['search'])){
    $search = $_GET['search'];
    }

    $classify = '';
    if(isset($_GET['classify'])){
        $search = $_GET['classify'];
    }

    $sql_total_product = "select count(*) from products where name like '%$search%' ";
    //lay ra so phan tu trong bang products neu co tim kiem kem theo tim kiem con khong thi tim kiem mac dinh = ''

    $array_product = mysqli_query($connect,$sql_total_product);
    //ket noi cau lenh vs database

    $result_total_product = mysqli_fetch_array($array_product);
    //lay ra phan tu dau tien du no chi co 1

    $number_of_product = $result_total_product['count(*)'];
    //lay ra gia tri

    $product_in_one_page = 4;
    //khai bao so san pham 1 trang

    $total_page = ceil($number_of_product / $product_in_one_page);//lam tron so trang

    $next = $product_in_one_page * ($page - 1);
    //bo qua bang so tin tuc 1 trang * so trang hien tai - 1



    // $sql = "select * from products
    //  where name like '%$search%' limit $product_in_one_page offset $next";
    //in ra 1 trang co gioi han 4 san pham

    $sql = "SELECT products.*, classification.name AS classification_name 
        FROM products
        JOIN classification ON products.id_classify = classification.id
        WHERE products.name LIKE '%$search%' 
        LIMIT $product_in_one_page 
        OFFSET $next";
    $result = mysqli_query($connect,$sql);
    //can tra ve ket qua de dung de in ra
?>
     
    <div id="middle">
        <div class="search-form-container">
            <form action="" class="search-form" style="margin-bottom:20px">
                <input type="search" name="search" value="<?php echo $search ?>">
                <input type="submit" value="Tìm kiếm">
            </form>
        </div>
        <?php foreach ($result as $each): ?>
            <div class="product">
                <h5>
                   <?php echo $each['name'] ?>
                 </h5>
                <img src="admin/images/<?php echo $each['image'] ?>" alt="" height="150px" width="150px">
                <p> <?php echo $each['price'] ?> VND </p>
                <a href="detail_product.php?id=<?php echo $each ['id'] ?>">
                    Xem chi tiết
                </a>
                <br>
                 <a href="category.php?id=<?php echo $each['id_classify']?>">
                    <?php echo $each['classification_name']?>
                </a>
                
                <br>
                <?php if(isset($_SESSION['user'])) { ?>
                    <a href="add_cart.php?id=<?php echo $each['id'] ?>">
                      Thêm vào giỏ hàng
                    </a>
                <?php } ?>    
            </div>
        <?php endforeach ?>   
        <br>
        <br> 
        <?php for($i = 1; $i <= $total_page ; $i++){ ?>
            <a style="text-decoration:none;" href="?page=<?php echo $i ?>&search=<?php echo $search ?>">
                <?php echo $i ?>
            </a>
        <?php } ?>    
        <?php mysqli_close($connect) ?>
    </div>
</body>

</html>