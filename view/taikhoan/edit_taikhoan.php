<br><br><br><br><br><br><br>
<div class="row mb container">
    <div class="boxtrai mr">
        <div style="background-color: #F7F7F7;padding:40px;width:1200px;height:300px;border-radius: 30px;">

            <h2>Đổi mật khẩu</h2>
            
            <div>
                <?php
                if (isset($_SESSION['user']) && (is_array($_SESSION['user']))) {
                    extract($_SESSION['user']);
                }
                ?>
                <form action="index.php?act=edit_taikhoan" method="post">
                    <div class="row mb10 ">
                        Tài khoản Email:
                        <input disabled style="padding:5px 10px ;border-radius: 40px;background-color: bisque;border:1px solid bisque;" class="emai" value="<?= $email ?>" type="email" name="email">
                    </div>
                    <br>
                    <div class="row mb10 ">
                        Tên người dùng:
                        <input disabled style="padding:5px 10px ;border-radius: 40px;background-color: bisque;border:1px solid bisque" type="text" name="user" value="<?= $user ?>">
                    </div>
                    <br>
                   
                    <div class="row mb10 ">
                        Mật khẩu*:
                        <input style="padding:5px 10px ;border-radius: 40px;background-color: bisque;border:1px solid bisque" type="password" name="pass" value="<?= $pass ?>">
                   
                    </div>
                    <br>
                    
                    <div class="row mb10">
                        <input type="hidden" name="id" value="<?= $id ?>">
                        <input style="padding:5px 10px ;border-radius: 40px;background-color: cadetblue;border:1px solid cadetblue;color:white;" type="submit" value="Cập nhật" name="capnhat">
                       
                    </div>
                </form>
                <h2 style="color:dodgerblue;">
                    <?php
                    if (isset($thongbao) && ($thongbao != "")) {
                        echo $thongbao;
                    }
                    ?>
                </h2>
            </div>
        </div>

    </div>


</div><br>