<br><br><br><br><br><br><br><br>
<div class="row mb container">

    <table style="width:100% ; border:none;">

        <tr style="height:50px;background-color: #BED747 ; border:none;">
            <th style="border-top-left-radius:20px ;border-bottom-left-radius:20px ;">Sản phẩm</th>
            <th>Đơn giá</th>
            <th>Số lượng</th>
            <th style="border-top-right-radius:20px ;border-bottom-right-radius:20px ;">Thao tác</th>
        </tr>

        <?php
        viewcart();
        ?>

    </table>

    <div style="margin-left: 66%;" class="mb bill">
        <a href="index.php?act=bill"> <input style="font-size:15px;font-weight:bold;border-radius:20px;color:white;padding: 10px 100px;background-color:#003C2D;" type="button" value="THANH TOÁN"></a><a onclick="return abc()" style="margin-left: 10px;" href="index.php?act=delcart">Xóa</a>
    </div>
    <br><br><br><br><br><br>
    <script>
        function abc(a) {
            if (confirm(a)) {
                return confirm('Bạn có muốn xóa không?')
            } else {
                return false;
            }
        }
    </script>

</div>