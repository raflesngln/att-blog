<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Blogs News</title>

    <!-- Favicon -->
    <link rel="icon" href="<?php echo base_url();?>assets/img/favicon.ico">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/style.css">
   

    

<style type="text/css">
	
.nav-brand img{
	height: 50px !important;
}
p,ul li{
    color: black !important;
}
.post-thumb-big{
    float: left;width: 55%; margin-right: 20px
}
.nav-brand-img{
    margin-left: 10% !important;
}
.desc-picture{
    font-size: small;
    font-style: italic;
    color: #777777 !important;
    margin-top: -40px;
}
.recomend-thumbnail img{
        height: 140px;
        width: 228px;
}
.trending_related-thumbnail img{
        height: 70px;
        width: 80%;
}

.foo-logo{
    height: 70px !important;
    width: 90px !important;
}
.txt-logo{
    font-size: 12px !important;
    color: #6a6a64 !important;
}
.footer-widget-nav ul li{
    line-height: 10px !important;
}
.post-title{
    font-size: 20px;
    display: block;
    margin-bottom: 15px;
    color: black !important;
}
.post-title:hover{
    color: #93bce9 !important
}

.slide-news-text{
    color: white !important;
}
.slide-news-text:hover{
    color: #0062cc !important;
}
.post-title-small,.post-title-big{
    color: #154cef !important;
}
.post-title-small:hover, .channel-title:hover{
     color: #93bce9 !important
}
.post-title-category{
    color: #154cef !important;
    font-weight: bold;
    font-size: 16pt;
}
.post-title-category:hover{
    color: #93bce9 !important;
    font-weight: bold;
    font-size: 16pt;
}
.readmore{
    text-decoration: underline;
    color: #e7b00d;
    margin-left: 10px;
    font-size: 11pt;
}
.readmore:hover{
    color: #8a6a0b !important;
}

.single-youtube-channel .youtube-channel-thumbnail img{
    height: 50px;
    width: 95px;
}
.box-img-hover{
    overflow: hidden;
}
.box-img-hover img {
   -webkit-transition: 0.3s ease;
    transition: 0.3s ease;
}
.box-img-hover:hover img {
  opacity: 0.4;
  filter: alpha(opacity=40); /* For IE8 and earlier */
  transform: scale(1.4, 1.4);
  cursor: pointer;
  background-color: red;
}


/*MEDIA QUERY CUSTOMS*/
@media only screen and (max-width:620px) {
  /* For mobile phones: */
      .front-big-img {
        width:100% !important;
      }
      .post-thumb-big{
        float:none; ;width: 100%; margin-right: 0px
    }
    .box-shadow {
        box-shadow: none !important;
    }

    .d-flex {
        display: -ms-flexbox!important;
        display: flex!important;
        background-color: white;
    }
}



</style>
</head>

<body>
    <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="spinner">
            <div class="double-bounce1"></div>
            <div class="double-bounce2"></div>
        </div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <?php echo $this->load->view('home/layouts/header');?>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Hero Area Start ##### -->
    
    <!-- ##### Hero Area End ##### -->

    <!-- ##### Mag Posts Area Start ##### -->
    <section class="mag-posts-area d-flex flex-wrap">

<!-- CONTENTS -->
        <!-- >>>>>>>>>>>>>>>>>>>>
         Post Left Sidebar Area
        <<<<<<<<<<<<<<<<<<<<< -->
        <?php echo $this->load->view($content);?>
    </section>
    <!-- ##### Mag Posts Area End ##### -->
<!-- END OF CONTENTS -->



    <!-- ##### Footer Area Start ##### -->
     <?php echo $this->load->view('home/layouts/footer');?>
    <!-- ##### Footer Area End ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="<?php echo base_url();?>assets/js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="<?php echo base_url();?>assets/js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="<?php echo base_url();?>assets/js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="<?php echo base_url();?>assets/js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="<?php echo base_url();?>assets/js/active.js"></script>
</body>

</html>