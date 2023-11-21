<section class="admin-column_right">
    <h2 class="admin-column_right--title">Thành viên</h2>
    <span class="admin-column_right--linked"><b>Thành viên</b> - Danh sách thành viên</span>
    <div class="table table-category">
        <a href="?act=them&page=thanhvien"><input style="margin-bottom: 2rem;" type="button" name="them" value="Thêm thành viên"></a>
        <form style="margin: 0;" class="form_1" action="?act=lk&page=thanhvien&currentPage=1" method="post">
            <section style="padding-right:8px;" class="form_group">
                <input type="text" name="seach_username" placeholder="Tìm kiếm tên người dùng" value="<?php echo !empty($_POST["seach_username"]) ? $_POST["seach_username"] : "" ?>">
            </section>
            
            <input style="display: inline; border-radius:4px; margin-left:5px" type="submit" value="seach" name="seach">
            <section class="tk_sp">Có <span><?php echo $count ?></span> sản phẩm trong trang số <?php echo $_GET["currentPage"] ?></section>
        </form>
        <table>
            <tr>
                <th></th>
                <th>Tên đăng nhập</th>
                <th>Họ tên</th>
            
                <th>Ngày tạo</th>
                <th>Ngày cập nhật</th>
                <th>Phân quyền</th>
                <th>Hành Động</th>
            </tr>
            <?php foreach ($users as $user) :
                extract($user);
            ?>
                <tr>
                    <th><input data-page="thanhvien" type="checkbox" value="<?= $id ?>" name="check_ml"></th>
                    <th class="id"><?= $user_name ?></th>
                    <th class="id"><?= $name?></th>
                    <th><?=$ngaytao?></th>
                    <th><?=$ngaysua?></th>
                    
                   
                    <th> <a href="?act=edit&page=thanhvien&id=<?php echo $id ?>"><input type="button" name="sua" value="Phân quyền"></a></th>
                    <th>
                    <a href="?page=thanhvien&act=edit&id=<?php echo $id?>"><input type="button" name="sua" value="Sửa"/></a>
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