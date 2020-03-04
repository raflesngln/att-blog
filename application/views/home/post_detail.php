  

    <!-- ##### Breadcrumb Area Start ##### -->
<!--     <section class="breadcrumb-area bg-img bg-overlay" style="background-image: url(<?php echo base_url();?>assets/img/bg-img/49.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2>Single Post</h2>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- ##### Breadcrumb Area End ##### -->

<style type="text/css">
.det-content ul li{
    list-style:disc;
    margin-left: 30px;
}
.post-title-content{
    color: black !important;
    font-weight: bold;
    font-size: 20pt;
}
.list-tags li{
    float: left;
    margin-left: 10px;
    background-color: #ac91ed;
    padding: 2px 15px 2px 15px;
    border-radius: 50px 50px 50px 50px;
    color: white !important;
    font-size: 12px;
}
.list-tags li:hover{
    background-color: #6d53ad;
}
.list-tags li a{
    color: white;
}
</style>
    <!-- ##### Breadcrumb Area Start ##### -->
    <div class="container">
    <div class="mag-breadcrumb py-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Details</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Detail Post</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- ##### Breadcrumb Area End ##### -->
 



        <div class="container">
            <div class="row justify-content-center">
                <!-- Post Details Content Area -->
                <div class="col-12 col-xl-8">
                    <div class="post-details-content bg-white mb-30 p-30 box-shadow">

                        <!-- detail post -->
                    <?php
                    foreach($details as $det){
                        $img=$det->post_picture;
                         if($img==null){
                            $det_pic="noimage.gif";
                        } else{
                            $det_pic=$det->post_picture;
                         }
                                ?>
                        <div class="blog-thumb mb-30">
                            <img src="<?php echo base_url();?>assets/img/news/<?php echo $det_pic;?>" alt="">
                        </div>

                        <div class="blog-content">
                            <div class="post-meta">
                                <a href="#"><?php echo date("d M Y",strtotime($det->created_date));?></a>
                                <a href="archive.html">&nbsp;</a>
                            </div>
                            <h4 class="post-title-content"><?php echo $det->post_title;?></h4>
                            <!-- Post Meta -->
                            <div class="post-meta-2">
                                <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> <?php echo $det->views;?></a>
                                <!-- <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a> -->
                                <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>
                            </div>

                            <div class="det-content">
                                <?php echo $det->post_desc;?>
                            </div>


                            <!-- Like Dislike Share -->
                            <div class="row">
                                <div class="col-12 col-md-12 col-lg-12 tags-items" style="margin-top: 50px">
                                    <h6>Tags</h6>
                                    <ul class="list-tags">
                                        <?php
                                            foreach($tags as $tg){
                                        ?>
                                            <li><a href="<?php echo base_url();?>home/post_tags/<?php echo $tg->tag_id;?>"><?php echo $tg->tag_label;?></a></li>
                                        <?php } ?>
                                    </ul>
                                </div> 
                            </div>
                            <div class="like-dislike-share my-5">
                                <h4 class="share">240<span>Share</span></h4>
                                <a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i> Share on Facebook</a>
                                <a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i> Share on Twitter</a>
                            </div>

                            <!-- Post Author -->
                            <div class="post-author d-flex align-items-center">
                                <div class="post-author-thumb">
                                    <img src="<?php echo base_url();?>assets/img/logistics/marine.jpg" alt="">
                                </div>
                                <div class="post-author-desc pl-4">
                                    <a href="#" class="author-name">Users name</a>
                                    <p>Lorem ipsum dolor sit amet</p>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                        <!-- end detail post -->
                    </div>

                    <!-- Related Post Area -->
                    <div class="related-post-area bg-white mb-30 px-30 pt-30 box-shadow">
                        <!-- Section Title -->
                        <div class="section-heading">
                            <h5>Related Post</h5>
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
                            <div class="col-6 col-md-6 col-lg-4">
                                <div class="single-blog-post style-4 mb-30">
                                    <div class="post-thumbnail recomend-thumbnail box-img-hover">
                                        <a href="<?php echo base_url();?>home/post_detail/<?php echo $recomend->post_id;?>" class="post-title">
                                            <img src="<?php echo base_url();?>assets/img/news/<?php echo $recomend_pict;?>" alt="">
                                        </a>
                                    </div>
                                    <div class="post-content">
                                        <a href="<?php echo base_url();?>home/post_detail/<?php echo $recomend->post_id;?>" class="post-title">
                                            <?php echo substr($recomend->post_title,0,90);?>
                                        </a>
                                        <div class="post-meta d-flex">
                                            <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>
                                            <!-- <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a> -->
                                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
<?php } ?>
                            <!-- Single Blog Post -->


                            <!-- Single Blog Post -->


                        </div>
                    </div>

                    <!-- Comment Area Start -->
                    <div class="comment_area clearfix bg-white mb-30 p-30 box-shadow">
                        <!-- Section Title -->
                        <div class="section-heading">
                            <h5>COMMENTS</h5>
                        </div>

                        <ol>
                            <!-- Single Comment Area -->
                            <li class="single_comment_area">
                                <!-- Comment Content -->
                                <div class="comment-content d-flex">
                                    <!-- Comment Author -->
                                    <div class="comment-author">
                                        <img src="<?php echo base_url();?>assets/img/logistics/marine.jpg" alt="author">
                                    </div>
                                    <!-- Comment Meta -->
                                    <div class="comment-meta">
                                        <a href="#" class="comment-date">27 Aug 2019</a>
                                        <h6>Tomas Mandy</h6>
                                        <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius</p>
                                        <div class="d-flex align-items-center">
                                            <a href="#" class="like">like</a>
                                            <a href="#" class="reply">Reply</a>
                                        </div>
                                    </div>
                                </div>

                                <ol class="children">
                                    <li class="single_comment_area">
                                        <!-- Comment Content -->
                                        <div class="comment-content d-flex">
                                            <!-- Comment Author -->
                                            <div class="comment-author">
                                                <img src="<?php echo base_url();?>assets/img/logistics/marine.jpg" alt="author">
                                            </div>
                                            <!-- Comment Meta -->
                                            <div class="comment-meta">
                                                <a href="#" class="comment-date">27 Aug 2019</a>
                                                <h6>Britney Millner</h6>
                                                <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius</p>
                                                <div class="d-flex align-items-center">
                                                    <a href="#" class="like">like</a>
                                                    <a href="#" class="reply">Reply</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ol>
                            </li>

                            <!-- Single Comment Area -->
                            <li class="single_comment_area">
                                <!-- Comment Content -->
                                <div class="comment-content d-flex">
                                    <!-- Comment Author -->
                                    <div class="comment-author">
                                        <img src="<?php echo base_url();?>assets/img/logistics/marine.jpg" alt="author">
                                    </div>
                                    <!-- Comment Meta -->
                                    <div class="comment-meta">
                                        <a href="#" class="comment-date">27 Aug 2019</a>
                                        <h6>Simon Downey</h6>
                                        <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius</p>
                                        <div class="d-flex align-items-center">
                                            <a href="#" class="like">like</a>
                                            <a href="#" class="reply">Reply</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ol>
                    </div>

                    <!-- Post A Comment Area -->
                    <div class="post-a-comment-area bg-white mb-30 p-30 box-shadow clearfix">
                        <!-- Section Title -->
                        <div class="section-heading">
                            <h5>LEAVE A REPLY</h5>
                        </div>

                        <!-- Reply Form -->
                        <div class="contact-form-area">
                            <form action="#" method="post">
                                <div class="row">
                                    <div class="col-12 col-lg-6">
                                        <input type="text" class="form-control" id="name" placeholder="Your Name*" required>
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <input type="email" class="form-control" id="email" placeholder="Your Email*" required>
                                    </div>
                                    <div class="col-12">
                                        <textarea name="message" class="form-control" id="message" cols="30" rows="10" placeholder="Message*" required></textarea>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn mag-btn mt-30" type="submit">Submit Comment</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Widget -->
                <div class="col-12 col-md-6 col-lg-5 col-xl-4">
                    <div class="sidebar-area bg-white mb-30 box-shadow">
                        <!-- Sidebar Widget -->


                        <!-- Sidebar Widget -->

                        <!-- Sidebar Widget -->
                        <div class="single-sidebar-widget">
                            <a href="<?php echo base_url();?>home/post_category" class="add-img"><img src="<?php echo base_url();?>assets/img/logistics/perishables.jpg" alt=""></a>
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
                        <a href="<?php echo base_url();?>home/post_detail/<?php echo $recomend->post_id;?>" class="channel-title"><?php echo substr($recomend->post_title,0,35);?></a>
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
    