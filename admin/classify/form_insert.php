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
    <form action="process_insert.php" method="POST">
        Tên 
        <input type="text" name="name">
        <br>
        <button>Thêm</button>
    </form>
</body>
</html>