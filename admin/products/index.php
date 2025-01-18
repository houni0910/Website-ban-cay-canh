<?php 
require_once '../checkout_admin.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="../index.php">Trang chủ</a>
    <h1>Đây là trang sản phẩm</h1>
    <a href="form_insert.php">
        Thêm sản phẩm
    </a>
    <?php 
    require_once '../connect.php';
    $sql = "select
    products.*,
    classification.name as classification_name 
    from products
    join classification on products.id_classify = classification.id";
    $result = mysqli_query($connect,$sql);
    
    ?>
    <table border="1" width="70%">
        <tr>
            <th>Mã</th>
            <th>Tên</th>
            <th>Giá</th>
            <th width="120">Ảnh</th>
            <th>Danh mục</th>
            <th>Sửa</th>
            <th>Xóa</th>
        </tr>
        <?php foreach ($result as $each) { ?>
            <tr>
                <td><?php echo $each['id']?></td>
                <td><?php echo $each['name']?></td>
                <td><?php echo $each['price']?> VND</td>
                <td>
                    <img src="../images/<?php echo $each['image'] ?>" height="120" width="120">
                </td>
                <td><?php echo $each['classification_name']?></td>
                <td>
                    <a href="form_update.php?id=<?php echo $each['id']?>">
                        Sửa
                    </a>
                </td>
                <td>
                    <a href="delete.php?id=<?php echo $each['id']?>">
                        Xóa
                    </a>
                </td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>