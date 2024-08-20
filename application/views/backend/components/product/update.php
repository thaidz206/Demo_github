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

	/* Input and Select Styling */
	input[type="text"],
	input[type="number"],
	select,
	textarea {
		border-radius: 5px;
		padding: 10px;
		border: 1px solid #ccc;
		width: 100%;
		box-sizing: border-box;
		transition: all 0.3s ease;
	}

	input[type="text"]:focus,
	input[type="number"]:focus,
	select:focus,
	textarea:focus {
		border-color: #5b86e5;
		box-shadow: 0 0 5px rgba(91, 134, 229, 0.5);
		outline: none;
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

	.table th,
	.table td {
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

	/* CKEditor Styling */
	.cke {
		border-radius: 5px;
		box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
		margin-top: 10px;
	}

</style>
<?php echo form_open_multipart('admin/product/update/'.$row['id']); ?>
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
$listProducer=$this->Mproducer->producer_list();
$option="";
foreach ($listProducer as $r) {
	if($r['id']==$row['producer']){
		$option.="<option selected value='".$r['id']."'>".$r['name']."</option>";
	}else{
		$option.="<option value='".$r['id']."'>".$r['name']."</option>";
	}
}
?>
<div class="content-wrapper">
	<form action="<?php echo base_url() ?>admin/product/update.html" enctype="multipart/form-data" method="POST" accept-charset="utf-8">
		<section class="content-header">
			<h1><i class="glyphicon glyphicon-cd"></i> Cập nhật sản phẩm</h1>
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
									<label>Tên sản phẩm <span class = "maudo">(*)</span></label>
									<input type="text" class="form-control" name="name" style="width:100%" placeholder="Tên sản phẩm" value="<?php echo $row['name'] ?>">
									<div class="error" id="password_error"><?php echo form_error('name')?></div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="col-md-6" style="padding-left: 0px;">
											<div class="form-group">
												<label>Loại sản phẩm<span class = "maudo">(*)</span></label>
												<select name="catid" class="form-control">
													<option value = "">[--Chọn loại sản phẩm--]</option>
													<option value = "0">No Parent</option>
													<?php  
													echo $option_parentid;
													?>
												</select>
												<div class="error" id="password_error"><?php echo form_error('catid')?></div>
											</div>
										</div>
										<div class="col-md-6" style="padding-right: 0px;">
											<div class="form-group">
												<label>Nhà cung cấp<span class = "maudo">(*)</span></label>
												<select name="producer" class="form-control">
													<option value = "">[--Chọn nhà cung cấp--]</option>
													<?php echo $option;?>
												</select>
												<div class="error" id="password_error"><?php echo form_error('catid')?></div>
											</div>
										</div>
									</div>
								</div>
								<div class="form-group">
									<label>Mô tả ngắn</label>
									<textarea name="sortDesc" class="form-control" ><?php echo $row['sortDesc'] ?></textarea>
								</div>
								<div class="form-group">
									<label>Chi tiết sản phẩm</label>
									<textarea name="detail" id="detail" class="form-control"><?php echo $row['detail'] ?></textarea>
									<script>CKEDITOR.replace('detail');</script>
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<label>Giá gốc</label>
									<input name="price_root" class="form-control" type="number" value="<?php echo $row['price'] ?>" min="0" step="10000" max="1000000000">
								</div>
								<div class="form-group">
									<label>Khuyến mãi (%)</label>
									<input name="sale_of" class="form-control" type="number" value="<?php echo $row['sale'] ?>">
								</div>
								<div class="form-group">
									<label>Giá bán</label>
									<input name="price_buy" class="form-control" type="number" value="<?php echo $row['price_sale'] ?>" min="0" step="10000" max="1000000000">
									<div class="error" id="password_error"><?php echo form_error('price_buy')?></div>
								</div>
								<div class="form-group">
									<label>Số lượng tồn kho</label>
									<input name="number" class="form-control" type="number" value="<?php echo $row['number'] - $row['number_buy'] ?>" min="1" step="1" max="1000" disabled>
								</div>
								<div class="form-group">
									<label>Số lượng đã bán</label>
									<input name="number" class="form-control" type="number" value="<?php echo $row['number_buy'] ?>" min="1" step="1" max="1000" disabled>
								</div>
								<div class="form-group">
									<label>Trạng thái</label>
									<select name="status" class="form-control">
										<option value="1" <?php if($row['status'] == 1) {echo 'selected';}?> >Đang kinh doanh</option>
										<option value="0" <?php if($row['status'] == 0) {echo 'selected';}?>>Ngừn kinh doanh</option>
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
	<!-- /.content -->
</div><!-- /.content-wrapper -->