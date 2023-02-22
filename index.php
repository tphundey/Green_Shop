<?php
session_start();

include "model/pdo.php";
include "model/sanpham.php";
include "model/danhmuc.php";
include "model/taikhoan.php";
include "model/cart.php";
include "view/header.php";
include "global.php"; //biến toàn cục

$conn = mysqli_connect("localhost", "root", "", "da1-greenshop");
mysqli_set_charset($conn, "utf8");

if (!isset($_SESSION['mycart'])) $_SESSION['mycart'] = [];

$spnew = loadall_sanpham_home();
$dsdm = loadall_danhmuc();
$dstop10 = loadall_sanpham_top10();
// act là hành động chuyển đến trang
if ((isset($_GET['act'])) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {

        case 'sanpham':
            if (isset($_POST['kyw']) && ($_POST['kyw'] != "")) {
                $kyw = $_POST['kyw'];
            } else {
                $kyw = "";
            }
            if (isset($_GET['iddm']) && ($_GET['iddm'] > 0)) {
                $iddm = $_GET['iddm'];
            } else {
                $iddm = 0;
            }
            if (isset($_GET['giatien']) && ($_GET['giatien'] > 0)) {
                $giatien = $_GET['giatien'];
            } else {
                $giatien = 0;
            }

            $dssp = loadall_sanpham($kyw, $iddm, $giatien);
            $tendm = load_ten_dm($iddm);
            include "view/sanpham.php";

            break;

        default:
            include "view/home.php";
            break;

        case 'sanpham2':

            if (isset($_GET['giatien']) && ($_GET['giatien'] > 0)) {
                $giatien = $_GET['giatien'];
            } else {
                $giatien = 0;
            }

            $dssp = loadall_sanpham2();
            $tendm = load_ten_dm($iddm);
            include "view/sanphamloc.php";

            break;

        case 'sanpham3':

            if (isset($_GET['giatien']) && ($_GET['giatien'] > 0)) {
                $giatien = $_GET['giatien'];
            } else {
                $giatien = 0;
            }

            $dssp = loadall_sanpham3();
            $tendm = load_ten_dm($iddm);
            include "view/sanphamloc.php";

            break;

        case 'sanpham4':

            if (isset($_GET['giatien']) && ($_GET['giatien'] > 0)) {
                $giatien = $_GET['giatien'];
            } else {
                $giatien = 0;
            }

            $dssp = loadall_sanpham4($giatien);
            $tendm = load_ten_dm($iddm);
            include "view/sanphamloc.php";

            break;

        case 'sanpham5':

            if (isset($_GET['giatien']) && ($_GET['giatien'] > 0)) {
                $giatien = $_GET['giatien'];
            } else {
                $giatien = 0;
            }

            $dssp = loadall_sanpham5($giatien);
            $tendm = load_ten_dm($iddm);
            include "view/sanphamloc.php";

            break;

        case 'sanpham6':

            if (isset($_GET['giatien']) && ($_GET['giatien'] > 0)) {
                $giatien = $_GET['giatien'];
            } else {
                $giatien = 0;
            }

            $dssp = loadall_sanpham6($giatien);
            $tendm = load_ten_dm($iddm);
            include "view/sanphamloc.php";
            break;


        case 'sanphamct':

            if (isset($_GET['idsp']) && ($_GET['idsp'] > 0)) {
                $id = $_GET['idsp'];
                $onesp = loadone_sanpham($id);
                extract($onesp);
                $sp_cung_loai = load_sanpham_cungloai($id, $iddm);


                include "view/sanphamct.php";
            } else {
                include "view/home.php";
            }

            break;
        case 'dangky':
            if (isset($_POST['dangky']) && ($_POST['dangky'])) {

                $email = $_POST['email'];
                // $user = isset($_POST['user']) ? $_POST['user'] : null;
                $user = $_POST['user'];
                $pass = $_POST['pass'];

                $sql = "select * from taikhoan where user='$user' ";
                $old = mysqli_query($conn, $sql);
                if (empty($_POST['user'])) {
                    header("location:http://localhost/PHP1/ky4/greenshop/view/taikhoan/return2.php");
                }
                if (mysqli_num_rows($old) > 0) {
                    $thongbao2 = "Trùng tên người dùng, mời nhập lại";
                    header("location:http://localhost/PHP1/ky4/greenshop/view/taikhoan/returnlogin.php");
                } else {
                    $thongbao = "Đã đăng ký thành công, Vui lòng đăng nhập";
                    $sql = "insert into taikhoan(email,user,pass) values('$email','$user','$pass')";
                    header("location:http://localhost/PHP1/ky4/greenshop/view/taikhoan/returnlogin2.php");
                    mysqli_query($conn, $sql);
                }
            }



            include "view/taikhoan/dangnhap.php";
            break;

        case 'dangnhap':
            $err = $err1 = $user = $pass = "";
            if (isset($_POST['dangnhap']) && ($_POST['dangnhap'])) {
                if (empty($_POST['user']) || empty($_POST['pass'])) {

                    header("location:http://localhost/PHP1/ky4/greenshop/view/taikhoan/return1.php");
                } else {
                    $user = $_POST['user'];
                    $pass = $_POST['pass'];
                    $checkuser = checkuser($user, $pass);
                    $thongbao22 = "Tài khoản không tồn tại";
                    $errs = [];
                    if (is_array($checkuser)) {
                        $_SESSION['user'] = $checkuser;

                        header('Location: index.php');
                    } else {

                        $thongbao2 = "Mời kiểm tra lại tên người dùng hoặc mật khẩu";
                        header("location:http://localhost/PHP1/ky4/greenshop/view/taikhoan/returndangnhap.php");
                    }
                }
            }


            include "index.php";
            break;

        case 'edit_taikhoan':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {

                $pass = $_POST['pass'];

                update_taikhoan2($id, $pass);
                $thongbao = "Đã thay đổi mât khẩu !";
            }
            include "view/taikhoan/edit_taikhoan.php";
            break;
        case 'thongtin':

            include "view/taikhoan/thongtin.php";
            break;

        case 'quenmk':
            if (isset($_POST['guiemail']) && ($_POST['guiemail'])) {
                $email = $_POST['email'];
                $checkemail = checkemail($email);

                if (is_array($checkemail)) {
                    $thongbao = "Mật khẩu của bạn là: " . $checkemail['pass'];
                } else {
                    $thongbao = "email này không tồn tại";
                }
            }
            include "view/taikhoan/quenmk.php";
            break;
        case 'thoat':
            session_unset();
            header('Location: index.php');
            break;

        case 'gioithieu':
            include "view/gioithieu.php";
            break;

        case 'lienhe':
            include "view/lienhe.php";
            break;

        case 'giohang':
            include "view/cart/viewcart.php";
            break;

        case 'addtocart':

            if (isset($_POST['addtocart']) && ($_POST['addtocart'])) {
                $soluong = $_POST['soluong'];
                if ($soluong < 1) {
                    echo '<script>alert("Bạn chưa lựa chọn số lượng !")</script>';
                   
                }
                $id = $_POST['id'];
                $name = $_POST['name'];
                $img = $_POST['img'];
                $price = $_POST['price'];

                $ttien = $soluong * $price;
                $spadd = [$id, $name, $img, $price, $soluong, $ttien];

                array_push($_SESSION['mycart'], $spadd);
            }
            include "view/cart/viewcart.php";
            break;


        case 'delcart':
            if (isset($_GET['idcart'])) {
                array_splice($_SESSION['mycart'], $_GET['idcart'], 1);
            } else {
                $_SESSION['mycart'] = [];
            }

            include "view/cart/viewcart.php";
            break;

        case 'bill':
            include "view/cart/bill.php";
            break;

        case 'billconfirm':
            if (isset($_POST['dongydathang']) && ($_POST['dongydathang'])) {
                if (isset($_SESSION['user'])) $iduser = $_SESSION['user']['id'];
                else $id = 0;
                $name = $_POST['name'];
                $email = $_POST['email'];
                $address = $_POST['address'];
                $tel = $_POST['tel'];
                $pttt = $_POST['pttt'];
                $ngaydathang = date('h:i:sa d/m/Y');
                $tongdonhang = tongdonhang();


                // tạo bill
                $idbill = insert_bill($iduser, $name, $email, $address, $tel, $pttt, $ngaydathang, $tongdonhang);
                // insert cart
                foreach ($_SESSION['mycart'] as $cart) {
                    insert_cart($_SESSION['user']['id'], $cart[0], $cart[2], $cart[1], $cart[3], $cart[4], $cart[5], $idbill);
                }
                // xóa session
                $_SESSION['mycart'] = [];
            }

            $bill = loadone_bill($idbill);
            $billct = loadall_cart($idbill);
            include "view/cart/billconfirm.php";
            break;

        case 'mybill':
            $listbill = loadall_bill1($_SESSION['user']['id']);
            include "view/cart/mybill.php";
            break;

        case 'billct':

            $id = $_GET['id'];
            $namesp = loadtensanpham($id);
            $listbill = loadone_bill($id);
            $cart = loadone_cart($id);
            $cart2 = loadone_cart2($id);

            extract($listbill);
            $suatt = "index.php?act=suatt&id=" . $id;
            $status = get_ttdh($listbill["bill_status"]);
            include "view/cart/billct.php";
            break;
    }
} else {
    include "view/home.php";
}
include "view/mess.php";
include "view/footer.php";
