<style type="text/css">
    .single-catagory-post .post-content .post-title {
    font-size: 22px;
    margin-bottom: 15px;
    display: block;
    color: #0062cc !important;
}
</style>

    <!-- ##### Breadcrumb Area Start ##### -->
 <!--    <section class="breadcrumb-area bg-img bg-overlay" style="background-image: url(<?php echo base_url();?>assets/img/logistics/perishables.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2>Travel</h2>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### Breadcrumb Area Start ##### -->
<div class="container">
    <div class="mag-breadcrumb py-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Category</a></li>
                            <li class="breadcrumb-item active" aria-current="page">
                                <?php 
                               foreach($scrumb as $rw){
                                    echo $rw->category_title;
                               }
                                ?>
                                    
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- ##### Breadcrumb Area End ##### -->


    <!-- ##### Archive Post Area Start ##### -->

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-xl-12 col-md-12" style="padding-bottom: 15px;">
                        <h2 style="color: #777777; text-decoration: underline;"><?php echo '<i class="fa fa-hashtag"></i>'. $rw->category_title;?></h2>
                </div>

                <div class="col-12 col-xl-8">
                    <div class="archive-posts-area bg-white p-30 mb-30 box-shadow">

                        <!--  Catagory Post -->
                <?php 
                        foreach($list as $list){
                            $img=$list->post_picture;
                                if($img==null){
                                    $list_pict="noimage.gif";
                                } else{
                                    $list_pict=$list->post_picture;
                                }
                        ?>
                        <div class="single-catagory-post d-flex flex-wrap">
                            <!-- Thumbnail -->
                            <div class="post-thumbnail bg-img" style="background-image: url(<?php echo base_url();?>assets/img/news/<?php echo $list_pict?>);">
                                <!-- <a href="video-post.html" class="video-play"><i class="fa fa-play"></i></a> -->
                            </div>

                            <!-- Post Contetnt -->
                            <div class="post-content">
                                <div class="post-meta">
                                    <a href="#"><?php echo date("d M Y",strtotime($list->created_date));?></a>
                                    <a href="archive.html">&nbsp;</a>
                                </div>
                                <a href="<?php echo base_url();?>home/post_detail/<?php echo $list->post_id;?>" class=" post-title-category">
                                    <?php echo substr($list->post_title,0,150);?>
                                </a>
                                <!-- Post Meta -->
                                <div class="post-meta-2">
                                    <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>
                                    <!-- <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a> -->
                                    <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>
                                </div>
                                <p><?php echo substr($list->post_desc,0,200);?></p>
                                <a href="<?php echo base_url();?>home/post_detail/<?php echo $list->post_id;?>" class="readmore">   Read more&nbsp; <i class="fa fa-chevron-circle-right"></i></a>
                            </div>
                        </div>

<?php } ?>
                        <!-- Catagory Post-->





                        <!-- Pagination -->
                        <nav>
                            <ul class="pagination">
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#"><i class="ti-angle-right"></i></a></li>
                            </ul>
                        </nav>

                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-5 col-xl-4">
                    <div class="sidebar-area bg-white mb-30 box-shadow">



                        <!-- Sidebar Widget -->
                        <div class="single-sidebar-widget">
                            <a href="#" class="add-img"><img src="<?php echo base_url();?>assets/img/logistics/perishables.jpg" alt=""></a>
                        </div>

                        <!-- Sidebar Widget -->
                        <div class="single-sidebar-widget p-30">
                            <!-- Section Title -->
                            <div class="section-heading">
                                <h5>Hot Articles</h5>
                            </div>

                            <!-- Single YouTube Channel -->
                <?php 
                        foreach($recomended as $recomend){
                            $img3=$recomend->post_picture;
                                if($img3==null){
                                    $recomend_pict="noimage.gif";
                                } else{
                                    $recomend_pict=$recomend->post_picture;
                                }
                        ?>
                <div class="single-youtube-channel d-flex">
                    <div class="youtube-channel-thumbnail">
                        <img src="<?php echo base_url();?>assets/img/news/<?php echo $recomend_pict;?>" alt="">
                    </div>
                    <div class="youtube-channel-content">
                        <a href="<?php echo base_url();?>home/post_detail/<?php echo $recomend->post_id;?>" class="channel-title">
                            <?php echo substr($recomend->post_title,0,35);?></a>
                        <!-- <a href="#" class="btn subscribe-btn"><i class="fa fa-play-circle-o" aria-hidden="true"></i> Subscribe</a> -->
                    </div>
                </div>
                <?php } ?>

                            <!-- Single YouTube Channel -->

                        </div>

                        <!-- Sidebar Widget -->
                        <div class="single-sidebar-widget p-30">
                            <!-- Section Title -->
                            <div class="section-heading">
                                <h5>Newsletter</h5>
                            </div>

                            <div class="newsletter-form">
                                <p>Subscribe our newsletter gor get notification about new updates, information discount, etc.</p>
                                <form action="#" method="get">
                                    <input type="search" name="widget-search" placeholder="Enter your email">
                                    <button type="submit" class="btn mag-btn w-100">Subscribe</button>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    