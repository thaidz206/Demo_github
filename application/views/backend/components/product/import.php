<style>
	/* General Styling */
	.content-wrapper {
		padding: 20px;
		background-color: #f9f9f9;
		border-radius: 10px;
		box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
	}

	.content-header {
		border-bottom: 2px solid #ddd;
		padding-bottom: 10px;
		margin-bottom: 20px;
	}

	.content-header h1 {
		font-size: 24px;
		background: linear-gradient(to right, #ff7e5f, #feb47b);
		-webkit-background-clip: text;
		-webkit-text-fill-color: transparent;
		font-weight: bold;
	}

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
	form {
		margin-top: 20px;
	}

	form .form-group label {
		font-weight: bold;
	}

	form .form-control {
		border-radius: 5px;
		box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);
	}

	form .error {
		color: red;
		font-size: 12px;
	}

	/* Button Styling */
	button.btn {
		border-radius: 5px;
		transition: all 0.3s ease;
	}

	button.btn-primary {
		background: linear-gradient(to right, #36d1dc, #5b86e5);
		border: none;
		color: white;
	}

	button.btn-primary:hover {
		background: linear-gradient(to right, #5b86e5, #36d1dc);
	}

	button.btn .glyphicon {
		margin-right: 5px;
	}

	/* Table Styling */
	.table-responsive {
		margin-top: 20px;
	}

	.table {
		background-color: #ffffff;
		border-radius: 10px;
		box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
	}

	.table th, .table td {
		vertical-align: middle;
		text-align: center;
	}

	.table th {
		background: linear-gradient(to right, #36d1dc, #5b86e5);
		color: white;
		border-top: none;
	}

	.table td img {
		border-radius: 5px;
	}

	.table td a {
		transition: all 0.3s ease;
	}

	.table td a:hover {
		color: #5b86e5;
	}

	/* Status Icons */
	.glyphicon-ok-circle {
		color: green;
	}

	.glyphicon-remove-circle {
		color: red;
	}

	/* Alert Styling */
	.alert {
		border-radius: 5px;
		margin-top: 20px;
	}

	.alert-success {
		background-color: #d4edda;
		color: #155724;
	}

	.alert-error {
		background-color: #f8d7da;
		color: #721c24;
	}

	.alert .close {
		color: #000;
		opacity: 0.5;
	}

	/* Pagination */
	.pagination {
		display: inline-flex;
		list-style: none;
		border-radius: 5px;
	}

	.pagination li {
		margin: 0 5px;
	}

	.pagination li a {
		border-radius: 5px;
		padding: 10px 15px;
		color: #5b86e5;
		transition: all 0.3s ease;
	}

	.pagination li a:hover {
		background-color: #5b86e5;
		color: white;
	}

	/* No Permission Text */
	.fa-lock {
		color: red;
		font-size: 14px;
	}

</style>
<?php echo form_open_multipart('admin/product/import/'.$row['id']); ?>
<?php  
	$list=$this->Mcategory->category_list();
	$option_parentid="";
	foreach ($list as $r) {
		if($r['id']==$row['catid']){
			$option_parentid.="<option selected value='".$r['id']."'>".$r['name']."</option>";
		}else{
			$option_parentid.="<option value='".$r['id']."'>".$r['name']."</option>";
		}
	}
?>
<div class="content-wrapper">
	<form action="<?php echo base_url() ?>admin/product/import.html" enctype="multipart/form-data" method="POST" accept-charset="utf-8">
		<section class="content-header">
			<h1><i class="glyphicon glyphicon-text-background"></i> Nhập hàng</h1>
			<div class="breadcrumb">
				<button type = "submit" class="btn btn-primary btn-sm">
					<span class="glyphicon glyphicon-floppy-save"></span>
					Lưu[Cập nhật]
				</button>
				<a class="btn btn-primary btn-sm" href="admin/product" role="button">
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
							<div class="col-md-9">
								<div class="form-group">
									<div class="form-group">
									<label>Tên sản phẩm </label>
									<input type="text" class="form-control" disabled name="name" style="width:100%" placeholder="Tên sản phẩm" value="<?php echo $row['name'] ?>" >
									<div class="error" id="password_error"><?php echo form_error('name')?></div>
								</div>
								<div class="form-group">
									<label>Loại sản phẩm</label>
									<select name="catid" class="form-control" style="width:300px" disabled>
										<option value = "">[--Chọn loại sản phẩm--]</option>
										<option value = "0">No Parent</option>
											<?php  
												echo $option_parentid;
											?>
									</select>
									<div class="error" id="password_error"><?php echo form_error('catid')?></div>
								</div>
								<div class="form-group">
									<div class="form-group">
									<label>Tổng số lượng đã nhập</label>
									<input type="number" class="form-control" name="number" placeholder="Số lượng" min="0" max="10000" value="<?php echo $row['number'] ?>" disabled>
								</div>
								<div class="form-group">
									<div class="form-group">
									<label>Số lượng sản phẩm đã bán</label>
									<input type="number" class="form-control" name="number" placeholder="Số lượng" min="0" max="10000" value="<?php echo $row['number_buy'] ?>" disabled>
								</div>
								<div class="form-group">
									<div class="form-group">
									<label>Số lượng còn của cửa hàng</label>
									<input type="number" class="form-control" name="number" placeholder="Số lượng" min="0" max="10000" value="<?php echo $row['number']-$row['number_buy'] ?>" disabled>
								</div>
								<div class="form-group">
									<div class="form-group">
									<label>Nhập số lượng nhập thêm<span class = "maudo">(*)</span></label>
									<input type="number" class="form-control" name="number" style="width:100%" placeholder="Số lượng" min="0" max="10000">

									<div class="error" id="password_error"><?php echo form_error('number')?></div>
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
<!-- /.content -->
</div><!-- /.content-wrapper -->