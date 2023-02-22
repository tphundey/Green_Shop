
<br><br><br><br><br><br><br>
<div class="container">
<div class="">
    <div class="">
        <div class="">

            <div class="" style="text-align: center;">
                <h2 style="font-size:30px;color:#26AB9A;">Hoàn tất đặt hàng</h2>
            </div>
            <div class="row mb">
              
              <div class="row boxcontent billform" style="text-align: center;list-style-type: none;">
                  <li style="font-weight: bold;">Mã đơn hàng: <?= $bill['id']; ?> </li>
                  <li style="font-weight: bold;"> Ngày đặt hàng: <?= $bill['ngaydathang']; ?></li>
                  <li style="font-weight: bold;"> Tổng đơn hàng: <?= $bill['total'];?>₫</li>
                  <li style="font-weight: bold;"> Phương thức thanh toán <?= $bill['bill_pttt']; ?></li>
                  <li style="color: #333333;font-size:12px;">note: thanh toán tiền mặt (1) chuyển khoản ngân hàng (2)</li>
              </div>
          </div>
<div>
    <h3><i class="fa-solid fa-truck"></i> Thông tin vận chuyển</h3>
    <span>Vận chuyển nhanh - </span>
    <span style="color:#26AB9A;">Giao hàng tiết kiệm</span>
</div>
<div>
    <h3><i class="fa-solid fa-location-dot"></i> Địa chỉ nhận hàng</h3>
   <span style="font-size:15px;"><strong style="margin-right: 1%;">Họ tên người nhận:  </strong> <?= $bill['bill_name']; ?></span> <br><br>
   <span style="font-size:15px;"><strong style="margin-right: 1%;">Số điện thoại người nhận:</strong> <?= $bill['bill_tel']; ?></span><br><br>
   <span style="font-size:15px;"><strong style="margin-right: 1%;">Địa chỉ nhận hàng:</strong> <?= $bill['bill_address']; ?></span><br><br>
   <span style="font-size:15px;"><strong style="margin-right: 1%;">Email:</strong> <?= $bill['bill_email']; ?></span>
</div>

            <?php
            if (isset($bill) && (is_array($bill))) {
                extract($bill);
            }
            ?>

          

    

            <div class="row mb">
                <br><br>
                <div class="row boxcontent cart">
                    <table>
                        <tr style="border-radius:20px ;display:flex;gap:100px;background-color: #003C2D;color:white;padding:10px 150px;">
                            <th colspan="4">Chi tiết đơn hàng</th>
                        </tr>
                        <?php
                        bill_chi_tiet($billct);
                        ?>
                    </table>
                </div>
            </div>



        </div>
      
    </div>
</div>

</div>