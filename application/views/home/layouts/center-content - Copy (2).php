
<div class="mag-posts-content mt-30 mb-30 p-30 box-shadow">
            <!-- Trending Now Posts Area -->
            
<!-- ====================================================================== -->
<div class="trending-post-slides owl-carousel">
                    <!-- Single Trending Post -->
                        <?php 
                        foreach($trending as $trend){
                            $img=$trend->post_picture;
                                if($img==null){
                                    $big_pict="noimage.gif";
                                } else{
                                    $big_pict=$trend->post_picture;
                                }
                        ?>
                    <div class="single-trending-post">
                        <img src="<?php echo base_url();?>assets/img/news/Armstrong & Associates Released.jpg" alt="">
                        <div class="post-content">
                            <a href="#" class="post-cata">Logistic</a>
                            <a href="video-post.html" class="post-title"><?php echo substr($trend->post_title,0,80);?></a>
                        </div>
                    </div>
                        <?php } ?>
</div>
                    <br/>
    
<!-- =========================================== -->
            <!-- Feature Video Posts Area -->
            <div class="feature-video-posts mb-30">
                <!-- Section Title -->
                <div class="section-heading">
                    <h5>Trending</h5>
                </div>

                <!-- HOTS ARTICLE -->
                <div class="featured-video-posts">
                    <div class="row">
                        <?php 
                        foreach($hots_bigs as $hots_bigs){
                            $img=$hots_bigs->post_picture;
                                if($img==null){
                                    $big_pict="noimage.gif";
                                } else{
                                    $big_pict=$hots_bigs->post_picture;
                                }
                        ?>
                        <div class="col-12 col-lg-7">
                            <!-- Single Featured Post -->
                            <div class="single-featured-post">
                                <!-- Thumbnail -->
                                <div class="post-thumbnail mb-50">
                                    <img src="<?php echo base_url();?>assets/img/news/<?php echo $big_pict;?>" alt="">
                                    <!-- <a href="<?php echo base_url();?>home/post_detail" class="video-play"><i class="fa fa-play"></i></a> -->
                                </div>
                                <!-- Post Contetnt -->
                                <div class="post-content">
                                    <p class="desc-picture">01 feb 2019</p>

                                    <a href="<?php echo base_url();?>home/post_detail/<?php echo $hots_bigs->post_id;?>" class="post-title">
                                         <?php echo substr($hots_bigs->post_title,0,110);?>..
                                    </a>
                                    <p>
                                         <?php echo substr($hots_bigs->post_desc,0,350);?> 
                                    </p>
                                </div>
                               
                            </div>
                        </div>
                    <?php } ?>

                        <div class="col-12 col-lg-5">
                            <!-- Featured Video Posts Slide -->
                            <div class="featured-video-posts-slide owl-carousel">

                                 <!-- SLIDE ARTICLE -->
                                <div class="single--slide">
                                <?php
                                    foreach($hots as $hots){
                                        $img2=$hots->post_picture;
                                            if($img2==null){
                                                $hot_pic="noimage.gif";
                                            } else{
                                                $hot_pic=$hots->post_picture;
                                            }
                                ?>
                                    <!-- Single Blog Post -->
                                    <div class="single-blog-post d-flex style-3">
                                        <div class="post-thumbnail">
                                            <img src="<?php echo base_url();?>assets/img/news/<?php echo $hot_pic;?>" alt="">
                                        </div>
                                        <div class="post-content">
                                            <a href="<?php echo base_url();?>home/post_detail/<?php echo $hot_pic->post_id;?>" class="post-title">
                                                <?php echo substr($hots->post_title,0,45);?>
                                            </a>
                                           
                                        </div>
                                    </div>
                                <?php } ?>
                                    <!-- Single Blog Post -->
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
                <!-- end top hot article -->
            </div>

            <!-- Most Viewed Videos -->
            <div class="most-viewed-videos mb-30" style="border: 1px #ced4da solid; padding: 35px">
                <!-- Section Title -->
                <div class="section-heading">
                    <h5>Newest Article</h5>
                </div>

                <div class="most-viewed-videos-slide owl-carousel">

                    <!-- Single Blog Post -->
                    <?php
                    foreach($newest as $newest){
                        $img3=$newest->post_picture;
                         if($img3==null){
                            $newest_pic="noimage.gif";
                        } else{
                            $newest_pic=$newest->post_picture;
                         }
                                ?>
                    <div class="single-blog-post style-4">
                        <div class="post-thumbnail">
                            <img src="<?php echo base_url();?>assets/img/news/<?php echo $newest_pic;?>" alt="">
                            <!-- <a href="<?php echo base_url();?>home/post_detail" class="video-play"><i class="fa fa-play"></i></a> -->
                            <!-- <span class="video-duration">09:27</span> -->
                        </div>
                        <div class="post-content">
                            <a href="<?php echo base_url();?>home/post_detail/<?php echo $newest->post_id;?>" class="post-title">
                                <?php echo substr($newest->post_title,0,45);?>
                            </a>
                            <div class="post-meta d-flex">
                                <!-- <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>
                                <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>
                                <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a> -->
                            </div>
                        </div>
                    </div>
                <?php } ?>
                    <!-- Single Blog Post -->


                    <!-- Single Blog Post -->


                    <!-- Single Blog Post -->


                    <!-- Single Blog Post -->


                    <!-- Single Blog Post -->


                </div>
            </div>

            <!-- Sports Videos -->
            
            <!-- ANOTHER NEWS ARTICLES -->

                        <!-- Section Title -->
                        <div class="section-heading">
                            <h5>Recomended For You</h5>
                        </div>

                        <div class="row">

                            <!-- Single Blog Post -->
                            
                        <?php 
                        foreach($recomended as $recomend){
                            $img3=$recomend->post_picture;
                                if($img3==null){
                                    $recomend_pict="noimage.gif";
                                } else{
                                    $recomend_pict=$recomend->post_picture;
                                }
                        ?>
                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="single-blog-post style-4 mb-30">
                                    <div class="post-thumbnail recomend-thumbnail">
                                        <img src="<?php echo base_url();?>assets/img/news/<?php echo $recomend_pict;?>" alt="">
                                    </div>
                                    <div class="post-content">
                                        <a href="<?php echo base_url();?>home/post_detail/<?php echo $recomend->post_id;?>" class="post-title">
                                            <?php echo substr($recomend->post_title,0,100);?>
                                        </a>
                                        <div class="post-meta d-flex">
                                            <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>
                                            <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>
                                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                            <!-- Single Blog Post -->

                        </div>
                    
            <!-- END OF ANOTHER NEWS ARTICLES -->
        </div>