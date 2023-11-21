<div class="form__login">
    <h2>ĐĂNG NHẬP</h2>
    <form id="usersigup" action="?act=dangnhap" method="POST">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Tên Đăng nhập</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="username"
                required>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Mật Khẩu</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="password" required>
        </div>
        <!-- <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div> -->
        <button type="submit" class="btn btn-primary" name="dangnhap">Đăng Nhập</button>
        <a class="form__login-sigup" href="?act=dangky">Bạn chưa có tài khoản?</a>
    </form>
</div>