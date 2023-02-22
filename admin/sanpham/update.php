<?php

if (is_array($sanpham)) {
    extract($sanpham);
}
$hinhpath = "../upload/" . $img;
if (is_file($hinhpath)) {
    $hinh = "<img src='" . $hinhpath . "' height='80'>";
} else {
    $hinh = "no photo";
}
?>


<div class="row">
    <div class="row header frmtitle">
        <h3>Cập nhật sản phẩm</h3>
    </div>
    <div class="row frmcontent">
        <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
            <div class="">
                <select name="iddm">
                    <option value="0" selected>TẤT CẢ</option>
                    <?php
                    foreach ($listdanhmuc as $danhmuc) {
                        extract($danhmuc);
                        if ($iddm == $id) $s = "selected";
                        else $s = "";
                        echo '<option value="' . $id . '" ' . $s . '>' . $name . '</option>';
                    }
                    ?>

                </select>
            </div>

            <!-- do để đoạn code này ở kia nó ko chịu nhận name của sản phẩm nên phải vứt xuống đây -->
            <?php

            if (is_array($sanpham)) {
                extract($sanpham);
            }
            $hinhpath = "../upload/" . $img;
            if (is_file($hinhpath)) {
                $hinh = "<img src='" . $hinhpath . "' height='80'>";
            } else {
                $hinh = "no photo";
            }
            ?>
            <div style="margin-top: 1%;" class="">
                Tên sản phẩm<br>
                <input type="text" name="tensp" value="<?= $name ?>" required>
                <?php
                
                ?>
            </div>
            <div style="margin-top: 1%;" class="">
                Giá<br>
                <input type="text" name="giasp" value="<?= $price ?>" required>
            </div>
            <div style="margin-top: 1%;" class="">
                Hình<br>
                <input type="file" name="hinh">
                <?= $hinh ?>
            </div>
            <div class="">
                Mô tả<br>
                <textarea name="mota" cols="100" rows="10"><?= $mota ?></textarea>
            </div>
<br>
            <div class="">
                <input style="border-radius:50px;padding:2px 10px;background-color:#198754;border:1px solid #198754;color:white;" type="hidden" name="id" value="<?= $id ?>">
                <input style="border-radius:50px;padding:2px 10px;background-color:#198754;border:1px solid #198754;color:white;"type="submit" name="capnhat" value="Hoàn tất">
                <input style="border-radius:50px;padding:2px 10px;background-color:#198754;border:1px solid #198754;color:white;"type="submit" value="Nhập lại">
                <a href="index.php?act=listsp"><input style="border-radius:50px;padding:2px 10px;background-color:#198754;border:1px solid #198754;color:white;" type="button" value="Danh sách"></a>
            </div>
            <?php
            if (isset($thongbao) && ($thongbao != "")) echo $thongbao;

            ?>
        </form>
    </div>
</div>