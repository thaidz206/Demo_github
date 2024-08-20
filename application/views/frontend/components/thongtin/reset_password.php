<style>
/* Form container */
#reset_password {
    background-color: #fff;
    border: 1px solid #ddd;
    padding: 30px;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
}

#acctitle {
    font-size: 24px;
    color: #333;
    margin-bottom: 20px;
    text-align: center;
}

/* Success message */
h4 {
    text-align: center;
}

/* Form labels and inputs */
label {
    display: block;
    font-weight: 600;
    margin-bottom: 5px;
}

.require_symbol {
    color: red;
}

input.form-control {
    width: 100%;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 5px;
    margin-bottom: 10px;
    font-size: 16px;
}

/* Error messages */
.error {
    color: red;
    font-size: 14px;
}

/* Submit button */
button.button-3d {
    background-color: #007bff;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

button.button-3d:hover {
    background-color: #0056b3;
}

button.button-3d:focus {
    outline: none;
}

/* Responsive styles */
@media (max-width: 768px) {
    .col-md-6, .col-sm-6 {
        width: 100%;
    }

    .col-md-3, .col-sm-3 {
        display: none;
    }
}
	
</style>

<div class="container">
	<div class="row">
		<div class="col-md-3 col-sm-3 hidden-xs">
		</div>
		<div class="col-md-6 col-sm-6 col-xs-12">
			<form action="" accept-charset="UTF-8" action="" id="reset_password" method="post">
				<div id="login">
					<div class="acctitle acctitlec">Đổi mật khẩu</div>
					<?php 
					if(isset($success))
						echo '<h4 style="color:green;">Đổi mật khẩu thành công</h4>';
					?>
					<div class="acc_content clearfix" style="display: block;">
						<div class="col_full">
							<label for="login-form-password">Mật khẩu hiện tại:<span class="require_symbol">* </span></label>
							<input type="password" id="login-form-password" name="password_old" value="" class="form-control">
							<div class="error" id="password_error"><?php echo form_error('password_old')?></div>
						</div>
						<div class="col_full">
							<label for="login-form-password">Mật khẩu mới:<span class="require_symbol">* </span></label>
							<input type="password" id="login-form-password" name="password" value="" class="form-control">
							<div class="error" id="password_error"><?php echo form_error('password')?></div>
						</div>
						<div class="col_full">
							<label for="login-form-password">Nhập lại mật khẩu mới:<span class="require_symbol">* </span></label>
							<input type="password" id="login-form-password" name="re_password" value="" class="form-control">
							<div class="error" id="password_error"><?php echo form_error('re_password')?></div>
						</div>
						<div class="col_full" style="text-align: center;">
							<button style="background-color: #007bff;" class="button button-3d button-black" id="login-form-submit" name="login-form-submit" type="submit" value="login">Lưu </button>
						</div>

					</div>
				</div>
			</form>
		</div>
	</div>
</div>