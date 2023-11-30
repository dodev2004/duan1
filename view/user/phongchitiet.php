<main>
    <section class="my_hotel-task">
        <div class="wrapper">
            <a href="">Trang chủ</a>
            <i class="fa-solid fa-angle-right"></i>
            <a href="">Phòng</a>
            <i class="fa-solid fa-angle-right"></i>
            <a href="">Phòng chi tiết</a>
        </div>
    </section>

    <?php
    // var_dump($phongchitiet);
    // die();
    extract($phongchitiet);
    $hinh = $img_path . $avatar;
    ?>
    <div class="banner_room">
        <img id="slideshow" src="<?php echo $hinh ?>">
        <h2><?php echo $ten_Phong ?></h2>
    </div>

    <div class="room_content_main">
        <div class="room_content_main_left">
            <div class="tag_info_room">
                <div class="item_tag_info">
                    <img src="../public/image/people.webp" alt="">
                    <span> <?php echo $slNguoiLon ?> Người lớn</span>
                </div>
                <div class="item_tag_info">
                    <img src="../public/image/people.webp" alt="">
                    <span> <?php echo $slTreEm ?> Trẻ em</span>
                </div>
                <div class="item_tag_info">
                    <img src="../public/image/dientich.png" alt="">
                    <span> Phòng <?php echo $dientich ?>m<sup>2</sup></span>
                </div>
            </div>
            <div class="product-summary">
                <p><?php echo $mota_chung ?></p>
            </div>
            <div class="room_services_content">
                <div class="title_services">
                    Dịch vụ phòng
                </div>
                <div class="box_services">
                    <?php

                    ?>
                    <div class="item_services">
                        <img src="../public/image/tag_icon_4.svg" alt="">
                        <span>Cà Phê Buổi Sáng</span>
                    </div>
                    <div class="item_services">
                        <img src="../public/image/tag_icon_4.svg" alt="">
                        <span>Bồn Tắm Hoa Sen</span>
                    </div>
                    <div class="item_services">
                        <img src="../public/image/tag_icon_5.svg" alt="">
                        <span>Internet Không Dây</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="room_content_main_right">
            <div class="price_booking">
                <span><?php echo number_format($gia, 0, ',', ',')  ?>₫/đêm</span>
            </div>
            <form id="form-book" action="?act=billcomfirm" method="post">
                <input type="text" name="id_Phong" value="<?php echo $_GET["id"] ?>" hidden>
                <input type="text" name="price" value="500000" hidden>
                <div class="form_booking">
                    <div class="item_booking">
                        <label for="">Họ và tên</label>
                        <input type="text" name="book_name">
                    </div>
                    <div class="item_booking">
                        <label for="">Số điện thoại</label>
                        <input type="text" name="sdt">
                    </div>
                </div>
                <div class="form_booking">
                    <div class="item_booking">
                        <label for="">Ngày nhận</label>
                        <input type="date" name="check_in">
                        <p class="eror_messsage"></p>
                    </div>
                    <div class="item_booking">
                        <label for="">Ngày trả</label>
                        <input type="date" name="check_out">
                        <p class="eror_messsage"></p>
                    </div>
                </div>
                <div class="form_booking">
                    <div class="item_booking">
                        <label for="">Người lớn</label>
                        <input type="text" name="sl_NguoiLon" placeholder="2">
                    </div>
                    <div class="item_booking">
                        <label for="">Trẻ em</label>
                        <input type="text" name="sl_tre_em" placeholder="1">
                    </div>
                </div>
                <div class="notification">
                    <p>Trạng thái phòng : <span>Có thể đặt</span></p>
                    <p>Số ngày đặt : <span class="total_timer">6 ngày</span></p>
                    <p>Tổng số tiền phải trả : <span class="total_price"> 480000 vnd</span></p>
                    <input type="text" hidden name="total_price">
                </div>
                <div class="notification_eror">
                    <p>Xin lỗi quý khách thời gian đặt của quý khách đã tồn tại !</p>
                </div>
                <div class="form_booking">

                    <button type="submit" name="bill">Đặt phòng</button>
                </div>
            </form>
        </div>
    </div>
    <div class="product_tab">
        <div class="product_tab_title">
            <div class="product_tab_title_item">Mô tả</div>
            <div class="product_tab_title_item">Tiện nghi</div>
        </div>
        <div class="tab-float">
            <p><?php echo $mota_chinh ?></p>
        </div>
    </div>
    <div class="productRelate">
        <div class="productRelate_title">
            Phòng tương tự
        </div>
        <div class="productRelate_left">
            <section class="room">
                <div style="margin: 0;" class="wrapper">
                    <!-- <h2 class="room_title">Phòng</h2> -->
                    <!-- <span></span> -->
                    <div class="row">
                        <?php foreach ($phongcungloai as $value) {
                            extract($value);
                            $hinh = $img_path . $avatar;
                        ?>
                            <div class="col">
                                <article>
                                    <a href="?act=phongchitiet&id=<?php echo $id ?>"> <img class="room_img" src="<?php echo  $hinh ?>" alt=""></a>
                                    <a href="" class="room_name">
                                        <h2 class="room_name"><?php echo $ten_Phong ?></h2>
                                    </a>
                                    <span class="room_line"></span>
                                    <section class="room_service">
                                        <img src="/public/image/Không có tiêu đề.png" alt="">
                                        <img src="/public/image/tag_icon_4.svg" alt="">
                                        <img src="/public/image/tag_icon_5.svg" alt="">
                                    </section>
                                    <section class="room_information">
                                        <span class="room_guest">02 khách</span>
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
                            <!-- <div class="col">
                            <article>
                                <a href=""> <img class="room_img" src="../public/image/anh1.webp" alt=""></a>
                                <a href="" class="room_name">
                                    <h2 class="room_name">Phòng đơn tiêu chuẩn</h2>
                                </a>
                                <span class="room_line"></span>
                                <section class="room_service">
                                    <img src="../public/image/Không có tiêu đề.png" alt="">
                                    <img src="../public/image/tag_icon_4.svg" alt="">
                                    <img src="../public/image/tag_icon_5.svg" alt="">
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
                                <a href=""> <img class="room_img" src="../public/image/anh1.webp" alt=""></a>
                                <a href="" class="room_name">
                                    <h2 class="room_name">Phòng đơn tiêu chuẩn</h2>
                                </a>
                                <span class="room_line"></span>
                                <section class="room_service">
                                    <img src="../public/image/Không có tiêu đề.png" alt="">
                                    <img src="../public/image/tag_icon_4.svg" alt="">
                                    <img src="../public/image/tag_icon_5.svg" alt="">
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
                                <a href=""> <img class="room_img" src="../public/image/anh1.webp" alt=""></a>
                                <a href="" class="room_name">
                                    <h2 class="room_name">Phòng đơn tiêu chuẩn</h2>
                                </a>
                                <span class="room_line"></span>
                                <section class="room_service">
                                    <img src="../public/image/Không có tiêu đề.png" alt="">
                                    <img src="../public/image/tag_icon_4.svg" alt="">
                                    <img src="../public/image/tag_icon_5.svg" alt="">
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
                        <?php } ?>
                    </div>
                </div>

            </section>
        </div>
        <!-- <div class="productRelate_right"></div> -->
    </div>
</main>
<script>
    const form = document.querySelector('#form-book');
    if (form) {
        const price = form.querySelector("input[name='price']");
        const inputTotalPrice = form.querySelector("input[name='total_price']");
        const totalPrice = form.querySelector(".total_price");
        const total_price = form.querySelector(".total_price");
        const total_timer = form.querySelector(".total_timer");
        const inputCheckIn = form.querySelector("input[name=check_in]");
        const inputCheckOut = form.querySelector("input[name=check_out]");
        let checked = true;
        inputCheckIn.onblur = function(e) {
            const eror_message = inputCheckIn.parentElement.querySelector(".eror_messsage");
            const timer = new Date(inputCheckIn.value).getTime();
            if (checkCurrentTime(timer)) {
                eror_message.style.display = "block ";
                eror_message.innerHTML = "Ngày lớn hơn hoặc bằng ngày hiện tại"
            } else {
                eror_message.style.display = "none";
                eror_message.innerHTML = ""
            }


        }
        inputCheckOut.onblur = function() {
            const eror_message = inputCheckOut.parentElement.querySelector(".eror_messsage");
            const timer = new Date(inputCheckOut.value).getTime();
            if (checkCurrentTime(timer)) {
                eror_message.style.display = "block ";
                eror_message.innerHTML = "Ngày lớn hơn hoặc bằng ngày hiện tại"
            } else {
                eror_message.style.display = "none";
                eror_message.innerHTML = ""
                if (new Date(inputCheckIn.value).getTime() >= new Date(inputCheckOut.value).getTime()) {
                    eror_message.style.display = "block ";
                    eror_message.innerHTML = "Thơi gian checkin phải lớn hơn checkout"
                } else {

                    const timeCheckin = new Date(inputCheckIn.value).getTime();
                    const timeCheckout = new Date(inputCheckOut.value).getTime();
                    var times = <?php echo $books ?>;
                    const notification = form.querySelector(".notification")
                    const notification_eror = form.querySelector(".notification_eror")
                    for (var time of times) {
                        const checkIn = new Date(time["check_in"]).getTime();
                        const checkOut = new Date(time["check_out"]).getTime();

                        if (timeCheckin < checkIn && timeCheckout < checkIn || timeCheckin > checkOut && timeCheckout >
                            checkOut) {

                            notification.style.display = "block";
                            notification_eror.style.display = "none";
                            checked = true;
                        } else {
                            notification.style.display = "none";
                            notification_eror.style.display = "block";
                            console.log("Phòng đã thuê ")
                            checked = false;
                        }
                    }
                    if (checked) {
                        const VND = new Intl.NumberFormat('vi-VN', {
                            style: 'currency',
                            currency: 'VND',
                        });
                        let distance = timeCheckout - timeCheckin;
                        if (distance > 0) {
                            const days = Math.floor(distance / (1000 * 60 * 60 * 24));
                            const months = Math.floor(days / 30);
                            const years = Math.floor(months / 12);
                            total_timer.innerHTML = days;
                            total_price.innerHTML = VND.format(price.value * days);
                            inputTotalPrice.value = price.value * days;
                        }
                    }
                }
            }


        }
    }


    function checkCurrentTime(time) {
        let year = new Date().getFullYear();
        let month = new Date().getMonth() + 1;
        let day = new Date().getDate();
        const currentTime = new Date(`${year}-${month}-${day}`).getTime();
        return currentTime > time ? true : false;
    }
</script>