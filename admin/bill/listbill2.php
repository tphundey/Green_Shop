<div class="row mb">
    <div class="mr">

        <div class="row mb">

            <div class=" boxcontent cart">
                <br>
                <table class="formloai">
                    <tr style="background-color: teal;color:white;">

                        <th style="width: 170px;border:1px solid gray;padding: 10px;">Người đặt</th>
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
                                   
                                      <td>' . $kh . '</td>                                                                        
                                      
                                      <td>' . $status . '</td>                               
                                      <td>' . $bill["ngaydathang"] . '</td>   
                                      <td><a href="' . $billct . '"><input style="border-radius:50px;padding:2px 10px;background-color:#198754;border:1px solid #198754;color:white;" type="button" value="Chi tiết"></a>  </td>
            
                                      </form>
                        </tr>';
                        }
                        ?>
                </table>

            </div>
        </div>
    </div>
</div>