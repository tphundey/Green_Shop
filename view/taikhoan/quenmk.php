<br><br><br><br><br><br>
<div class="row mb container">
    <div class="boxtrai mr">
        <div class="row mb">

            <h2>Quên mật khẩu</h2>
            <div class="row boxcontent formtaikhoan">
                <form action="index.php?act=quenmk" method="post">
                    <div class="row mb10 ">
                        Nhập email cần tìm lại mật khẩu:
                        <input style="padding: 5px;border-radius: 10px;" class="emai" type="email" name="email">
                    </div>

                    <div class="row mb10">
                        <input style="background-color: burlywood;color:white;border:none;padding:10px 20px;border-radius: 50px;" type="submit" value="Gửi" name="guiemail">
                        <input style="background-color: burlywood;color:white;border:none;padding:10px 20px;border-radius: 50px;" type="reset" value="Nhập lại">
                    </div>
                </form>
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
    <!-- <iframe src="https://docs.google.com/forms/d/e/1FAIpQLScZvB2COEaCqgSTd-uTAhXMvcPQx6XBVPdlKaG1xkd4MpR8lw/viewform?embedded=true" width="1600" height="669" frameborder="0" marginheight="0" marginwidth="0">Đang tải…</iframe> -->
</div><br><br><br><br><br><br><br><br><br><br><br><br>
