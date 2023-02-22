<div class="row mb">
    <div class="mr">

        <div class="row mb">

            <div class="boxtitle">DANH SÁCH ĐƠN HÀNG</div>

            <form action="index.php?act=listbill" method="post">
                <input type="text" name="kyw" placeholder="Nhập mã đơn hàng">
                <input type="submit" value="GO" name="listok">
            </form>

            <div class=" boxcontent cart">
                <table border="1">
                    <tr style="background-color: teal;color:white;">

                        <th style="text-align: center;">MÃ ĐƠN HÀNG</th>
                        <th>NGƯỜI ĐẶT</th>
                        <th>SỐ LƯỢNG</th>
                        <th>GIÁ TRỊ</th>
                        <th colspan="2">TÌNH TRẠNG ĐƠN HÀNG</th>
                        <th>NGÀY ĐẶT HÀNG</th>
                      
                    </tr>

                    <form action="index.php?act=capnhattt" method="post" enctype="multipart/form-data">

                        <?php

                        foreach ($listbill as $bill) {
                            extract($bill);
                          
                            $suatt = "index.php?act=suatt&id=" . $id;
                            $kh = $bill["bill_name"] . '
                           <br> ' . $bill["bill_email"] . '
                           <br>' . $bill["bill_address"] . '
                           <br>' . $bill["bill_tel"];
                            $status = get_ttdh($bill["bill_status"]);
                            $countsp = loadall_cart_count($bill["id"]);



                            echo '  
                        <tr>   
                                      <td>' . $bill['id'] . '</td>
                                      <td>' . $kh . '</td>
                                      <td>' . $countsp . '</td>
                                      <td>' . $bill["total"] . '</td>                                  
                                      <td><input type="text" value="' . $status . '" disabled></td>

             <td>      
            
    <select name="status">
         <option value="0">Đơn hàng mới</option>
         <option value="1">Đang xử lý</option>
         <option value="2">Đang giao hàng</option>
         <option value="3">Đã giao hàng</option>
</select>
             </td> 
              
                                      <input type="hidden" name="id" value="' . $bill['id'] . '">
                                      <td>' . $bill["ngaydathang"] . '</td> 
                                      
                                    
                                    <td><a href="' . $suatt . '"><input type="button" value="Chi tiết"></a> </td>
                                      <td><a href="index.php?act=capnhattt"><input type="submit" name="capnhat" value="Cập nhật"></a></td>
                                      </form>
                    </tr>';
                        }

                        ?>




                </table>

            </div>
        </div>
    </div>

</div>