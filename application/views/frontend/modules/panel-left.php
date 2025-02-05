<div class="menu-pri" style="margin-top: 12 px;">
    <div class="container">
        <div class="panel-left" style="background: #0fd872;">
            <!--MOBILE-->
            <nav class="navbar navbar-default hidden-md hidden-lg" role="navigation">
                <div class="container-fluid" style="background-color: #0fd872;">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar primary-color"></span>
                            <span class="icon-bar primary-color"></span>
                            <span class="icon-bar primary-color"></span>
                        </button>
                        <a class="navbar-brand" style="color: #fff;" href="#">Danh mục sản phẩm</a>
                    </div>
                    <div class="collapse navbar-collapse navbar-ex1-collapse hidden-md hidden-lg">

                        <?php
                        $listcat = $this->Mcategory->category_menu(0);
                        $html_menu='<ul class="nav navbar-nav">';
                        foreach ($listcat as $menu) {
                            $parentid = $menu['id'];
                            $submenu = $this->Mcategory->category_menu($parentid);
                            $html_menu.='<li class="dropdown">';
                            $html_menu.="<a href='san-pham/".$menu['link']."' class='dropdown-toggle' data-toggle='dropdown'>";
                            $html_menu.=$menu['name'];
                            if(!empty($submenu)){
                                $html_menu.='<i class="fa fa-angle-right pull-right" aria-hidden="true">';
                                $html_menu.='</i>';
                            }
                            $html_menu.="</a>";
                            if(count($submenu))
                            {
                                $html_menu.='<ul class="dropdown-menu">';
                                foreach ($submenu as $menu1){
                                    $html_menu.='<li>';
                                    $html_menu.="<a href='san-pham/".$menu1['link']."'> ".$menu1['name']."</a>";
                                    $html_menu.="</li>";    
                                }
                                $html_menu.="</ul>";
                            }
                            $html_menu.="</li>";
                        }
                        $html_menu.="</ul>";
                        echo $html_menu;
                        ?>  
                    </div><!-- /.navbar-collapse -->
                </div>
            </nav>
            <!--MD LG-->
        </div>
        <div class="col-md-12 col-lg-12 panel-right hidden-xs text-center" style="background: white;">
            <ul class="menu-right" style="display: inline-block;">
                <li class="pull-left"><a href=""><i class="fas fa-home" aria-hidden="true"></i>  Trang chủ</a></li>
                <li class="pull-left"><a href="san-pham"><i class="fas fa-cart-plus" aria-hidden="true"></i> Sản phẩm</a></li>
                <?php
                    $listcat = $this->Mcategory->category_menu(0);
                    $html = '';
                    $count = 0; // Biến đếm để kiểm soát số lượng mục hiển thị
                    $max_items = 2; // Số lượng mục muốn hiển thị

                    foreach ($listcat as $menu) {
                        if ($count >= $max_items) {
                            break; // Dừng vòng lặp nếu đã hiển thị đủ số lượng mục
                        }
                        $html = '<li class="pull-left">';
                        $html .= "<a href='san-pham/" . $menu['link'] . " '>";
                        $html .= $menu['name'];
                        $html .= "</a>";
                        $html .= '</li>';
                        echo $html;
                        $count++; // Tăng biến đếm sau mỗi lần hiển thị một mục
                    }
                    ?>

                <li class="pull-left"><a href="tin-tuc/1"><i class="fas fa-ticket-alt" aria-hidden="true"></i> Tin tức</a></li>
                <li class="pull-left"><a href="thong-tin-khach-hang"><i class="fa-solid fa-user" aria-hidden="true"></i> Tài khoản</a></li>
                <li class="pull-left"><a href="lien-he"><i class="fab fa-facebook-messenger" aria-hidden="true"></i> Liên hệ</a></li>
            </ul>
        </div>
    </div>
</div>  <!-- <div class="user_login1">
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
