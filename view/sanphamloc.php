<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>greenshop - sạch đến từng luống rau</title>
    <link rel="stylesheet" href="view/css/sanpham.css">
    <script src="https://kit.fontawesome.com/d829d3809c.js" crossorigin="anonymous"></script>
</head>

<style>


</style>

<body>
    <br><br><br><br><br>
    <main class="container ">
        <div class="left">
            <div class="listdanhmuc"><br>
                <b style="border-radius: 10px;color:#003C2D;padding:20px 20px ;">DANH MỤC SẢN PHẨM</b>
                <hr><br>

                <?php
                foreach ($dsdm as $dm) {
                    extract($dm);
                    $linkdm = "index.php?act=sanpham&iddm=" . $id;
                    echo '          

                     <div style="border-radius: 10px;padding:10px 20px;background-color:#DCEA9C;"> <strong><a href="' . $linkdm . '">' . $name . '</a></strong> </div> <br>

                     ';
                }
                ?>

                <br>
                <b style="border-radius: 10px;color:#003C2D;padding:20px 20px ;">SẮP XẾP SẢN PHẨM</b>
                <hr><br>

                <?php

                extract($dsdm);
                $giatien = 60000;
                $linkgiatien = "index.php?act=sanpham2&giatien=" . $giatien;
                echo '
                  
                <div style="border-radius: 10px;padding:10px 20px;background-color:#DCEA9C;"> <strong><a href="' . $linkgiatien . '">Giá giảm dần</a></strong> </div> <br>
                
                ';

                ?>


                <?php

                extract($dsdm);
                $giatien = 100000;
                $linkgiatien = "index.php?act=sanpham3&giatien=" . $giatien;
                echo '
                  
                <div style="border-radius: 10px;padding:10px 20px;background-color:#DCEA9C;"> <strong><a href="' . $linkgiatien . '">Giá tăng dần</a></strong> </div> <br>
                
               ';

                ?><br>
                <b style="border-radius: 10px;color:#003C2D;padding:20px 20px ;">LỌC GIÁ TIỀN</b>
                <hr><br>
                <?php

                extract($dsdm);
                $giatien = 50000;
                $linkgiatien = "index.php?act=sanpham4&giatien=" . $giatien;
                echo '
  
               <div style="border-radius: 10px;padding:10px 20px;background-color:#DCEA9C;"> <strong><a href="' . $linkgiatien . '">Từ 0 - 50k</a></strong> </div> <br>

               ';

                ?>

                <?php

                extract($dsdm);
                $giatien = 150000;
                $linkgiatien = "index.php?act=sanpham5&giatien=" . $giatien;
                echo '
  
                <div style="border-radius: 10px;padding:10px 20px;background-color:#DCEA9C;"> <strong><a href="' . $linkgiatien . '">Từ 50 - 150k</a></strong> </div> <br>

                ';

                ?>

                <?php

                extract($dsdm);
                $giatien = 100000000;
                $linkgiatien = "index.php?act=sanpham6&giatien=" . $giatien;
                echo '
  
                <div style="border-radius: 10px;padding:10px 20px;background-color:#DCEA9C;"> <strong><a href="' . $linkgiatien . '">Từ 150 - hết</a></strong> </div> <br>

                ';

                ?>

                </ul>
            </div>


        </div>

        <div class="right">
            <form style="margin-left: 75%;" class="timsp" action="index.php?act=sanpham" method="post">
                <input class="c2" type="hidden" name="timkiem" value="Tìm kiếm">
                <input style="width:250px;border:3px solid #BED747" type="text" name="kyw" placeholder="Tìm kiếm theo tên...">
            </form>

            <div class="gr-5 container">
                <?php

                $i = 0;
                foreach ($dssp as $sp) {
                    extract($sp);
                    $linksp = "index.php?act=sanphamct&idsp=" . $id;
                    $idsp = $id;
                    $hinh = $img_path . $img;

                    echo '
                <div class="product">
                    <div class="anhsp">
                        <a href="' . $linksp . '"><img style="height:100%;" src="' . $hinh . '" alt=""></a>
                    </div>
                    <p><a href="' . $linksp . '">' . $name . '</a></p>
                    <span><strong>' . $price . 'đ</strong></span>
                
                </div>
                ';
                    $i += 1;
                }
                ?>

            </div>
        </div>

    </main>
    <br><br><br><br><br> <br><br><br><br><br> <br><br><br><br><br> <br><br><br><br><br>