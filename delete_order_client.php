<?php 
require_once 'admin/connect.php';
$id = $_GET['id'];
// Xóa các sản phẩm trong đơn hàng (bảng order_product)
$sql_order_product = "delete from order_product where order_id = '$id'";
mysqli_query($connect,$sql_order_product);
// Xóa thông tin đơn hàng (bảng orders)
$sql_orders = "delete from orders where id = '$id'";
mysqli_query($connect,$sql_orders);

mysqli_close($connect);
header("location:cart_show.php");
?>
<!-- xóa một đơn hàng khỏi cơ sở dữ liệu, bao gồm việc xóa các sản phẩm 
 trong đơn hàng đó và xóa thông tin đơn hàng chính -->