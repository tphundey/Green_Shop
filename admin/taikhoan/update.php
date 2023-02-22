<?php

if (is_array($tk)) {
    extract($tk);
}

?>


<div class="row">
    <div class="row header frmtitle">
        <h1>CẬP NHẬT VAI TRÒ</h1>
    </div>
    <div class="row frmcontent">
        <form action="index.php?act=updatetk" method="post">
            <div class="row mb-10">
                Mã tài khoản <br>
                <input type="text" name="maloai" disabled>
            </div>
            <div class="row mb-10">
                Vai trò<br>
                <input type="text" name="tenloai" value="<?php  echo $role; ?>">
            </div>
            <div class="row mb-10">
                <input type="hidden" name="id" value="<?php  echo $id; ?>">
                <!-- //lưu lại id -->
                <input type="submit" name="capnhattk" value="CẬP NHẬT">
                <input type="submit" value="NHẬP LẠI">
                <a href="index.php?act=listtk"><input type="button" value="danhsach"></a>
            </div>
            <?php
            if (isset($thongbao) && ($thongbao != "")) echo $thongbao;

            ?>
        </form>
    </div>
</div>