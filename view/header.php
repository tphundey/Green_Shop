<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>greenshop - sạch đến từng luống rau</title>
    <link rel="stylesheet" href="view/css/style.css">
    <link rel="stylesheet" href="view/css/mess.css">
    <script src="https://kit.fontawesome.com/d829d3809c.js" crossorigin="anonymous"></script>
</head>

<body>
    <header>
        <div class="relative">
            <div class="fixed">
                <div class="hd container">
                    <div class="h-left ">
                        <a href=""><img src="view/images/logo.png" alt="" width="100px"></a>
                        <ul>
                            <li><a href="index.php"><strong>Trang chủ</strong></a></li>
                            <li><a href="index.php?act=sanpham"><strong>Sản phẩm</strong></a></li>
                            <li><a href="index.php?act=gioithieu"><strong>Giới thiệu</strong></a></li>
                            <li><a href="index.php?act=lienhe"><strong>Liên hệ</strong></a></li>
                        </ul>
                    </div>
                    <div class="h-right">
                        <ul>
                            <!-- ẩn trang đăng nhập đăng ký khi người dùng đã đăng nhập -->
                            <?php
                            if (!isset($_SESSION['user'])) {

                            ?>
                                <li><a href="view/taikhoan/dangnhap.php"><i class="fa-solid fa-circle-user"></i></a></li>
                                <li><a href="index.php?act=giohang"><i class="fa-solid fa-cart-shopping"></i></a></li>
                            <?php }; ?>

                            <?php
                            if (isset($_SESSION['user'])) {
                                extract($_SESSION['user']);
                            ?>

                                <li style="margin-bottom: 5%;"> <a href="index.php?act=thongtin"> <i class="fa-solid fa-circle-user"></i></a></li>
                                <li><a href="index.php?act=giohang"><i class="fa-solid fa-cart-shopping"></i></a></li>
                                <li>

                                    <div style="display: flex;position: absolute;align-items: center;top:27px;margin-left: 50px;">
                                        <div><img style="border-radius: 40px;" width="50px;" src="view/images/rd.png" alt=""></div>
                                        <div style="margin-left: 10px;"><span style="font-weight: 900;color:darkslategrey;font-size:15px;"> <?= $user ?></span><br>
                                            <span><a style="color:darkslategrey;font-size:11px;font-weight: 600;" href="index.php?act=thoat">Đăng xuất </a></span>
                                        </div>
                                    </div>
                                </li>
                            <?php }; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>