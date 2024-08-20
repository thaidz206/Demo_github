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

.require_symbol {
    color: red;
}

.btn-link {
    color: #007bff;
}

.btn-link:hover {
    color: #0056b3;
    text-decoration: none;
}

</style>

<?php echo form_open('dang-ky'); ?>
<section id="product-detail">
	<div class="container" style="height: 100vj; margin-top: 30px; margin-bottom: 50px;">
		<div class="row justify-content-center">
			<div class="col-md-6 col-sm-8 col-xs-12">
				<div class="products-wrap card">
					<div class="card-header text-center">
						<h3>Đăng ký tài khoản</h3>
					</div>
					<div class="card-body">
						<?php 
						if(isset($success))
							echo '<h4 style="color:green;">'.$success.'</h4>';
						?>
						<form accept-charset="UTF-8" action="" id="customer_register" method="post">
							<input name="FormType" type="hidden" value="customer_register">
							<input name="utf8" type="hidden" value="true"> 
							<div class="form-group">
								<label for="first_name">Tên đăng nhập:<span class="require_symbol">*</span></label>
								<input type="text" id="first_name" name="username" value="" class="form-control" placeholder="Tên đăng nhập">
								<div class="error" id="username_error"><?php echo form_error('username')?></div>
							</div> 
							<div class="form-group">
								<label for="register-form-password">Mật khẩu:<span class="require_symbol">*</span></label>
								<input type="password" id="register-form-password" name="password" placeholder="Mật khẩu" class="form-control">
								<div class="error" id="password_error"><?php echo form_error('password')?></div>
							</div>
							<div class="form-group">
								<label for="register-form-repassword">Nhập lại mật khẩu:<span class="require_symbol">* </span></label>
								<input type="password" id="register-form-repassword" name="re_password" value="" class="form-control" placeholder="Nhập lại mật khẩu">
								<div class="error" id="re_password_error"><?php echo form_error('re_password')?></div>
							</div>
							<div class="form-group">
								<label for="first_name">Họ tên:<span class="require_symbol">*</span></label>
								<input type="text" id="first_name" name="name" placeholder="Họ tên" class="form-control">
								<div class="error" id="name_error"><?php echo form_error('name')?></div>
							</div>              
							<div class="form-group">
								<label for="register-form-email">Email:<span class="require_symbol">*</span></label>
								<input type="text" id="register-form-email" name="email" class="form-control" placeholder="Nhập email">
								<div class="error" id="email_error"><?php echo form_error('email')?></div>
							</div>
							<div class="form-group">
								<label for="first_name">Số điện thoại:<span class="require_symbol">*</span></label>
								<input type="text" id="first_name" name="phone" placeholder="Số điện thoại" class="form-control">
								<div class="error" id="phone_error"><?php echo form_error('phone')?></div>
							</div>
							<div class="form-group text-center">
								<button class="btn btn-primary btn-block" id="register-form-submit" name="register-form-submit" type="submit">Đăng ký</button>
							</div>
							<div class="form-group text-center">
								<p>Nếu đã có tài khoản, hãy <a href="<?php echo base_url()?>dang-nhap" class="btn-link">Đăng nhập</a></p>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
