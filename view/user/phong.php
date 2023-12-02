<main>
    <section class="my_hotel-task">
        <div class="wrapper">
            <a href="">Trang chủ</a>
            <i class="fa-solid fa-angle-right"></i>
            <a href="">Phòng</a>
        </div>
        <!-- <div class="name_title">
                <h1>Phòng</h1>
            </div> -->
    </section>

    <section class="room">
        <div class="wrapper">
            <!-- <h2 class="room_title">Phòng</h2> -->
            <span></span>
            <div class="row">
                <?php foreach ($dsphong as $value) {
                    extract($value);
                    $hinh = $img_path . $avatar;
                ?>
                <div class="col">
                    <article>
                        <a href="?act=phongchitiet&id=<?php echo $id ?>"> <img class="room_img"
                                src="<?php echo  $hinh ?>" alt=""></a>
                        <a href="" class="room_name">
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
                            <span class="room_guest">0<?php echo $slNguoiLon ?> khách</span>
                            <span class="room_area"><?php echo $dientich ?>m<sup>2</sup></span>
                        </section>
                        <section class="room_buy">
                            <span class="room_price"><?php echo number_format($gia, 0, ',', ',')  ?>₫/đêm</span>
                            <form class="room_buy-form" action="?act=phongchitiet&id=<?php echo $id ?>" method="post">
                                <input type="submit" name="buy" value="Đặt Phòng">
                            </form>
                        </section>

                    </article>
                </div>
                <?php } ?>
                <!-- <div class="col">
                    <article>
                        <a href=""> <img class="room_img" src="/public/image/anh1.webp" alt=""></a>
                        <a href="" class="room_name">
                            <h2 class="room_name">Phòng đơn tiêu chuẩn</h2>
                        </a>
                        <span class="room_line"></span>
                        <section class="room_service">
                            <img src="/public/image/Không có tiêu đề.png" alt="">
                            <img src="/public/image/tag_icon_4.svg" alt="">
                            <img src="/public/image/tag_icon_5.svg" alt="">
                        </section>
                        <section class="room_information">
                            <span class="room_guest">02 khách</span>
                            <span class="room_area">25m<sup>2</sup></span>
                        </section>
                        <section class="room_buy">
                            <span class="room_price">500.000₫/đêm</span>
                            <form class="room_buy-form" action="" method="post">
                                <input type="submit" name="buy" value="Đặt Phòng">
                            </form>
                        </section>

                    </article>
                </div>
                <div class="col">
                    <article>
                        <a href=""> <img class="room_img" src="/public/image/anh1.webp" alt=""></a>
                        <a href="" class="room_name">
                            <h2 class="room_name">Phòng đơn tiêu chuẩn</h2>
                        </a>
                        <span class="room_line"></span>
                        <section class="room_service">
                            <img src="/public/image/Không có tiêu đề.png" alt="">
                            <img src="/public/image/tag_icon_4.svg" alt="">
                            <img src="/public/image/tag_icon_5.svg" alt="">
                        </section>
                        <section class="room_information">
                            <span class="room_guest">02 khách</span>
                            <span class="room_area">25m<sup>2</sup></span>
                        </section>
                        <section class="room_buy">
                            <span class="room_price">500.000₫/đêm</span>
                            <form class="room_buy-form" action="" method="post">
                                <input type="submit" name="buy" value="Đặt Phòng">
                            </form>
                        </section>

                    </article>
                </div>
                <div class="col">
                    <article>
                        <a href=""> <img class="room_img" src="/public/image/anh1.webp" alt=""></a>
                        <a href="" class="room_name">
                            <h2 class="room_name">Phòng đơn tiêu chuẩn</h2>
                        </a>
                        <span class="room_line"></span>
                        <section class="room_service">
                            <img src="/public/image/Không có tiêu đề.png" alt="">
                            <img src="/public/image/tag_icon_4.svg" alt="">
                            <img src="/public/image/tag_icon_5.svg" alt="">
                        </section>
                        <section class="room_information">
                            <span class="room_guest">02 khách</span>
                            <span class="room_area">25m<sup>2</sup></span>
                        </section>
                        <section class="room_buy">
                            <span class="room_price">500.000₫/đêm</span>
                            <form class="room_buy-form" action="" method="post">
                                <input type="submit" name="buy" value="Đặt Phòng">
                            </form>
                        </section>

                    </article>
                </div> -->


            </div>
            <!-- <h2 class="room_title">Phòng đôi</h2> -->
            <!-- <span></span>
            <div class="row">
                <div class="col">
                    <article>
                        <a href=""> <img class="room_img" src="/public/image/anh1.webp" alt=""></a>
                        <a href="" class="room_name">
                            <h2 class="room_name">Phòng đơn tiêu chuẩn</h2>
                        </a>
                        <span class="room_line"></span>
                        <section class="room_service">
                            <img src="/public/image/Không có tiêu đề.png" alt="">
                            <img src="/public/image/tag_icon_4.svg" alt="">
                            <img src="/public/image/tag_icon_5.svg" alt="">
                        </section>
                        <section class="room_information">
                            <span class="room_guest">02 khách</span>
                            <span class="room_area">25m<sup>2</sup></span>
                        </section>
                        <section class="room_buy">
                            <span class="room_price">500.000₫/đêm</span>
                            <form class="room_buy-form" action="" method="post">
                                <input type="submit" name="buy" value="Đặt Phòng">
                            </form>
                        </section>

                    </article>
                </div>
                <div class="col">
                    <article>
                        <a href=""> <img class="room_img" src="/public/image/anh1.webp" alt=""></a>
                        <a href="" class="room_name">
                            <h2 class="room_name">Phòng đơn tiêu chuẩn</h2>
                        </a>
                        <span class="room_line"></span>
                        <section class="room_service">
                            <img src="/public/image/Không có tiêu đề.png" alt="">
                            <img src="/public/image/tag_icon_4.svg" alt="">
                            <img src="/public/image/tag_icon_5.svg" alt="">
                        </section>
                        <section class="room_information">
                            <span class="room_guest">02 khách</span>
                            <span class="room_area">25m<sup>2</sup></span>
                        </section>
                        <section class="room_buy">
                            <span class="room_price">500.000₫/đêm</span>
                            <form class="room_buy-form" action="" method="post">
                                <input type="submit" name="buy" value="Đặt Phòng">
                            </form>
                        </section>

                    </article>
                </div>
                <div class="col">
                    <article>
                        <a href=""> <img class="room_img" src="/public/image/anh1.webp" alt=""></a>
                        <a href="" class="room_name">
                            <h2 class="room_name">Phòng đơn tiêu chuẩn</h2>
                        </a>
                        <span class="room_line"></span>
                        <section class="room_service">
                            <img src="/public/image/Không có tiêu đề.png" alt="">
                            <img src="/public/image/tag_icon_4.svg" alt="">
                            <img src="/public/image/tag_icon_5.svg" alt="">
                        </section>
                        <section class="room_information">
                            <span class="room_guest">02 khách</span>
                            <span class="room_area">25m<sup>2</sup></span>
                        </section>
                        <section class="room_buy">
                            <span class="room_price">500.000₫/đêm</span>
                            <form class="room_buy-form" action="" method="post">
                                <input type="submit" name="buy" value="Đặt Phòng">
                            </form>
                        </section>

                    </article>
                </div>
                <div class="col">
                    <article>
                        <a href=""> <img class="room_img" src="/public/image/anh1.webp" alt=""></a>
                        <a href="" class="room_name">
                            <h2 class="room_name">Phòng đơn tiêu chuẩn</h2>
                        </a>
                        <span class="room_line"></span>
                        <section class="room_service">
                            <img src="/public/image/Không có tiêu đề.png" alt="">
                            <img src="/public/image/tag_icon_4.svg" alt="">
                            <img src="/public/image/tag_icon_5.svg" alt="">
                        </section>
                        <section class="room_information">
                            <span class="room_guest">02 khách</span>
                            <span class="room_area">25m<sup>2</sup></span>
                        </section>
                        <section class="room_buy">
                            <span class="room_price">500.000₫/đêm</span>
                            <form class="room_buy-form" action="" method="post">
                                <input type="submit" name="buy" value="Đặt Phòng">
                            </form>
                        </section>

                    </article>
                </div>


            </div> -->

        </div>

    </section>
</main>