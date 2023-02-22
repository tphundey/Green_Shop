<div class="row">
    <div class="row header frmtitle">
        <h3>Thêm mới danh mục</h3>
    </div>
    <div class="row frmcontent">
        <form action="index.php?act=adddm" method="post">
            <div class="row mb-10">
                Mã loại <br>
                <input type="text" name="maloai" disabled>
            </div>
            <div class="row mb-10">
                Tên loại<br>
                <span style="color: red;"> <?php
                                            if (isset($err) && ($err != "")) {
                                                echo $err;
                                            }
                                            ?></span>
                <input type="text" name="tenloai">
            </div><br>
            <div class="">
                <input style="border-radius:50px;padding:2px 10px;background-color:#198754;border:1px solid #198754;color:white;" type="submit" name="themmoi" value="Hoàn tất">
                <input style="border-radius:50px;padding:2px 10px;background-color:#198754;border:1px solid #198754;color:white;" type="submit" name="reset" value="Nhập lại">
                <a href="index.php?act=listdm"><input style="border-radius:50px;padding:2px 10px;background-color:#198754;border:1px solid #198754;color:white;" type="button" value="Danh sách"></a>
            </div><br>
            <!-- thông báo thành công -->
            <span style="color: #3085D6;"> <?php
                                            if (isset($thongbao) && ($thongbao != "")) {
                                                echo $thongbao;
                                            }
                                            ?></span>
        </form>
    </div>
</div>