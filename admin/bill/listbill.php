<div class="row mb">
    <div class="mr">

        <div class="row mb">

            <h3>Danh sách đơn hàng</h3>

            <form action="index.php?act=listbill" method="post">
                <input style="width: 190px;padding:7px;border-radius: 10px;" type="text" name="kyw" placeholder="Nhập mã đơn hàng">
                <input type="hidden" value="GO" name="listok">
            </form>
            <br>
            <div class=" boxcontent cart">
                <br>
                <table class="formloai">
                    <tr style="background-color: teal;color:white;">
                        <th style="width: 70px;padding: 5px;border:1px solid gray;">Mã</th>
                        <th style="width: 170px;border:1px solid gray;">Người đặt</th>
                        <th style="width: 140px;border:1px solid gray;">Thành tiền</th>
                        <th style="border:1px solid gray;">Tình trạng đơn hàng</th>
                        <th style="border:1px solid gray;">Ngày đặt</th>
                        <th style="border:1px solid gray;">Chức năng</th>
                    </tr>

                    <form action="index.php?act=capnhattt" method="post" enctype="multipart/form-data">

                        <?php

                        foreach ($listbill as $bill) {
                            extract($bill);
                            $xoabill = "index.php?act=xoabill&id=" . $id;
                            $suatt = "index.php?act=suatt&id=" . $id;
                            $kh = $bill["bill_name"];
                            $status = get_ttdh($bill["bill_status"]);

                            $namesp = loadtensanpham($bill["id"]);
                            $billct = "index.php?act=billct&id=" . $id;
                            echo '  
                        <tr>   
                                      <td>' . $bill['id'] . '</td>
                                      <td>' . $kh . '</td>                                                                        
                                      <td>' . $bill["total"] . '.VNĐ</td>                                  
                                      <td>' . $status . '</td>                               
                                      <td>' . $bill["ngaydathang"] . '</td>   
                                      <td><a href="' . $billct . '"><input style="border-radius:50px;padding:2px 10px;background-color:#198754;border:1px solid #198754;color:white;" type="button" value="Chi tiết"></a> <a  href="' . $xoabill . '"> <input style="border-radius:50px;padding:2px 10px;background-color:#E10000;border:1px solid #E10000;color:white;" type="button"  onclick="return abc()" value="xóa"></a> </td>
            
                                      </form>
                        </tr>';
                        }
                        ?>
                </table>

            </div>
        </div>
    </div>
</div>