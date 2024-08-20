<!-- 
<div class="owl-carousel-slider owl-carousel owl-theme">
    <?php
    $list_banner = $this->Mslider->list_img_banner();
    foreach ($list_banner as $value) : ?>
    	<div class="item" style="height: 320px;"><img src="<?php echo base_url() ?>public/images/banners/<?php echo $value['img'];?>"></div>	
   <?php endforeach; ?>
</div> -->


<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <?php
        $list_banner = $this->Mslider->list_img_banner();
        foreach ($list_banner as $index => $value) : ?>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="<?php echo $index; ?>" class="<?php echo $index == 0 ? 'active' : ''; ?>" aria-current="<?php echo $index == 0 ? 'true' : 'false'; ?>" aria-label="Slide <?php echo $index + 1; ?>"></button>
        <?php endforeach; ?>
    </div>
    <div class="carousel-inner">
        <?php
        foreach ($list_banner as $index => $value) : ?>
            <div class="carousel-item <?php echo $index == 0 ? 'active' : ''; ?>">
                <img src="<?php echo base_url() ?>public/images/banners/<?php echo $value['img']; ?>" class="d-block w-100" style="height: 320px;" alt="Banner <?php echo $index + 1; ?>">
            </div>    
        <?php endforeach; ?>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
