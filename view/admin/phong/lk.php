<section class="admin-column_right">
                        <h2 class="admin-column_right--title">Phòng</h2>
                        <span class="admin-column_right--linked"><b>Phòng</b> - Danh sách phòng</span>
                        <div class="table table-category">
                            <a href="?act=them&page=phong"><input style="margin-bottom: 2rem;" type="button"
                                    name="them" value="Thêm Phòng"></a>
                            <table>
                                <tr>
                                    <th></th>
                                    <th>Tên Phòng</th>
                                    <th>Diện Tích</th>  
                                    <th>Khách Hàng</th>
                                    <th>Giá</th>
                                    <th>Số Lượng</th>
                                    <th>Trạng Thái</th>
                                    <th>Hành Động</th>
                                </tr>
                                <tr>
                                    <th><input type="checkbox" name="check_ml"></th>
                                    <th class="id">Phòng Bình Dân</th>
                                    <th class="id">30 m<sup>2</sup></th>
                                    <th class="id">Khách Hàng</th>
                                    <th>8.000.000 đ</th>
                                    <th>4</th>
                                    <th> <a href="./index.php?act=suadm&id=<?php echo $list[" id_danhmuc"]?>"><input
                                                type="button" name="sua" value="Sửa"></a></th>
                                    <th>
                                        <a href="./index.php?act=suadm&id=<?php echo $list[" id_danhmuc"]?>"><input
                                                type="button" name="sua" value="Sửa"></a>
                                        <a class="remove" href="./index.php?act=lkdm"><input type="button" name="xoa"
                                                value="Xóa"></a>
                                    </th>
                                </tr>



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