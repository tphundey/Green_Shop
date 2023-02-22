<div class="row">
    <div class="row header frmtitle">
        <h3>DANH SÁCH BÌNH LUẬN</h3>
    </div>
    <div class="row frmcontent">

        <div class="row mb-10 frmdsloai">
            <table class="formloai">
                <tr style="background-color: teal;color:white;">
                    <th style="padding:10px;">NỘI DUNG BÌNH LUẬN</th>
                    <th>TÀI KHOẢN</th>
                    <th>SẢN PHẨM</th>
                    <th>NGÀY BÌNH LUẬN</th>
                    <th></th>
                </tr>
                <?php
                foreach ($listbinhluan as $binhluan) {
                    extract($binhluan);

                    $xoabl = "index.php?act=xoabl&id=" . $id;
                    echo
                    '
                    <tr>                
                    <td>' . $noidung . '</td>
                    <td>' . $user . '</td>
                    <td>' . $name . '</td>
                    <td>' . $ngaybinhluan . '</td>
                    <input type="hidden" name="id" value="' . $id . '"> 
                    <td> <a href="' . $xoabl . '"> <input style="border-radius:50px;padding:2px 10px;background-color:red;border:1px solid red;color:white;" type="button" onclick="return abc()" value="xóa"></a></td>
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
    </div>
</div>