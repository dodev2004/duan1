<section class="admin-column_right">
                        <h2 class="admin-column_right--title">Phòng</h2>
                        <span class="admin-column_right--linked"><b>Phòng</b> - Danh sách phòng</span>
                        <div class="table table-category">
                        <section class="tk_sp">Có <span><?php echo $count ?></span> bình luận trong trang số <?php echo $_GET["currentPage"] ?></section>
                            <table>
                                <tr>
                                    <th></th>
                                    <th>Tài khoản
                                        <input type="text" name="iduser" value="" hidden>
                                    </th>
                                    <th>
                                        Tên phòng
                                        
                                    </th>
                                    <th>Nội dung</th>  
                                    <th>Đánh giá</th>        
                                    <th>Hành Động</th>
                                </tr>
                                <?php foreach($bls as $bl): 
                                    $username = nguoidung_select_by_id($bl["iduser"]);
                                    $room = db_phong_select_by_id($bl["idphong"])?>
                                <tr>
                                    <th><input type="checkbox" data-page="bl" value="<?=$bl["id"]?>" name="check_ml"></th>
                                    <th><?php echo $username["user_name"] ?></th>
                                    <th class="id"><?php echo $room["ten_Phong"] ?></th>
                                    <th class="id"><?php echo $bl["content"] ?></th>
                                    <th class="id">
                                        
                                    <?php for($i = 1 ; $i<=$bl["rate"]; $i++){
                                        echo '  <i class="fa-solid fa-star" style="color: yellow;"></i>';
                                    } ?>                         
                                    </th>
                                    
                                    <th>
                                        <a class="remove" href="?act=delete&page=bl&id=<?php echo $bl["id"] ?>"><input type="button" name="xoa"
                                                value="Xóa"></a>
                                    </th>
                                    
                                </tr>
                                    <?php endforeach ?>


                            </table>
                            <section class="pagin">
                             <?php  get_paging_book($pagin  ,'bl','lk')?>
                            </section>
                        </div>
                        <input style="margin-bottom: 2rem;" type="button" class="check_all" name="them"
                            value="Tích toàn bộ">
                        <input style="margin-bottom: 2rem;" type="button" name="them" class="checked_remove"
                            value="Bỏ toàn bộ đã tích">
                        <a class="removeAll" href="./index.php?act=rmall"><input style="margin-bottom: 2rem;"
                                type="button" name="them" value="Xóa toàn bộ đã tích"></a>
                        <script>
                          


                        </script>
                    </section>