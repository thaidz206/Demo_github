<style>



.card {
    border: 1px solid #ddd;
    border-radius: 10px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}

.card-header {
    background-color: #007bff;
    color: white;
    padding: 15px;
    border-bottom: none;
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
}

.card-body {
    padding: 30px;
}

.form-group {
    margin-bottom: 15px;
}

.form-control {
    border-radius: 5px;
}

.btn-primary {
    background-color: #007bff;
    border: none;
    border-radius: 5px;
    padding: 10px;
}

.btn-primary:hover {
    background-color: #0056b3;
}

.error {
    color: red;
    font-size: 0.9em;
}

.alert-danger {
    margin-top: 15px;
    padding: 10px;
    border-radius: 5px;
}

.btn-link {
    color: #007bff;
}

.btn-link:hover {
    color: #0056b3;
    text-decoration: none;
}

.require_symbol {
    color: red;
}

</style>

<?php echo form_open('dang-nhap'); ?>
<div class="container" style="height: 100vh; margin-top: 30px;">
    <div class="products-wrap">
        <div class="row justify-content-center">
            <div class="col-md-6 col-sm-8 col-xs-12">
                <div id="login" class="card">
                    <div class="card-header text-center">
                        <h3>Đăng nhập</h3>
                    </div>
                    <div class="card-body">
                        <form accept-charset="UTF-8" action="" id="customer_login" method="post">
                            <div class="form-group">
                                <label for="login-form-username">Tài khoản:<span class="require_symbol">*</span></label>
                                <input type="text" id="login-form-username" name="username" value="" class="form-control">
                                <div class="error" id="username_error"><?php echo form_error('username')?></div>
                            </div>
                            <div class="form-group">
                                <label for="login-form-password">Mật khẩu:<span class="require_symbol">*</span></label>
                                <input type="password" id="login-form-password" name="password" value="" class="form-control">
                                <div class="error" id="password_error"><?php echo form_error('password')?></div>    
                            </div>
                            <?php if (isset($error)): ?>
                                <div class="alert alert-danger" role="alert">
                                    <?php echo $error; ?>
                                </div>
                            <?php endif; ?>
                            <div class="form-group text-center">
                                <button class="btn btn-primary btn-block" id="login-form-submit" name="login-form-submit" type="submit" value="login">Đăng nhập</button>
                            </div>
                            <div class="form-group text-center">
                                <a href="quen-mat-khau" class="btn-link">Quên mật khẩu?</a>
                                <span> | </span>
                                <a href="<?php echo base_url() ?>dang-ky" class="btn-link">Người dùng mới? Đăng ký tài khoản</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
