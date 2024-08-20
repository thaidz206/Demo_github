<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="<?php echo base_url(); ?>"></base>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>
        <?php 
            if(isset($title))
                echo $title;
            else
                echo "Nguyễn Ngọc Thái & Nguyễn Thuờng An Vy";
        ?>
    </title>
    <link rel="icon" style="" type="image/x-icon" href="public/images/logo1.jpg">
    <link href="public/css/bootstrap.css" rel="stylesheet">
    <link href="public/css/font-awesome.css" rel="stylesheet">
    <link href="public/css/lte.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link href="public/css/owl.carousel.min.css" rel="stylesheet">
    <link href="public/css/AdminLTE.css" rel="stylesheet">
    <link rel="stylesheet" href="public/css/style-jc.css">
    <link href="public/css/menu-tab.css" rel="stylesheet">
    <link href="public/css/style.css" rel="stylesheet">
    <link href="public/css/style1.css" rel="stylesheet">
    <link href="public/css/jquery.bxslider.css" rel="stylesheet">
    <link href="public/css/flexslider.css" rel="stylesheet">
    <!-- ------------- -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

    <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="public/js/jquery-2.2.3.min.js"></script>
        <style>
.scrolltop {
    display: none;
    width: 100%;
    margin: 0 auto;
    position: fixed;
    bottom: 20px;
    right: 10px;
}
.scroll {
    position: absolute;
    right: 20px;
    bottom: 20px;
    background: #b2b2b2;
    background: #0fd872;
    padding: 15px;
    text-align: center;
    margin: 0 0 0 0;
    cursor: pointer;
    transition: 0.5s;
    -moz-transition: 0.5s;
    -webkit-transition: 0.5s;
    -o-transition: 0.5s;
}
.scroll:hover {
    background: #62caf5;
    transition: 0.5s;
    -moz-transition: 0.5s;
    -webkit-transition: 0.5s;
    -o-transition: 0.5s;
}
.scroll:hover .fa {
    padding-top: -10px;
}
.scroll .fa {
    color: #fff;
    font-size: 30px;
    margin-top: -5px;
    margin-left: 1px;
    transition: 0.5s;
    -moz-transition: 0.5s;
    -webkit-transition: 0.5s;
    -o-transition: 0.5s;
}
</style>

    </head>
    <body style="background-color: #f1f1f1;">
        <div class='thetop'></div>
        <div id="fb-root"></div>
        <script>(function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.8";
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
        <!-- TOPBAR -->
        <?php 
            $this->load->view('frontend/modules/topbar');
        ?>
        <!-- HEADER LOGO + SEARCH -->
        <?php 
            $this->load->view('frontend/modules/logo-search');
        ?>
        <!-- <?php 
            $this->load->view('frontend/modules/category');
        ?> -->
        <section id="menu-slider">
            <?php 
                $this->load->view('frontend/modules/panel-left');
            ?>
        </section>
        <!--CONTENT-->
        <?php 
            if(isset($com,$view)){
                $this->load->view('frontend/components/'.$com.'/'.$view);
            }
            else
                $this->load->view('frontend/components/Error404/index');
        ?>
        <!--FOOTER-->
        <?php 
            $this->load->view('frontend/modules/footer');
        ?>
        <script src="public/js/bootstrap.js"></script>
        <script src="public/js/app.min.js"></script>
        <script src="public/js/owl.carousel.js"></script>
        <script src="public/js/jquery.jcarousel.js"></script>
        <script src="public/js/jcarousel.connected-carousels.js"></script>
        <script src="public/js/scroll.js"></script>
        <script src="public/js/search-quick.js"></script>
        <script src="public/js/custom-owl.js"></script> 
        <script src="public/js/jquery.flexslider.js"></script>
        <script
            src="https://kit.fontawesome.com/2665683e7c.js"
            crossorigin="anonymous"
        ></script>
        <div class='scrolltop' style="margin-bottom: 37px; z-index: 1000;">
        <div class='scroll icon' style="background-color: blue;"><i style="    color: white;
    font-size: 9px;" class="fa fa-4x fa-angle-up"></i></div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
         <script src="public/js/app.js"></script>
 
    </body>
     <!-- Chat box -->
<style>
      df-messenger {
      --df-messenger-bot-message: #878fac;
    
      --df-messenger-chat-background-color: #f4f4f4;
      --df-messenger-font-color: #333;
      --df-messenger-send-icon: #878fac;
      position: fixed; /* Fix the position */
      bottom: 20px; /* Position it 20px from the bottom */
      right: 20px; /* Position it 20px from the right */
      z-index: 999; /* Ensure it's above other elements */
    }

    button#widgetIcon {
    background: #42A5F5;
    background: var(--df-messenger-button-titlebar-color);
    border: none;
    border-radius: 50%;
    bottom: 0px;
    box-shadow: rgba(0, 0, 0, 0.24) 1px 4px 15px 0px;
    cursor: pointer;
    height: 56px;
    position: absolute;
    right: 70px;
    width: 56px;
}
 </style>

<div>
<script src="https://www.gstatic.com/dialogflow-console/fast/messenger/bootstrap.js?v=1"></script>
<df-messenger
  intent="WELCOME"
  chat-title="HoTroKhachHang"
  agent-id="63e0fba6-56c7-450a-9ec3-1e0ae331e46f"
  language-code="vi"
></df-messenger>
</div>  
</html>
<!-- ------- -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- Thêm jQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<script>
// $('.owl-carousel').owlCarousel({
//     loop:true,
//     margin:10,
//     nav:true,
//     dots:true, // Hiển thị nút dưới đuôi
//     responsive:{
//         0:{
//             items:1
//         },
//         600:{
//             items:3
//         },
//         1000:{
//             items:5
//         }
//     }
// });

</script>

<script>
    $(document).ready(function(){
        // Show or hide the sticky footer button
        $(window).scroll(function() {
            if ($(this).scrollTop() > 200) {
                $('.scrolltop').fadeIn(200);
            } else {
                $('.scrolltop').fadeOut(200);
            }
        });

        // Animate the scroll to top
        $('.scroll').click(function(event) {
            event.preventDefault();
            $('html, body').animate({scrollTop: 0}, 300);
        })
    });
</script>
