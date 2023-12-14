<main>
    <div class="wrapper">
        <section class="banner">
            <img src="../public/image/banner/1920x350.png" alt="">
        </section>
        <section class="seach_room">
            <h4>Tìm phòng</h4>
            <form class="form_seach-room" action="?act=phong" method="POST">
                <div class="form_group">
                    <label for="">Ngày nhận phòng</label>
                    <input type="date" name="checkin" class="create_room">
                    <p class="message_eror"></p>
                </div>
                <div class="form_group">
                    <label for="">Ngày trả phòng</label>
                    <input type="date" name="checkout" class="end_room">
                    <p class="message_eror"></p>
                </div>
                <div class="form_group">
                    <label for="">Số lượng người lớn</label>
                    <select name="sl_Nguoi_Lon" id="">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                    </select>
                    <p class="message_eror"></p>
                </div>
                <div class="form_group">
                    <label for="">Số lượng trẻ em</label>
                    <select name="sl_tre_em" id="" <option value="1">1</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                    </select>
                    <p class="message_eror"></p>
                </div>
                <input type="submit" name="seach" value="Tìm kiếm">

            </form>
        </section>
        <section class="home_introduction">
            <section class="home_introduction-left">
                <img src="../public/image/banner/cong-viec-le-tan-ca-chieu.webp" alt="">
            </section>
            <section class="home_introduction-right">
                <h3>Viet Hotel</h3>

                <span>Giới thiệu về chúng tôi</span>

                <p>Là khách sạn 5 sao đẳng cấp quốc tế, tọa lạc tại giao điểm của bốn quận chính, nơi được xem như
                    trái tim và trung tâm của TP. Hồ Chí Minh. Với hệ thống phòng tiêu chuẩn và phòng hạng sang
                    thiết kế đẹp mắt và trang nhã được chú trọng tới từng chi tiết sẽ đem lại sự tiện nghi và thoải
                    mái tối đa cho quý khách dù là thời gian nghỉ ngơi thư giãn hay trong chuyến công tác...</p>

            </section>
        </section>
    </div>
    <section class="room">
        <div class="wrapper">
            <h2 class="room_title">Phòng đơn</h2>
            <span></span>
            <div class="row">
                <?php
                $count = 0;
                $dsphong = db_phong_select_by_id_user(27);
                foreach ($dsphong as $value) {
                    extract($value);
                    $hinh = $img_path . $avatar;
                ?>
                    <div class="col">
                        <article>
                            <a href="?act=phongchitiet&id=<?php echo $id ?>"> <img class="room_img" src="<?php echo  $hinh ?>" alt=""></a>
                            <a href="?act=phongchitiet&id=<?php echo $id ?>" class="room_name">
                                <h2 class="room_name"><?php echo $ten_Phong ?></h2>
                            </a>
                            <span class="room_line"></span>
                            <section class="room_service">
                                <?php
                                $id_dv = db_phong_select_id_dichvu($id);
                                foreach ($id_dv as $id) {
                                    $dichvu = load_dichvu($id["id_dichVu"]);
                                    $hinh = $img_path_icon . $dichvu[0]['icon'];
                                ?>
                                    <img src="<?php echo $hinh ?>" alt="">
                                <?php } ?>
                            </section>
                            <section class="room_information">
                                <span class="room_guest">02 khách</span>
                                <span class="room_area"><?php echo $dientich ?>m<sup>2</sup></span>
                            </section>
                            <section class="room_buy">
                                <span class="room_price"><?php echo number_format($gia, 0, ',', ',')  ?>₫/đêm</span>
                                <form action="?act=phongchitiet&id=<?php echo $value["id"] ?>" method="post" class="room_buy-form">
                                    <input type="submit" name="buy" value="Đặt Phòng">
                                </form>
                            </section>

                        </article>
                    </div>
                <?php
                    $count++;
                    if ($count == 4) {
                        break;
                    }
                } ?>
            </div>
            <h2 class="room_title">Phòng đôi</h2>
            <span></span>
            <div class="row">
                <?php
                $count = 0;
                $dsphong = db_phong_select_by_id_user(28);
                foreach ($dsphong as $value) {
                    extract($value);
                    $hinh = $img_path . $avatar;
                ?>
                    <div class="col">
                        <article>
                            <a href="?act=phongchitiet&id=<?php echo $id ?>"> <img class="room_img" src="<?php echo  $hinh ?>" alt=""></a>
                            <a href="?act=phongchitiet&id=<?php echo $id ?>" class="room_name">
                                <h2 class="room_name"><?php echo $ten_Phong ?></h2>
                            </a>
                            <span class="room_line"></span>
                            <section class="room_service">
                                <?php
                                $id_dv = db_phong_select_id_dichvu($id);
                                foreach ($id_dv as $id) {
                                    $dichvu = load_dichvu($id["id_dichVu"]);
                                    $hinh = $img_path_icon . $dichvu[0]['icon'];
                                ?>
                                    <img src="<?php echo $hinh ?>" alt="">
                                <?php } ?>
                            </section>
                            <section class="room_information">
                                <span class="room_guest">02 khách</span>
                                <span class="room_area"><?php echo $dientich ?>m<sup>2</sup></span>
                            </section>
                            <section class="room_buy">
                                <span class="room_price"><?php echo number_format($gia, 0, ',', ',')  ?>₫/đêm</span>
                                <form class="room_buy-form" action="?act=phongchitiet&id=<?php echo $value["id"] ?>" method="post">
                                    <input type="submit" name="buy" value="Đặt Phòng">
                                </form>
                            </section>

                        </article>
                    </div>
                <?php
                    $count++;
                    if ($count == 4) {
                        break;
                    }
                } ?>
            </div>

        </div>

    </section>
    <section class="room room_vip">
        <section class="wrapper">
            <h2 class="room_title">Phòng Vip</h2>
            <section class="room_content">
                <div class="row-vip">
                    <div class="col-5">
                        <?php
                        $count = 0;
                        $dsphong = db_phong_select_by_id_user(29);
                        foreach ($dsphong as $value) {
                            extract($value);
                            $hinh = $img_path . $avatar;
                        ?>
                            <article>
                                <div class="room_vip-img" style="background: url(<?php echo $hinh ?>"></div>
                                <a href="?act=phongchitiet&id=<?php echo $id ?>">
                                    <h2 class="room_vip-title"><?php echo $ten_Phong ?> </h2>
                                </a>
                                <section class="room_vip-service">
                                    <section class="room_vip-infomation">
                                        <span class="room_vip-guess">
                                            <img src="../public/image/tag-user.svg" alt="">
                                            <span class="room_guest">02 khách</span>
                                        </span>
                                        <span class="room_vip-area">
                                            <img src="../public/image/tag-meters.svg" alt="">
                                            <span class="room_area">25m<sup>2</sup></span>
                                        </span>
                                    </section>
                                    <section class="room_service">
                                        <?php
                                        $id_dv = db_phong_select_id_dichvu($id);
                                        foreach ($id_dv as $id) {
                                            $dichvu = load_dichvu($id["id_dichVu"]);
                                            $hinh = $img_path_icon . $dichvu[0]['icon'];
                                        ?>
                                            <img src="<?php echo $hinh ?>" alt="">
                                        <?php } ?>
                                    </section>
                                </section>
                                <div class="room_vip-description">
                                    <p><?php echo $mota_chung ?> </p>
                                </div>
                                <form class="room_buy-form" action="?act=phongchitiet&id=<?php echo $value["id"] ?>" method="post">
                                    <input type="submit" name="buy" value="Đặt Phòng">
                                </form>
                            </article>
                        <?php
                            $count++;
                            if ($count == 1) {
                                break;
                            }
                        } ?>
                    </div>
                    <div class="col-5">
                        <section class="room_vip-left">
                            <div class="row">
                                <?php
                                $count = 0;
                                $dsphong = db_phong_select_by_id_user(29);
                                foreach ($dsphong as $value) {
                                    extract($value);
                                    $hinh = $img_path . $avatar;
                                ?>
                                    <div class="col">
                                        <article>
                                            <a href="?act=phongchitiet&id=<?php echo $id ?>">
                                                <img src="<?php echo $hinh ?>" alt="">
                                            </a>
                                            <section class="room_vip-infomation">
                                                <a href="?act=phongchitiet&id=<?php echo $id ?>" class="room_vip-name">
                                                    <?php echo $ten_Phong ?>
                                                </a>
                                                <a href="" class="room_vip-price">
                                                    <?php echo number_format($gia, 0, ',', ',')  ?>₫/đêm</a>

                                            </section>
                                        </article>
                                    </div>
                                <?php
                                    $count++;
                                    if ($count == 4) {
                                        break;
                                    }
                                } ?>
                            </div>
                    </div>
            </section>
            </div>

            </div>
        </section>
    </section>
    </section>
    <section class="room_news">
        <section class="wrapper">
            <h2 class="room_news-title">Tin tức </h2>
            <section class="room_news-content">
                <div class="row">
                    <?php foreach($baiviet as $value): ?>
                    <div class="col">
                        <article>
                            <a class="news_avatar" href="?act=baiviet&id=<?php echo $value["id_baiViet"] ?>"><img src="../public/image/avatar/<?php echo $value["avatar"] ?>" alt=""></a>
                            <section class="news_content">
                                <a href="?act=baiviet&id=<?php echo $value["id_baiViet"] ?>" class="news_content-title">
                                    <h3><?php echo $value["tieude_baiviet"] ?></h3>
                                </a>
                                <span class="news_content-description">
                                   <?php echo $value["meta_description"] ?>
                                </span>
                                <section class="news_content-origin">
                                    <span class="news_content-author">By Bean hotel</span>
                                    <span class="news_cotent-creatednews"><?php echo $value["created_time"] ?></span>
                                </section>
                                <a href="?act=baiviet&id=<?php echo $value["id_baiViet"] ?>"><button class="new_content-readmore">Đọc thêm</button></a>
                            </section>
                        </article>
                    </div>
                    <?php endforeach ?>
                    <!-- <div class="col">
                        <article>
                            <a class="news_avatar" href=""><img src="../public/image/10-xu-huong-thinh-hanh-trong-nganh-khach-san-2021.webp" alt=""></a>
                            <section class="news_content">
                                <a href="" class="news_content-title">
                                    <h3>10 xu hướng thịnh hành trong nghành khách sạn 2022</h3>
                                </a>
                                <span class="news_content-description">
                                    Không gian ngoài trời mở rộng hơn, nâng cấp công nghệ để hạn chế tối đa tiếp xúc
                                    là những xu hướng mới nhiều khách...
                                </span>
                                <section class="news_content-origin">
                                    <span class="news_content-author">By Bean hotel</span>
                                    <span class="news_cotent-creatednews">6/12/2022</span>
                                </section>
                                <a href=""><button class="new_content-readmore">Đọc thêm</button></a>
                            </section>
                        </article>
                    </div>
                    <div class="col">
                        <article>
                            <a class="news_avatar" href=""><img src="../public/image/10-xu-huong-thinh-hanh-trong-nganh-khach-san-2021.webp" alt=""></a>
                            <section class="news_content">
                                <a href="" class="news_content-title">
                                    <h3>10 xu hướng thịnh hành trong nghành khách sạn 2022</h3>
                                </a>
                                <span class="news_content-description">
                                    Không gian ngoài trời mở rộng hơn, nâng cấp công nghệ để hạn chế tối đa tiếp xúc
                                    là những xu hướng mới nhiều khách...
                                </span>
                                <section class="news_content-origin">
                                    <span class="news_content-author">By Bean hotel</span>
                                    <span class="news_cotent-creatednews">6/12/2022</span>
                                </section>
                                <a href=""><button class="new_content-readmore">Đọc thêm</button></a>
                            </section>
                        </article>
                    </div> -->
                </div>
            </section>
        </section>
    </section>
</main>