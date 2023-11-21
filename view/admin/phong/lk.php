<section class="admin-column_right">
    <h2 class="admin-column_right--title">Phòng</h2>
    <span class="admin-column_right--linked"><b>Phòng</b> - Danh sách phòng</span>
    <div class="table table-category">
        <a href="?act=them&page=phong"><input style="margin-bottom: 2rem;" type="button" name="them" value="Thêm Phòng"></a>
        <form style="margin: 0;" class="form_1" action="?act=lk&page=phong&currentPage=1" method="post">
            <section style="padding-right:8px;" class="form_group">
                <input type="text" name="seach_Tenphong" placeholder="Tìm kiếm sản phẩm" value="<?php echo !empty($_POST["seach_phong"]) ? $_POST["seach_phong"] : "" ?>">
            </section>
            <select name="seach_idLoaiPhong" id="">
                <option value="">Tất cả</option>
                <?php
                foreach ($lps as $lp) :
                ?>
                    <option <?php
                            $ten_danhmuc = !empty($_POST["seach_idLoaiPhong"]) ? $_POST["seach_idLoaiPhong"] : null;
                            if ($ten_danhmuc) {
                                if ($ten_danhmuc == $lp["id_LoaiPhong"]) {
                                    echo "selected";
                                }
                            }
                            ?> value="<?php echo $lp["id_LoaiPhong"] ?>"><?php echo $lp["ten_LoaiPhong"] ?></option>
                <?php endforeach ?>
                <input style="display: inline; border-radius:4px; margin-left:5px" type="submit" value="seach" name="seach">
            </select>
            <section class="tk_sp">Có <span><?php echo $count ?></span> sản phẩm trong trang số <?php echo $_GET["currentPage"] ?></section>
        </form>
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
            <?php foreach ($rooms as $room) :
                extract($room);
            ?>
                <tr>
                    <th><input data-page="phong" type="checkbox" value="<?= $id ?>" name="check_ml"></th>
                    <th class="id"><?= $ten_Phong ?></th>
                    <th class="id"><?= $dientich ?>m<sup>2</sup></th>
                    <th>
                        <section>
                            Số lượng người lớn : <strong><?= $slNguoiLon ?></strong>
                            <br>
                            Số lượng trẻ em : <strong><?= $slTreEm ?></strong>
                        </section>
                    </th>
                    <th>8.000.000 đ</th>
                    <th><?=$sl_Phong?></th>
                   
                    <th> <a href="?act=edit&page=phong&id=<?php echo $id ?>"><input type="button" name="sua" value="Phân quyền"></a></th>
                    <th>
                    <a href="?page=phong&act=edit&id=<?php echo $id?>"><input type="button" name="sua" value="Sửa"/></a>
                                        <a class="remove" href=""><input type="button" name="xoa"
                                                value="Xóa"></a>
                    </th>
                </tr>

            <?php endforeach ?>

        </table>
        <section class="pagin">
        <?php  get_paging($paggin)?>
        </section>
    </div>
    <input style="margin-bottom: 2rem;" type="button" class="check_all" name="them" value="Tích toàn bộ">
    <input style="margin-bottom: 2rem;" type="button" name="them" class="checked_remove" value="Bỏ toàn bộ đã tích">
    <a class="removeAll" href="./index.php?act=rmall"><input style="margin-bottom: 2rem;" type="button" name="them" value="Xóa toàn bộ đã tích"></a>
    <script>



    </script>
</section>