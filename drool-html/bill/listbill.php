<style>
    *{
        font-size: 1vw;
    }
</style>
<div class="row">
            <div class="row formtitle mb">
                <h1>DANH SÁCH ĐƠN HÀNG</h1>
            </div>
            <form action="index.php?act=listbill" method="post">
                        <input type="text" name="kyw" placeholder="Nhập mã đơn hàng" style=" width:30%; padding:2px">
                        <input type="submit" name="listok" value="OK" style="padding:2px">
            </form>
                <div class=" row boxcontentcart">
                    <table>
                        <tr>
                            
                            <th>Mã đơn hàng</th>
                            <th>Khách hàng</th>
                            <th>Số lượng mặt hàng</th>
                            <th>Tổng giá trị đơn hàng</th>
                            <th>Tình trạng đơn hàng</th>
                            <th>Ngày đặt hàng</th>
                            <th>Thao tác</th>
                        </tr>
                        <?php
                            foreach ($listbill as $bill) {
                                extract($bill);
                                $kh=$bill["bill_name"].'
                                    <br> '.$bill["bill_email"].'
                                    <br>'.$bill["bill_address"].'
                                    <br>'.$bill["bill_tel"];
                                $ttdh=get_ttdh($bill['bill_status']);
                                $countsp=loadall_cart_count($bill["id"]);
                               echo '<tr>
                                        
                                        <td>DAM-'.$bill['id'].'</td>
                                        <td>'.$kh.'</td>
                                        <td>'.$countsp.'</td>
                                        <td><strong>'.$bill['total'].'</strong>VNĐ</td>
                                        <td>'.$ttdh.'</td>
                                        <td>'.$bill['ngaydathang'].'</td>
                                        <td><input type="button" value="Sửa"><input type="button" value="Xóa"></td>
                                    </tr>';
                            }
                        
                        
                        ?>
                        
                    </table>      
                </div>
        </div>
        <div class="row mb10">
                    <input type="button" value="Chọn tất cả">
                    <input type="button" value="Bỏ chọn tất cả">
                    <input type="button" value="Xóa các mục đã chọn">
                   <a href="index.php?act=addsp"><input type="button" value="Nhập thêm"></a> 
                </div>
            </div>
           