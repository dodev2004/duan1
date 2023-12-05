<div class="form__login">
    <h2> Quên mật khẩu</h2>
    <form id="usersigup" action="?act=quenmk" method="POST">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" placeholder="Vui lòng điền email để tiếp tục " required>
            <p class="error_message"><?php echo $eror ?></p>


        </div>
        <button type="submit" class="btn btn-primary" name="submit">Tiếp</button>
        <!-- <a class="form__login-sigup" href="?act=dangky">Bạn chưa có tài khoản?</a> -->
    </form>
</div>