<?php
include "../model/pdo.php";
include "../model/danhmuc.php";
include "../model/sanpham.php";
include "../model/taikhoan.php";
include "../model/binhluan.php";
include "../model/cart.php";
include "header.php";


//controller

if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'adddm':
            $err = $tenloai = "";
            //kiểm tra xem ng dùng có click add ko ?
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {

                if (empty($_POST["tenloai"])) {
                    $err = "Không được để trống ! ";
                } else {
                    $tenloai = $_POST['tenloai'];
                    insert_danhmuc($tenloai);
                    $thongbao = "Thêm danh mục thành công";
                }
            }

            include "danhmuc/add.php";
            break;
        case 'listdm':
            $listdanhmuc = loadall_danhmuc();
            include "danhmuc/list.php";
            break;

            // case 'listtt':
            //         $listtinhtrang = loadall_tinhtrang();
            //         include "tinhtrang/list.php";
            //         break;

        case 'xoadm':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_danhmuc($_GET['id']);
            }

            $sql = "select * from danhmuc order by id desc";
            $listdanhmuc = pdo_query($sql);
            include "danhmuc/list.php";
            break;

        case 'suadm':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $dm = loadone_danhmuc($_GET['id']);
            }

            include "danhmuc/update.php";
            break;

        case 'updatedm':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $tenloai = $_POST['tenloai'];
                $id = $_POST['id'];
                update_danhmuc($id, $tenloai);
                $thongbao = "Cập nhật thành công";
            }
            $listdanhmuc = loadall_danhmuc();
            include "danhmuc/list.php";
            break;

            // controller cho sản phẩm
            // case 'adddm':
            //     $err = $tenloai = "";
            //     //kiểm tra xem ng dùng có click add ko ?
            //     if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {

            //         if (empty($_POST["tenloai"])) {
            //             $err = "Không được để trống ! ";
            //         } else {
            //             $tenloai = $_POST['tenloai'];
            //             insert_danhmuc($tenloai);
            //             $thongbao = "Thêm danh mục thành công";
            //         }

            //     }

            //     include "danhmuc/add.php";
            //     break;
        case 'addsp':
            $err = $tensp = $giasp =  $mota = "";
            //kiểm tra xem ng dùng có click add ko ?
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                if (empty($_POST['tensp'])) {
                    $err = "Không được để trống tên sản phẩm ! <br>";
                }
                if (empty($_POST['giasp'])) {

                    $err1 = "Không được để trống giá sản phẩm ! <br>";
                }
                if (empty($_POST['mota'])) {

                    $err2 = "Không được để trống mô tả sản phẩm ! <br>";
                }
                else {
                    $iddm = $_POST['iddm'];
                    $tensp = $_POST['tensp'];
                    $giasp = $_POST['giasp'];
                    $mota = $_POST['mota'];
                    $hinh = $_FILES['hinh']['name'];
                    $target_dir = "../upload/";
                    $target_file = $target_dir . basename($_FILES["hinh"]["name"]);

                    if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                        // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                    } else {
                        //    echo "Sorry, there was an error uploading your file.";
                    }

                    insert_sanpham($tensp, $giasp, $hinh, $mota, $iddm);
                    $thongbao = "Thêm thành công";
                }
            }
            $listdanhmuc = loadall_danhmuc();
            include "sanpham/add.php";
            break;
            // case 'addcart':
            //     //kiểm tra xem ng dùng có click add ko ?
            //     if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {

            //         $idpro = $_POST['idpro'];
            //         $price = $_POST['price'];
            //         $soluong = $_POST['soluong'];
            //         $thanhtien = $_POST['thanhtien'];


            //         insert_cart2($idpro, $price, $soluong, $thanhtien);
            //         $thongbao = "Thêm thành công";
            //     }

            //     include "bill/listbill.php";
            //     break;
        case 'listsp':
            if (isset($_POST['listok']) && ($_POST['listok'])) {
                $kyw = $_POST['kyw'];
                $iddm = $_POST['iddm'];
            } else {
                $kyw = '';
                $iddm = 0;
            }
            $giatien = 0;
            $listdanhmuc = loadall_danhmuc();
            $listsanpham = loadall_sanpham($kyw, $iddm, $giatien);

            include "sanpham/list.php";
            break;

        case 'xoasp':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_sanpham($_GET['id']);
            }
            $giatien = 0;
            $listsanpham = loadall_sanpham("", 0, $giatien);
            include "sanpham/list.php";
            break;

        case 'suasp':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $sanpham = loadone_sanpham($_GET['id']);
            }

            $listdanhmuc = loadall_danhmuc();
            include "sanpham/update.php";
            break;

        case 'suatt':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $bill = loadone_bill($_GET['id']);
            }
            $list_tt = loadall_tt();
            include "bill/updatett.php";
            break;


        case 'updatesp':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $id = $_POST['id'];
                $iddm = $_POST['iddm'];
                $tensp = $_POST['tensp'];
                $giasp = $_POST['giasp'];
                $mota = $_POST['mota'];
                $hinh = $_FILES['hinh']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES["hinh"]["name"]);

                if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                    // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                } else {
                    //    echo "Sorry, there was an error uploading your file.";
                }
                update_sanpham($id, $iddm, $tensp, $giasp, $mota, $hinh);
                $thongbao = "Cập nhật thành công";
            }
            $giatien = 0;
            $listdanhmuc = loadall_danhmuc();
            $listsanpham = loadall_sanpham("", 0, $giatien);
            include "sanpham/list.php";
            break;


        case 'capnhattt':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $id = $_POST['id'];
                $status = $_POST['status'];

                update_ttdh($id, $status);
                $thongbao = "Cập nhật thành công";
            }
            // $listtinhtrang = loadall_tinhtrang();
            $listbill = loadall_bill();

            include "bill/listbill.php";

            break;

        case 'suatk':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $tk = loadone_taikhoan($_GET['id']);
            }

            include "taikhoan/update.php";
            break;


        case 'updatetk':
            if (isset($_POST['capnhattk']) && ($_POST['capnhattk'])) {
                $role = $_POST['role'];
                $id = $_POST['id'];
                update_taikhoan($id, $role);
                $thongbao = "Cập nhật thành công";
            }
            $listtaikhoan = loadall_taikhoan();
            include "taikhoan/list.php";
            break;

        case 'xoatk':
            if (isset($_GET['id']) && ($_GET['id'] > 1)) {
                delete_taikhoan($_GET['id']);
            } else {
                echo '<script>alert("Không thể xóa tài khoản quản trị !")</script>';
            }

            $listtaikhoan = loadall_taikhoan();
            include "taikhoan/list.php";
            break;

        case 'xoabl':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_binhluan($_GET['id']);
            }

            $listbinhluan = loadall_binhluan(0);
            $listbinhluan = loadall_binhluan2();
            include "binhluan/list.php";
            break;
        case 'dskh':


            $listtaikhoan = loadall_taikhoan();
            include "taikhoan/list.php";
            break;
        case 'dsbl':

            $listbinhluan = loadall_binhluan(0);
            $listbinhluan = loadall_binhluan2();
            include "binhluan/list.php";

            break;
        case 'thongke':

            $listthongke = loadall_thongke();
            $listthongke2 = loadall_thongke2();
            $listthongke21 = loadall_thongke21();
            $listthongke22 = loadall_thongke22();
            $listthongke23 = loadall_thongke23();
            $listthongke24 = loadall_thongke24();
            $listthongke25 = loadall_thongke25();
            $listthongke26 = loadall_thongke26();
            $listthongke10 = loadall_thongke10();
            $listthongke30 = loadall_thongke30();


            include "thongke/list.php";
            break;

        case 'bieudo':

            $listthongke = loadall_thongke();
            include "thongke/bieudo.php";
            break;

        case 'addbill':


            include "bill/addbill.php";
            break;

        case 'listbill':
            if (isset($_POST['kyw']) && ($_POST['kyw'] != "")) {
                $kyw = $_POST['kyw'];
            } else {
                $kyw = "";
            }
            $listbill = loadall_bill($kyw, 0);
            include "bill/listbill.php";
            break;

        case 'listbillct':
            if (isset($_POST['kyw']) && ($_POST['kyw'] != "")) {
                $kyw = $_POST['kyw'];
            } else {
                $kyw = "";
            }
            $listbill = loadall_bill($kyw, 0);
            include "bill/listbillct.php";
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
            $pttt = get_pttt($listbill["bill_pttt"]);
            include "bill/billct.php";
            break;

        case 'xoabill':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_bill($_GET['id']);
            }

            if (isset($_POST['kyw']) && ($_POST['kyw'] != "")) {
                $kyw = $_POST['kyw'];
            } else {
                $kyw = "";
            }
            $listbill = loadall_bill($kyw, 0);
            include "bill/listbill.php";
            break;

        case 'home':
            $listthongke21 = loadall_thongke21();
            $listthongke22 = loadall_thongke22();
            $listthongke23 = loadall_thongke23();
            $listthongke24 = loadall_thongke24();
            $listthongke25 = loadall_thongke25();
            $listthongke26 = loadall_thongke26();
            $listthongkebieudo = loadall_thongke();
            $listbill = loadall_bill2(0);
            $listthongke = loadall_thongke3();
            $listthongke1 = loadall_thongke4();
            $listthongke2 =  loadall_thongke5();
            include "home.php";
            break;


        default:
            $listbill = loadall_bill2(0);
            $listthongke = loadall_thongke3();
            $listthongke1 = loadall_thongke4();
            $listthongke2 =  loadall_thongke5();
            include "home.php";

            break;
    }
} else {
    $listthongkebieudo = loadall_thongke();
    $listbill = loadall_bill2(0);
    $listthongke = loadall_thongke3();
    $listthongke1 = loadall_thongke4();
    $listthongke2 =  loadall_thongke5();
    include "home.php";
}

include "footer.php";
