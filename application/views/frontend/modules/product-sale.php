<style>
    .spost .entry-title a {
    margin: 0;
    font-size: 14px;
    color: black;
    font-weight: 500;
    text-decoration: none;
    }

    .spost .entry-title a:hover {
    color: blue;
    }

    .sidebar_menu {
    padding: 5px 0px;
    /* border: 1px solid #eee; */
    border-top: 0;
    background-color: white;
}
</style>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 products-sale-off">
    <div class="widget">
        <p style= "background-color: blue;">   <img style="width: 50px; height: auto;" src="<?php echo base_url() ?>public/images/hot.gif" alt=""> Sản phẩm khuyến mãi    <img style="width: 50px; height: auto;" src="<?php echo base_url() ?>public/images/hot.gif" alt=""></p>
        <div class="panel-left-body">
            <?php
                $list = $this->Mproduct->product_sale('4');
                $html_menu='<div id="post-list-footer" class="sidebar_menu">';
                foreach ($list as $menu) {
                    if($menu['sale'] > 0){
                        $html_menu.="<div class = 'spost clearfix'>";
                            $html_menu.="<div class='entry-image'>";
                                $html_menu.="<a href=".$menu['alias']." title=' ".$menu['name']."'>";
                                    $html_menu.="<img src='public/images/products/".$menu['img']."'>";
                                $html_menu.="</a>";
                            $html_menu.='</div>';
                            $html_menu.='<div class="entry-c" style="width:194px;">';
                                $html_menu.='<div class="entry-title">';
                                    $html_menu.="<a class='ws-nw overflow ellipsis' href=".$menu['alias']." title=' ".$menu['name']."'>";
                                        $html_menu.=$menu['name'];
                                    $html_menu.="</a>";
                                $html_menu.='</div>';
                                $html_menu.='<ul class="entry-meta">';
                                    $html_menu.='<li class="color">';
                                        $html_menu.="<ins>".number_format($menu['price_sale']).'₫'."</ins>";
                                        $html_menu.="<del>".number_format($menu['price']).'₫'."</del>";
                                    $html_menu.='</li>';
                                $html_menu.='</ul>';
                            $html_menu.='</div>';
                        $html_menu.="</div>";
                    }
                }
                $html_menu.="</div>";
            echo $html_menu;
            ?>
        </div>
    </div>
</div>