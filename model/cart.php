<script>
    function abc(a) {
        if (confirm(a)) {
            return confirm('Bạn có muốn xóa không?')
        } else {
            return false;
        }
    }
</script>
<?php

function viewcart()
{
    global $img_path;
    $tong = 0;
    $i = 0;

    foreach ($_SESSION['mycart'] as $cart) {
        $hinh = $img_path . $cart[2];

        $ttien = $cart[3] * $cart[4];
        $tong += $ttien;

        $xoasp = '<a href="index.php?act=delcart&idcart=' . $i . '"><i style="font-size:30px;" class="fa-solid fa-delete-left"></i></a>';
        echo '
    
<tr style="text-align:center;">
      <td style="display:flex;align-items:center;border:none;color:#003C2D;"><img src="' . $hinh . '" height="80px" alt=""><strong>' . $cart[1] . '</strong></td>
      <td  style="border:none;"><strong>' . $ttien . '₫</strong></td>
      <td  style="border:none;"><strong>' . $cart[4] . ' / túi</strong></td>
      <td onclick="return abc()" style="border:none;">' . $xoasp . '</td>
  </tr> 
  <tr>
<td><hr></td>
<td><hr></td>
<td><hr></td>
<td><hr></td>
</tr>
    
        ';
        $i += 1;
    }


    echo '
    <tr style="height:50px;"><td></td> </tr>
    <tr>
    <td style="margin-top:10px;font-size:20px;border:none;width:720px;"  ></td>
        <td  style="color:#003C2D;font-size:20px;border:none;" ><strong>Tổng tiền: </strong></td>
        <td  style="font-weight:bold;font-size:30px;border:none;color:#FAA634;">' . $tong . '₫</td>
        
    </tr>
  
    ';
}

function bill_chi_tiet($listbill)
{
    global $img_path;
    $tong = 0;
    $i = 0;

    foreach ($listbill as $cart) {
        $hinh = $img_path . $cart['img'];
        $tong += $cart['thanhtien'];


        echo '
       <tr style="display:flex;gap:60px;align-items:center;">
        <td style="display:flex;align-items:center;"><img src="' . $hinh . '" height="80px" alt="">' . $cart['name'] . '</td>
        <td>' . $cart['soluong'] . '</td>
        <td>' . $cart['thanhtien'] . '.VNĐ</td>
    </tr>
    ';
        $i += 1;
    }
}


function tongdonhang()
{
    $tong = 0;
    foreach ($_SESSION['mycart'] as $cart) {

        $ttien = $cart[3] * $cart[4];
        $tong += $ttien;
    }
    return $tong;
}
function insert_bill($iduser, $name, $email, $address, $tel, $pttt, $ngaydathang, $tongdonhang)
{
    $sql = "insert into bill(iduser,bill_name,bill_email,bill_address,bill_tel,bill_pttt,ngaydathang,total) values('$iduser','$name','$email','$address','$tel','$pttt','$ngaydathang','$tongdonhang')";
    return pdo_execute_return_lastInsertID($sql);
}
function insert_cart($iduser, $idpro, $img, $name, $price, $soluong, $thanhtien, $idbill)
{
    $sql = "insert into cart(iduser,idpro,img,name,price,soluong,thanhtien,idbill) values('$iduser','$idpro','$img','$name','$price','$soluong','$thanhtien','$idbill')";
    return pdo_execute($sql);
}

function loadone_bill($id)
{
    $sql = "select * from bill where id=" . $id;
    $bill = pdo_query_one($sql);
    return $bill;
}
function delete_bill($id)
{
    $sql = "delete from bill where id=" . $id;
    pdo_execute($sql);
}

function loadone_cart($id)
{
    $sql = "select name from cart where idbill=" . $id;
    $cart = pdo_query($sql);
    return $cart;
}
function loadone_cart2($id)
{
    $sql = "select soluong from cart where idbill=" . $id;
    $cart2 = pdo_query($sql);
    return $cart2;
}
function loadall_cart($idbill)
{
    $sql = "select * from cart where idbill=" . $idbill;
    $bill = pdo_query($sql);
    return $bill;
}
function loadall_cart_count($idbill)
{
    $sql = "select * from cart where idbill=" . $idbill;
    $bill = pdo_query($sql);
    return sizeof($bill);
}

function loadtensanpham($id)
{
    $sql = "select name from cart where idbill=" . $id;
    $namesp = pdo_query($sql);
    return $namesp;
}

function loadall_price_count($idbill)
{
    $sql = "select price from cart where idbill=" . $idbill;
    $bill = pdo_query($sql);
    return sizeof($bill);
}

function loadall_bill1($iduser)
{
    $sql = "select * from bill where iduser=" . $iduser;
    $sql .= " order by id desc"; //mới nhập đưa lên trên
    $listbill = pdo_query($sql);
    return $listbill;
}



function loadall_bill2($iduser)
{
    $sql = "select * from bill order by id desc limit 0,3";
    $listbill = pdo_query($sql);
    return $listbill;
}

function loadall_bill($kyw = "", $iduser = 0)
{
    $sql = "select * from bill where 1";
    if ($iduser > 0) $sql .= " AND iduser=" . $iduser;
    if ($kyw != "") $sql .= " AND id like '%" . $kyw . "%'";
    $sql .= " order by id desc";
    $listbill = pdo_query($sql);
    return $listbill;
}
function get_ttdh($n)
{
    switch ($n) {
        case '0':
            $tt = "Chờ xác nhận";
            break;
        case '1':
            $tt = "Đang lấy hàng";
            break;

        case '2':
            $tt = "Đang giao hàng";
            break;

        case '3':
            $tt = "Đã giao hàng";
            break;

        case '4':
            $tt = "Hoàn tất";
            break;

        case '5':
            $tt = "Hủy";
            break;

        default:
            $tt = "Đơn hàng mới";
            break;
    }
    return $tt;
}

// cập nhật tình trạng đơn hàng

// function load_ten_dm($iddm)
// {
//     if ($iddm > 0) {
//         $sql = "select * from danhmuc order by id desc"; //mới nhập đưa lên trên
//         $dm = pdo_query_one($sql);
//         extract($dm);
//         return $name;
//     } else {
//         return "";
//     }
// }
function get_pttt($n)
{
    switch ($n) {
        
        case '1':
            $tt = "Thanh toán tiền mặt";
            break;
        case '2':
            $tt = "Chuyển khoản ngân hàng";
            break;
    
    }
    return $tt;
}

function   update_ttdh($id, $status)
{
    $sql = "update bill set  bill_status='" . $status . "' where id=" . $id;
    pdo_execute($sql);
}



function loadall_tt()
{
    $sql = "select * from tinhtrang order by id desc"; //mới nhập đưa lên trên
    $list_tt = pdo_query($sql);
    return $list_tt;
}




function loadall_thongke()
{
    $sql = "select danhmuc.id as madm,danhmuc.name as tendm, count(sanpham.id) as countsp, min(sanpham.price) as minprice, max(sanpham.price) as maxprice, avg(sanpham.price) as avgprice";
    $sql .= " from sanpham left join danhmuc on danhmuc.id=sanpham.iddm";
    $sql .= " group by danhmuc.id order by danhmuc.id desc";

    $listtk = pdo_query($sql);
    return $listtk;
}

function loadall_thongke2()
{
    $sql = "select count(bill.id) as coutdh, sum(bill.total) as couttt  ";
    $sql .= " from bill ";

    // $sql .= " group by danhmuc.id order by danhmuc.id desc";

    $listtk = pdo_query($sql);
    return $listtk;
}
// function loadall_thongke31()
// {
//     $sql = "select sum(bill.total) as coutdh ";
//     $sql .= " from bill where now() > '2022-12-9 23-20-29'";

// //    phải luôn cập nhật sửa code theo từng ngày 

//     $listtk = pdo_query($sql);
//     return $listtk;
// }



function loadall_thongke21()
{
    $sql = "select count(id) as coutdh";
    $sql .= " from bill  where bill_status = 0";

    $listtk = pdo_query($sql);
    return $listtk;
}
function loadall_thongke22()
{
    $sql = "select count(id) as coutdh";
    $sql .= " from bill  where bill_status = 1";

    $listtk = pdo_query($sql);
    return $listtk;
}
function loadall_thongke23()
{
    $sql = "select count(id) as coutdh";
    $sql .= " from bill  where bill_status = 2";

    $listtk = pdo_query($sql);
    return $listtk;
}
function loadall_thongke24()
{
    $sql = "select count(id) as coutdh";
    $sql .= " from bill  where bill_status = 3";

    $listtk = pdo_query($sql);
    return $listtk;
}
function loadall_thongke25()
{
    $sql = "select count(id) as coutdh";
    $sql .= " from bill  where bill_status = 4";

    $listtk = pdo_query($sql);
    return $listtk;
}
function loadall_thongke26()
{
    $sql = "select count(id) as coutdh";
    $sql .= " from bill  where bill_status = 5";

    $listtk = pdo_query($sql);
    return $listtk;
}
function loadall_thongke10()
{

    $sql = "select  name from cart order by soluong desc";

    $listtk = pdo_query_one($sql);
    return $listtk;
}
function loadall_thongke30()
{

    $sql = "select  count(soluong) as so from cart ";

    $listtk = pdo_query_one($sql);
    return $listtk;
}

function loadall_thongke3()
{
    $sql = "select count(sanpham.id) as tsp  ";
    $sql .= " from sanpham ";
    $listtk = pdo_query($sql);
    return $listtk;
}

function loadall_thongke4()
{
    $sql = "select count(danhmuc.id) as tdm  ";
    $sql .= " from danhmuc ";
    $listtk = pdo_query($sql);
    return $listtk;
}

function loadall_thongke5()
{
    $sql = "select count(bill.id) as tdh  ";
    $sql .= " from bill ";
    $listtk = pdo_query($sql);
    return $listtk;
}
