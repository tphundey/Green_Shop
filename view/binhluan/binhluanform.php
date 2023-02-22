<?php
session_start();
include "../../model/pdo.php";
include "../../model/binhluan.php";
$idpro = $_REQUEST['idpro'];
$dsbl = loadall_binhluan($idpro);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/ctsanpham.css">
</head>

<body>



    <div class="row mb">


        <table>
            <div>
                <?php
                foreach ($dsbl as $bl) {
                    extract($bl);

                    echo
                    '
                  <div style="display:flex;margin-bottom:20px;margin-top:20px;width:450px;border-radius:50px;">
                  <div style="margin-right:20px;">
                  <img width="55px" style="border-radius:50px;" src="../images/cmtanh.png" alt="">
                 
                  </div>
                  <div style="margin-top:10px;">
                  <span style="font-weight:bold;font-size:17px;color:#3CA6FF;">' . $nameuser . '</span><br>
                  <span style="font-weight:bold;font-size:15px;">' . $noidung . '</span> <br>
                  <span style="font-weight:bold;font-size:13px;color:gray;">' . $ngaybinhluan . '</span><br>
                  </div>
                  </div>
                      
                 ';
                }

                ?>
            </div>
        </table>

        <div class="boxfooter binhluanform guibl">
            <form  style="display: flex;align-items: center;" action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
            <img width="55px" style="border-radius:50px;" src="../images/cmtanh.png" alt="">
                <input type="hidden" name="idpro" value="<?= $idpro ?>">
                <input style="margin-left:1% ;width:200px;border-radius:50px;padding:10px;border:1px solid #BED747;" type="text" name="nameuser" placeholder="Mời nhập tên: " required>
                <input style="margin-left:1% ;width:200px;border-radius:50px;padding:10px;border:1px solid #BED747;" type="text" name="noidung" placeholder="Mời nhập đánh giá" required>
                <input style="margin-left:1% ;border-radius:50px;padding:5px 10px;background-color:#198754;border:1px solid #198754;color:white;" class="" type="submit" name="guibinhluan" value="SEND">
            </form>
        </div>

        <?php
        if (isset($_POST['guibinhluan']) && ($_POST['guibinhluan'])) {
            $nameuser = $_POST['nameuser'];
            $noidung = $_POST['noidung'];
            $idpro = $_POST['idpro'];
            $iduser = $_SESSION['user']['id'];
            $ngaybinhluan = date('d/m/Y');
            insert_binhluan($noidung, $iduser, $nameuser, $idpro, $ngaybinhluan);
            header("Location: " . $_SERVER['HTTP_REFERER']);
        }

        ?>
    </div>


</body>

</html>