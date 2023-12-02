<main>
    <div class="profile_user">
        <div class="profile_user-left">
            <ul>
                <h5>Tài khoản của tôi</h5>
                <li><a href="?act=taikhoan">Hồ sơ của tôi</a></li>
                <li><a href="?act=quanlyphongdat">Phòng đã đặt</a></li>
                <li><a href="?act=doimatkhau">Đổi mật khẩu</a></li>
                <li><a href="#">Địa chỉ</a></li>
            </ul>
        </div>
        <?php
        if (isset($_SESSION['user']) && (is_array($_SESSION['user']))) {
            extract(($_SESSION['user']));
        }
        ?>
        <div class="profile_user-right">
            <div class="change-password">
                <form action="?act=doimatkhau" method="post">
                    <h4>Đổi mật khẩu</h4>
                    <p>Hãy đặt mật khẩu mạnh để bảo vệ tài khoản của bạn </p>
                    <div>
                        <input type="hidden" name="id-user" value="<?php echo $id ?>">
                    </div>
                    <div class="err-sussces"> <?php echo $eror["matkhau"]; ?> </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Mật khẩu cũ</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" name="matkhaucu" require>
                        <div class="err-failed"> <?php echo $eror["matkhaucu"]; ?> </div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Mật khẩu mới</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" name="matkhaumoi1" require>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Nhập lại mật khẩu mới</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" name="matkhaumoi2" require>
                        <div class="err-failed"> <?php echo $eror["matkhaumoi"]; ?> </div>
                    </div>
                    <button type="submit" name="doimatkhau" class="btn btn-primary">Đổi mật khẩu</button>
                </form>
            </div>
        </div>
    </div>
</main>