<section class="admin-column_right">
    <h2 class="admin-column_right--title">Danh Mục</h2>
    <span class="admin-column_right--linked"><b>Danh Mục</b> - Danh sách loại dang mục</span>
    <div class="table table-category">

        <table>
            <tr>
                <th>STT</th>
                <th>Thông tin khách hàng</th>
                <th>Phòng</th>
                <th>Thông tin phòng</th>
                <th>Hành động</th>
            </tr>
            <?php foreach ($books as $index => $book) : ?>
                <tr>
                    <th><?= $index + 1 ?></th>
                    <th>

                        <p class="id_room"><strong>ID Đặt phòng</strong>: BND-<?php echo $book["id"] ?></p>
                        <p class=""><strong>Họ và tên :</strong> <span><?= $book["book_name"] ?></span></p>
                        <p><strong>Số điện thoại</strong> : <?php echo $book["sdt"] ?></p>
                    </th>
                    <th>
                        <?php $room = db_phong_select_by_id($book["id_Phong"]) ?>
                        <p class="id_room"><strong>Tên phòng </strong>: <span><?php echo $room["ten_Phong"]  ?></span></p>
                        <p class=""><strong>Gía</strong> :
                            <span><?php echo number_format($room["gia"], 0, ",", ",") ?>VND</span>
                        </p>
                        <p><strong>Tổng</strong> : <span><?= number_format($book["price"], 0, ',', ',') ?>VND</span></p>
                    </th>
                    <th>
                        <?php
                        $check_in = strtotime($book["check_in"]);
                        $checkout = strtotime($book["check_out"]);
                        $distance = $checkout - $check_in;
                        if ($distance > 0) {
                            $days = floor($distance / (60 * 60 * 24));
                            $months = floor($days / 30);
                        }
                        $now  = time();
                        $countTime = $checkout - time();
                        if ($countTime > 0) {
                            $ngayconlai = floor($distance / (60 * 60 * 24));
                            $thangconlai = floor($days / 30);
                        }

                        ?>
                        <p class="id_room"><strong>Ngày vào </strong>: <span><?php echo $book["check_in"] ?></span></p>
                        <p class=""><strong>Ngày trả :</strong><span><?php echo $book["check_out"] ?></span></p>
                        <p><strong>Thời gian :</strong> <span><?php
                                                                if ($days > 0 && $months == 0) {
                                                                    echo $days . " ngày";
                                                                } else if ($day > 0 && $months > 0) {
                                                                    echo $months . " tháng" . $days . " ngày";
                                                                } else {
                                                                    "Không hợp lệ";
                                                                }

                                                                ?></span></p>
                        <?php if($book["ptt"] == 0) {?>
                        <p><strong>Thời gian còn lại : </strong><?php
                                                                if ($days > 0 && $months == 0) {
                                                                    echo $days . " ngày";
                                                                } else if ($day > 0 && $months > 0) {
                                                                    echo $months . " tháng" . $days . " ngày";
                                                                } else {
                                                                    "Hết hạn";
                                                                }
                                                                ?></p>
                        <?php }
                        else {
                            echo "Đã thanh toán online";
                        }?>
                    </th>
                    <th style="text-align: inherit;">
                        <a href="?act=xntt&page=datphong&status=3&id=<?php echo $book["id"] ?>"><input style="margin-bottom: 20px;" type="button" name="sua" value="Xác nhận thanh toán"></a>
                        <br>
                    </th>
                </tr>
            <?php endforeach ?>

            <section class="pagin pagin_book">
                <section class="tk_sp">Có <span><?php echo $count ?></span> sản phẩm trong trang số
                    <?php echo $_GET["currentPage"] ?></section>
                <section style="display:flex;column-gap:6px">
                    <?php get_paging_book($pagin, "datphong", 'xntt') ?>
                </section>
            </section>
        </table>

    </div>

</section>