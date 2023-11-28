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
                                    <th>Hành động</th>
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
                                        <p><strong>Tổng</strong> : <span><?php echo number_format($book["price"],0,',',',')?> VNĐ</span></p>
                                    </th>
                                    <th>
                                        <p class="id_room"><strong>Ngày vào </strong>: <span><?php echo $book["check_in"] ?></span></p>
                                        <p class=""><strong>Ngày trả : </strong><span><?php echo $book["check_out"] ?></span></p>
                                       
                                    </th>
                                       
                                    <th style="text-align: inherit;">
                                        <a  href="?act=xndp&page=datphong&status=2&id=<?php echo $book["id"] ?>"><input style="margin-bottom: 20px;"
                                            type="button" name="sua" value="Xác nhận đặt phòng"></a>
                                            <br>
                                    <a  href="?act=xndp&page=datphong&status=4&id=<?php echo $book["id"]?>"><input type="button" name="xoa"
                                            value="Hủy đặt phòng"></a>
                                    </th>

                                   
                                </tr>
                                <?php endforeach ?>



                            </table>

                        </div>
                     
                    </section>