<div class="row">
    <div class="row header  mb-10">
        <h3>Danh sách sản phẩm</h3>
    </div>

    <form action="index.php?act=listsp" method="post" class="m-10">
        <input placeholder="nhập tên sản phẩm..." style="border-radius: 50px;padding: 5px;border:1px solid gray;" type="text" name="kyw">
        <select style="padding:4px ;color:white;background-color: cadetblue;border-radius: 20px;" name="iddm">
            <option value="0" selected>All</option>
            <?php
            foreach ($listdanhmuc as $danhmuc) {
                extract($danhmuc);
                echo '<option value="' . $id . '">' . $name . '</option>';
            }
            ?>

        </select>
        <input style="border-radius:50px;padding:5px 10px;background-color:cadetblue;border:1px solid cadetblue;color:white;" type="submit" name="listok" value="Lọc">
    </form>

    <div class="frmcontent">

        <div class=" m-10 ">

            <table class="formloai ">
                <tr style="background-color: teal;color:white;">
                    <th style="border: 1px solid gray;text-align:center ;">id </th>
                    <th style="border: 1px solid gray;text-align:center ;">Tên </th>
                    <th style="border: 1px solid gray;text-align:center ;">Hình</th>
                    <th style="border: 1px solid gray;text-align:center ;">Giá</th>
                    <th style="border: 1px solid gray;text-align:center ;">Mô tả</th>
                    <th style="width:130px;padding:10px;border: 1px solid black;text-align:center ;">Chức năng</th>
                </tr>
                <?php
                foreach ($listsanpham as $sanpham) {
                    extract($sanpham);
                    $suasp = "index.php?act=suasp&id=" . $id;
                    $xoasp = "index.php?act=xoasp&id=" . $id;
                    $hinhpath = "../upload/" . $img;
                    if (is_file($hinhpath)) {
                        $hinh = "<img src='" . $hinhpath . "' height='80'>";
                    } else {
                        $hinh = "no photo";
                    }
                    echo
                    '
                    <tr>
                    <td style="border: 1px solid gray;text-align:center ;">' . $id . '</td>
                    <td style="border: 1px solid gray;text-align:center ;">' . $name . '</td>
                    <td style="border: 1px solid gray;text-align:center ;">' . $hinh . '</td>
                    <td style="border: 1px solid gray;text-align:center ;">' . $price . '</td>
                    <td style="border: 1px solid gray;text-align:center ;">' . $mota . '</td>
                    <td style="style="border-radius:50px;padding:2px 10px;background-color:#198754;border:1px solid #198754;color:white;"border: 1px solid black;text-align:center ;"><a href="' . $suasp . '"><input style="border-radius:50px;padding:2px 10px;background-color:#198754;border:1px solid #198754;color:white;"type="button" value="Sửa"></a> <a  href="' . $xoasp . '"> <input style="border-radius:50px;padding:2px 10px;background-color:#E10000;border:1px solid #E10000;color:white;" type="button"  onclick="return abc()" value="xóa"></a></td>
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
                <!-- <script>
                    function abc() {
                        alert("Bạn có chắc chắn xóa ko");
                    }
                </script> -->
            </table>
        </div>

        <div class="">
            <a href="http://localhost/PHP1/ky4/greenshop/admin/index.php?act=addsp"><input style="border-radius:50px;padding:2px 10px;background-color:#198754;border:1px solid #198754;color:white;" type="button" value="nhập thêm"></a>
        </div>

    </div>
</div>