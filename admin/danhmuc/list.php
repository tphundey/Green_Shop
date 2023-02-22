<div class="row">
    <div class="row header frmtitle">
        <h3>Danh sách danh mục</h3>
    </div>
    <div class="row frmcontent">

        <div class="row mb-10 frmdsloai">
            <table style="margin-left: 20px;">
                <tr style="background-color: teal;color:white;text-align: center;">

                    <th style="padding:10px;border: 1px solid gray;text-align: center;">Tên danh mục</th>
                    <th style="border: 1px solid gray;text-align: center;">Chức năng</th>
                </tr>
                <?php
                foreach ($listdanhmuc as $danhmuc) {
                    extract($danhmuc);
                    $suadm = "index.php?act=suadm&id=" . $id;
                    $xoadm = "index.php?act=xoadm&id=" . $id;
                    echo
                    '
                    <tr>
                    
                  
                    <td style="text-align:center;border: 1px solid gray;">' . $name . '</td>
                    <td style="text-align:center;border: 1px solid gray;" ><a href="' . $suadm . '"><input style="border-radius:50px;padding:2px 10px;background-color:#198754;border:1px solid #198754;color:white;" type="button" value="Sửa"></a> <a href="' . $xoadm . '"> <input style="border-radius:50px;padding:2px 10px;background-color:#E10000;border:1px solid #E10000;color:white;" type="button" onclick="return abc()" value="xóa"></a></td>
                    </tr>
                    ';
                }

                ?>
                <script>
                    function abc(a) {
                        if (confirm(a)) {
                            return confirm('Bạn có muốn xóa không?')
                        } else {
                            return false;
                        }
                    }
                </script>
            </table>
        </div>

        <div class=" mb-10">
            <br>
            <a href="http://localhost/PHP1/ky4/greenshop/admin/index.php?act=adddm"><input style="border-radius:50px;padding:4px 10px;background-color:#198754;border:1px solid #198754;color:white;" type="button" value="nhập thêm"></a>
        </div>

    </div>
</div>