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
		color: #333; /* Adjust text color as needed */
	}

	/* Breadcrumb */
	.breadcrumb {
		display: flex;
		gap: 10px;
		align-items: center;
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

	/* Form Styling */
	.form-control {
		border-radius: 5px;
		border: 1px solid #ccc;
		padding: 8px;
		transition: border-color 0.3s ease;
		width: 100%;
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

</style>

<?php echo form_open_multipart('admin/configuration/update/'); ?>
<div class="content-wrapper">
	<form action="<?php echo base_url() ?>admin/configuration/update.html" enctype="multipart/form-data" method="POST" accept-charset="utf-8">
		<section class="content-header">
			<h1> Hệ Thống</h1>
			<div class="breadcrumb">
				<button type = "submit" class="btn btn-primary btn-sm">
					<span class="glyphicon glyphicon-floppy-save"></span>
					Lưu
					</button
				</div>
			</section>
			<!-- Main content -->
			<section class="content">
				<div class="row">
					<div class="col-md-12">
						<div class="box" id="view">
							<div class="box-body">
								<div class="col-md-9">
									<?php echo validation_errors(); ?>
									<div class="form-group">
										<label> Mail smtp <span class = "maudo">(*)</span></label>
										<input type="email" class="form-control" name="mail_smtp" style="width:100%" placeholder="Mail cấu hình" value="<?php echo $row['mail_smtp'] ?>">
									</div>
									<div class="form-group">
										<label>Password Mail smtp</label>
										<input type="password" class="form-control" name="mail_smtp_password" style="width:100%" placeholder=" Password Mail cấu hình" value="<?php echo $row['mail_smtp_password'] ?>">
									</div>
									<div class="form-group">
										<label>Mail admin</label>
										<input type="text" class="form-control" name="mail_noreply" style="width:100%" placeholder="Mail nhận thông tin đơn hàng" value="<?php echo $row['mail_noreply'] ?>">
									</div>
									<div class="form-group">
										<label> PriceShip <span class = "maudo">(*)</span></label>
										<input type="number" class="form-control" name="priceShip" style="width:100%" placeholder=" priceShip" value="<?php echo $row['priceShip'] ?>">

									</div>
									<div class="form-group">
										<label> Title <span class = "maudo">(*)</span></label>
										<input type="text" class="form-control" name="title" style="width:100%" placeholder=" title" value="<?php echo $row['title'] ?>">

									</div>
									<div class="form-group">
										<label> Description <span class = "maudo">(*)</span></label>
										<input type="text" class="form-control" name="description" style="width:100%" placeholder=" description" value="<?php echo $row['description'] ?>">
									</div>
								</div>
							</div>
							<div class="col-md-3">
								
							</div>
						</div>
					</div><!-- /.box -->
				</div>
				<!-- /.col -->
			</div>
			<!-- /.row -->
		</section>
	</form>
	<!-- /.content -->
</div><!-- /.content-wrapper -->