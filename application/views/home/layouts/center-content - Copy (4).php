
<div class="mag-posts-content mt-30 mb-30 p-30 box-shadow">
            <!-- Trending Now Posts Area -->
            
<!-- ====================================================================== -->
        <div class="trending-post-slides owl-carousel">
                    <!-- Single Trending Post -->
                        <?php 
                        foreach($trending as $trend){
                            $img=$trend->post_picture;
                                if($img==null){
                                    $trend_pict="noimage.gif";
                                } else{
                                    $trend_pict=$trend->post_picture;
                                }
                        ?>
                    <div class="single-trending-post">
                        <img src="<?php echo base_url();?>assets/img/news/<?php echo $trend_pict;?>" alt="">
                        <div class="post-content">
                            <a href="<?php echo base_url();?>home/post_detail/<?php echo $trend->post_id;?>" class="post-title slide-news-text"><?php echo substr($trend->post_title,0,200);?>
                            </a>
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

                    <!-- start of article -->
                    <div class="row">
                        <?php 
                        foreach($hots_bigs as $hots_bigs){
                            $img=$hots_bigs->post_picture;
                                if($img==null){
                                    $big_pict="noimage.gif";
                                } else{
                                    $big_pict=$hots_bigs->post_picture;
                                }
                                $count_desc=str_word_count($hots_bigs->post_desc);
                                $pieces = explode(" ", $hots_bigs->post_desc);
                                if($count_desc > 63){
                                    $shot_desc = implode(" ", array_splice($pieces, 0, 63)).'...';
                                } else{
                                    $shot_desc = implode(" ", array_splice($pieces, 0, 63));
                                }
                        ?>
                        <div class="col-12 col-lg-12">
                            <!-- Single Featured Post -->
                            <div class="single-featured-post">
                                <!-- Thumbnail -->
                                <div class="post-thumbnail mb-50 post-thumb-big">
                                    <img src="<?php echo base_url();?>assets/img/news/<?php echo $big_pict;?>" alt="" class="front-big-img">
                                    <!-- <a href="<?php echo base_url();?>home/post_detail" class="video-play"><i class="fa fa-play"></i></a> -->
                                </div>
                                <!-- Post Contetnt -->
                                <a href="<?php echo base_url();?>home/post_detail/<?php echo $hots_bigs->post_id;?>" class="post-title post-title-big">
                                         <?php echo substr($hots_bigs->post_title,0,250);?>
                                    </a>
                             <?php echo $shot_desc;?>
                             <a href="<?php echo base_url();?>home/post_detail/<?php echo $hots_bigs->post_id;?>" class="readmore">  Read more&nbsp; <i class="fa fa-chevron-circle-right"></i></a>
                            
                               
                            </div>
                        </div>
                            <!-- end of artcile -->
                            <?php } ?>

                            <!-- RELATED BIGS -->   
                    <div class="col-12 col-lg-12">
                            <!-- related contents header -->
                            <h6><u>Read also</u></h6>

                        <div class="row">
                            <?php 
                            foreach($trending_related as $trending_related){
                                $img3=$trending_related->post_picture;
                                    if($img3==null){
                                        $related_pict="noimage.gif";
                                    } else{
                                        $related_pict=$trending_related->post_picture;
                                    }
                                $count_title=str_word_count($trending_related->post_title);
                                $pieces = explode(" ", $trending_related->post_title);
                                if($count_title > 6){
                                    $shot_title = implode(" ", array_splice($pieces, 0, 6)).'...';
                                } else{
                                    $shot_title = implode(" ", array_splice($pieces, 0, 6));
                                }
                            ?>
                            <div class="col-6 col-md-3 col-lg-3"> 
                                <div class="post-thumbnail trending_related-thumbnail">
                                        <img src="<?php echo base_url();?>assets/img/news/<?php echo $related_pict;?>" alt="">
                                </div>
                                    <div class="post-content">
                                        <a href="<?php echo base_url();?>home/post_detail/<?php echo $trending_related->post_id;?>" class="post-title-small">
                                            <?php echo $shot_title;?>
                                        </a>

                                    </div>
                            </div>
                        <?php } ?>
                            <!-- Single Blog Post -->
                        </div>
                            <!-- end related content header -->      
                    </div>
                    </div>
                    <!-- end of big article -->
                </div>   
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
                        $count_title=str_word_count($newest->post_title);
                        $pieces = explode(" ", $newest->post_title);
                        if($count_title > 9){
                            $shot_title = implode(" ", array_splice($pieces, 0, 9)).'...';
                        } else{
                            $shot_title = implode(" ", array_splice($pieces, 0, 9));
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
                                <?php echo $shot_title;?>
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


                </div>
            </div>

            <!-- Sports Videos -->
            
            <!-- ANOTHER NEWS ARTICLES -->

                        <!-- Section Title -->
                        <div class="section-heading">
                            <h5>Recommended For Read</h5>
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
                                $count_title=str_word_count($recomend->post_title);
                                $pieces = explode(" ", $recomend->post_title);
                                if($count_title > 8){
                                    $shot_title = implode(" ", array_splice($pieces, 0, 8)).'...';
                                } else{
                                    $shot_title = implode(" ", array_splice($pieces, 0, 8));
                                }
                        ?>
                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="single-blog-post style-4 mb-30">
                                    <div class="post-thumbnail recomend-thumbnail box-img-hover">
                                        <a href="<?php echo base_url();?>home/post_detail/<?php echo $recomend->post_id;?>" class="post-title">
                                        <img src="<?php echo base_url();?>assets/img/news/<?php echo $recomend_pict;?>" alt="">
                                        </a>
                                    </div>
                                    <div class="post-content">
                                        <a href="<?php echo base_url();?>home/post_detail/<?php echo $recomend->post_id;?>" class="post-title">
                                            <?php echo $shot_title;?>
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