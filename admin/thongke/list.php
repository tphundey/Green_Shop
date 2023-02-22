<div class="row mb">
    <div class="mr">

        <div class="row mb">

            <h3>Thống kê</h3>

            <!-- <form action="index.php?act=listbill" method="post">
                <input type="text" name="kyw" placeholder="Nhập mã đơn hàng">
                <input type="submit" value="GO" name="listok">
            </form> -->

            <div class="row boxcontent cart">
                <table class="formloai">
                    <tr style="background-color: teal;color:white;">

                        <th style="padding:10px;">TÊN DANH MỤC</th>
                        <th>SỐ LƯỌNG</th>
                        <th>GIÁ CAO NHẤT</th>
                        <th>GIÁ THẤP NHẤT</th>
                        <th>GIÁ TRUNG BÌNH</th>

                    </tr>

                    <?php

                    foreach ($listthongke as $thongke) {
                        extract($thongke);
                        echo '
                    <tr>
                  
                     <td>' . $tendm . '</td>
                     <td>' . $countsp . '/ túi</td>
                     <td>' . $maxprice . '.VND</td>
                     <td>' . $minprice . '.VND</td>
                     <td>' . $avgprice . '.VND</td>
                   
                    </tr>
                  
                    ';
                    }

                    ?>


                </table>


                <table style="margin-top: 20px;" border="1">
                    <tr style="background-color: teal;color:white;">

                        <th style="padding:10px;">Số lượng đơn hàng</th>
                        <th>Doanh thu đạt được</th>
                        <th>Sản phẩm bán chạy</th>
                        <th>Số sản phẩm bán ra</th>


                    </tr>
                    <tr>
                        <?php
                        foreach ($listthongke2 as $thongke) {
                            extract($thongke);
                            echo '                 
                     <td style="border:1px solid #CCCCCC;">' . $coutdh . ' /đơn</td>
                     <td style="border:1px solid #CCCCCC;">' . $couttt . '.VND</td>                               
                    ';
                        }

                        ?>

                        <?php

                        extract($listthongke10);
                        echo '                 
                            <td style="border:1px solid #CCCCCC;">' . $name . '</td>
                                         
                    ';


                        ?>
                        <?php

                        extract($listthongke30);
                        echo '                 
                          <td style="border:1px solid  #CCCCCC;">' . $so . ' /sản phẩm</td>
                 
                            ';


                        ?>
                    </tr>
                </table>


                <p style="margin-top:1%;font-size:20px;"><strong>Xử lý đơn hàng</strong></p>
                <table border="1">
                    <tr style="background-color: teal;color:white;">

                        <th style="padding:10px;">Đơn hàng chờ xác nhận</th>
                        <th>Đơn hàng đang lấy</th>
                        <th>Đơn hàng đang giao</th>
                        <th>Đơn đã giao</th>
                        <th>Đơn đã hoàn thành</th>
                        <th>Đơn đã hủy</th>


                    </tr>
                    <tr>
                        <?php

                        foreach ($listthongke21 as $thongke) {
                            extract($thongke);
                            echo '                 
                     <td style="border:1px solid  #CCCCCC;">' . $coutdh . '</td>                 
                    ';
                        }

                        ?>
                        <?php

                        foreach ($listthongke22 as $thongke) {
                            extract($thongke);
                            echo '                 
<td style="border:1px solid  #CCCCCC;">' . $coutdh . '</td>                 
';
                        }

                        ?>
                        <?php

                        foreach ($listthongke23 as $thongke) {
                            extract($thongke);
                            echo '                 
<td style="border:1px solid  #CCCCCC;">' . $coutdh . '</td>                 
';
                        }

                        ?>
                        <?php

                        foreach ($listthongke24 as $thongke) {
                            extract($thongke);
                            echo '                 
<td style="border:1px solid  #CCCCCC;">' . $coutdh . '</td>                 
';
                        }

                        ?>
                        <?php

                        foreach ($listthongke25 as $thongke) {
                            extract($thongke);
                            echo '                 
<td style="border:1px solid  #CCCCCC;">' . $coutdh . '</td>                 
';
                        }

                        ?>
                        <?php

                        foreach ($listthongke26 as $thongke) {
                            extract($thongke);
                            echo '                 
<td style="border:1px solid  #CCCCCC;">' . $coutdh . '</td>                 
';
                        }

                        ?>
                    </tr>

                </table>
            </div>
         
        </div>
    </div>

</div>

<?php


?>