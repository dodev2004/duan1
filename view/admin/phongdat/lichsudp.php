<section class="admin-column_right">
                        <h2 class="admin-column_right--title">Phòng Đặt</h2>
                        <span class="admin-column_right--linked"><b>Phòng Đặt</b> - Xác nhận đặt phòng</span>
                        <div class="table table-category">
                      
                            <table>
                                <tr>
                                    <th>STT</th>
                                    <th>Thông tin khách hàng</th>
                                    <th>Phòng</th>
                                    <th>Thông tin phòng</th>
                                    <th>Trạng thái</th>
                                </tr>
                                <?php  foreach($books as $index => $book) :?>
                                <tr>
                                    <th><?php echo $index+1 ?></th>
                                    
                                    <th>
                                        <p class="id_room"><strong>ID Đặt phòng</strong>:BND-<?php echo $book["id"] ?></p>
                                        <p class=""><strong>Họ và tên :</strong> <span><?php echo $book["book_name"] ?></span></p>
                                        <p><strong>Số điện thoại</strong> : <?php echo $book["sdt"] ?></p>
                                    </th>
                                    <th>
                                        <?php $room = db_phong_select_by_id($book["id_Phong"]) ?>
                                        <p class="id_room"><strong>Tên phòng </strong>: <span><?php echo $room["ten_Phong"] ?></span></p>
                                        <p class=""><strong>Gía</strong> : <span><?php echo number_format($room["gia"],0,',',',')?> VNĐ</span></p>
                                     
                                    </th>
                                    <th>
                                          <p class="id_room"><strong>Ngày đặt phòng </strong>: <span><?php echo $book["created_time"] ?></span></p>
                                        <p class="id_room"><strong>Ngày nhận phòng </strong>: <span><?php echo $book["check_in"] ?></span></p>
                                        <p class=""><strong>Ngày trả : </strong><span><?php echo $book["check_out"] ?></span></p>
                                        <?php if($book["status"] == 4 ){ ?>
                                        <p><strong>Tổng thanh toán</strong> : <span> 0 VNĐ</span></p>
                                        <?php }
                                        else {
                                            
                                           
                                         ?>
                                          <p><strong>Tổng thanh toán</strong> : <span> <?php echo number_format($book["price"],0,',',',')?> VNĐ</span></p>
                                         <?php } ?>

                                    </th>
                                       
                                    <th>
                                        <?php 
                                            $status = $book["status"];
                                            if($status == 1){
                                                echo "Chờ xác nhận đặt phòng";
                                            }
                                            else if($status == 2 ){
                                                echo "Chờ thanh toán";
                                            }
                                            else if($status == 3){
                                                echo "Thanh toán thành công";
                                            }
                                            else {
                                                echo "Đã hủy";
                                            }
                                        ?>
                                    </th>

                                   
                                </tr>
                                
                                <?php endforeach ?>
                                <section class="pagin pagin_book">
                                <section class="tk_sp">Có <span><?php echo $count ?></span> sản phẩm trong trang số <?php echo $_GET["currentPage"] ?></section>
        <?php  get_paging_book($pagin,"datphong",'history')?>
        </section>
                            </table>
                          
      
                        </div>
                   
                        <?php  ?>
                    </section>