<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>greenshop - sạch đến từng luống rau</title>
    <link rel="stylesheet" href="view/css/ctsanpham.css">
    <script src="https://kit.fontawesome.com/d829d3809c.js" crossorigin="anonymous"></script>
</head>
<style>
    .dathang:hover {
        color: white;
    }
</style>

<body>
    <br><br><br><br><br><br><br>

    <main class="container ">

        <div class="ctsanpham">
            <?php
            extract($onesp);
            $img = $img_path . $img;
            ?>
            <div class="anhct">
                <div><img width="600px" height="500px" src="<?= $img ?>" alt=""></div>
            </div>
            <?php
            extract($onesp);
            $soluong = "";
            echo '
            <div class="ttct">
                <br>
             
                <b style="color:green;">' . $name . '</b>
                <p style="color:orange;" class="price">' . $price . 'đ <span style="font-size:16px;">/ túi</span></p>
                <div class="soluong">
                    <p  style="font-size:18px;" class="tt">Số lượng </p>
                    <form action="index.php?act=addtocart" method="post">
                        <input placeholder="1" min="1" max="9"  value="' . $soluong . ' " style="width: 40px;border-color:green;border-radius:10px;padding:5px;" type="number" name="soluong" > <span style="font-size:14px;">(túi / 500 gram) </span>
                 
                </div>
                <p class="tt">Mô tả</p>
                <p>' . $mota . '</p>

                <div class="dathang">  
                <input type="hidden" name="id" value="' . $id . '">
                <input type="hidden" name="price" value="' . $price . '">
                <input type="hidden" name="img" value="' . $img . '">
                <input type="hidden" name="name" value="' . $name . '">   
                   <input class="dathang" type="submit" name="addtocart" value="ĐẶT HÀNG">
                </div>
                </form>  
                ' ?>
        </div>
        </div>
        <div class="title1 container">
            <b>SẢN PHẨM CÙNG LOẠI</b>
        </div>
        <div class="gr-5 container">


            <?php

            foreach ($sp_cung_loai as $sp_cung_loai) {
                extract($sp_cung_loai);
                $img = $img_path . $img;
                $linksp = "index.php?act=sanphamct&idsp=" . $id;
                echo '
    <div class="product">
    <div class="anhsp">
                    <a href="' . $linksp . '"><img src="' . $img . '" alt=""></a>
                </div>
                <p><a href="">' . $name . '</a></p>
                <span><strong>' . $price . '</strong></span>
                </div>
    ';
            }

            ?>




        </div>
        <div class="danhgia">
            <b>Đánh giá</b> <br> <br><br>
            <?php
            extract($onesp);
            ?>
            <iframe src="view/binhluan/binhluanform.php?idpro=<?= $id ?>" width="100%" height="300px" frameborder="0"></iframe>


        </div>

    </main>
    <br>