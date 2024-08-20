<!-- banner-top -->
<div style="display: flex; justify-content: center">
   <img
      src="<?php echo base_url() ?>public/images/banner/SlideBia/SLtop01.jpg"
      style="max-width: 100%; height: auto"
      alt=""
      />
</div>
<section class="logo-search">
   <div class="header_menu">
      <div class="container">
         <div class="content_1">
            <div class="head_row">
               <div class="">
                  <a href="<?php echo base_url() ?>"
                     ><img
                     class="img_logo"
                     src="<?php echo base_url() ?>public/images/banner/SlideBia/logo.jpg"
                     alt="Logo Construction"
                     /></a>
               </div>
               <form
                  style="border-radius: 10px"
                  action="search"
                  method="get"
                  role="form"
                  >
                  <div class="input-search">
                     <input
                        type="text"
                        class="form-control"
                        id="search_text"
                        name="search"
                        placeholder="Tìm kiếm sản phẩm..."
                        />
                     <button class="btn_search">
                     <i class="fa fa-search"></i>
                     </button>
                  </div>
               </form>
               <div class="phone_1">
                  <div
                     style="
                     border: 1px solid white;
                     border-radius: 999px;
                     background-color: white;
                     "
                     >
                     <i
                        style="padding: 10px"
                        class="icon fa fa-phone"
                        ></i>
                  </div>
                  <div>
                     <p
                        style="
                        color: white;
                        font-size: 14px;
                        font-weight: bold;
                        margin-bottom: -1px;
                        "
                        >
                        Hỗ trợ khách hàng
                     </p>
                     <p
                        style="
                        color: white;
                        font-size: 14px;
                       
                        "
                        >
                        0859 364 748
                     </p>
                  </div>
               </div>
               <!-- <div class="user_login1">
                  <div class="" style="
                      border: 1px solid white;
                      border-radius: 999px;
                      background-color: white;
                  ">  
                  <i class="fa-solid fa-user"  style="color: black; padding: 10px" ></i>
                  </div>
                  <div style="color: white;">
                    <a href="dang-nhap" style="display: block;">Đăng ký</a>
                    <a href="dang-ky" style="display: block;">Đăng nhập</a>
                  </div>
                  </div> -->
               <div class="user_login1">
                  <div style="border: 1px solid white; border-radius: 999px; background-color: white;">  
                     <i class="fa-solid fa-user" style="color: black; padding: 10px;"></i>
                  </div>
                  <div style="color: white;">
                     <?php 
                        if($this->session->userdata('sessionKhachHang')){
                            $name = $this->session->userdata('sessionKhachHang_name');
                            echo "<a style='display: block; color:white' href='#'>Hi: $name</a>";
                            echo "<a style='display: block; color:red' href='dang-xuat'>Đăng xuất</a>";
                        } else {
                            echo "<a style='display: block; color:white; font-size:14px' href='dang-nhap'>Đăng nhập</a>";
                            echo "<a style='display: block; color:white;font-size:14px' href='dang-ky'>Đăng ký</a>";
                        }
                        ?>
                  </div>
               </div>
               <div class="cart_header" style="margin-left:20px ";>
        <a href="gio-hang" title="Giỏ hàng">
         <span class="cart_header_icon" style="margin-bottom: 5px">
          <img  src="<?php echo base_url() ?>public/images/cart2.png" alt="Cart">
        </span>
        <span class="box_text" style="margin-bottom:12px">
          <strong class="cart_header_count" style="color: white;">Giỏ hàng <span>(<?php  
           if($this->session->userdata('cart')){
            $val = $this->session->userdata('cart');
            echo count($val);
          }else{
            echo 0;
          }
          ?>)</span></strong>
          <span class="cart_price">
            <?php if($this->session->userdata('cart')):
              $cart=$this->session->userdata('cart');
              $money=0;
              foreach ($cart as $key => $value) :
                $row = $this->Mproduct->product_detail_id($key);?>
                <?php 
                $total=0;
                if($row['price_sale'] > 0){
                  $total=$row['price_sale']*$value;
                }else{
                  $total=$row['price'] * $value;
                }
                $money+=$total;
                ?>
              <?php endforeach; ?>
              <?php echo number_format($money).' VNĐ';?>
              <?php else : ?>
                <p>0 VNĐ</p>
              <?php endif; ?>
            </span>
          </span>
        </a>
        <div class="cart_clone_box">
          <div class="cart_box_wrap hidden">
           <div class="cart_item original clearfix">
            <div class="cart_item_image">
            </div>
            <div class="cart_item_info">
             <p class="cart_item_title"><a href="" title=""></a></p>
             <span class="cart_item_quantity"></span>
             <span class="cart_item_price"></span>
             <span class="remove"></span>
           </div>
         </div>
       </div>
            </div>
         </div>
      </div>
   </div>
</section>