<section class="admin-column_right">
    <h2 class="admin-column_right--title">Thành viên</h2>
    <span class="admin-column_right--linked"><b>Thành viên</b> - Danh sách thành viên</span>
    <div class="table table-category">
        <?php if (checkPrivileges("act=them&page=thanhvien")) { ?>
            <a href="?act=them&page=thanhvien"><input style="margin-bottom: 2rem;" type="button" name="them" value="Thêm thành viên"></a>
        <?php } ?>
        <form style="margin: 0;" class="form_1" action="?act=lk&page=thanhvien&currentPage=1" method="post">
            <section style="padding-right:8px;" class="form_group">
                <input type="text" name="seach_username" placeholder="Tìm kiếm tên người dùng" value="<?php echo !empty($_POST["seach_username"]) ? $_POST["seach_username"] : "" ?>">
            </section>

            <input style="display: inline; border-radius:4px; margin-left:5px" type="submit" value="seach" name="seach">
            <section class="tk_sp">Có <span><?php echo $count ?></span> sản phẩm trong trang số <?php echo $_GET["currentPage"] ?></section>
        </form>
        <table>
            <tr>
                <?php if (checkPrivileges("page=thanhvien&act=delete&id=0")) {
                    echo "<th></th>";
                } else {
                    echo "<th>STT</th>";
                } ?>
                <th>Tên đăng nhập</th>
                <th>Họ tên</th>

                <th>Ngày tạo</th>
                <th>Ngày cập nhật</th>
                <?php if (checkPrivileges("act=privilege&page=thanhvien&id=0")) { ?>
                    <th>Phân quyền</th>
                <?php } ?>
                <?php if (checkPrivileges("page=thanhvien&act=delete&id=0") || checkPrivileges("page=thanhvien&act=edit&id=0")) { ?>
                    <th>Hành Động</th>
                <?php } ?>
            </tr>
            <?php foreach ($users as $index => $user) :
                extract($user);
            ?>
                <tr>
                    <th>
                        <?php if (checkPrivileges("page=thanhvien&act=delete&id=0")) {
                            echo '<input data-page="thanhvien" type="checkbox" value="<?= $id ?>" name="check_ml"></th>';
                        } else {
                            echo "$index";
                        } ?>
                    </th>

                    <th class="id"><?= $user_name ?></th>
                    <th class="id"><?= $name ?></th>
                    <th><?= $ngaytao ?></th>
                    <th><?= $ngaysua ?></th>

                    <?php if (checkPrivileges("act=privilege&page=thanhvien&id=" . $id)) {
                        if ($role == 1) { ?>
                            <th> <a href="?act=privilege&page=thanhvien&id=<?php echo $id ?>"><input type="button" name="sua" value="Phân quyền"></a></th>
                        <?php } else { ?>
                            <th> <input type="button" hidden disabled name="sua" value="Phân quyền"></th>
                    <?php }
                    } ?>
                    <?php if (checkPrivileges("page=thanhvien&act=delete&id=1") || checkPrivileges("page=thanhvien&act=edit&id=0")) { ?>
                        <th>
                            <?php if (checkPrivileges("page=thanhvien&act=edit&id=" . $id)) { ?>
                                <a href="?page=thanhvien&act=edit&id=<?php echo $id ?>"><input type="button" name="sua" value="Sửa" /></a>
                            <?php } ?>
                            <?php if (checkPrivileges("page=thanhvien&act=delete&id=" . $id)) { ?>
                                <a class="remove" href="?page=thanhvien&act=delete&id=<?php echo $id ?>"><input type="button" name="xoa" value="Xóa"></a>
                            <?php } ?>
                        </th>
                    <?php } ?>
                </tr>

            <?php endforeach ?>

        </table>
        <section class="pagin">
            <?php get_paging_book($paggin, "thanhvien", 'lk') ?>
        </section>
    </div>
    <?php if (checkPrivileges("page=thanhvien&act=delete&id=0")) { ?>
        <input style="margin-bottom: 2rem;" type="button" class="check_all" name="them" value="Tích toàn bộ">
        <input style="margin-bottom: 2rem;" type="button" name="them" class="checked_remove" value="Bỏ toàn bộ đã tích">
        <a class="removeAll" href="./index.php?act=rmall"><input style="margin-bottom: 2rem;" type="button" name="them" value="Xóa toàn bộ đã tích"></a>
    <?php } ?>
    <script>



    </script>
</section>