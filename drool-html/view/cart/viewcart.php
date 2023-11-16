<div class="row mb">
            <div class="boxtrai mr">
                <div class="row mb">
        
            <div class="boxtitle">GIỎ HÀNG</div>
                <div class=" row boxcontentcart">
                    <table>
                        
                        <?php
                            viewcart(1);
                        ?>
                        <!-- <tr>
                            <td>1</td>
                            <td><img src="images/1001.jpg" alt="" height="80px"></td>
                            <td>Đồng hồ</td>
                            <td>50</td>
                            <td>2</td>
                            <td>100VND</td>
                            <td><input type="button" value="Xóa"></td>
                        </tr>

                        <tr>
                            <td>2</td>
                            <td><img src="images/1002.jpg" alt="" height="80px"></td>
                            <td>Nón</td>
                            <td>120</td>
                            <td>3</td>
                            <td>360VND</td>
                            <td><input type="button" value="Xóa"></td>
                        </tr> -->
                    </table>      
                </div>
        </div>
        <div class="row mb bill">
        <a href="index.php?act=bill"><input type="button" value="Tiếp tục đặt hàng"></a> <a href="index.php?act=delcart"> <input type="button" value="Xóa giỏ hàng"></a>
        </div>

            </div>
            <div class="boxphai">
                <?php
                    include "view/boxright.php";
                ?>
            </div>
        </div>