<div class="row mb">
    <div class="mr">

        <div class="row mb">

            <div class=" boxcontent cart">
                <table border="1">
                    <tr>

                     
                        <th>TÌNH TRẠNG ĐƠN HÀNG</th>
                      
                    </tr>

                  

                </table>


                <form action="index.php?act=update_tt" method="post" enctype="multipart/form-data">
                    <?php

                    if (is_array($bill)) {
                        extract($bill);
                    }
                   

                    ?>
                     <input type="hidden" name="id" value="<?= $id ?>">
                     <input type="text" name="id_tt" value="<?= $id_tt ?>" required>
                      <input type="submit" name="capnhat" value="CẬP NHẬT">

                     
                </form>



             

            </div>
        </div>
    </div>

</div>