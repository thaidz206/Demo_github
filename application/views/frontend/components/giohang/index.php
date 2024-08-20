<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<style>
	.link-sp:hover
	{
		color:black;
	}

	.cart-index h2 {
    font-size: 28px;
    font-weight: bold;
    margin-bottom: 20px;
    text-align: center;
}

.table-list-product {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 20px;
}

.table-list-product th, .table-list-product td {
    padding: 15px;
    border: 1px solid #ddd;
    text-align: center;
}

.table-list-product th {
    background-color: #f4f4f4;
    font-weight: bold;
}

.table-list-product td {
    background-color: #fff;
}

.table-list-product .img-product-cart img {
    max-width: 100px;
    height: auto;
}

.table-list-product .remove {
    color: #ff0000;
    cursor: pointer;
}

.table-list-product .remove:hover {
    color: #d9534f;
}

.btn {
    display: inline-block;
    padding: 10px 20px;
    background-color: #28a745;
    color: #fff;
    text-align: center;
    border: none;
    border-radius: 4px;
    text-decoration: none;
    cursor: pointer;
}

.btn:hover {
    background-color: #218838;
}

.total-price {
    width: 100%;
    border: 1px solid #ececec;
}

.total-price td {
    padding: 10px;
    text-align: left;
}

.total-price tr {
    background-color: #f4f4f4;
}

.total-price tr td:first-child {
    font-weight: bold;
}

.btn-next-checkout {
    display: inline-block;
    padding: 10px 20px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 4px;
    text-align: center;
    text-decoration: none;
    cursor: pointer;
    margin-top: 20px;
    width: 100%;
}

.btn-next-checkout:hover {
    background-color: #0056b3;
}

.cart-info {
    text-align: center;
    padding: 50px 0;
}

.cart-info .btn {
    margin-top: 20px;
}
</style>
<div class="row content-cart" style="height: 100vh;">
        <div class="container" style="background-color: white;">
            <?php if($this->session->userdata('cart')):
                $cart = $this->session->userdata('cart');
                ?>
                <form action="" method="post" id="cartformpage">
                    <div class="cart-index">
                    <h2>Chi tiết giỏ hàng</h2>
                        <div class="tbody text-center" style="z-index: 1000;">
                            <div class="col-xs-12 col-12 col-sm-12 col-md-8 col-lg-8">
                                <table class="table table-list-product"  >
                                    <thead>
                                        <tr >
                                            <th style="background-color: #007bff;">Hình ảnh</th>
                                            <th style="background-color: #007bff;" > Tên sản phẩm</th>
                                            <th style="background-color: #007bff;" class="text-center">Đơn giá</th>
                                            <th style="background-color: #007bff;" class="text-center">Số lượng</th>
                                            <th style="background-color: #007bff;" class="text-center">Thành tiền</th>
                                            <th style="background-color: #007bff;" class="text-center">Xóa</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($cart as $key => $value) :
                                            $row = $this->Mproduct->product_detail_id($key);
                                            ?>
                                            <tr>
                                                <td class="img-product-cart">
                                                    <a href="<?php echo $row['alias'] ?>">
                                                        <img src="public/images/products/<?php echo $row['avatar'] ?>" alt="<?php echo $row['name'] ?>">
                                                    </a>
                                                </td>
                                                <td>
                                                    <a cla style="text-decoration: none;" href="<?php echo $row['alias'] ?>" class="pull-left link-sp"><?php echo $row['name'] ?></a>
                                                </td>
                                                <td>
                                                    <span class="amount">
                                                        <?php 
                                                        if($row['price_sale'] > 0){
                                                            echo (number_format($row['price_sale'])).' VNĐ';
                                                        }else{
                                                            echo (number_format($row['price'])).' VNĐ';
                                                        }
                                                        ?>
                                                    </span>
                                                </td>
                                                <td>
                                                    <div class="quantity clearfix">
                                                        <input name="quantity" id="<?php echo $row['id'] ?>" class="form-control" type="number" value="<?php echo $value ?>" min="1" max="1000" onchange="onChangeSL(<?php echo $row['id'] ?>)">
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="amount">
                                                        <?php 
                                                        if($row['price_sale'] > 0){
                                                            echo (number_format($row['price_sale']*$value)).' VNĐ';
                                                        }else{
                                                            echo (number_format($row['price'] * $value)).' VNĐ';
                                                        }
                                                        ?>
                                                    </span>
                                                </td>
                                                <td>
                                                    <a class="remove" title="Xóa" onclick="onRemoveProduct(<?php echo $row['id']; ?>)"><i class="fas fa-trash-alt"></i></a>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                                <button class="btn" onclick="window.location.href='san-pham'"> <a href="<?php echo base_url() ?>san-pham">Tiếp tục mua hàng</a></button>
                            </div>
                            <?php $total = 0; ?>
                            <?php foreach ($cart as $key => $value) : 
                                $row = $this->Mproduct->product_detail_id($key);?>
                                <?php
                                if($row['price_sale'] > 0)
                                    $sum = $row['price_sale'] * $value;
                                else
                                    $sum = $row['price'] * $value;
                                $total += $sum;
                                ?>	
                            <?php endforeach; ?>
                            <div class="col-xs-12 col-sm-12 col-md-4"style="background-color: white;">
                                <div class="clearfix btn-submit" style="padding-left: 10px;margin-top: 20px;">
                                    <table class="table total-price" >
                                        <tbody>
                                            <tr>
                                                <td>Tổng tiền</td>
                                                <td><strong><?php echo (number_format($total)).' VNĐ'; ?></strong></td>
                                            </tr>
                                            <tr>
                                                <td colspan="2"><h5>Mua hàng trực tiếp tại cửa hàng giảm giá 5%</h5></td>
                                            </tr>
                                            <tr>
                                                <td colspan="2"><h5>Nếu đặt online Bạn hãy đồng ý với điều khoản sử dụng & hướng dẫn hoàn trả.</h5></td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">
                                                    <button type="button" onclick="window.location.href='info-order'" class="btn-next-checkout">Đặt hàng</button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            <?php else: ?>
                <div class="cart-info">
                    Chưa có sản phẩm nào trong giỏ hàng !
                    <br>	
                    <button class="btn" onclick="window.location.href='san-pham'"> Tiếp tục mua hàng</button>
                </div>
            <?php endif;?>
        </div>
    </div>	
	<script>
		function onChangeSL(id){
			var sl = document.getElementById(id).value;
			var strurl="<?php echo base_url();?>"+'/sanpham/update';
			jQuery.ajax({
				url: strurl,
				type: 'POST',
				dataType: 'json',
				data: {id: id, sl:sl},
				success: function(data) {
					document.location.reload(true);
				}
			});
		}
		function onRemoveProduct(id){
			var strurl="<?php echo base_url();?>"+'/sanpham/remove';
			jQuery.ajax({
				url: strurl,
				type: 'POST',
				dataType: 'json',
				data: {id: id},
				success: function(data) {
					document.location.reload(true);
					alert('Xóa sản phẩm thành công !!');
				}
			});
		}
	</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
 integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>