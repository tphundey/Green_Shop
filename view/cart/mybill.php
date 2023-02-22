<br><br><br><br><br><br><br>
<div class="container">
    <div style="background-color: #F7F7F7;padding:20px;">
        <h3>DANH SÁCH ĐƠN HÀNG MỚI NHẤT</h3>
        <div>

            <div>
                <table style="background-color: white;padding:10px;">
                    <tr style="font-size: 15px;">
                        <th style="padding:20px;width:100px;">Mã đơn hàng</th>
                        <th style="width:400px;">Ngày đặt</th>
                        <th style="width:200px;">Thành tiền</th>
                        <th style="width:400px;">Trạng thái</th>
                    </tr>

                    <tr style="height:5px;background-color:#F7F7F7;width:1200px;">
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                  
                    <?php
                    if (is_array(($listbill))) {
                        foreach ($listbill as $bill) {
                            extract($bill);
                            $ttdh = get_ttdh($bill['bill_status']);
                            $billct = "index.php?act=billct&id=" . $id;
                            $countsp = loadall_cart_count($bill['id']);
                            echo '    
                                    <tr>
                                      <td style="text-align:center;padding:20px 1px;color:#333333;">' . $bill['id'] . '</td>
                                      <td style="text-align:center;color:#333333;">' . $bill['ngaydathang'] . '</td>
                                      <td style="text-align:center;color:#333333;">' . $bill['total'] . '.VNĐ</td>
                                      <td style="text-align:center;color:#333333;">' . $ttdh . '</td>    
                                     <td style="text-align:center;color:#333333;"> <a href="' . $billct . '"><input style="border-radius:50px;padding:2px 10px;background-color:#198754;border:1px solid #198754;color:white;" type="button" value="Chi tiết"></a></td>
                                    </tr>';
                                    
                        }
                    }
                    ?>

                </table>
            </div>
        </div>
    </div>
    <br><br>
</div>