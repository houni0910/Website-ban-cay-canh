<?php 
require_once '../checkout_super_admin.php';
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

    $id = $_GET['id']; // Lấy giá trị của tham số id được truyền qua URL (thông qua phương thức HTTP GET) và gán nó vào biến PHP $id.
    $sql = "select * from classification where id = '$id'";
    $result = mysqli_query($connect,$sql);
    $each = mysqli_fetch_array($result);
    ?>
    <form action="process_update.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $each['id']?>"> 
        <br>
        <input type="text" name="name" value="<?php echo $each['name']?>">
        <br>
        <button>Cập nhật</button>
    </form>
</body>
</html>