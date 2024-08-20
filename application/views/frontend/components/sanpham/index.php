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
    /* float: left; */
    display: flex;
    justify-content: space-around;
    gap: 40px;
}

.price-container {
    display: flex;
    justify-content: center; /* Căn giữa theo chiều ngang */
    align-items: center; /* Căn giữa theo chiều dọc */
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
<section id="product-all" class="collection">
	<div class="banner-product">
		<div class="container">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<!-- <img src="public/images/sp.png"> -->
			</div>
		</div>
	</div>
	<div class="slider">
		<div class="container">
            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 list-menu pull-left">
                    <?php $this->load->view('frontend/modules/category'); ?>
                </div>
                <?php $this->load->view('frontend/modules/product-sale'); ?>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 product-content">
             <div class="product-wrap">
               <div class="collection__title" style="background-color:#ccc;">
                   <h1 style="border-bottom: none;"><span>Danh sách tất cả sản phẩm</span></h1>
                   <div id="sort-by" class="hidden-xs">
                      <label class="left hidden-xs" for="sort-select">Sắp xếp: </label>
                    <!-- Sắp xếp -->
                      <form class="form-inline form-viewpro">
                        <div class="form-group">
                            <?php 
                            $html_list="";
                            $html_list.='<select id ="sortControl" class = "sort-by form-control input-sm" onchange="sortby(this.value)">';
                            if($this->session->userdata('sortby')){
                                $data = $this->session->userdata('sortby');
                                $sort = $data[0].'-'.$data[1];
                                if($sort == 'number_buy-desc'){
                                    $html_list.='<option value="number_buy-desc" selected>Bán chạy nhất</option>';
                                }else{
                                    $html_list.='<option value="number_buy-desc">Bán chạy nhất</option>';
                                }
                                if($sort == 'name-asc'){
                                    $html_list.='<option value="name-asc" selected>A → Z</option>';
                                }else{
                                    $html_list.='<option value="name-asc" >A → Z</option>';
                                }
                                if($sort == 'name-desc'){
                                    $html_list.='<option value="name-desc" selected>Z → A</option>';
                                }else{
                                    $html_list.='<option value="name-desc">Z → A</option>';
                                }
                                if($sort == 'price-asc'){
                                    $html_list.='<option value="price-asc" selected>Giá tăng dần</option>';
                                }else{
                                    $html_list.='<option value="price-asc">Giá tăng dần</option>';
                                }
                                if($sort == 'price-desc'){
                                    $html_list.='<option value="price-desc" selected>Giá giảm dần</option>';
                                }else{
                                    $html_list.='<option value="price-desc">Giá giảm dần</option>';
                                }
                                if($sort == 'created-desc'){
                                    $html_list.='<option value="created-desc" selected>Hàng mới nhất</option>';
                                }else{
                                    $html_list.='<option value="created-desc">Hàng mới nhất</option>';
                                }
                                if($sort == 'created-asc'){
                                    $html_list.='<option value="created-asc" selected>Hàng cũ nhất</option>';
                                }else{
                                    $html_list.='<option value="created-asc">Hàng cũ nhất</option>';
                                }
                            }else{
                               $html_list.='<option value="number_buy-desc">Bán chạy nhất</option>';
                                $html_list.='<option value="name-asc">A → Z</option>';
                                $html_list.='<option value="name-desc">Z → A</option>';
                                $html_list.='<option value="price-asc">Giá tăng dần</option>';
                                $html_list.='<option value="price-desc">Giá giảm dần</option>';
                                $html_list.='<option value="created-desc">Hàng mới nhất</option>';
                                $html_list.='<option value="created-desc">Hàng cũ nhất</option>';
                            }
                            $html_list.='</select>';
                            echo $html_list;
                            ?>
                        </div>
                    </form>
                </div>
                <div class="collection-filter" id="list-product">
    <div class="category-products clearfix">
        <div class="products-grid clearfix" style="border-top: none; border-left: none;">
            <?php if(count($list) == 0): ?>
                <p>Không có sản phẩm!</p>
            <?php else: ?>
                <?php foreach ($list as $sp): ?>
                    <div class="col-md-3 col-lg-3 col-xs-6 col-6">
                        <div class="product-lt">
                            <div class="lt-product-group-image">
                                <a href="<?php echo $sp['alias']; ?>" title="<?php echo $sp['name']; ?>">
                                    <img  style="width: 135px; height: 135px;" class="img-p" src="public/images/products/<?php echo $sp['avatar']; ?>" alt="<?php echo $sp['name']; ?>">
                                </a>
                                <?php 
                                $original_price = $sp['price'];
                                $sale_price = $sp['price_sale'];
                                $discount_percentage = (($original_price - $sale_price) / $original_price) * 100; 
                                ?>
                                <?php if($sp['sale'] > 0): ?>
                                    <div class="giam-percent">
                                        <span class="text-giam-percent"> <?php echo '-'. round($discount_percentage) .'% '; ?></span>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <div class="lt-product-group-info">
                                <a href="<?php echo $sp['alias']; ?>" title="<?php echo $sp['name']; ?>">
                                    <h3><?php echo $sp['name']; ?></h3>
                                </a>
                                <div class="price-box">
                                    <?php if($sp['sale'] > 0): ?>
                                        <p class="old-price">
                                            <span class="price"><?php echo number_format($sp['price']); ?>₫</span>
                                        </p>
                                        <p class="special-price">
                                            <span class="price"><?php echo number_format($sp['price_sale']); ?>₫</span>
                                        </p>
                                    <?php else: ?>
                                        <p class="special-price-1">
                                            <?php echo number_format($sp['price']); ?>₫
                                        </p>
                                    <?php endif; ?>
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
    function sortby(option){
        var strurl="<?php echo base_url();?>"+'/sanpham/index';
        jQuery.ajax({
            url: strurl,
            type: 'POST',
            dataType: 'json',
            data: {'sapxep': option},
            success: function(data) {
                $('#list-product').html(data);
            }
        });
    }
</script>
