<div class="xndatphong">
    <h2>Xác nhận đặt phòng</h2>
    <form action="?act=billcomfirm" method="POST">
        <input type="hidden" name="id_Phong" value="<?php echo $id_Phong ?>">
        <div class="form-floating mb-3">
            <label for="floatingInputGroup1">Họ và tên</label>
            <input type="text" class="form-control" id="floatingInputGroup1" placeholder="Họ và tên" value="<?php echo  $name ?>" name="book_name">
        </div>
        <div class="form-floating mb-3">
            <label for="floatingInputGroup1">Số điện thoại</label>
            <input type="text" class="form-control" id="floatingInputGroup1" placeholder="Số điện thoại" value="<?php echo $sdt  ?>" name="sdt">
        </div>
        <div class="form-floating mb-3">
            <label for="floatingInputGroup1">Ngày nhận</label>
            <input type="date" class="form-control" id="floatingInputGroup1" placeholder="Ngày nhận" value="<?php echo $checkin ?>" name="check_in">
        </div>
        <div class="form-floating mb-3">
            <label for="floatingInputGroup1">Ngày trả</label>
            <input type="date" class="form-control" id="floatingInputGroup1" placeholder="Ngày trả" value="<?php echo $checkout ?>" name="check_out">
        </div>
        <div class="form-floating mb-3">
            <label for="floatingInputGroup1">Người lớn</label>
            <input type="number" class="form-control" id="floatingInputGroup1" placeholder="Người lớn" value="<?php echo $slNguoiLon ?>" name="sl_NguoiLon">
        </div>
        <div class="form-floating mb-3">
            <label for="floatingInputGroup1">Trẻ em</label>
            <input type="number" class="form-control" id="floatingInputGroup1" placeholder="Trẻ em" value="<?php echo $sltreEm  ?>" name="sl_tre_em">
        </div>
        <div class="form-floating mb-3">
            <label for="floatingInputGroup1">Tổng tiền</label>
            <input type="number" class="form-control" id="floatingInputGroup1" placeholder="Trẻ em" value="<?php echo $total_price  ?>" name="total_price">
        </div>
        <button style="background-color: yellow; font-size: 20px; width: 100%; border-radius: 10px; margin: 16px 0;" type="submit" name="xndatphongoff">Thanh toán tại quầy</button>
    </form>
   
    <form action="../../view/user/congthanhtoan.php" id="create_form" method="POST">
        <img style="width: 310px;display: block; height: 200px; margin:0 auto;" src="../../public/image/vnpay.jpg" alt="">
        <input type="hidden" name="ma_donhang" value="<?php echo $id_Phong ?>">
        <input type="hidden" name="gia" value="<?php echo $total_price ?>">
        <input type="hidden" name="sdt" value="<?php echo $sdt ?>">
        <input type="hidden" name="check_in" value="<?php echo $checkin ?>">
        <input type="hidden" name="check_out" value="<?php echo $checkout ?>">
        <input type="hidden" name="sl_NguoiLon" value="<?php echo $slNguoiLon ?>">
        <input type="hidden" name="sl_tre_em" value="<?php echo $sltreEm  ?>">
        <button style="background-color: yellow; font-size: 20px; width: 100%; border-radius: 10px; margin: 16px 0;" type="submit" name="redirect" id="redirect" class="btn btn-default">Thanh toán online bằng VNPAY</button>
    </form>
</div>