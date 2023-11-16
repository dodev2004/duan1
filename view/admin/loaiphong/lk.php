<section class="admin-column_right">
                        <h2 class="admin-column_right--title">Danh Mục</h2>
                        <span class="admin-column_right--linked"><b>Danh Mục</b> - Danh sách loại dang mục</span>
                        <div class="table table-category">
                            <a href="./index.php?act=themdm"><input style="margin-bottom: 2rem;" type="button"
                                    name="them" value="Thêm danh mục sản phẩm"></a>
                            <table>
                                <tr>
                                    <th></th>
                                    <th>Mã Loại</th>
                                    <th>Tên Loại</th>
                                    <th>Hành Động</th>
                                </tr>
                                <tr>
                                    <th><input type="checkbox" name="check_ml"></th>
                                    <th class="id">1</th>
                                    <th>Phòng Vip</th>
                                    <th>
                                        <a href="./index.php?act=suadm&id=<?php echo $list[" id_danhmuc"]?><input
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