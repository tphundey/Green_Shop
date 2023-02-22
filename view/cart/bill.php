<div class="container" style="margin-bottom: 10%;">
    <br><br><br><br><br><br><br><br>

    <form action="index.php?act=billconfirm" method="post">
        <div class="container mb">
            <div style="display: flex;align-items:center;font-size:23px;font-weight:700;gap:20px;" class="boxtitle"><i style="color:red;" class="fa-solid fa-location-dot"></i>Địa chỉ nhận hàng</div>
            <div class="row boxcontent billform">
                <br>
                <table>


                    <?php

                    if (isset($_SESSION['user'])) {
                        $name = $_SESSION['user']['user'];
                        $address = $_SESSION['user']['address'];
                        $email = $_SESSION['user']['email'];
                        $tel = $_SESSION['user']['tel'];
                    } else {
                        $name = "";
                        $address = "";
                        $email = "";
                        $tel = "";
                    }

                    ?>
                    <tr style="display:flex;gap:10px;">
                        <td><input style="border:2px solid #BED747;border-radius: 50px;width: 170px;padding: 10px;" placeholder="Tên người nhận" type="text" name="name" value="<?= $name ?>" id=""></td>


                        <td><input style="border:2px solid #BED747;border-radius: 50px;width: 170px;padding: 10px;" placeholder="Địa chỉ người nhận" type="text" name="address" value="<?= $address ?>" id=""></td>


                        <td><input style="border:2px solid #BED747;border-radius: 50px;width: 170px;padding: 10px;" placeholder="Email người nhận" type="text" name="email" value="<?= $email ?>" id=""></td>


                        <td><input style="border:2px solid #BED747;border-radius: 50px;width: 170px;padding: 10px;" placeholder="Số điện thoại người nhận" type="text" name="tel" value="<?= $tel ?>" id=""></td>
                    </tr>
                </table>
            </div>
        </div>
        <br>
        <div class="row mb">

            <div class="row boxcontent cart">
                <table>
                    <tr style="height: 60px;">
                        <th style="border-radius: 10px;color:white;background-color: #003C2D;">Sản phẩm</th>
                        <th style="border-radius: 10px;color:white;background-color: #003C2D;">Đơn giá</th>
                        <th style="border-radius: 10px;color:white;background-color: #003C2D;">Số lượng</th>
                        <th style="padding: 10px;border-radius: 10px;color:white;background-color: #003C2D;">Thao tác</th>
                    </tr>
                    <?php
                    viewcart();
                    ?>
                </table>
            </div>
        </div>
        <div class="container mb">
            <div style="display: flex;align-items:center;font-size:23px;font-weight:700;gap:20px;" class="boxtitle">Pương thức thanh toán</div>
            <div class="row boxcontent">


                <br>

                <input type="checkbox" value="1" name="pttt" checked>Thanh toán tiền mặt <br> <br>
                <input onclick="displayImage()" type="checkbox" value="2" name="pttt">Chuyển khoản ngân hàng
                <div id="holder"></div>

                <script>
                    function displayImage() {
                        let holder = document.getElementById('holder')
                        holder.innerHTML = '<img width="350px" src="view/images/vcb.png" alt="">'
                    }
                </script>

            </div>
        </div>
        <div class="row mb bill">
            <a href="index.php?act=billconfirm"> <input style="margin-right: 270px;float: right;border:none;border-radius: 10px;padding: 10px;width: 190px;background-color: red;color:white;" name="dongydathang" type="submit" value="HOÀN TẤT"></a>
            <span style="color:#333333;margin-top: 20px;float: left;">Nhấn đặt hàng đồng nghĩa với việc bạn tuân theo Điều khoản của chúng tôi</span>
        </div>

    </form>

</div>

</div>
</div>
</div>
<div id="holder"></div>