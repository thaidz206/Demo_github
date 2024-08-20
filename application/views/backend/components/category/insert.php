<style>

		/* Add your CSS styles here */
	/* Example: */
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

	.form-group {
		margin-bottom: 20px;
	}

	.form-group label {
		font-weight: bold;
	}

	.form-control {
		border-radius: 5px;
		border: 1px solid #ccc;
		padding: 7px;
		width: 100%;
		box-sizing: border-box;
	}

	.form-control:focus {
		outline: none;
		border-color: #5b86e5;
		box-shadow: 0 0 5px rgba(91, 134, 229, 0.5);
	}

	.btn {
		border-radius: 5px;
		padding: 10px 20px;
		cursor: pointer;
	}

	.btn-primary {
		background: linear-gradient(to right, #36d1dc, #5b86e5);
		border: none;
		color: white;
	}

	.btn-primary:hover {
		background: linear-gradient(to right, #5b86e5, #36d1dc);
	}

	.error {
		color: red;
		font-size: 14px;
	}

</style>
<?php echo form_open_multipart('admin/category/insert'); ?>
<div class="content-wrapper">
	<form action="admin/category/insert.html" enctype="multipart/form-data" method="POST" accept-charset="utf-8">
		<section class="content-header">
			<h1><i class="glyphicon glyphicon-cd"></i> Thêm danh mục mới</h1>
			<div class="breadcrumb">
				<button type = "submit" class="btn btn-primary btn-sm">
					<span class="glyphicon glyphicon-floppy-save"></span>
					Lưu[Thêm]
				</button>
				<a class="btn btn-primary btn-sm" href="admin/category" role="button">
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
							<div class="form-group">
								<label>Tên danh mục <span class = "maudo">(*)</span></label>
								<input type="text" class="form-control" name="name" style="width:50%" placeholder="Tên danh mục">
								<div class="error" id="password_error"><?php echo form_error('name')?></div>
							</div>
							<?php  
							$list=$this->Mcategory->category_list();
							$option_parentid="";
							$option_orders="";
							foreach ($list as $row) {
								$option_parentid.="<option value='".$row['id']."'>".$row['name']."</option>";
								$option_orders.="<option value='".($row['orders']+1)."'>Sau - ".$row['name']."</option>";
							}
							?>
							<div class="form-group">
								<label>Danh mục cha</label>
								<select name="parentid" class="form-control" style="width:50%">
									<option value = "0">[--Chọn danh mục--]</option>
									<?php echo $option_parentid;?>
								</select>
							</div>
							<div class="form-group">
								<label>Sắp xếp</label>
								<select name="orders" class="form-control" style="width:50%">
									<option value = "">[--Chọn vị trí--]</option>
									<option value="0">Đứng đầu</option>
									<?php  
									echo $option_orders;
									?>
								</select>
							</div>
							<div class="form-group">
								<label>Trạng thái</label>
								<select name="status" class="form-control" style="width:50%">
									<option value = "">[--Chọn trạng thái--]</option>
									<option value="1">Đang kinh doanh</option>
									<option value="0">Ngưng kinh doanh</option>
								</select>
							</div>
						</div>
					</div><!-- /.box -->
				</div>
			</section>
		</form>
		<!-- /.content -->
</div><!-- /.content-wrapper -->