<section class="admin-column_right">
                        <h2 class="admin-column_right--title">Tiện nghi</h2>                        <span class="admin-column_right--linked"><b>Phòng</b> - Danh sách phòng</span>
                        <div class="table table-category">
                            <a href="?act=them&page=tiennghi"><input style="margin-bottom: 2rem;" type="button"
                                    name="them" value="Thêm tiện nghi"></a>
                            <table>
                                <tr>
                                    <th></th>
                                    <th>Ảnh</th>
                                    <th>Tên tiện nghi</th>
                                    <th>Hành Động</th>
                                </tr>
                                <?php foreach($sevices as $service):
                                    extract($service);
                                    ?>
                                <tr>
                                    <th><input data-page="tiennghi" type="checkbox" value="<?=$id?>" name="check_ml"></th>
                                    <th  class="id"><img src="../public/image/tiennghi/<?php echo $icon ?>" style="text-align:center; margin: 0 auto;" width="150" height="150" src="" alt=""></th>
                                    <th><?=$ten_dichVu?></th>
                                    <th>
                                        <a href="?act=sua&page=tiennghi&id=<?php echo $id?>"><input
                                                type="button" name="sua" value="Sửa"></a>
                                        <a class="remove" href=""><input type="button" name="xoa"
                                    value="Xóa"></a>
                                    </th>
                                </tr>
                                    <?php endforeach?>


                            </table>

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