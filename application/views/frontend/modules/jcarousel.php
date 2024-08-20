


<style>
        /* FlexSlider styles */
        .flexslider {
            margin: 0;
            padding: 0;
            list-style: none;
        }

        .flexslider .slides img {
            width: 100%;
            display: block;
        }

        .thumb-image {
            width: 100%;
        }

        .img-responsive {
            max-width: 100%;
            height: auto;
        }

        .flex-control-nav {
            position: static;
            text-align: center;
            margin-top: 10px;
        }

        .flex-control-nav li {
            display: inline-block;
            margin-right: 5px;
        }

        .flex-control-nav li img {
            display: block;
            width: 50px;
            height: 50px;
        }

        .flex-control-nav li a {
            display: block;
            width: 50px;
            height: 50px;
        }

        .flex-control-nav li a:hover {
            opacity: 0.7;
        }
    </style>
<div class="flexslider">
  <ul class="slides">
   <?php 
   $img = $row['img'];
   $mang = explode('#', $img);
   foreach ($mang as $value) :?>
     <li data-thumb="public/images/products/<?php echo $value; ?>">
        <div class="thumb-image"> 
          <img src="public/images/products/<?php echo $value; ?>" class="img-responsive"> 
        </div>
    </li>
   <?php endforeach; ?>
  </ul>
  <div class="clearfix"></div>
</div>

<script>
$(window).on('load', function() {
  $('.flexslider').flexslider({
    animation: "slide",
    controlNav: "thumbnails"
  });
});            
</script>