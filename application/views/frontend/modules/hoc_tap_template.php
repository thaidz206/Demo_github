<!-- hoc_tap_template.php -->
<style>
    @keyframes moveText {
    0% {
        transform: translateX(0);
    }
    50% {
        transform: translateX(20px); /* Khoảng cách di chuyển */
    }
    100% {
        transform: translateX(0);
    }
}

.move-text {
    display: inline-block;
    animation: moveText 3s infinite; /* Thời gian di chuyển và lặp lại */
    text-transform: uppercase;
    font-weight: bold;
}
.center-content {
    margin-top: 10px;
    text-align: center;
}

.center-content h2 {
    display: inline-block;
    margin: 0 auto; /* Canh giữa theo chiều ngang */
}

.sub-category {
    list-style-type: none; /* Loại bỏ dấu chấm của danh sách */
    padding: 0; /* Loại bỏ padding mặc định */
}

.sub-category li {
    margin-bottom: 5px; /* Khoảng cách giữa các mục danh sách */
    
}

.sub-category li a {
    text-decoration: none; /* Loại bỏ gạch chân của liên kết */
    color: #333; /* Màu chữ */
    display: block; /* Hiển thị là block để có thể tùy chỉnh kích thước và padding */
    padding: 8px 10px; /* Padding cho mỗi mục */
    border-radius: 5px; /* Bo góc cho mỗi mục */
    transition: background-color 0.3s; /* Hiệu ứng chuyển đổi màu nền */
    font-size: 13px;
}

.sub-category li a:hover {
    background-color: #f0f0f0; /* Màu nền khi di chuột qua */
    color: red;
}

</style>
<div class="list-product but-viet" style="background-color: white;">
    <div class="content-2" >
       <div class="baner" style="padding-top: 10px;">
                <img src="<?php echo base_url() ?>public/images/banner/banner_dungcuhoctap.png?>" class="d-block w-100">
        </div>
    </div>
    <div class="list-header-z" style="background-color: #fce6c4; margin-top: -10px;">
        <div class="center-content">
            <h2 class="move-text">
            <img src="<?php echo base_url() ?>/public/images/hot.gif" alt=""> 
            <?php echo 'Sản phẩm '. $category['name']?> nổi bật 
            <img src="<?php echo base_url() ?>/public/images/hot.gif" alt="">
          </h2>
        </div>
        <b>
            <ul class="sub-category">
                <?php foreach ($subCategory as $rowSubCategory) :?>
                <li>
                    <a href="san-pham/<?php echo $rowSubCategory['link'] ?>"
                       title="<?php echo $rowSubCategory['name'] ?>"
                       class="ws-nw overflow ellipsis"
                    >
                        <?php echo $rowSubCategory['name'] ?>
                    </a>
                </li>
                <?php endforeach; ?>
            </ul>
        </b>
    </div>

    <?php ?>
        <div class="carousel-container" >
           
           <div class="carousel" style="background-color: #fce6c4;  margin-bottom: 10px;">
               <div class="carousel-slide khuyen-mai"> <!-- Thêm lớp khuyen-mai -->
                   <?php 
                   
                    foreach ($listProducts as $sp) :
                      
                   
                   ?>
                   <div class="product-card" style="    width: 200px;
                                                           max-width: 250px;
                                                           margin: 10px;
                                                           padding: 10px;
                                                           background: #fff;
                                                           box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
                                                           text-align: center;
                                                           border: 1px solid white;
                                                           border-radius: 10px; ">
                       <a style="text-decoration: none;"  href="<?php echo $sp['alias'] ?>" title="<?php echo $sp['name'] ?>">
                       <div class="sale-button">
                            <?php 
                            // Tính phần trăm giảm giá
                            $original_price = $sp['price'];
                            $sale_price = $sp['price_sale'];
                            $discount_percentage = (($original_price - $sale_price) / $original_price) * 100;
                            // Hiển thị phần trăm giảm giá
                            echo '-'. round($discount_percentage) .'% ';
                            ?>
                         </div>
                           <div class="pro-img-sale">
                               <img width="202px" height="202px" src="<?php echo base_url() ?>public/images/products/<?php echo $sp['avatar'] ?>" class="">
                           </div>
                           <div class="d_desc">
                               <p class="desc_name"><?php echo $sp['name'] ?></p>
                           </div>
                           <div class="row_price">
                             
                                   <p class="special-pri">
                                       <span class="pri"><?php echo(number_format($sp['price_sale'])); ?>₫ </span>
                                   </p>
                                   <p class="old-pri">
                                       <span class="pri"><?php echo(number_format($sp['price'])); ?>₫</span>
                                   </p>   
                           </div>
                       </a>
                   </div>
                   
                   <?php endforeach; ?>
               </div>
           </div>
         
       </div>
</div>

