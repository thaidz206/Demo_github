<style>
/* General styling */
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
}

.breadcrumb .btn-primary:hover {
    background: linear-gradient(to right, #5b86e5, #36d1dc);
}

.breadcrumb .btn .glyphicon {
    margin-right: 5px;
}

/* Form styling */
form {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
}

form .box {
    background-color: #ffffff;
    border-radius: 10px;
    padding: 20px;
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
}

form .box-body {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
}

form .form-group label {
    font-weight: bold;
    color: #333;
}

form .form-group input[type="text"],
form .form-group input[type="file"],
form .form-group select,
form .form-group textarea {
    width: 100%;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 5px;
    transition: all 0.3s ease;
}

form .form-group input[type="text"]:focus,
form .form-group input[type="file"]:focus,
form .form-group select:focus,
form .form-group textarea:focus {
    border-color: #5b86e5;
    box-shadow: 0 0 5px rgba(91, 134, 229, 0.5);
}

/* CKEditor */
#cke_fulltext {
    width: 100% !important;
}

/* Error message styling */
.error {
    color: red;
    font-size: 12px;
    margin-top: 5px;
}
.content-header > .breadcrumb {
    float: right;
    background: transparent;
    margin-top: 0;
    margin-bottom: 0;
    font-size: 12px;
    padding: 7px 5px;
    position: absolute;
    top: 15px;
    right: -659px;
    border-radius: 2px;
}

</style>
<?php echo 	('admin/content/insert'); ?>
<div class="content-wrapper">
	<form action="<?php echo base_url() ?>admin/content/insert.html" enctype="multipart/form-data" method="POST" accept-charset="utf-8">
		<section class="content-header">
			<h1><i class="glyphicon glyphicon-text-background"></i> Thêm bài viết mới</h1>
			<div class="breadcrumb">
				<button type = "submit" class="btn btn-primary btn-sm">
					<span class="glyphicon glyphicon-floppy-save"></span>
					Lưu[Thêm]
				</button>
				<a class="btn btn-primary btn-sm" href="admin/content" role="button">
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
							<div class="col-md-8">
								<div class="form-group">
									<label>Tiêu đề bài viết</label>
									<input type="text" class="form-control" name="name" style="width:100%" placeholder="Tên bài viết">
									<div class="error" id="password_error"><?php echo form_error('name')?></div>
								</div>
								<div class="form-group">
									<label>Mô tả ngắn</label>
									<textarea name="introtext" class="form-control" ></textarea>
								</div>
								<div class="form-group">
									<label>Chi tiết bài viết</label>
									<textarea name="fulltext" id="fulltext" class="form-control" ></textarea>
      								<script>CKEDITOR.replace('fulltext');</script>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
                                    <label>Hình đại diện</label>
                                    <input type="file" id="image_list" name="img" style="width: 100%" required>
                                </div>
								<div class="form-group">
									<label>Trạng thái</label>
									<select name="status" class="form-control" style="width:235px">
										<option value="1">Đăng</option>
										<option value="0">Chưa đăng</option>
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