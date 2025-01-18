<?php 
/* kết nối csdl */ 

$server = 'localhost';
$user = 'root';
$password = '';
$database = 'web_ban_cay';
/* kiểm tra kết nối */ 
$connect = mysqli_connect($server,$user,$password,$database);
mysqli_set_charset($connect,'utf8');

?>
