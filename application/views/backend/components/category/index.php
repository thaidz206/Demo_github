<style>
		/* General Styling */
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
		color: white;
	}

	.breadcrumb .btn-primary:hover {
		background: linear-gradient(to right, #5b86e5, #36d1dc);
	}

	.breadcrumb .btn .glyphicon {
		margin-right: 5px;
	}

	/* Table styling */
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

	/* Status icons */
	.glyphicon-ok-circle {
		color: green;
	}

	.glyphicon-remove-circle {
		color: red;
	}

	/* Alert styling */
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

	/* Button styling */
	.btn-xs {
		padding: 5px 10px;
		border-radius: 5px;
	}

	.btn-info,
	.btn-success,
	.btn-danger {
		border: none;
		color: white;
		border-radius: 5px;
		transition: all 0.3s ease;
	}

	.btn-info {
		background: linear-gradient(to right, #36d1dc, #5b86e5);
	}

	.btn-info:hover {
		background: linear-gradient(to right, #5b86e5, #36d1dc);
	}

	.btn-success {
		background: linear-gradient(to right, #56ab2f, #a8e063);
	}

	.btn-success:hover {
		background: linear-gradient(to right, #a8e063, #56ab2f);
	}

	.btn-danger {
		background: linear-gradient(to right, #ff6f69, #ffcc5c);
	}

	.btn-danger:hover {
		background: linear-gradient(to right, #ffcc5c, #ff6f69);
	}

	/* No permission text */
	.fa-lock {
		color: red;
		font-size: 14px;
	}


</style>	
<div class="content-wrapper">
		<section class="content-header">
			<h1><i class="glyphicon glyphicon-cd"></i> Danh mục loại sản phẩm</h1>
			<div class="breadcrumb">
				<?php
				if($user['role']==1){
					echo '<a class="btn btn-primary btn-sm" href="'.base_url().'admin/category/insert" role="button">
					<span class="glyphicon glyphicon-plus"></span> Thêm mới
					</a>';
				}
				?>
				<a class="btn btn-primary btn-sm" href="admin/category/recyclebin" role="button">
					<span class="glyphicon glyphicon-trash"></span> Thùng rác (<?php $total=$this->Mcategory->category_trash_count(); echo $total; ?>)
				</a>
			</div>
		</section>
		<!-- Main content -->
		<section class="content">
			<div class="row">
				<div class="col-md-12">
					<div class="box" id="view">
						<!-- /.box-header -->
						<div class="box-body">
							<?php  if($this->session->flashdata('success')):?>
								<div class="row">
									<div class="alert alert-success">
										<?php echo $this->session->flashdata('success'); ?>
										<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
									</div>
								</div>
							<?php  endif;?>
							<?php  if($this->session->flashdata('error')):?>
								<div class="row">
									<div class="alert alert-error">
										<?php echo $this->session->flashdata('error'); ?>
										<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
									</div>
								</div>
							<?php  endif;?>
							<div class="row" style='padding:0px; margin:0px;'>
								<!--ND-->
								<div class="table-responsive">
									<table class="table table-hover table-bordered">
										<thead>
											<tr>
												<th class="text-center">ID</th>
												<th>Tên loại sản phẩm</th>
												<th>Danh mục cha</th>
												<th>Ngày tạo</th>
												<th class="text-center">Trạng thái</th>
												<th class="text-center" colspan="2">Thao tác</th>
											</tr>
										</thead>
										<tbody>
											<?php foreach ($list as $row):?>
												<tr>
													<td class="text-center"><?php echo $row['id'] ?></td>
													<td>
														<a href="admin/category/update/<?php echo $row['id'] ?>"><?php echo $row['name'] ?>
														(<?php $total=$this->Mproduct->product_count_parentid($row['id']); echo $total; ?>)
													</a>	
												</td>
												<td>
													<?php  
													$catid = $this->Mcategory->category_parentid($row['id']);
													$name = $this->Mcategory->category_name_parent($catid);
													if($catid == 0)
													{
														echo '';
													}
													else
													{
														echo $name;
													}
													?>
												</td>
												<td class="text-center">
													<?php echo $row['created_at'] ?>
												</td>
												<td class="text-center">
													<a href="admin/category/status/<?php echo $row['id'] ?>">
														<?php if($row['status']==1):?>
															<span class="glyphicon glyphicon-ok-circle mauxanh18"></span>
															<?php else: ?>
																<span class="glyphicon glyphicon-remove-circle maudo"></span>
															<?php endif; ?>
														</a>
													</td>
													<?php
													if($user['role']==1){
														echo '<td class="text-center">
														<a class="btn btn-success btn-xs" href="admin/category/update/'.$row['id'] .'" role = "button">
														<span class="glyphicon glyphicon-edit"></span>Sửa
														</a>
														</td>';
													}
													?>
													
													<td class="text-center">
														<a class="btn btn-danger btn-xs" href="admin/category/trash/<?php echo $row['id'] ?>" onclick="return confirm('Xác nhận xóa loại sản phẩm này ?')" role = "button">
															<span class="glyphicon glyphicon-trash"></span>Xóa
														</a>
													</td>
												</tr>
											<?php endforeach; ?>
										</tbody>
									</table>
								</div>
								<div class="row">
									<div class="col-md-12 text-center">
										<ul class="pagination">
											<?php echo $strphantrang ?>
										</ul>
									</div>
								</div>
								<!-- /.ND -->
							</div>
						</div><!-- ./box-body -->
					</div><!-- /.box -->
				</div>
				<!-- /.col -->
			</div>
			<!-- /.row -->
		</section>
		<!-- /.content -->
	</div><!-- /.content-wrapper -->