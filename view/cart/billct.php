<div class="container"><br><br><br>
    <div class=""><br><br><br>
        <h3>Chi tiết đơn hàng</h3><br>
    </div>
    <div style="display:flex;align-items:center;">
        <div>
            <strong>ID hóa đơn</strong><br><br>
            <input disabled type="text" name="tensp" value="<?= $id ?>" required>
            <br><br>
            <strong style="margin-top:1%;">Sản phẩm đặt hàng:</strong><br><br>


            <div style="display:flex;">
                <div style="color:gray;">
                    <?php
                    foreach ($cart as $cart1) {

                        extract($cart1);
                        echo '  
     <p>🔖' . $name . ' </p>
    
     ';
                    }
                    ?>
                </div>
                <div style="width:100px;color:gray;">

                    <?php
                    foreach ($cart2 as $cart3) {
                        extract($cart3);
                        echo '  
    <p style="margin-left:10%;">/' . $soluong . ' túi </p>
    ';
                    }

                    ?>
                </div>
            </div>
            <strong> Tổng tiền</strong><br><br>
            <p style="color:gray;"><?= $total ?>.VNĐ </p>

        </div>
        <div style="margin-left: 5%;">
            <strong>Tên người đặt: </strong>
            <p style="color:gray;"> <?= $bill_name ?></p>
            <strong>Địa chỉ nhận hàng: </strong><br>
            <p style="color:gray;"><?= $bill_address ?></p>
            <strong>Số điện thoại: </strong><br>
            <p style="color:gray;"><?= $bill_tel ?></p>
            <strong>Tình trạng đơn hàng: </strong><br>
            <p style="color:gray;"><?= $status ?></p>
        </div>
    </div>




</div>
</div>