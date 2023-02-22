<div class="row">
    <div class="row header frmtitle">
        <h3>Danh sách tài khoản</h3>
        <p>Note: Không thể xóa tài khoản quản trị !</p>
    </div>
    <div class="row frmcontent">

        <div class="row mb-10 frmdsloai">
            <table class="formloai">
                <tr style="background-color: teal;color:white;">
                   
                    <th style="padding:10px;border: 1px solid gray;text-align:center ;">Mã tài khoản</th>
                    <th style="border: 1px solid gray;text-align:center ;">Tên đăng nhập</th>
                    <th style="border: 1px solid gray;text-align:center ;">Mật khẩu</th>
                    <th style="border: 1px solid gray;text-align:center ;">Email</th>
                    <th style="border: 1px solid gray;text-align:center ;">Địa chỉ</th>
                    <th style="border: 1px solid gray;text-align:center ;">Điện thoại</th>
                    <th style="border: 1px solid gray;text-align:center ;">Vai trò</th>
                    <th style="border: 1px solid gray;text-align:center ;">Chức năng</th>
                </tr>
                <?php
                foreach ($listtaikhoan as $taikhoan) {
                    extract($taikhoan);
                    $suatk = "index.php?act=suatk&id=" . $id;
                    $xoatk = "index.php?act=xoatk&id=" . $id;
                    $role = get_role($taikhoan["role"]);
                    $pass = md5($pass);
                    echo
                    '
                    <tr>
                   
                    <td style="text-align:center ;">' . $id . '</td>
                    <td style="text-align:center ;">' . $user . '</td>
                    <td style="text-align:center ;">' . $pass . '</td>
                    <td style="text-align:center ;">' . $email . '</td>
                    <td style="text-align:center ;">' . $address . '</td>
                    <td style="text-align:center ;">' . $tel . '</td>
                    <td style="text-align:center ;">' . $role . '</td>
                    <td style="text-align:center ;"><a href="' . $xoatk . '"> <input style="border-radius:50px;padding:2px 10px;background-color:red;border:1px solid red;color:white;" type="button" onclick="return abc()" value="xóa"></a></td>
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