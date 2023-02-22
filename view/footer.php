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
                <iframe name="f36d953b1bd5ba4" width="1000px" height="300px" data-testid="fb:page Facebook Social Plugin" title="fb:page Facebook Social Plugin" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" src="https://www.facebook.com/v8.0/plugins/page.php?adapt_container_width=true&amp;app_id=&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fx%2Fconnect%2Fxd_arbiter%2F%3Fversion%3D46%23cb%3Df13951f83e58d18%26domain%3Dwww.sunigreenfarm.vn%26is_canvas%3Dfalse%26origin%3Dhttps%253A%252F%252Fwww.sunigreenfarm.vn%252Ff31e595ee5c5c8%26relation%3Dparent.parent&amp;container_width=315&amp;height=300&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2FSuni-Green-Farm-110327304086611%2F&amp;locale=vi_VN&amp;sdk=joey&amp;show_facepile=true&amp;small_header=false" style="border: none; visibility: visible; width: 315px; height: 130px;" class=""></iframe>
                </ul>
            </div>
        </div>
     
    </footer>
  <script>
    var imgArray = [
    './view/images/bn3.png',
    './view/images/bn1.png',
    'view/images/bn3.png',
];
var curIndex = 0;
var imgDuration = 2000;

function slideShow() {
    document.getElementById('image1').src = imgArray[curIndex];
    curIndex++;
    if (curIndex == imgArray.length) { curIndex = 0; }
    setTimeout("slideShow()", imgDuration);
}
slideShow();
  </script>