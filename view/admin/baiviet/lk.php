<section class="admin-column_right">
    <h2 class="admin-column_right--title">Bài viết</h2>
    <span class="admin-column_right--linked"><b>Bài viết</b> - Danh sách bài viết</span>
    <div class="table table-category">
        <a href="?act=them&page=baiviet"><input style="margin-bottom: 2rem;" type="button" name="them" value="Thêm bài viết "></a>
        <table>
            <tr>
                <th></th>
                <th>Tiêu đề</th>
                <th>Avatar</th>
                <th>Thông tin người đăng</th>
                <th>Ngày đăng</th>
                <th>Ngày cập nhật</th>
                <th>Hành Động</th>
            </tr>
            <?php foreach($baiviet as $value):
                $user = nguoidung_select_by_id($value["id_user"]);
                extract($value);
                ?>
                <tr>
                    <th><input data-page="baiviet" type="checkbox" value="<?= $id_baiViet ?>" name="check_ml"></th>
                    <th class="id"><?=$tieude_baiviet?></th>
                    <th style="display: flex;justify-content: center;"><img width="100" height="100" src="../public/image/avatar/<?php echo  $avatar ?>" alt=""></th>
                    <th class="id"><?=$user["name"]?></th>
                    <th><?php echo $created_time ?></th>
                    <th><?php echo $last_update ?></th>
                    <th>
                     <a href="?act=edit&page=baiviet&id=<?php echo $id_baiViet ?>"><input type="button" name="sua" value="Sửa" /></a>
                    <a class="remove" href="?act=delete&page=baiviet&id=<?php echo $id_baiViet ?>"><input type="button" name="xoa" value="Xóa"></a>
                    </th>
                </tr>
                <?php endforeach ?>
        </table>
        <section class="pagin">
            <?php get_paging($paggin) ?>
        </section>
    </div>
        <input style="margin-bottom: 2rem;" type="button" class="check_all" name="them" value="Tích toàn bộ">
        <input style="margin-bottom: 2rem;" type="button" name="them" class="checked_remove" value="Bỏ toàn bộ đã tích">
        <a class="removeAll" href="./index.php?act=rmall"><input style="margin-bottom: 2rem;" type="button" name="them" value="Xóa toàn bộ đã tích"></a>
    <script>



    </script>
</section>