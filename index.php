<?php 
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./font/fontawesome-free-6.4.2-web/css/all.min.css">
    <style type="text/css">
        #general{
            margin: 0;
            padding: 0;
            box-sizing: border-box; 
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            scroll-behavior: smooth;
        }
        #header {
            width:100%;
            height:100px;
            background-color:#90EE90;
        }
        #header ul li  {
            display: inline-block;
            margin : 10px;
        }
        #header ul li a {
            text-decoration:none;
        }
        .banner {
            
            width: 100%;
            max-width: 1200px;
            margin-top: 100px;
            margin-left: auto ;
            margin-right: auto ;
            background-image: url('assets/img/ibn3.jpg');
            background-size: cover;
            background-position: center;
            height: 700px;
            /* Điều chỉnh chiều cao theo nhu cầu */
        }

        .banner-content {
            margin-top:100px;
            color: #fff; 
            text-align: center;
    
        }

        .banner-content h1 {
            font-size: 48px;
            font-weight: 800;
            margin-bottom: 20px;
            padding-top:250px;
            
            
        }

        .banner-content p {
            font-size: 20px;
            margin-bottom: 30px;
            font-weight: 800;
            padding-top:auto;
            padding-bottom:auto ;
        }

        .btn {
            display: inline-block;
            background-color: #28a745;
            color: #fff;
            font-size: 18px;
            font-weight: bold;
            text-decoration: none;
            padding: 15px 30px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #218838;
        }

        #slide {
        display: flex;
        overflow-x: auto;
        scroll-snap-type: x mandatory;
        padding-left:100px;
        padding-right:100px;
        margin-left:200px;

        }

        .item {
        flex: 0 0 auto;
        width: 80%;
        min-width: 300px;
        margin-right: 20px;
        background-size: cover;
        background-position: center;
        scroll-snap-align: start;
        height: 300px;

        }
        .content {
        /* background-color: rgba(0, 0, 0, 0.5); */
        padding: 20px;
        color: white;
        /* height: 250px; */
        }

        .name {
        font-size: 64px;
        font-weight: 500;
        }

        .des {
        margin-top: 10px;
        font-size: 40px;
        }
        #slider{
        width:85%;
        height: 600px;
        margin: 50px auto;
        border: 1px solid #ddd;
        margin-bottom: 200px;
        }
        .wrapper{
        height:90%;
        display: flex;
        }
        .list-image{
        width:100%;
        height: 10%;
        display: flex;
        justify-content: space-between;
        }
        .list-image div{
        flex:1;
        padding: 1px;
        }
        .list-image img{
        width:100%;
        height:100%;
        object-fit:cover;
        object-position:center ;
        padding: 5px;
        border: 1px solid #ddd;
        }
        .control{
        margin-top:250px;
        font-size: 40px;
        }
        .next{
        margin-left: 30px;
        float: left;

        }
        footer {
        background-color: #fff;
        color: #000;
        padding: 40px 0;
        text-align: center;
        }

        .ft-row {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        max-width: 1200px;
        margin: 0 auto;
        }

        .row-list {
        flex: 1;
        }

        .row-list .footer-links {
        margin-bottom: 20px;
        }

        .row-list .footer-links a {
        color: #000;
        text-decoration: none;
        margin: 0 10px;
        }

        .row-list .footer-social {
        margin-top: 20px;
        }

        .row-list .footer-social a {
        color: #000;
        text-decoration: none;
        margin: 0 10px;
        }

        .row-list .footer-social i {
        font-size: 24px;
        }

        .row-logo {
        flex: 1;
        text-align: left;
        display: flex;
        margin-left: 250px;
        }

        .row-logo h2 {
        margin-bottom: 10px;
        margin-right: 20px;
        font-size: 36px;
        }

        .row-logo p {
        font-size: 14px;
        line-height: 1.5;
        }

        .row-logo img {
        max-width: 100px;
        height: auto;
        }

    </style>
</head>
<body>
    
    <div id="general">
        <?php require_once 'header.php'; ?>
        <div class="banner">
        <div class="banner-content">
            <h1>Thiên Nhiên Trong Tầm Tay</h1>
            <p>Khám phá bộ sưu tập đa dạng các loại cây cảnh và hoa vườn từ TREES.</p>
            <a href="#" class="btn">Khám Phá Ngay</a>
        </div>
        </div>
        <div id="slider">
            <div class="wrapper">
                <div class="control prev">
                    <i class="fa-solid fa-chevron-left"></i>
                </div>
                <img src="assets/img/3.jpg" class="img-feature" style="width:90%;height:100%;margin-left: 35px;object-fit: contain;">
                <div class="control next">
                    <i class="fa-solid fa-chevron-right"></i>
                </div>
            </div>
            <div class="list-image">
                <div><img style="height: 200px;" src="assets/img/3.jpg" alt=""></div>
                <div><img style="height: 200px;" src="assets/img/1.jpg" alt=""></div>
                <div><img style="height: 200px;" src="assets/img/5.jpg" alt=""></div>
            </div>
        </div>
        
        <?php require_once 'middle.php';?>
        <footer> <!--chân trang -->
        <div class="ft-row">
            <div class="row-list">
                <div class="footer-links">
                    <a href="#">Trang chủ</a>
                    <a href="#">Sản phẩm</a>
                    <a href="#">Dịch vụ</a>
                    <a href="#">Hỗ Trợ</a>
                </div>
                <div class="footer-social">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-linkedin"></i></a>
                </div>
                <p>&copy; 2024 Trees. All Rights Reserved.</p>
            </div>
            <div class="row-logo">
                <h2>Trees:</h2>
                <p>
                    Chất Lượng Đảm Bảo
                    <br>
                    Sản Phẩm Tốt
                    <br>
                    Liên Hệ : 0123456789
                    <br>
                    Email : hmm@gmail.com
                </p>
                <img src="./assets/img/logo2.jpg" alt="">
            </div>
        </div>

        </footer>

        <script src="js/script.js"></script>
    </div>
</body>
</html>