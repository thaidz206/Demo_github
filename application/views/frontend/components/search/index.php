<section id="product-all" class="collection">
    <div class="banner-product">
        <div class="container">
        </div>
    </div>
    <div class="slider">
        <div class="container">
            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                <div class="list-menu pull-left col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <?php $this->load->view('frontend/modules/category'); ?>
                </div>
                <?php $this->load->view('frontend/modules/product-sale'); ?>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 product-content">
                <div class="product-wrap">
                    <div class="collection__title" style="background-color:#ccc;">
                        <?php echo '<h3>Tìm được '.$count.' kết quả với từ khóa : <span style="color: red;">'.$key.'</span></h3>'; ?>
                        <div class="collection-filter" id="list-product">
                            <div class="category-products clearfix">
                                <div class="products-grid clearfix" style="border-top: none; border-left: none;">
                                    <?php if(count($list)==0): ?>
                                        <p style="color:black" class="no-products">Không có sản phẩm !</p>
                                    <?php else : ?>
                                        <?php foreach ($list as $sp) :?>
                                            <div class="col-md-3 col-lg-3 col-xs-6 col-6">
                                                <div class="product-lt">
                                                    <div class="lt-product-group-image">
                                                        <a href="<?php echo $sp['alias'] ?>" title="<?php echo $sp['name'] ?>">
                                                            <img style="width: 170px; height: 340px;" class="img-p" src="public/images/products/<?php echo $sp['avatar'] ?>" alt="">
                                                        </a>
                                                        <?php 
                                                        if($sp['sale'] > 0) : 
                                                            $original_price = $sp['price'];
                                                            $sale_price = $sp['price_sale'];
                                                            $discount_percentage = (($original_price - $sale_price) / $original_price) * 100;
                                                        ?>
                                                            <div class="giam-percent">
                                                                <span style="font-size: 10px;" class="text-giam-percent"><?php echo '-'. round($discount_percentage) .'% '; ?></span>
                                                            </div>
                                                        <?php endif; ?>
                                                    </div>
                                                    <div class="lt-product-group-info">
                                                        <a style="text-decoration: none; color: #6c757d;" href="<?php echo $sp['alias'] ?>" title="<?php echo $sp['name'] ?>">
                                                            <h3><?php echo $sp['name'] ?></h3>
                                                        </a>
                                                        <div class="price-box">
                                                            <?php if($sp['sale'] > 0) : ?>
                                                                <p class="old-price">
                                                                    <span class="price"><?php echo(number_format($sp['price'])); ?>₫</span>
                                                                </p>
                                                                <p class="special-price">
                                                                    <span class="price"><?php echo(number_format($sp['price_sale'])); ?>₫</span>
                                                                </p>
                                                            <?php else: ?>
                                                                <div class="price-container" style="margin: 0; padding: 0;">
                                                                    <p class="special-price-1">
                                                                        <?php echo(number_format($sp['price'])); ?>₫
                                                                    </p>
                                                                </div>
                                                            <?php endif;?>
                                                        </div>
                                                        <div class="clear"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                    <div class="text-center pull-right">
                                        <ul class="pagination">
                                            <?php echo $strphantrang; ?>
                                        </ul>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script type="text/javascript">
    function onAddCart(id){
        var strurl = "<?php echo base_url();?>"+'/sanpham/addcart';
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

    function sortby(option){
        var strurl = "<?php echo base_url();?>"+'/sanpham/category';
        jQuery.ajax({
            url: strurl,
            type: 'POST',
            dataType: 'json',
            data: {'sapxep-category': option},
            success: function(data) {
                $('#list-product').html(data);
            },
            error: function(error) {
                console.log(JSON.stringify(error));
            }
        });
    }
</script>

<style>
    .lt-product-group-info h3 {
        font-size: 13px;
        color: #6C7571;
        font-weight: 700;
        height: auto;
    }
    .lt-product-group-info h3:hover {
        color: black;
    }
    .lt-product-group-image {
        position: relative;
        overflow: hidden; /* Đảm bảo ảnh không vượt quá khung */
    }
    .lt-product-group-image img {
        transition: transform 0.5s ease;
    }
    .lt-product-group-image:hover img {
        transform: scale(1.1); /* Zoom ảnh khi hover */
    }
    /* Định dạng cho phân trang */
    .pagination {
        display: inline-block;
        padding: 0;
        margin: 20px 0;
    }
    .pagination li {
        display: inline;
    }
    .pagination li a {
        color: #333;
        float: left;
        padding: 8px 16px;
        text-decoration: none;
        transition: background-color .3s;
        border: 1px solid #ddd;
        margin: 0 4px;
    }
    .pagination li a.active {
        background-color: #ff6f61;
        color: white;
        border: 1px solid #ff6f61;
    }
    .pagination li a:hover:not(.active) {
        background-color: #ddd;
    }
    .product-lt {
        background: #fff;
        border: solid 1px #eee;
        position: relative;
        border-left: none;
        border-top: none;
        height: 329px;
        border-radius: 10px;
    }
    .price-box {
        margin: 22px 0;
        display: flex;
        justify-content: space-around;
        gap: 40px;
    }
    .price-container {
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 0;
        padding: 0;
        width: 194px;
        text-align: center; /* Đảm bảo nội dung văn bản bên trong thẻ p được căn giữa */
    }
    .special-price-1 {
        font-size: 14px;
        font-weight: 700;
        color: #e11b1e;
        margin: 0;
        padding: 0;
    }
</style>
