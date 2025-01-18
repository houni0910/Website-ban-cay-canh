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
    $id = $_GET['id'];
    $sql = "select * from products where id = '$id'";
    $result = mysqli_query($connect,$sql);
    $each = mysqli_fetch_array($result);

    $sql1 = "select * from classification";
    $classify = mysqli_query($connect,$sql1);

    ?>
    <form action="process_update.php" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $each['id']?>">
        <br>
        Tên 
        <input type="text" name="name" value="<?php echo $each['name']?>">
        <br>
        Giá
        <input type="text" name="price" value="<?php echo $each['price']?>">
        <br>
        Ảnh mới
        <input type="file" name="new_image">
        <br>
        Ảnh cũ
        <img src="../images/<?php echo $each['image'] ?>" alt="" height="150">
        <input type="hidden" name="old_image" value="<?php echo $each['image'] ?>">
        <br>
        Danh mục 
        <select name="id_classify">
            <?php foreach ($classify as $class) { ?>
                <option value="<?php echo $class['id']?>"
                <?php if($each['id_classify'] === $class['id']){ ?>
                    selected
                <?php } ?> 
                >
                   <?php echo $class['name']?>
                </option>
            <?php } ?>
        </select>
        <button>Cập nhật</button>
    </form>
</body>
</html>