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

	.btn-danger {
		background: linear-gradient(to right, #ff6f69, #ffcc5c);
	}

	.btn-danger:hover {
		background: linear-gradient(to right, #ffcc5c, #ff6f69);
	}

</style>
<div class="content-wrapper">
	<section class="content-header">
		<h1><i class="glyphicon glyphicon-list-alt"></i> Danh sách đơn hàng</h1>
		<div class="breadcrumb">
			<a class="btn btn-primary btn-sm" href="admin/orders/recyclebin" role="button">
				<span class="glyphicon glyphicon-trash"></span> Đơn hàng đã lưu (<?php $total=$this->Morders->orders_trash_count(); echo $total; ?>)
			</a>
		</div>
	</section>
	<section class="content">
		<div class="row">
			<div class="col-md-12">
				<div class="box" id="view">
					<div class="box-header with-border">
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
									<table class="table table-hover table-bordered" style="font-size: 0.9em;">
										<thead>
											<tr>
												<th class="text-center" style="width:20px">Code</th>
												<th>Khách hàng</th>
												<th>Điện thoại</th>
												<th>Tổng tiền</th>
												<th>Ngày tạo hóa đơn</th>
												<th class="text-center">Trạng thái</th>
												<th class="text-center" colspan="2">Xử lý đơn</th>
												<th class="text-center" colspan="2">Thao tác</th>
											</tr>
										</thead>
										<tbody>
											<?php foreach ($list as $val):
												$name = $this->Mcustomer->customer_detail($val['customerid']);
												?>
												<tr>
													<td class="text-center"><?php echo $val['orderCode'] ?></td>
													<td><?php echo $val['fullname']; ?></td>
													<td><?php echo $val['phone']; ?></td>
													<td><?php echo number_format($val['money']); ?>₫</td>
													<td><?php echo $val['orderdate']; ?></td>
													<td style="text-align: center;">
														<?php
														switch ($val['status']) {
															case '0':
															echo 'Đang chờ duyệt';
															break;
															case '1':
															echo 'Đang giao hàng';
															break;
															case '2':
															echo 'Đã giao';
															break;
															case '3':
															echo 'Khách hàng đã hủy';
															break;
															case '4':
															echo 'Nhân viên đã hủy';
															break;
														}
														?>
													</td>
													<td style="text-align: center;">
														<?php if($val['status']==1):?>
															<a class="btn btn-success btn-xs" href="<?php echo base_url() ?>admin/orders/status/<?php echo $val['id'] ?>"  onclick="return confirm('Xác nhận đơn hàng đã giao và thanh toán thành công ?')" role = "button">
																<i class="fa  fa-thumbs-o-up"></i> Xác nhận thanh toán
															</a>
														</div>
														<?php  elseif ($val['status']==0):?>
															<a class="btn btn-default btn-xs" href="<?php echo base_url() ?>admin/orders/status/<?php echo $val['id'] ?>"  onclick="return confirm('Xác nhận gói hàng và chuẩn bị giao hàng ?')" role = "button">
																<i class="fa fa-check-square-o"></i> Duyệt đơn đặt hàng
															</a>
														<?php endif; ?>
														<td>
															<?php if($val['status'] ==0 || $val['status'] ==1): ?>
																<a class="btn btn-danger btn-xs" href="<?php echo base_url() ?>admin/orders/cancelorder/<?php echo $val['id'] ?>"  onclick="return confirm('Xác nhận hủy đơn hàng này ?')" role = "button">
																	<i class="fa fa-save"></i> Hủy đơn
																</a>
															<?php endif;?>
														</td>
													</td>
													<td class="text-center">
														<!-- /Xem -->
														<a class="btn btn-info btn-xs" href="<?php echo base_url() ?>admin/orders/detail/<?php echo $val['id'] ?>" role = "button">
															<span class="glyphicon glyphicon-eye-open"></span> Xem 
														</a>
														<!-- /Xóa -->
														<a class="btn bg-olive btn-xs" href="<?php echo base_url() ?>admin/orders/trash/<?php echo $val['id'] ?>"  onclick="return confirm('Xác nhận lưu đơn hàng này ?')" role = "button">
															<i class="fa fa-save"></i> Lưu đơn
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
	</div>