<main>
    <div class="profile_user">
        <div class="profile_user-left">
            <ul>
                <h5>Tài khoản của tôi</h5>
                <li><a href="?act=taikhoan">Hồ sơ của tôi</a></li>
                <li><a href="?act=quanlyphongdat">Phòng đã đặt</a></li>
                <li><a href="?act=doimatkhau">Đổi mật khẩu</a></li>
            </ul>
        </div>
        <?php
        extract($profile_user);
        ?>
        <div class="profile_user-right">
            <form action="?act=taikhoan" method="post" enctype="multipart/form-data">
                <div class="flex-user">
                    <div>
                        <h4>Thông tin tài khoản</h4>
                        <p>Quản lý thông tin hồ sơ để bảo mật tài khoản </p>
                    </div>
                    <!-- <div>
                        <div class="avatar_user"></div>
                        <input type="file">
                    </div> -->
                </div>
                <div class="mb-3">Tên đăng nhập
                    <input style="width: 200px;" class="form-control" type="text" value="<?php echo $user_name ?>" aria-label="Disabled input example" disabled readonly>
                </div>
                <div>
                    <input type="hidden" name="id-user" value="<?php echo $id ?>">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Tên</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $name ?>" name="name-user">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $email ?>" name="email-user">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">SĐT</label>
                    <input type="text" class="form-control" value="<?php echo $sdt ?>" name="sdt-user">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Địa chỉ</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $diachi ?>" name="address-user">
                </div>
                <button type="submit" name="capnhat" class="btn btn-primary">Cập Nhật</button>
            </form>

        </div>
    </div>
</main>