<div class="">
    <div class="">
        <h3>Chi tiết đơn hàng</h3><br>
    </div>

    <strong>ID hóa đơn</strong><br><br>
    <input disabled type="text" name="tensp" value="<?= $id ?>" required>
    <br><br>
    <strong style="margin-top:1%;">Sản phẩm đặt hàng:</strong><br><br>
    <div style="display:flex;">
        <div>
            <?php
            foreach ($cart as $cart1) {

                extract($cart1);
                echo '  
     <p>🔖' . $name . ' </p>
    
     ';
            }
            ?>
        </div>
        <div style="width:100px;">

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
    <p><?= $total ?>.VNĐ </p>
    <strong>Tên người đặt: </strong>
    <p><?= $bill_name ?></p>
    <strong>Địa chỉ nhận hàng: </strong><br>
    <p><?= $bill_address ?></p>
    <strong>Số điện thoại: </strong><br>
    <p><?= $bill_tel ?></p>
    <strong>Phương thức thanh toán: </strong><br>
    <p><?= $pttt ?></p>
    <strong>Tình trạng đơn hàng: </strong><br>
    <p><?= $status ?></p>
   
    <form action="index.php?act=capnhattt" method="post" enctype="multipart/form-data">
        <select name="status">
            <option value="0">Chờ xác nhận</option>
            <option value="1">Đang lấy hàng</option>
            <option value="2">Đang giao hàng</option>
            <option value="3">Đã giao hàng</option>
            <option value="4">Hoàn tất</option>
            <option value="5">Hủy</option>
        </select>
        <input type="hidden" name="id" value="<?= $id ?>"> 
        <a href="index.php?act=capnhattt"><input style="width:100px;border-radius:50px;padding:2px 10px;background-color:#198754;border:1px solid #198754;color:white;" type="submit" name="capnhat" value="Cập nhật"></a>
    </form>
</div>
</div>