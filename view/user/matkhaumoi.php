<div class="form__login">
    <h2> Mật khẩu mới</h2>
    <form id="usersigup" method="POST" action="?act=mkmoi&id=<?php echo isset($_GET['id']) ? $_GET['id'] : '' ?>">
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Mật Khẩu</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="password" required>
        </div>
        <button type="submit" class="btn btn-primary" name="submit">Thay đổi</button>
        <!-- <a class="form__login-sigup" href="?act=dangky">Bạn chưa có tài khoản?</a> -->
    </form>
</div>