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
		background: linear-gradient(to right, #ff7e5f, #feb47b);
		-webkit-background-clip: text;
		-webkit-text-fill-color: transparent;
		font-weight: bold;
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

	/* Table */
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

	/* Button Styling */
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

</style>
<div class="content-wrapper">
	<section class="content-header">
		<h1><i class="glyphicon glyphicon-text-background"></i> Danh sách mã giảm giá</h1>
		<div class="breadcrumb">
			
			<?php
			if($user['role']==1){
				echo '<a class="btn btn-primary btn-sm" href="'.base_url().'admin/coupon/insert" role="button">
				<span class="glyphicon glyphicon-plus"></span> Thêm mới
			</a>';
			}
			?>
			<a class="btn btn-primary btn-sm" href="<?php echo base_url()?>admin/coupon/recyclebin" role="button">
				<span class="glyphicon glyphicon-trash"></span> Thùng rác(<?php $total=$this->Mcoupon->coupon_trash_count(); echo $total; ?>)
			</a>
		</div>
	</section>
	<!-- Main coupon -->
	<section class="content">
		<div class="row">
			<div class="col-md-12">
				<div class="box" id="view">
					<div class="box-header with-border">
					<!-- /.box-header -->
					<?php  if($this->session->userdata('message')):?>
						<div class="alert alert-success">
							<?php echo $this->session->userdata('message'); ?>
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
						</div>
					<?php endif; ?>
					<div class="box-body">
						<?php  if($this->session->flashdata('success')):?>
	                        <div class="row">
	                            <div class="alert alert-success">
	                                <?php echo $this->session->flashdata('success'); ?>
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
											<th class="text-center">Mã giảm giá</th>
											<th class="text-center">Số tiền giảm</th>
											<th class="text-center"">Số tiền đơn hàng áp dụng tối thiểu</th>
											<th class="text-center"">Số lần giới hạn nhập</th>
											<th class="text-center"">Hạn nhập</th>
											<th class="text-center"">Trạng thái</th>
											<th class="text-center" colspan="2">Thao tác</th>
										</tr>
									</thead>
									<tbody>
									<?php foreach ($list as $row):?>
										<tr>
											<td class="text-center"><?php echo $row['id'] ?></td>
											<td><?php echo $row['code']?></td>
											<td><?php echo $row['discount']?></td>
											<td><?php echo number_format($row['payment_limit'])?>đ</td>
											<td><?php if($row['orders'] == 1)
											echo $row['limit_number'];
											else
												echo'Mã giảm giá tự động';
											?>
												
											</td>
											<td><?php echo $row['expiration_date']?></td>
											<td class="text-center">
												<a href="<?php echo base_url() ?>admin/coupon/status/<?php echo $row['id'] ?>">
													<?php if($row['status']==1):?>
														<span class="glyphicon glyphicon-ok-circle mauxanh18"></span>
													<?php else: ?>
														<span class="glyphicon glyphicon-remove-circle maudo"></span>
													<?php endif; ?>
												</a>
											</td>
											<td class="text-center">
												<?php
												if($user['role']==1){
													echo '<a class="btn btn-success btn-xs" href="'.base_url().'admin/coupon/update/'.$row['id'].'" role = "button">
													<span class="glyphicon glyphicon-edit"></span>Sửa
												</a>';
												}else{
													echo '<p class="fa fa-lock" style="color:red"> Không thể sửa</p>';
												}
												?>
											</td>
											<td class="text-center">
												<a class="btn btn-danger btn-xs" href="<?php echo base_url() ?>admin/coupon/trash/<?php echo $row['id'] ?>"  onclick="return confirm('Xác nhận Xóa Mã giảm giá này ?')" role = "button">
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
<!-- /.coupon -->
</div><!-- /.coupon-wrapper -->