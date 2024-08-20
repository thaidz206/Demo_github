<style>

/* Content Wrapper */
.content-wrapper {
    padding: 20px;
    background-color: #f9f9f9;
    border-radius: 10px;
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
}

/* Content Header */
.content-header {
    border-bottom: 2px solid #ddd;
    padding-bottom: 10px;
    margin-bottom: 20px;
}

.content-header h1 {
    font-size: 24px;
    font-weight: bold;
    background: linear-gradient(to right, #36d1dc, #5b86e5);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

/* Breadcrumb */
.breadcrumb {
    display: flex;
    gap: 10px;
}

.breadcrumb .btn {
    border-radius: 5px;
    transition: all 0.3s ease;
}

.breadcrumb .btn-primary {
    background: linear-gradient(to right, #36d1dc, #5b86e5);
    border: none;
    color: white;
}

.breadcrumb .btn-primary:hover {
    background: linear-gradient(to right, #5b86e5, #36d1dc);
}

.breadcrumb .btn .glyphicon {
    margin-right: 5px;
}

/* Form Styling */
.form-control {
    border-radius: 5px;
    border: 1px solid #ccc;
    padding: 8px;
    transition: border-color 0.3s ease;
}

.form-control:focus {
    border-color: #5b86e5;
    box-shadow: none;
}

.form-group {
    margin-bottom: 20px;
}

/* Button Styling */
.btn-primary {
    border-radius: 5px;
    padding: 10px 20px;
    border: none;
    background: linear-gradient(to right, #36d1dc, #5b86e5);
    color: white;
    transition: all 0.3s ease;
}

.btn-primary:hover {
    background: linear-gradient(to right, #5b86e5, #36d1dc);
}

/* Error Message */
.error {
    font-size: 14px;
}

/* Italics Text */
span[style="font-style: italic; line-height: 32px;"] {
    font-style: italic;
    line-height: 32px;
}

/* Optional: Adjustments for smaller screens */
@media (max-width: 768px) {
    .content-wrapper {
        padding: 15px;
    }

    .content-header h1 {
        font-size: 20px;
    }

    .breadcrumb .btn {
        padding: 8px 15px;
    }

    .form-control {
        padding: 6px;
    }

    .btn-primary {
        padding: 8px 15px;
    }
}


</style>
<?php echo form_open_multipart('admin/coupon/update/'.$row['id']); ?>
<div class="content-wrapper">
	<form action="<?php echo base_url() ?>admin/coupon/update.html" enctype="multipart/form-data" method="POST" accept-charset="utf-8">
		<section class="content-header">
			<h1><i class="glyphicon glyphicon-text-background"></i> Cập nhật mã giảm giá</h1>
			<div class="breadcrumb">
				<button type = "submit" class="btn btn-primary btn-sm">
					<span class="glyphicon glyphicon-floppy-save"></span>
					Lưu[Cập nhật]
				</button>
				<a class="btn btn-primary btn-sm" href="admin/coupon" role="button">
					<span class="glyphicon glyphicon-remove do_nos"></span> Thoát
				</a>
			</div>
		</section>
		<!-- Main content -->
		<section class="content">
			<div class="row">
				<div class="col-md-12">
					<div class="box" id="view">
						<div class="box-body">
							<div class="col-md-6">
								<div class="form-group">
									<label>Mã giảm giá</label>
									<input type="text" class="form-control" name="code" style="width:100%" placeholder="Mã giảm giá" value="<?php echo $row['code'] ?>">
									<div class="error" id="password_error"><?php echo form_error('code')?></div>
								</div>
								<div class="form-group">
									<label>Số tiền giảm giá</label>
									<input type="number" class="form-control" name="discount" style="width:100%" placeholder="Số tiền giảm giá" value="<?php echo $row['discount'] ?>">
									<div class="error" id="password_error"><?php echo form_error('discount')?></div>
								</div>
								<div class="form-group">
									<label>Tổng số lần nhập</label>
									<input type="number" class="form-control" name="limit_number" style="width:100%" placeholder="Số lần giới hạn nhập" value="<?php echo $row['limit_number'] ?>">
									<div class="error" id="password_error"><?php echo form_error('limit_number')?></div>
								</div>
								<div class="form-group">
									<label>Số lần đã nhập</label>
									<input type="number" class="form-control" name="number_used" style="width:100%" value="<?php echo $row['number_used'] ?>" disabled>
									<div class="error" id="password_error"><?php echo form_error('number_used')?></div>
								</div>
								<div class="form-group">
									<?php $number_rest = $row['limit_number'] - $row['number_used']
									?>
									<label>Số lần còn lại</label>
									<input type="text" class="form-control" style="width:100%" placeholder="Số lần giới hạn nhập" value="<?php echo  $number_rest ?>" disabled>
								</div>
								
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Số tiền đơn hàng tối thiểu được áp dụng</label>
									<input type="number" class="form-control" name="payment_limit" style="width:100%" placeholder="Số tiền đơn hàng tối thiểu được áp dụng" value="<?php echo $row['payment_limit'] ?>">
								</div>
								<div class="form-group">
									<label>Ngày giới hạn nhập</label>
									<input type="text" class="form-control" name="expiration_date" style="width:100%" placeholder="Số lần giới hạn nhập" value="<?php echo $row['expiration_date'] ?>">
								</div>
								<div class="form-group">
									<label>Mô tả ngắn</label>
									<textarea name="description" class="form-control" value=""><?php echo $row['description'] ?></textarea>
								</div>
								<div class="form-group">
									<label>Trạng thái</label>
									<select name="status" class="form-control">
										<option value="1" <?php if($row['status'] == 1) {echo 'selected';}?> >Có hiệu lực</option>
										<option value="0" <?php if($row['status'] == 0) {echo 'selected';}?>>Hết hiệu lục</option>
									</select>
								</div>

							</div>
						</div>
					</div><!-- /.box -->
				</div>
				<!-- /.col -->
			</div>
			<!-- /.row -->
		</section>
	</form>
	<!-- /.coupon -->
</div><!-- /.coupon-wrapper -->