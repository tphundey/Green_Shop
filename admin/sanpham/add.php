<div class="row">
    <div class="row header frmtitle">
        <h1>THÊM MỚI SẢN PHẨM</h1>
    </div>
    <div class="row frmcontent">
        <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
            <div class="">
                Danh mục <br>
                <select name="iddm">
                    <?php
                    foreach ($listdanhmuc as $danhmuc) {
                        extract($danhmuc);
                        echo '<option value="' . $id . '">' . $name . '</option>';
                    }
                    ?>

                </select>
            </div>
            <div class="">
                Tên sản phẩm<br> <span style="color: red;">
                    <?php
                    if (isset($err) && ($err != "")) {
                        echo $err;
                    }
                    ?></span>
                <input type="text" name="tensp">
            </div>
            <div class="">
                Giá<br> <span style="color: red;">
                    <?php
                    if (isset($err1) && ($err1 != "")) {
                        echo $err1;
                    }
                    ?></span>
                <input type="text" name="giasp">
            </div>
            <div class="">
                Hình<br> <span style="color: red;">
                    <?php
                    if (isset($err3) && ($err3 != "")) {
                        echo $err3;
                    }
                    ?></span>
                <input type="file" name="hinh">
            </div>
            <div class="">
                Mô tả<br> <span style="color: red;">
                    <?php
                    if (isset($err2) && ($err2 != "")) {
                        echo $err2;
                    }
                    ?></span>
                <textarea name="mota" cols="100" rows="10"></textarea>
            </div>
            <br>
            <div class="">
                <input style="border-radius:50px;padding:2px 10px;background-color:#198754;border:1px solid #198754;color:white;" type="submit" name="themmoi" value="Hoàn tất">
                <input style="border-radius:50px;padding:2px 10px;background-color:#198754;border:1px solid #198754;color:white;" type="submit" value="Nhập lại">
                <a href="index.php?act=listsp"><input style="border-radius:50px;padding:2px 10px;background-color:#198754;border:1px solid #198754;color:white;" type="button" value="Danh sách"></a>
            </div>
            <!-- thông báo thành công --><br>
            <span style="color: #3085D6;">
                <?php
                if (isset($thongbao) && ($thongbao != "")) {
                    echo $thongbao;
                }
                ?></span>
        </form>
    </div>
</div>