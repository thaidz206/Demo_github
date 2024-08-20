<style>
	.product-v-desc h3:first-child {
    text-transform: uppercase;
    color: black;
    font-weight: 600;
    border-bottom: 3px solid blue;
    padding-bottom: 5px;
}


.product-view-price-old .sale-flag {
    font-size: 12px;
    color: #fff;
    font-family: Arial;
    text-decoration: none;
    background: blue;
    margin-left: 5px;
    padding: 2px 3px;
    vertical-align: top;
}

.fk-tit {
    padding: 4px 10px;
    font-weight: bold;
    color: #fff;
    background: blue;
    border-bottom: 1px dashed #d7d7d7;
}
</style>
<style>
         .product-gallery {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .main-image img {
            width: 500px;
            height: auto;
            border: 2px solid #ddd; /* Add a border around the main image */
            padding: 5px; /* Add padding inside the border */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Add a subtle shadow */
            border-radius: 5px; /* Rounded corners */
        }

        .thumbnails {
            display: flex;
            justify-content: center;
            margin-top: 10px;
        }

        .thumbnails img {
            width: 50px;
            height: auto;
            margin: 0 5px;
            cursor: pointer;
            border: 2px solid #ddd; /* Add a border around thumbnails */
            padding: 5px; /* Add padding inside the border */
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1); /* Add a subtle shadow */
            border-radius: 5px; /* Rounded corners */
            transition: border-color 0.3s ease; /* Smooth transition for border color */
        }

        .thumbnails img:hover, .thumbnails img.active {
            border-color: #007bff; /* Change border color on hover and when active */
        }
    </style>
<section id="product-detail">
	<div class="container" style="background-color: white;"> 
		<div class="products-wrap">
			<form action="" method="post" id="ProductDetailsForm">
			<?php if($row): ?>
    <div class="breadcrumbs">
        <ul>
            <li class="home">
                <a href="trang-chu" title="Go to Home Page">Trang chủ</a>
                <i class="fa fa-angle-right"></i>
            </li>
            <li class="category3">
                <a href="<?php echo base_url() ?>/san-pham/<?php $link = $this->Mcategory->category_link($row['catid']); echo $link; ?>" title=""><?php $name = $this->Mcategory->category_name($row['catid']); echo $name; ?></a>
                <i class="fa fa-angle-right"></i>
            </li>
            <li class="product"><?php echo $row['name'] ?></li>
        </ul>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 listimg-desc-product">
		<div class="product-gallery">
			<div class="main-image">
				<?php 
					// Display the main avatar image
					echo '<img id="current" src="public/images/products/' . $row['avatar'] . '" alt="Main Image">';
				?>
			</div>
			<div class="thumbnails">
				<?php 
					// Display additional images if available
					if (!empty($row['img'])) {
						$additional_images = explode('#', $row['img']);
						foreach ($additional_images as $image) {
							echo '<img src="public/images/products/' . $image . '" alt="Thumbnail" onclick="changeImage(this)" style="margin-top: 10px;">';
						}
					}
				?>
			</div>
		</div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
        <div class="product-view-content">
            <div class="product-view-name">
                <h1><?php echo $row['name'] ?></h1>
            </div>
            <div class="product-view-price">
                <div class="pull-left">
                    <span class="price-label">Giá bán:</span>
                    <span class="price"><?php echo number_format($row['price_sale']) ?>₫</span>
                </div>
                <?php if($row['price_sale'] > 0 && $row['sale'] > 0): ?>
                    <div class="product-view-price-old">
                        <span class="price"><?php echo $row['price'] ?>₫</span>
                        <?php 
                        // Calculate discount percentage
                        $original_price = $row['price'];
                        $sale_price = $row['price_sale'];
                        $discount_percentage = (($original_price - $sale_price) / $original_price) * 100;
                        ?>
                        <span class="sale-flag">-<?php echo round($discount_percentage) ?>%</span>
                    </div>
                <?php endif; ?>
            </div>
            <div class="product-status">
                <p style="float: left; margin-right: 10px;">Loại: <?php $name = $this->Mcategory->category_name($row['catid']); echo $name; ?></p>
                <p>| Tình trạng: <?php if($row['number'] - $row['number_buy'] == 0 || $row['status'] == 0) echo 'Hết hàng'; else echo 'Còn hàng' ?></p>
            </div>
            <div class="product-view-desc">
                <h4>Mô tả:</h4>
                <p><?php echo $row['sortDesc'] ?></p>
            </div>
            <div class="actions-qty">
                <?php
                if($row['number'] - $row['number_buy'] == 0 || $row['status'] == 0) {
                    echo '<h2 style="color:red;">Ngừng kinh doanh</h2>';
                } else {
                    echo '<div class="actions-qty__button">
                        <button class="button btn-cart add_to_cart_detail detail-button" 
                        title="Mua ngay" type="button" aria-label="Mua ngay" class="fa fa-shopping-cart" 
                        onclick="onAddCart('.$row['id'].')"> Mua ngay</button>
                    </div>';
                }
                ?>
            </div>
            <div class="fk-boxs" id="km-all" data-comt="False">
                <div id="km-detail">
                    <p class="fk-tit">Ưu đã khi mua hàng</p>
                    <div class="fk-main">
                        <div class="fk-sales">
                            <ul>
                                <li>Đăng kí thành viên mới khi mua hàng được mã giảm giá 50.000 VNĐ( <a href="dang-ky">Đăng kí</a> )</li>
                            </ul>
                            <ul>
                                <li>Nhận ưu đãi mã giảm giá tại đây <a href="#" target="_blank">Xem ngay</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="product-v-desc col-md-10 col-12 col-xs-12">
        <h3>MÔ TẢ CHI TIẾT SẢM PHẨM</h3>
        
        <?php echo $row['detail'] ?>
    </div>
    <div class="product-comment product-v-desc">
        <h3>Bình luận</h3>
        <div class="col-sm-12 col-xs-12 col-md-12 col-lg-12">
            <div class="fb-comments" data-href="<?php echo base_url() ?><?php echo $row['alias'] ?>" data-numposts="5"></div>
        </div>
    </div>
    <div class="product-comment product-v-desc product">
        <h3>Sản phẩm liên quan</h3>
        <?php
        $list_spcungloai = $this->Mproduct->product_cungloai($row['catid'], $row['id'], 5);
        if(count($list_spcungloai) > 0): ?>
            <div class="product-container">
                <div class="owl-carousel-product owl-carousel owl-theme">
                    <?php foreach ($list_spcungloai as $sp): ?>
                        <div class="item">
                            <div class="product-lt">
                                <div class="lt-product-group-image">
                                    <a href="<?php echo $sp['alias'] ?>" title="<?php echo $sp['name'] ?>">
                                        <img class="img-p" src="public/images/products/<?php echo $sp['avatar'] ?>" alt="">
                                    </a>
                                    <?php if($sp['sale'] > 0): ?>
                                        <div class="giam-percent">
                                            <span class="text-giam-percent">Giảm <?php echo $sp['sale'] ?>%</span>
                                        </div>
                                    <?php endif; ?>
                                </div>
                                <div class="lt-product-group-info">
                                    <a href="<?php echo $sp['alias'] ?>" title="<?php echo $sp['name'] ?>" style="text-align: left;">
                                        <h3><?php echo $sp['name'] ?></h3>
                                    </a>
                                    <div class="price-box">
                                        <?php if($sp['sale'] > 0): ?>
                                            <p class="old-price">
                                                <span class="price"><?php echo(number_format($sp['price'])); ?>₫</span>
                                            </p>
                                            <p class="special-price">
                                                <span class="price"><?php echo(number_format($sp['price_sale'])); ?>₫</span>
                                            </p>
                                        <?php else: ?>
                                            <p class="old-price">
                                                <span class="price" style="color: #fff"><?php echo(number_format($sp['price'])); ?>₫</span>
                                            </p>
                                            <p class="special-price">
                                                <span class="price"><?php echo(number_format($sp['price'])); ?>₫</span>
                                            </p>
                                        <?php endif; ?>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php else: ?>
            <h4>Chưa có sản phẩm cùng loại</h4>
        <?php endif; ?>
    </div>
<?php endif; ?>

</section>
			<script>

				function onAddCart(id){
					var strurl="<?php echo base_url();?>"+'/sanpham/addcart';
					jQuery.ajax({
						url: strurl,
						type: 'POST',
						dataType: 'json',
						data: {id: id},
						success: function(data) {
							document.location.reload(true);
							alert('Thêm sản phẩm vào giỏ hàng thành công !');
						}
					});
				}
			</script>
 <script>
        function changeImage(element) {
            // Get the main image element
            const mainImage = document.getElementById('current');
            // Set the main image source to the clicked thumbnail source
            mainImage.src = element.src;

            // Remove the active class from all thumbnails
            const thumbnails = document.querySelectorAll('.thumbnails img');
            thumbnails.forEach(img => img.classList.remove('active'));

            // Add the active class to the clicked thumbnail
            element.classList.add('active');
        }
    </script>