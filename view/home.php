<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<style>
  .hover {
    position: absolute;
    transition: 1s;
    opacity: 0.0;
    background: white;
    padding: 90px 110px;
    font-size: 50px;
    height: 10%;
  }

  .product:hover .hover {
    opacity: 0.6;
    transition: 1s;
  }

  .hover i:hover {
    color: green;
    transition: 1s;
  }
</style>

<nav>
  <br> <br> <br>
  <div>
    <img id="image12" width="1550px" height="440px" />

  </div>
</nav>
<!-- <script src="view/js/slideshow.js"></script> -->
<nav class="container thongtin">

  <div class="tt1">
    <img src="view/images/tt1.png" alt="">
    <b>Giao hàng tận nơi</b>
  </div>
  <div class="tt1">
    <img src="view/images/tt2.png" alt="">
    <b>Hỗ trợ 24/7</b>
  </div>
  <div class="tt1">
    <img src="view/images/tt3.png" alt="">
    <b>Đóng gói quy chuẩn</b>
  </div>
  <div class="tt1">
    <img src="view/images/tt4.png" alt="">
    <b>Giá tiêu chuẩn</b>
  </div>
</nav>

<div class="fl-3">
  <div class="lsp">
    <img src="view/images/lsp1.png" alt="">
    <img src="view/images/lsp2.png" alt="">
    <img src="view/images/lsp3.png" alt="">
  </div>
</div>

<main>

  <div class="title1 container">
    <b>TOP 4 RAU CỦ BÁN CHẠY</b>
    <p>trái cây nhập khẩu, trái cây hữu cơ ưa chuộng</p>
  </div>

  <div class="gr-5 container">

    <?php

    foreach ($dstop10 as $sp) {
      extract($sp);
      $linksp = "index.php?act=sanphamct&idsp=" . $id;
      $img = $img_path . $img;
      $soluong  = 1;
      echo '
   

<div class="product" >

<div style="padding:70px 0px;"class="anhsp">
<a href="' . $linksp . '"><span class="hover"><i class="fa-solid fa-magnifying-glass-arrow-right"></i></span></a>
<a href="' . $linksp . '"><img style="height:100%;" src="' . $img . '" alt=""></a>
</div>
<p> <a href="' . $linksp . '">' . $name . '</a></p>
<span><strong>' . $price . 'đ</strong></span>
</div>
';
    }

    ?>

  </div>

  <div class="title1 container">
    <b>SẢN PHẨM MỚI</b>
    <p>trái cây nhập khẩu, trái cây hữu cơ ưa chuộng</p>
  </div>

  <div class="gr-5 container">


    <?php
    $i = 0;
    foreach ($spnew as $sp) {
      extract($sp);
      $linksp = "index.php?act=sanphamct&idsp=" . $id;
      $hinh = $img_path . $img;
      if (($i == 2) || ($i == 5) || ($i == 8))
        $mr = "";
      else {
        $mr = "mr";
      }
      echo '
  
        <div class="product">
        <div style="padding:70px 0px;" class="anhsp">
        <a href="' . $linksp . '"><span class="hover"><i class="fa-solid fa-magnifying-glass-arrow-right"></i></span></a>
      
           <a href="' . $linksp . '"><img src=' . $hinh . ' alt=""></a>
        </div>
        
        <p><a href="' . $linksp . '">' . $name . '</a></p>
        <span><strong>' . $price . 'đ</strong></span>
   </div>
         ';

      $i += 1;
    }

    ?>


  </div>

  <script>
    var imgArray = [
      './view/images/slide1.png',
      './view/images/slide2.png',
      './view/images/bn3.png',
    ];
    var curIndex = 0;
    var imgDuration = 2000;

    function slideShow() {
      document.getElementById('image12').src = imgArray[curIndex];
      curIndex++;
      if (curIndex == imgArray.length) {
        curIndex = 0;
      }
      setTimeout("slideShow()", imgDuration);
    }
    slideShow();

    const showOnPx = 100;
    const backToTopButton = document.querySelector(".back-to-top");
    const pageProgressBar = document.querySelector(".progress-bar");

    const scrollContainer = () => {
      return document.documentElement || document.body;
    };

    const goToTop = () => {
      document.body.scrollIntoView({
        behavior: "smooth"
      });
    };

    document.addEventListener("scroll", () => {
      console.log("Scroll Height: ", scrollContainer().scrollHeight);
      console.log("Client Height: ", scrollContainer().clientHeight);

      const scrolledPercentage =
        (scrollContainer().scrollTop /
          (scrollContainer().scrollHeight - scrollContainer().clientHeight)) *
        100;

      pageProgressBar.style.width = `${scrolledPercentage}%`;

      if (scrollContainer().scrollTop > showOnPx) {
        backToTopButton.classList.remove("hidden");
      } else {
        backToTopButton.classList.add("hidden");
      }
    });

    backToTopButton.addEventListener("click", goToTop);
  </script>