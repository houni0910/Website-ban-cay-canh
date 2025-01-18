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
    <?php 
    require_once '../connect.php';
    $sql = "select * from classification";
    $result = mysqli_query($connect,$sql);

    ?>
    <form action="process_insert.php" method="POST" enctype="multipart/form-data">
        Tên 
        <input type="text" name="name">
        <br>
        Giá
        <input type="text" name="price">
        <br>
        Ảnh
        <input type="file" name="image">
        <br>
        Danh mục
        <select name="id_classify" >
            <?php foreach ($result as $each) { ?>
                <option value="<?php echo $each['id']?>">
                    <?php echo $each['name']?>
                </option>
            <?php } ?>
        </select>
        <br>
        <button>Thêm</button>
    </form>
</body>
</html>