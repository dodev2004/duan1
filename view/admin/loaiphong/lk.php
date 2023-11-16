<section class="admin-column_right">
                        <h2 class="admin-column_right--title">Loại Phòng</h2>
                        <span class="admin-column_right--linked"><b>Loại Phòng</b> - Danh Sách Loại Phòng</span>
                        <div class="table table-category">
                            <a href="?act=them&page=loaiphong"><input style="margin-bottom: 2rem;" type="button"
                                    name="them" value="Thêm loại phòng"></a>
                            <table>
                                <tr>
                                    <th></th>
                                    <th>Mã Loại</th>
                                    <th>Tên Loại</th>
                                    <th>Hành Động</th>
                                </tr>
                                <?php
                                    foreach($rts as $rt) :

                                ?>
                                <tr>
                                    <th><input type="checkbox" name="check_ml" value="<?=$rt["id_LoaiPhong"]?>"></th>
                                    <th class="id"><?=$rt["id_LoaiPhong"]?></th>
                                    <th><?=$rt["ten_LoaiPhong"]?></th>
                                    <th>
                                        <a href="?page=loaiphong&act=edit&id=<?php echo $rt["id_LoaiPhong"]?>"><input type="button" name="sua" value="Sửa"/></a>
                                        <a class="remove" href=""><input type="button" name="xoa"
                                                value="Xóa"></a>
                                    </th>
                                </tr>
                                 <?php endforeach ?>


                            </table>

                        </div>
                        <input style="margin-bottom: 2rem;" type="button" class="check_all" name="them"
                            value="Tích toàn bộ">
                        <input style="margin-bottom: 2rem;" type="button" name="them" class="checked_remove"
                            value="Bỏ toàn bộ đã tích">
                        <a class="removeAll" href=""><input style="margin-bottom: 2rem;"
                                type="button" name="them" value="Xóa toàn bộ đã tích"></a>
                        <script>
                        </script>
                    </section>