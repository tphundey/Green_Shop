<br><br><br><br><br><br>
<div class="container">
    <div>
        <div>
            <h1 style="text-align: center;color:#003C2D;">Tài khoản của bạn</h1>
            <hr style="width:60px;height:4px;background-color: #003C2D;">
            <div style="display:flex;">

                <div>
                    <h3 STYLE="color:#333333;margin-left: 20px;">TÀI KHOẢN</h3>
                    <ul style="font-size:15px;">
                        <?php if ($role == 1) { ?>
                            <li style="margin-bottom:10%;"><a href="admin/index.php">Đăng nhập admin</a></li>
                        <?php } ?>
                        <li style="margin-bottom:10%;"> <a href="index.php?act=mybill"> Đơn hàng của tôi </a></li>
                        <li style="margin-bottom:10%;"><a href="index.php?act=edit_taikhoan"> Đổi mật khẩu</a></li>
                        <li style="margin-bottom:10%;"> <a href="index.php?act=thoat">Đăng xuất </a></li>
                    </ul>

                </div>




                <div style="margin-left:25%;">
                    <?php
                    if (isset($_SESSION['user']) && (is_array($_SESSION['user']))) {
                        extract($_SESSION['user']);
                    }
                    ?>

                    <h3 STYLE="color:#333333;">THÔNG TIN TÀI KHOẢN</h3>

                    <div style="font-size:15px;width:500px;">
                        <div>
                            Họ tên:
                            <span style="color:#333333;margin-left:1%;"><?= $user ?></span>
                        </div> <br>
                        <div>
                            Email:
                            <span style="color:#333333;margin-left:1%;"><?= $email ?></span>
                        </div><br>
                        <div>
                            Địa chỉ:
                            <span style="color:#333333;margin-left:1%;"><?= $address ?></span>
                        </div><br>
                        <div>
                            Điện thoại:
                            <span style="color:#333333;margin-left:1%;"><?= $tel ?></span>
                        </div><br>
                    </div>


                    <br><br>


                    <h2 class="thongbao">
                        <?php
                        if (isset($thongbao) && ($thongbao != "")) {
                            echo $thongbao;
                        }
                        ?>
                    </h2>
                </div>

            </div>
        </div>

    </div>


</div>