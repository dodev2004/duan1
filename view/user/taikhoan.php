<main>
    <div class="profile_user">
        <div class="profile_user-left">
            <ul>
                <h5>Tài khoản của tôi</h5>
                <li><a href="?act=taikhoan">Hồ sơ của tôi</a></li>
                <li><a href="#">Đơn hàng</a></li>
                <li><a href="?act=doimatkhau">Đổi mật khẩu</a></li>
                <li><a href="#">Địa chỉ</a></li>
            </ul>
        </div>
        <div class="profile_user-right">
            <form>
                <div class="flex-user">
                    <div>
                        <h4>Thông tin tài khoản</h4>
                        <p>Quản lý thông tin hồ sơ để bảo mật tài khoản </p>
                    </div>
                    <div>
                        <div class="avatar_user"></div>
                        <input type="file">
                    </div>
                </div>
                <div class="mb-3">Tên đăng nhập
                    <input style="width: 200px;" class="form-control" type="text" value="Tên đăng nhập"
                        aria-label="Disabled input example" disabled readonly>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Tên</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <!-- <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1">
                    </div> -->
                <button type="submit" class="btn btn-primary">Cập Nhật</button>
            </form>

        </div>
    </div>
</main>