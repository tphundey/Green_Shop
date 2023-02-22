<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>greenshop - sạch đến từng luống rau</title>
    <link rel="stylesheet" href="../css/dangnhap.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/d829d3809c.js" crossorigin="anonymous"></script>
</head>

<body>
    <header>
        <div class="relative">
            <div class="fixed">
                <div class="hd container">
                    <div class="h-left ">
                        <a href=""><img src="../images/logo.png" alt="" width="100px"></a>
                        <ul>
                            <li><a href="index.html"><strong>Trang chủ</strong></a></li>
                            <li><a href="sanpham.html"><strong>Sản phẩm</strong></a></li>
                            <li><a href="gioithieu.html"><strong>Giới thiệu</strong></a></li>
                            <li><a href="lienhe.html"><strong>Liên hệ</strong></a></li>
                        </ul>
                    </div>
                    <div class="h-right">
                        <ul>
                            <li><a href="dangnhap.html"><i class="fa-solid fa-circle-user"></i></a></li>
                            <li><a href="giohang.html"><i class="fa-solid fa-cart-shopping"></i></a></li>
                        </ul>
                    </div>

                </div>

            </div>
        </div>
    </header>
    <br><br><br><br><br><br>

    <div class="login">
        <div class="form">
            <form action="../../index.php?act=dangky" method="post">
                <h2><strong>Đăng Ký</strong></h2>
                <input class="emai" type="email" name="email" required>
                <input type="text" name="user" required>
                <input type="password" name="pass" required>
                <input type="submit" value="Đăng ký" name="dangky">
                <input type="reset" value="Nhập lại">
            </form>
            <h2 class="thongbao">
                <?php
                if (isset($thongbao) && ($thongbao != "")) {
                    echo $thongbao;
                }
                ?>
            </h2>
        </div>
    </div>

    <footer>
        <div class="footer">
            <div class="ft">
                <b>VỀ CHÚNG TÔI</b>
                <ul>
                    <li><a href="">Trang chủ</a></li>
                    <li><a href="">Giới thiệu</a></li>
                    <li><a href="">Sản phẩm</a></li>
                    <li><a href="">Tin tức</a></li>
                    <li><a href="">Liên hệ</a></li>
                </ul>
            </div>

            <div class="ft ">
                <b>SẢN PHẨM</b>
                <ul>
                    <li><a href="">Sản phẩm hữu cơ</a></li>
                    <li><a href="">Sản phẩm thủy canh</a></li>
                    <li><a href="">Bột rau củ hữu cơ</a></li>
                    <li><a href="">Bột rau củ hữu cơ</a></li>
                    <li><a href="">Tất cả sản phẩm</a></li>
                </ul>
            </div>

            <div class="ft ">
                <b>CHÍNH SÁCH</b>
                <ul>
                    <li><a href="">Chính sách bảo mật</a></li>
                    <li><a href="">Chính sách vận chuyên</a></li>
                    <li><a href="">Chính sách đổi trả</a></li>
                    <li><a href="">Quy định sử dụng</a></li>
                </ul>
            </div>


            <div class="ft ">
                <b>KẾT NỐI VỚI CHÚNG TÔI</b>
                <ul>
                    <div class="fb-page fb_iframe_widget" data-href="https://www.facebook.com/lamhaifarm/" data-tabs="" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" fb-xfbml-state="rendered" fb-iframe-plugin-query="adapt_container_width=true&amp;app_id=&amp;container_width=263&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2Flamhaifarm%2F&amp;locale=vi_VN&amp;sdk=joey&amp;show_facepile=true&amp;small_header=false&amp;tabs=&amp;width=">
                        <span style="vertical-align: bottom; width: 263px; height: 130px;"><iframe name="f339c09e77a2858" width="1000px" height="1000px" data-testid="fb:page Facebook Social Plugin" title="fb:page Facebook Social Plugin" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" src="https://www.facebook.com/v4.0/plugins/page.php?adapt_container_width=true&amp;app_id=&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fx%2Fconnect%2Fxd_arbiter%2F%3Fversion%3D46%23cb%3Df247cd835e2de64%26domain%3Dlamhaifarm.com%26is_canvas%3Dfalse%26origin%3Dhttps%253A%252F%252Flamhaifarm.com%252Ff1ad06daf08a974%26relation%3Dparent.parent&amp;container_width=263&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2Flamhaifarm%2F&amp;locale=vi_VN&amp;sdk=joey&amp;show_facepile=true&amp;small_header=false&amp;tabs=&amp;width=" style="border: none; visibility: visible; width: 263px; height: 130px;" class=""></iframe></span>
                    </div>
                </ul>
            </div>
        </div>
    </footer>

    <script src="js/slideshow.js"></script>
</body>

</html>