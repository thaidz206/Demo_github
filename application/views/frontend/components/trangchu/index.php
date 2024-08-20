<style>
   .popup {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

.popup-content {
    background-color: #fefefe;
    margin: 15% auto; /* 15% from the top and centered */
    padding: 20px;
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
    text-align: center;
}

.popup-content img {
    width: 100%; /* Adjust as needed */
}

.close {
    color: #aaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
}


.carousel-container {
    position: relative;
    width: 100%;
    margin: auto;
    overflow: hidden;
}

.carousel {
    display: flex;
    transition: transform 0.5s ease-in-out;
}

.carousel-slide {
    display: flex;
}

.product-card {
   width: 200px;
    max-width: 250px;
    margin: 10px;
    padding: 10px;
    background: #fff;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    text-align: center;
    border: 1px solid white;
    border-radius: 10px;  
    overflow: hidden; /* Ensure image zoom doesn't overflow */
    position: relative; /* Ensure absolute positioning works relative to this */
}

.product-card img {
    width: 202px;
    height: 202px;
    transition: transform 0.5s ease-in-out; /* Smooth zoom transition */
}

.product-card:hover img {
    transform: scale(1.2); /* Zoom effect on hover */
}

.sale-button {
    background-color: red;
    color: white;
    padding: 5px;
    position: absolute;
    top: 0px;
    left: 3px;
}
.prev, .next {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    background: #ddd;
    border: none;
    padding: 10px;
    cursor: pointer;
}

.prev {
    left: 10px;
}

.next {
    right: 10px;
}



.carousel-slide.khuyen-mai {
    display: flex;
    flex-wrap: wrap;
}
@media (max-width: 768px) {
    .carousel-slide.khuyen-mai .product-card {
        width: calc(50% - 20px); /* Two items per row */
    }
}

@media (max-width: 576px) {
    .carousel-slide.khuyen-mai .product-card {
        width: calc(100% - 20px); /* One item per row */
    }
}



.new-carousel-container {
    position: relative;
    width: 100%; /* Chiều rộng là 100% của phần tử cha */
    margin: auto;
    overflow: hidden;
    background-color: white;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}

.new-carousel {
    display: flex;
    transition: transform 0.5s ease-in-out; /* Smooth scrolling */
}

.new-carousel-slide {
    display: flex;
}

.new-logo-card {
    min-width: 180px;
    margin: 10px;
    padding: 10px;
    text-align: center;
}

.new-logo-card img {
    width: 100%;
    height: auto;
    transition: transform 0.5s ease-in-out;
}

.new-logo-card:hover img {
    transform: scale(1.1);
}

.new-prev, .new-next {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    background: #ddd;
    border: none;
    padding: 10px;
    cursor: pointer;
    border-radius: 50%;
    font-size: 18px;
}

.new-prev {
    left: 10px;
}

.new-next {
    right: 10px;
}


.moving-gradient-text {
    font-size: 50px;
    font-weight: bold;
    background: linear-gradient(90deg, #ddd, #baf5a7, #ffbc0a);
    background-size: 500%;
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    animation: gradient-animation 5s linear infinite;
}

@keyframes gradient-animation {
    0% {
        background-position: 0% 50%;
    }
    50% {
        background-position: 100% 50%;
    }
    100% {
        background-position: 0% 50%;
    }
}


/* Main blog container */
.home-blog {
    margin-top: 20px;
}

.home-blog .container {
    background-color: white;
    padding: 20px;
    border-radius: 5px;
}

.text-center {
    text-align: center;
}

.section-title {
    font-size: 2em;
    color: #007bff;
    margin-bottom: 20px;
}

.section-title img {
    vertical-align: middle;
}

.blog-content {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
}

.blog-content .col-xs-12, .blog-content .col-12, .blog-content .col-sm-6, .blog-content .col-md-4, .blog-content .col-lg-4 {
    flex: 1 1 calc(33.333% - 20px);
    box-sizing: border-box;
}

.latest {
    padding: 20px;
    border: 1px solid #ddd;
    border-radius: 5px;
    transition: box-shadow 0.3s ease;
    background-color: #f9f9f9;
}

.latest:hover {
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.latest a {
    text-decoration: none;
    color: inherit;
}

.tempvideo img {
    width: 100%;
    height: auto;
    border-radius: 5px;
    transition: transform 0.3s ease;
}

.tempvideo img:hover {
    transform: scale(1.05);
}

.latest h3 {
    color: #333;
    font-size: 1.2em;
    margin-top: 15px;
    transition: color 0.3s ease;
}

.latest h3:hover {
    color: #007bff;
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .blog-content .col-xs-12, .blog-content .col-12, .blog-content .col-sm-6, .blog-content .col-md-4, .blog-content .col-lg-4 {
        flex: 1 1 100%;
    }
}


.desc_name {
    font-size: 18px;
    font-weight: 700;
    opacity: 0.8;
    display: -webkit-box;
    -webkit-box-orient: vertical;
    -webkit-line-clamp: 2;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: normal;
    color: #6c757d;
}
.desc_name:hover
{
    color: #007bff;
}
</style>
<section id="menu-slider">
   <div class="slider">
      <div class="container">
         <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 list-menu pull-left" style="height: 321px; background-color:white;">
            <?php 
               $this->load->view('frontend/modules/category');
               ?>
         </div>
         <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 slider-main pull-left">
            <?php 
               $this->load->view('frontend/modules/slider');
               ?>
         </div>
      </div>
   </div>
   <!-- dm -->
   <div class="container" style="margin-top: 10px; margin-bottom: 10px;">
       <div class="content_2" style="background-color: white;">
            <div class="noidung" >
             <img src="<?php echo base_url() ?>public/images/banner/slide/sl1.jpg?>" class="d-block w-100" ?>
             <div class="dm_row" >
                <a href="">
                    <div align ="center" style="height: 30px;background-color: #00aff2; width: 100px; border: 1px solid white; border-radius: 99px;">
                        <p style="padding: 5px;">Bút bi</p>
                    </div>
                </a>
                <a href="">
                    <div  align ="center"  style="height: 30px;background-color: #00aff2; width: 100px; border: 1px solid white; border-radius: 99px;">
                        <p style="padding: 5px;">Bút gel</p>
                    </div>
                </a>
                <a href="">
                    <div  align ="center"  style="height: 30px;background-color: #00aff2; width: 100px; border: 1px solid white; border-radius: 99px;">
                        <p style="padding: 5px;">Bút luyện chữ</p>
                    </div>
                </a>
                <a href="">
                    <div  align ="center"  style="height: 30px;background-color: #00aff2; width: 100px; border: 1px solid white; border-radius: 99px;">
                        <p style="padding: 5px;">Giấy in</p>
                    </div>
                </a>
                <a href="">
                    <div  align ="center"  style="height: 30px;background-color: #00aff2; width: 100px; border: 1px solid white; border-radius: 99px;">
                        <p style="padding: 5px;">Bút lông</p>
                    </div>
                </a>
                <a href="">
                    <div  align ="center"  style="height: 30px;background-color: #00aff2; width: 100px; border: 1px solid white; border-radius: 99px;">
                        <p style="padding: 5px;">Bút dạ quang</p>
                    </div>
                </a>
                <a href="">
                    <div  align ="center"  style="height: 30px;background-color: #00aff2; width: 100px; border: 1px solid white; border-radius: 99px;">
                        <p style="padding: 5px;">Bút xóa</p>
                    </div>
                </a>
                <a href="">
                    <div  align ="center"  style="height: 30px;background-color: #00aff2; width: 100px; border: 1px solid white; border-radius: 99px;">
                        <p style="padding: 5px;">File bìa</p>
                    </div>
                </a>
             </div>
            </div>
       </div>
   </div>
   </section>                  

<!--Sản phẩm bán chạy -->
<div class="container">
    <div class="content_2" style="background-color: white;">
        <div class="sale-title">
            <div class="sale-content">
                <span style="padding: 20px;">
                    <img style="width: 50px; height: auto;" src="<?php echo base_url() ?>public/images/hot.gif" alt="">
                    <span class="moving-gradient-text">SẢN PHẨM BÁN CHẠY</span>
                    <img style="width: 50px; height: auto;" src="<?php echo base_url() ?>public/images/hot.gif" alt="">
                </span>
            </div>
        </div>
        <div class="ct_sale" style="padding: 10px;">
            <div class="carousel-container">
                <button style="z-index: 1000;" class="prev" onclick="moveSlide(-2)">&#10094;</button>
                <div class="carousel" style="background-color: #00aff2;">
                    <div class="carousel-slide">
                        <?php 
                        $product_sale = $this->Mproduct->product_selling(10); 
                        foreach($product_sale as $row):
                        ?>
                        <div class="product-card">
                            <a style="text-decoration: none;" href="<?php echo $row['alias'] ?>" title="<?php echo $row['name'] ?>">
                                <div style="background-color: white;" class="sale-button">
                                <img style="width: 13px; height: 20px;" src="<?php echo base_url() ?>public/images/hot.gif?> " class="d-block w-100">
                                </div>
                                <div class="pro-img-sale">
                                    <img width="202px" height="202px" src="<?php echo base_url() ?>public/images/products/<?php echo $row['avatar'] ?>" class="">
                                </div>
                                <div class="d_desc">
                                    <p  class="desc_name"><?php echo $row['name'] ?></p>
                                </div>
                                <div class="row_price">
                                    <?php if($row['sale'] > 0) :?>
                                        <p class="special-pri">
                                            <span class="pri"><?php echo(number_format($row['price_sale'])); ?>₫ </span>
                                        </p>
                                        <p class="old-pri">
                                            <span class="pri"><?php echo(number_format($row['price'])); ?>₫</span>
                                        </p>
                                    <?php else: ?>
                                        <p class="special-pri">
                                            <span class="pri"><?php echo(number_format($row['price'])); ?>₫</span>
                                        </p>
                                    <?php endif;?>
                                </div>
                            </a>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <button class="next" onclick="moveSlide(2)">&#10095;</button>
            </div>
        </div>
    </div>
</div>


<!-- Sản phẩm khuyến mãi -->
<div class="container">
    <div class="content_2" style="background-color: white; position: relative;">
        <div class="sale-title">
            <div class="sale-content">
                <span style="padding: 20px;">
                    <img style="width: 50px; height: auto;" src="<?php echo base_url() ?>public/images/sale.gif" alt="">
                    <span class="moving-gradient-text">SẢN PHẨM KHUYẾN MÃI</span>       
                    <img style="width: 50px; height: auto;" src="<?php echo base_url() ?>public/images/sale.gif" alt="">
                </span>
            </div>
        </div>
        <div class="ct_sale" style="padding: 10px;">
        <div class="baner">
                <img src="<?php echo base_url() ?>public/images/banner/slide/sale.jpg?>" class="d-block w-100">
        </div>
            <div class="carousel-container">
           
                <div class="carousel" style="background-color: #00aff2;">
                    <div class="carousel-slide khuyen-mai"> <!-- Thêm lớp khuyen-mai -->
                        <?php 
                        $product_sale = $this->Mproduct->product_sale(10); 
                        foreach($product_sale as $row):
                           if($row['sale'] > 0) :
                        
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
                            <a style="text-decoration: none;" href="<?php echo $row['alias'] ?>" title="<?php echo $row['name'] ?>">
                            <div class="sale-button">
                                 <?php 
                                 // Tính phần trăm giảm giá
                                 $original_price = $row['price'];
                                 $sale_price = $row['price_sale'];
                                 $discount_percentage = (($original_price - $sale_price) / $original_price) * 100;
                                 // Hiển thị phần trăm giảm giá
                                 echo '-'. round($discount_percentage) .'% ';
                                 ?>
                              </div>
                                <div class="pro-img-sale">
                                    <img width="202px" height="202px" src="<?php echo base_url() ?>public/images/products/<?php echo $row['avatar'] ?>" class="">
                                </div>
                                <div class="d_desc">
                                    <p class="desc_name"><?php echo $row['name'] ?></p>
                                </div>
                                <div class="row_price">
                                  
                                        <p class="special-pri">
                                            <span class="pri"><?php echo(number_format($row['price_sale'])); ?>₫ </span>
                                        </p>
                                        <p class="old-pri">
                                            <span class="pri"><?php echo(number_format($row['price'])); ?>₫</span>
                                        </p>   
                                </div>
                            </a>
                        </div>
                        <?php endif;?>
                        <?php endforeach; ?>
                    </div>
                </div>
              
            </div>
            <div align = "center"> <a href="san-pham">XEM THÊM</a> </div>
        </div>
    </div>
</div>

<!-- sản phẩm theo danh mục -->

<div id="content">
   <div class="container">
      <?php 
         $listCategory = $this->Mcategory->category_list(0, '10');
         foreach ($listCategory as $rowCategory):
            // Lấy danh sách các danh mục con (tối đa 10 danh mục con) của mỗi danh mục cha
            $subCategory = $this->Mcategory->category_list($rowCategory['id'], '10');
            // Lấy id của danh mục hiện tại
            $catId = $this->Mcategory->category_id($rowCategory['link']);
            // Lấy danh sách id của các danh mục con
            $listCatId = $this->Mcategory->category_listcat($catId);
            // Lấy danh sách các sản phẩm thuộc các danh mục con, giới hạn tối đa 10 sản phẩm
            $listProducts = $this->Mproduct->product_home_limit($listCatId, 10);
            // Nếu có ít nhất 3 sản phẩm thì mới hiển thị danh mục này
            if (count($listProducts) >= 3) {
                // Điều kiện để chọn template
                if ($rowCategory['id'] == 1116) {
                    $this->load->view('frontend/modules/hoc_tap_template', array(
                        'category' => $rowCategory,
                        'subCategory' => $subCategory,
                        'listProducts' => $listProducts
                    ));
                } elseif ($rowCategory['id'] == '1114') {
                    $this->load->view('frontend/modules/but_viet_template', array(
                        'category' => $rowCategory,
                        'subCategory' => $subCategory,
                        'listProducts' => $listProducts
                    ));
                    
                }  elseif ($rowCategory['id'] == '1118') {
                  $this->load->view('frontend/modules/sach_template', array(
                      'category' => $rowCategory,
                      'subCategory' => $subCategory,
                      'listProducts' => $listProducts
                  ));
                  
              } else {
                    // Template mặc định
                  //   $this->load->view('default_template', array(
                  //       'category' => $rowCategory,
                  //       'subCategory' => $subCategory,
                  //       'listProducts' => $listProducts
                  //   ));
                }
            }
         endforeach; 
      ?>
   </div>
</div>

<!-- thuwogn hiệu -->
<div class="content-2" style="  background-color: #f1f1f1;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 30px;
            
            ">
   <div class="new-carousel-container">
         <button style="z-index: 100;" class="new-prev" onclick="newMoveSlide(-1)">&#10094;</button>
         <div class="new-carousel">
               <div class="new-carousel-slide">
                  <div style="width: 250px; height: auto;" class="new-logo-card"><img src="<?php echo base_url() ?>public/images/banner/parter1.png?>" alt="Logo 1"></div>
                  <div style="width: 250px; height: auto;"  class="new-logo-card"><img src="<?php echo base_url() ?>public/images/banner/parter2.png?>" alt="Logo 2"></div>
                  <div style="width: 250px; height: auto;"  class="new-logo-card"><img src="<?php echo base_url() ?>public/images/banner/parter3.png?>" alt="Logo 3"></div>
                  <div style="width: 250px; height: auto;"  class="new-logo-card"><img src="<?php echo base_url() ?>public/images/banner/parter4.png?>" alt="Logo 4"></div>
                  <div style="width: 250px; height: auto;"  class="new-logo-card"><img src="<?php echo base_url() ?>public/images/banner/parter5.png?>" alt="Logo 5"></div>
                  <div style="width: 250px; height: auto;"  class="new-logo-card"><img src="<?php echo base_url() ?>public/images/banner/parter6.png?>" alt="Logo 5"></div>
                  <div style="width: 250px; height: auto;"  class="new-logo-card"><img src="<?php echo base_url() ?>public/images/banner/parter7.png?>" alt="Logo 5"></div>
                  <div style="width: 250px; height: auto;"  class="new-logo-card"><img src="<?php echo base_url() ?>public/images/banner/parter8.png?>" alt="Logo 5"></div>
                  <div style="width: 250px; height: auto;"  class="new-logo-card"><img src="<?php echo base_url() ?>public/images/banner/parter9.png?>" alt="Logo 5"></div>

               </div>
         </div>
         <button class="new-next" onclick="newMoveSlide(1)">&#10095;</button>
   </div>

</div>


<div class="home-blog" style="margin-top: 20px;">
   <div class="container" style="background-color: white;">
      <div class="row-p">
         <div class="text-center">
            <h2 style="font-size: 20px; font-weight: bold;" class="sectin-title title title-blue">    <span class="moving-gradient-text">BLOG</span>        </h2>
         </div>
      </div>
      <div class="blog-content" >
         <?php  
            $listBaiViet=$this->Mcontent->content_list_home(6, 'all');
            foreach ($listBaiViet as $rowPost) :?>
         <div style="border: 1px solid none;" class="col-xs-12 col-12 col-sm-6 col-md-4 col-lg-4" style="margin: 5px;">
            <div style="padding: 20px;" class="latest">
               <a style="text-decoration: none;" href="tin-tuc/<?php echo $rowPost['alias'] ?>">
                  <div class="tempvideo">
                     <img width="98%" src="public/images/posts/<?php echo $rowPost['img'] ?>">
                  </div>
                  <h3 style="color: black; font-size: 20px; background-color: white; opacity: 0.7;"><?php echo $rowPost['title'] ?></h3>
               </a>
            </div>
         </div>
         <?php endforeach; ?>
      </div>
   </div>
</div>
<div class="adv">
   <section id="service" style="margin: 20px;">
      <div class="container">
         <div class="row">
            <div id="service_home" class="clearfix">
               <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 text-center m-b-xs-10">
                  <div class="service_item">
                     <div class="icon icon_product">
                        <img src="public/images/icon_142e7.png" alt="">
                     </div>
                     <div class="description_icon">
                        <span class="large-text">
                        Miễn phí giao hàng
                        </span>
                        <span class="small-text">
                        Cho hóa đơn từ 500,000 đ
                        </span>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 text-center m-b-xs-10">
                  <div class="service_item">
                     <div class="icon icon_product">
                        <img src="public/images/icon_242e7.png" alt="">
                     </div>
                     <div class="description_icon">
                        <span class="large-text">
                        Giao hàng trong ngày
                        </span>
                        <span class="small-text">
                        Với tất cả đơn hàng
                        </span>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 text-center m-b-xs-10">
                  <div class="service_item">
                     <div class="icon icon_product">
                        <img src="public/images/icon_342e7.png" alt="">
                     </div>
                     <div class="description_icon">
                        <span class="large-text">
                        Sản phẩm an toàn
                        </span>
                        <span class="small-text">
                        Cam kết chính hãng
                        </span>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!--Begin-->
   <!--End-->
</div>
<!-- 
    pop up
 -->
 <!-- <div id="popup" class="popup">
    <div class="popup-content">
        <span class="close">&times;</span>
        <im src="../public/images/banner2.png?>" alt="Popup Image">
    </div>
</div> -->
<!--=== BEGIN: SITE PHẢI ===-->
<style type="text/css">
   .alo-ph-img-circle{width:30px;height:30px;top:35px;left:35px;position:absolute;background:rgba(30,30,30,0.1) url(https://1.bp.blogspot.com/-UbTOXZnLovo/V9kU1RLbX4I/AAAAAAAAGYA/4qQQ0CBifcM8IlNe7f-aVL2Ln-wzLcF4wCLcB/s1600/alo.png) no-repeat center center;background-size:contain;-webkit-border-radius:100%;-moz-border-radius:100%;border-radius:100%;border:2px solid transparent;opacity:.7;-webkit-animation:alo-circle-img-anim 1s infinite ease-in-out;-moz-animation:alo-circle-img-anim 1s infinite ease-in-out;-ms-animation:alo-circle-img-anim 1s infinite ease-in-out;-o-animation:alo-circle-img-anim 1s infinite ease-in-out;animation:alo-circle-img-anim 1s infinite ease-in-out;-webkit-transform-origin:50% 50%;-moz-transform-origin:50% 50%;-ms-transform-origin:50% 50%;-o-transform-origin:50% 50%;transform-origin:50% 50%}.alo-phone{position:fixed;visibility:hidden;background-color:transparent;width:100px;height:100px;cursor:pointer;z-index:999;-webkit-backface-visibility:hidden;-webkit-transform:translateZ(0);-webkit-transition:visibility .5s;-moz-transition:visibility .5s;-o-transition:visibility .5s;transition:visibility .5s;right:0;top:0}.alo-phone.alo-show{visibility:visible}.alo-phone:hover{opacity:1}.alo-ph-circle{width:100px;height:100px;top:0;left:0;position:absolute;background-color:transparent;-webkit-border-radius:100%;-moz-border-radius:100%;border-radius:100%;border:2px solid rgba(30,30,30,0.4);border:2px solid #bfebfc ;opacity:.1;-webkit-animation:alo-circle-anim 1.2s infinite ease-in-out;-moz-animation:alo-circle-anim 1.2s infinite ease-in-out;-ms-animation:alo-circle-anim 1.2s infinite ease-in-out;-o-animation:alo-circle-anim 1.2s infinite ease-in-out;animation:alo-circle-anim 1.2s infinite ease-in-out;-webkit-transition:all .5s;-moz-transition:all .5s;-o-transition:all .5s;transition:all .5s;-webkit-transform-origin:50% 50%;-moz-transform-origin:50% 50%;-ms-transform-origin:50% 50%;-o-transform-origin:50% 50%;transform-origin:50% 50%}.alo-phone:hover .alo-ph-circle,.hotline&gt;a:hover .alo-ph-circle{border-color:#00aff2;opacity:.5}.alo-phone.alo-green:hover .alo-ph-circle,.hotline&gt;a:hover .alo-ph-circle{border-color:#04AFEF;border-color:#baf5a7 ;opacity:.5}.alo-phone.alo-green .alo-ph-circle{border-color:#ffbc0a;border-color:#bfebfc ;opacity:.5}.alo-ph-circle-fill{width:60px;height:60px;top:20px;left:20px;position:absolute;background-color:#000;-webkit-border-radius:100%;-moz-border-radius:100%;border-radius:100%;border:2px solid transparent;opacity:.1;-webkit-animation:alo-circle-fill-anim 2.3s infinite ease-in-out;-moz-animation:alo-circle-fill-anim 2.3s infinite ease-in-out;-ms-animation:alo-circle-fill-anim 2.3s infinite ease-in-out;-o-animation:alo-circle-fill-anim 2.3s infinite ease-in-out;animation:alo-circle-fill-anim 2.3s infinite ease-in-out;-webkit-transition:all .5s;-moz-transition:all .5s;-o-transition:all .5s;transition:all .5s;-webkit-transform-origin:50% 50%;-moz-transform-origin:50% 50%;-ms-transform-origin:50% 50%;-o-transform-origin:50% 50%;transform-origin:50% 50%}.alo-phone:hover .alo-ph-circle-fill,.hotline&gt;a:hover .alo-ph-circle-fill{background-color:rgba(0,175,242,0.5);background-color:#00aff2 ;opacity:.75!important}.alo-phone.alo-green:hover .alo-ph-circle-fill,.hotline&gt;a:hover .alo-ph-circle-fill{background-color:rgba(4,175,239,0.5);background-color:#baf5a7 ;opacity:.75!important}.alo-phone.alo-green .alo-ph-circle-fill{background-color:rgba(255,188,10,0.5);background-color:#ffbc0a ;opacity:.75!important}.alo-phone:hover .alo-ph-img-circle,.hotline&gt;a:hover .alo-ph-img-circle{background-color:#00aff2}.alo-phone.alo-green.alo-hover .alo-ph-img-circle,.alo-phone.alo-green:hover .alo-ph-img-circle,.hotline&gt;a:hover .alo-ph-img-circle{background-color:#04AFEF;background-color:#04AFEF}.alo-phone.alo-green .alo-ph-img-circle{background-color:#ffbc0a;background-color:#ffbc0a }@-moz-keyframes alo-circle-anim{0%{transform:rotate(0) scale(.5) skew(1deg);opacity:.1}30%{transform:rotate(0) scale(.7) skew(1deg);opacity:.5}100%{transform:rotate(0) scale(1) skew(1deg);opacity:.1}}@-webkit-keyframes alo-circle-anim{0%{transform:rotate(0) scale(.5) skew(1deg);opacity:.1}30%{transform:rotate(0) scale(.7) skew(1deg);opacity:.5}100%{transform:rotate(0) scale(1) skew(1deg);opacity:.1}}@-o-keyframes alo-circle-anim{0%{transform:rotate(0) scale(.5) skew(1deg);opacity:.1}30%{transform:rotate(0) scale(.7) skew(1deg);opacity:.5}100%{transform:rotate(0) scale(1) skew(1deg);opacity:.1}}@keyframes alo-circle-anim{0%{transform:rotate(0) scale(.5) skew(1deg);opacity:.1}30%{transform:rotate(0) scale(.7) skew(1deg);opacity:.5}100%{transform:rotate(0) scale(1) skew(1deg);opacity:.1}}@-moz-keyframes alo-circle-fill-anim{0%{transform:rotate(0) scale(.7) skew(1deg);opacity:.2}50%{transform:rotate(0) scale(1) skew(1deg);opacity:.2}100%{transform:rotate(0) scale(.7) skew(1deg);opacity:.2}}@-webkit-keyframes alo-circle-fill-anim{0%{transform:rotate(0) scale(.7) skew(1deg);opacity:.2}50%{transform:rotate(0) scale(1) skew(1deg);opacity:.2}100%{transform:rotate(0) scale(.7) skew(1deg);opacity:.2}}@-o-keyframes alo-circle-fill-anim{0%{transform:rotate(0) scale(.7) skew(1deg);opacity:.2}50%{transform:rotate(0) scale(1) skew(1deg);opacity:.2}100%{transform:rotate(0) scale(.7) skew(1deg);opacity:.2}}@keyframes alo-circle-fill-anim{0%{transform:rotate(0) scale(.7) skew(1deg);opacity:.2}50%{transform:rotate(0) scale(1) skew(1deg);opacity:.2}100%{transform:rotate(0) scale(.7) skew(1deg);opacity:.2}}@-moz-keyframes alo-circle-img-anim{0%{transform:rotate(0) scale(1) skew(1deg)}10%{transform:rotate(-25deg) scale(1) skew(1deg)}20%{transform:rotate(25deg) scale(1) skew(1deg)}30%{transform:rotate(-25deg) scale(1) skew(1deg)}40%{transform:rotate(25deg) scale(1) skew(1deg)}50%{transform:rotate(0) scale(1) skew(1deg)}100%{transform:rotate(0) scale(1) skew(1deg)}}@-webkit-keyframes alo-circle-img-anim{0%{transform:rotate(0) scale(1) skew(1deg)}10%{transform:rotate(-25deg) scale(1) skew(1deg)}20%{transform:rotate(25deg) scale(1) skew(1deg)}30%{transform:rotate(-25deg) scale(1) skew(1deg)}40%{transform:rotate(25deg) scale(1) skew(1deg)}50%{transform:rotate(0) scale(1) skew(1deg)}100%{transform:rotate(0) scale(1) skew(1deg)}}@-o-keyframes alo-circle-img-anim{0%{transform:rotate(0) scale(1) skew(1deg)}10%{transform:rotate(-25deg) scale(1) skew(1deg)}20%{transform:rotate(25deg) scale(1) skew(1deg)}30%{transform:rotate(-25deg) scale(1) skew(1deg)}40%{transform:rotate(25deg) scale(1) skew(1deg)}50%{transform:rotate(0) scale(1) skew(1deg)}100%{transform:rotate(0) scale(1) skew(1deg)}}@keyframes alo-circle-img-anim{0%{transform:rotate(0) scale(1) skew(1deg)}10%{transform:rotate(-25deg) scale(1) skew(1deg)}20%{transform:rotate(25deg) scale(1) skew(1deg)}30%{transform:rotate(-25deg) scale(1) skew(1deg)}40%{transform:rotate(25deg) scale(1) skew(1deg)}50%{transform:rotate(0) scale(1) skew(1deg)}100%{transform:rotate(0) scale(1) skew(1deg)}}#alo-fixed{visibility:visible;opacity:0;position:fixed;right:-100px;top:100px}#alo-fixed.show{right:10px;visibility:visible;opacity:1}
</style>
<a href="tel:0859364748" rel="nofollow" >
   <div class="alo-phone alo-green alo-show">
      <div class="alo-ph-circle"></div>
      <div class="alo-ph-circle-fill"></div>
      <div class="alo-ph-img-circle"></div>
   </div>
</a>

<style type="text/css">
   /**/.bottom_support{height:45px;width:100%;position:fixed;bottom:0;background:#32a22d;font-family:'Roboto Condensed', sans-serif;color:#fff;line-height:45px;z-index:9999} .bottom_support a{font-family:'Roboto Condensed', sans-serif;color:#fff;line-height:45px;font-size:18px} .wrap_bottom{max-width:1380px;margin:0 auto} .bottom_support .hotline_bottom{background:#32a22d;width:40%;float:left;font-size:16px;margin-left:5%;position:relative} .bottom_support .hotline_bottom .ico{width:16%;position:absolute;bottom:0} .bottom_support .hotline_bottom .txt{margin-left:16%} .bottom_support .hotline_bottom .ico img{max-width:100%} .bottom_support .hotline_bottom strong{font-weight:bold;font-size:19px} .bottom_support .hotline_bottom span{font-size:13px} .bottom_support .guide_payment{background:linear-gradient(-60deg, #177814 90%, #32a22d 50%) no-repeat;width:25%;float:left;position:relative} .bottom_support .guide_payment .ico{width:20%;position:absolute;bottom:-25%;left:15%} .bottom_support .guide_payment .ico img{max-width:100%} .bottom_support .guide_payment .txt{margin-left:35%} .bottom_support .advisory_online{background:linear-gradient(-60deg, #014f01 90%, #177814 50%) no-repeat;width:30%;float:left;position:relative} .bottom_support .advisory_online .ico{width:20%;position:absolute;bottom:-10%;left:15%} .bottom_support .advisory_online .ico img{max-width:100%;float:left;margin-top:-20px} .bottom_support .advisory_online .txt{margin-left:35%} @media screen and (max-width:1200px){.bottom_support .hotline_bottom{width:45%} .bottom_support .hotline_bottom .ico{width:12%} .bottom_support .hotline_bottom .txt{margin-left:12%} .bottom_support .guide_payment{width:25%} .bottom_support .guide_payment .ico{bottom:-15%} .bottom_support .advisory_online{width:25%} .bottom_support .advisory_online .ico{bottom:0} } @media screen and (max-width:1000px){.bottom_support{height:40px;line-height:40px} .bottom_support a{font-size:17px;line-height:40px} .bottom_support .hotline_bottom{margin-left:2%;width:48%} .bottom_support .guide_payment .ico{bottom:0;left:7%} .bottom_support .guide_payment .txt{margin-left:27%} .bottom_support .advisory_online .ico{bottom:10%;left:10%} .bottom_support .advisory_online .txt{margin-left:30%} } @media screen and (max-width:820px){.bottom_support{height:30px;line-height:30px} .bottom_support a{font-size:15px;line-height:30px} .bottom_support .hotline_bottom{font-size:15px} .bottom_support .hotline_bottom strong{font-size:18px} .bottom_support .hotline_bottom span{font-size:12px} } @media screen and (max-width:720px){.bottom_support a,.bottom_support .hotline_bottom{font-size:13px} .bottom_support .hotline_bottom strong{font-size:15px} } @media screen and (max-width:620px){.bottom_support{height:25px;line-height:25px} .bottom_support a{font-size:11px;line-height:25px} .bottom_support .hotline_bottom{margin-left:0;width:50%;font-size:11px} .bottom_support .hotline_bottom strong{font-size:15px} .bottom_support .hotline_bottom span{font-size:11px} } @media screen and (max-width:560px){.bottom_support{height:20px;line-height:20px} .bottom_support img{display:none} .bottom_support a{font-size:10px;line-height:20px} .bottom_support .hotline_bottom,.bottom_support .hotline_bottom span{font-size:10px} .bottom_support .hotline_bottom strong{font-size:13px} .bottom_support .hotline_bottom .txt{margin-left:1%} .bottom_support .guide_payment .txt,.bottom_support .advisory_online .txt{margin-left:15%}} @media screen and (max-width:440px){.bottom_support .hotline_bottom{width:55%} .bottom_support .guide_payment{width:27%} .bottom_support .advisory_online{width:18%}} @media screen and (max-width:400px){.bottom_support a,.bottom_support .hotline_bottom,.bottom_support .hotline_bottom span{font-size:9px} .bottom_support .hotline_bottom strong{font-size:12px}} @media screen and (max-width:340px){.bottom_support a,.bottom_support .hotline_bottom,.bottom_support .hotline_bottom span{font-size:8px} }
</style>
</footer>
<!--=== ĐÓNG LIÊN HỆ NGANG ===-->
<!--=== CHATBOX ===-->
<!-- <script id="chatBroEmbedCode">
   /* Chatbro Widget Embed Code Start */
   function ChatbroLoader(chats,async){async=!1!==async;var params={embedChatsParameters:chats instanceof Array?chats:[chats],lang:navigator.language||navigator.userLanguage,needLoadCode:'undefined'==typeof Chatbro,embedParamsVersion:localStorage.embedParamsVersion,chatbroScriptVersion:localStorage.chatbroScriptVersion},xhr=new XMLHttpRequest;xhr.withCredentials=!0,xhr.onload=function(){eval(xhr.responseText)},xhr.onerror=function(){console.error('Chatbro loading error')},xhr.open('GET','//www.chatbro.com/embed.js?'+btoa(unescape(encodeURIComponent(JSON.stringify(params)))),async),xhr.send()}
   /* Chatbro Widget Embed Code End */
   ChatbroLoader({encodedChatId: '67RR7'});
</script> -->
<!--=== ĐÓNG CHATBOX ===-->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
   $(document).ready(function(){
    // Show the popup on page load
    function showPopup() {
        $('#popup').fadeIn();
    }

    // Hide the popup when the close button is clicked
    $('.close').click(function() {
        $('#popup').fadeOut();
    });

    // Set the popup to reappear every 5 minutes (300000 milliseconds)
    setInterval(showPopup, 300000);

    // Initially show the popup
    showPopup();
});

</script>

<!-- Xử lý courasel -->
<script>
 $(document).ready(function(){
    var owl = $('.owl-carousel');
    owl.owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 5
            }
        }
    });

    // Sự kiện điều hướng tùy chỉnh
    $('.owl-next').click(function() {
        owl.trigger('next.owl.carousel');
    });

    $('.owl-prev').click(function() {
        owl.trigger('prev.owl.carousel', [300]);
    });
});


</script>

<!-- Xử lý slide sản phẩm -->
<script>
let slideIndex = 0;

function showSlides() {
    const slides = document.querySelector('.carousel-slide');
    const totalSlides = slides.children.length;
    if (slideIndex >= totalSlides) {
        slideIndex = 0;
    }
    if (slideIndex < 0) {
        slideIndex = totalSlides - 1;
    }
    slides.style.transform = `translateX(${-slideIndex * 230}px)`;
}

function moveSlide(n) {
    const slides = document.querySelector('.carousel-slide');
    const totalSlides = slides.children.length;
    slideIndex += n;
    if (slideIndex >= totalSlides) {
        slideIndex = 0;
    }
    if (slideIndex < 0) {
        slideIndex = totalSlides - 1;
    }
    slides.style.transition = 'transform 0.5s ease-in-out'; // Smooth scrolling transition
    slides.style.transform = `translateX(${-slideIndex * 230}px)`;
}

document.addEventListener('DOMContentLoaded', showSlides);


//-new
let newSlideIndex = 0;

function newMoveSlide(n) {
    const slides = document.querySelector('.new-carousel-slide');
    const totalSlides = slides.children.length;
    newSlideIndex += n;

    if (newSlideIndex >= totalSlides) {
        newSlideIndex = 0;
    }
    if (newSlideIndex < 0) {
        newSlideIndex = totalSlides - 1;
    }

    slides.style.transform = `translateX(${-newSlideIndex * 190}px)`;
}

document.addEventListener('DOMContentLoaded', () => {
    // Optional: Start an interval to automatically move slides
    setInterval(() => {
        newMoveSlide(1);
    }, 3000); // Change slides every 3 seconds
});

</script>


