<main class="backgr">
    <section class="my_hotel-task">
        <div class="wrapper">
            <a href="">Trang chủ</a>
            <i class="fa-solid fa-angle-right"></i>
            <a href="">Phòng Đặt</a>
        </div>
    </section>
    <div class="manage__room">
        <div class="room_row">
            <?php foreach ($books as $book) :
                $room = db_phong_select_by_id($book["id_Phong"]);
            ?>
                <div class="room__item">
                    <h3><?php echo $room["ten_Phong"] ?></h3>
                    <p><?php echo number_format($room["gia"], 0, ".", ".") ?> VNĐ</p>
                    <p><b>Ngày Vào: </b> <?php echo $book["check_in"] ?></p>
                    <p><b>Ngày Trả: </b> <?php echo $book["check_out"] ?></p>
                    <p><b>Tổng: </b><?php echo number_format($book["price"], 0, ".", ".") ?> VND</p>
                    <p><b>ID Đơn: </b>BND-<?php echo $book["id"] ?></p>
                    <p><b>Ngày Đặt: </b> <?php echo $book["created_time"] ?></p>
                    <?php
                    $status = $book["status"];
                    if ($status == 1) {

                    ?>
                        <button disabled class="btn_order-success">Đã Đặt</button>
                        <a href="?act=quanlyphongdat&status=4&id=<?php echo $book["id"] ?>"> <button class="btn_cancel">Hủy Đặt Phòng</button></a>
                    <?php } else if ($status == 2) {
                        echo '<button class="btn_order">Đã Xác nhận đặt phòng</button>';
                    } else if ($status == 3) {
                        echo '<button class="btn_pay">Đã Thanh Toán</button>';
                    } 
                    else if($status == 6){
                        echo '<button class="btn_pay">Đã nhận phòng</button>';
                        echo '<button class="btn_pay">Chờ thanh toán</button>';
                    }else if ($status == 5) {
                        echo '<button class="btn_pay">Đã Trả  Phòng</button>';
                        if ($book["ttBl"] == 0) {
                            echo '<button class="btn_ratings" data-id= ' . $book["id_Phong"] . ' data-bookid=' . $book["id"] . '>Đánh giá</button>';
                        }
                    } else {
                        echo ' <button  class="btn_cancel-confirm"> Đã Hủy</button>';
                    } ?>
                </div>
            <?php endforeach ?>
            <!-- <div class="room__item">
                <h3>Phòng Bình Dân</h3>
                <p>800.000 vnđ</p>
                <p><b>Ngày Vào:</b> 19-05-2022</p>
                <p><b>Ngày Trả:</b> 20-05-2022</p>
                <p><b>Tổng:</b> 4000000 vnđ</p>
                <p><b>ID Đơn:</b> ORD_09877</p>
                <p><b>Ngày Đặt:</b> 19-05-2022</p>
                <button class="btn_cancel-confirm"> Đã Hủy</button>
            </div>
            <div class="room__item">
                <h3>Phòng Bình Dân</h3>
                <p>800.000 vnđ</p>
                <p><b>Ngày Vào:</b> 19-05-2022</p>
                <p><b>Ngày Trả:</b> 20-05-2022</p>
                <p><b>Tổng:</b> 4000000 vnđ</p>
                <p><b>ID Đơn:</b> ORD_09877</p>
                <p><b>Ngày Đặt:</b> 19-05-2022</p>
               <button class="btn_pay">Đã Thanh Toán</button>
                <a href="#"> <button class="btn_ratings">Đánh giá</button></a>
            </div>
  
            <div class="room__item">
                <h3>Phòng Bình Dân</h3>
                <p>800.000 vnđ</p>
                <p><b>Ngày Vào:</b> 19-05-2022</p>
                <p><b>Ngày Trả:</b> 20-05-2022</p>
                <p><b>Tổng:</b> 4000000 vnđ</p>
                <p><b>ID Đơn:</b> ORD_09877</p>
                <p><b>Ngày Đặt:</b> 19-05-2022</p>
                <a href="#"><button class="btn_pay">Đã Thanh Toán</button></a>
                <a href="#"> <button class="btn_ratings">Đánh giá</button></a>
            </div>
            <div class="room__item">
                <h3>Phòng Bình Dân</h3>
                <p>800.000 vnđ</p>
                <p><b>Ngày Vào:</b> 19-05-2022</p>
                <p><b>Ngày Trả:</b> 20-05-2022</p>
                <p><b>Tổng:</b> 4000000 vnđ</p>
                <p><b>ID Đơn:</b> ORD_09877</p>
                <p><b>Ngày Đặt:</b> 19-05-2022</p>
                <a href="#"> <button class="btn_order">Đã Xác nhận đặt phòng</button></a>
            </div> -->
        </div>
    </div>
    <div class="rate">
        <div class="rate_content">
            <form action="?act=quanlyphongdat" method="post">
                <div class="rate_title">
                    <h1>Đánh Giá</h1>
                    <i class="fa-solid fa-xmark"></i>
                </div>

                <input type="text" name="id_Phong" hidden>
                <input type="text" name="id_book" hidden>

                <div class="form-group">
                    <label for="exampleFormControlSelect1">Cảm nhận của bạn sau khi trải nhiệm</label>
                    <select name="rate_star" class="form-control" id="exampleFormControlSelect1">
                        <option checked></option>
                        <option value="5">Rất tốt</option>
                        <option value="4">Tôt</option>
                        <option value="3">Khá</option>
                        <option value="2">Tệ</option>
                        <option value="1">Rất tệ</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Để lại ý kiến</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" name="rate_content" rows="3"></textarea>
                </div>
                <button type="submit" name="rate" class="btn btn-primary">Gửi</button>
            </form>
        </div>
    </div>
</main>