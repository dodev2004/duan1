<div class="form__login">
    <h2>ĐĂNG KÝ</h2>
    <form id="usersigup" action="?act=dangky" method="POST">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Họ Và Tên</label>
            <input type="text" class="form-control" id="exampleInputEmail1"
                value=" <?php echo isset($_POST['name']) ? $_POST['name'] : "" ?> " aria-describedby=" emailHelp"
                name="name">
            <div class="valid-feedback"></div>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Tài Khoản</label>
            <input type="text" class="form-control" id="exampleInputEmail1"
                value=" <?php echo isset($_POST['username']) ? $_POST['username'] : "" ?> " aria-describedby="emailHelp"
                name="username">
            <p class="error_message"><?php echo $eror["user_name"] ?></p>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email</label>
            <input type="email" class="form-control" id="exampleInputEmail1"
                value=" <?php echo isset($_POST['email']) ? $_POST['email'] : "" ?> " aria-describedby="emailHelp"
                name="email" required>
            <div class="valid-feedback"> </div>
            <p class="error_message"><?php echo $eror["email"] ?></p>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Mật Khẩu</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="password">
            <div class="valid-feedback"> </div>
        </div>
        <button type="submit" class="btn btn-primary" name="dangky">Sign Up</button>
    </form>
</div>