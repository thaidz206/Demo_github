<style>
    .product-content {
    padding: 20px;
    background-color: #f8f9fa;
}

.product-wrap {
    margin: 0 auto;
    max-width: 1200px;
}

.fs-newsboxs {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
}

.fs-ne2-it {
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 5px;
    overflow: hidden;
    transition: box-shadow 0.3s ease;
}

.fs-ne2-it:hover {
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.fs-ne2-if {
    display: flex;
    flex-direction: column;
}

.fs-ne2-img {
    width: 100%;
    overflow: hidden;
}

.fs-ne2-img img {
    width: 100%;
    height: auto;
    transition: transform 0.3s ease;
}

.fs-ne2-img:hover img {
    transform: scale(1.05);
}

.fs-n2-info {
    padding: 15px;
}

.fs-ne2-tit {
    font-size: 1.2em;
    color: #007bff;
    text-decoration: none;
}

.fs-ne2-tit:hover {
    text-decoration: underline;
}

.fs-ne2-txt {
    margin-top: 10px;
    font-size: 0.95em;
    color: #666;
}

.fs-ne2-bot {
    margin-top: 15px;
    font-size: 0.85em;
    color: #999;
    display: flex;
    align-items: center;
}

.fs-ne2-user img {
    width: 24px;
    height: 24px;
    border-radius: 50%;
    margin-right: 5px;
}

/* Pagination styles */
.pagination {
    display: flex;
    justify-content: center;
    padding: 20px 0;
    list-style: none;
}

.pagination li {
    margin: 0 5px;
}

.pagination a {
    color: #007bff;
    text-decoration: none;
    padding: 8px 12px;
    border: 1px solid #ddd;
    border-radius: 4px;
    transition: background-color 0.3s ease, color 0.3s ease;
}

.pagination a:hover, .pagination .active a {
    background-color: #007bff;
    color: #fff;
}

/* Responsive styles */
@media (max-width: 768px) {
    .fs-newsboxs {
        flex-direction: column;
    }

    .fs-ne2-it {
        margin-bottom: 20px;
    }
}

</style>

<section id="content">
    <div class="row wraper">
      <div class="banner-product">
    <div class="container">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        
      </div>
    </div>
  </div>
 <div class="container">
            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 list-menu pull-left">
                    <?php $this->load->view('frontend/modules/category'); ?> 
                </div>
                <?php $this->load->view('frontend/modules/news'); ?> 
            </div>
            <div class = "col-xs-12 col-sm-12 col-md-9 col-lg-9 product-content" id="list-content">
                
					
                <div class="product-wrap">
                <h1>BLOG</h1>
                  <div class="fs-newsboxs">
                    <?php foreach ($list as $item) :?>
                        <div class="fs-ne2-it clearfix">
                            <div class="fs-ne2-if">
                                <a class="fs-ne2-img" href="tin-tuc/<?php echo $item['alias']; ?>">
                                    <img  src="public/images/posts/<?php echo $item['img']; ?>"">
                                </a>
                                <div class="fs-n2-info">
                                    <h3><a class="fs-ne2-tit" href="tin-tuc/<?php echo $item['alias']; ?>" title=""><?php echo $item['title']; ?></a></h3>
                                    <div class="fs-ne2-txt"><?php echo $item['introtext']; ?></div>
                                    <p class="fs-ne2-bot">
                                        <span class="fs-ne2-user">
                                            <img class="lazy"src="" style="">
                                        </span> 
                                        <span><?php echo $item['created']; ?></span>
                                    </p>
                                </div>
                            </div>

                        </div>
                    <?php endforeach; ?>   

                </div>
                <div class = "row text-center">
                   <ul class ="pagination">
                      <?php echo $strphantrang; ?>
                  </ul>
              </div>
          </div>
      </div>
  </div>
</div>
</section>