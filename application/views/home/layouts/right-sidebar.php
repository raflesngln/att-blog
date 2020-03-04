<div class="post-sidebar-area right-sidebar mt-30 mb-30 box-shadow">


            <!-- Sidebar Widget -->


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
                        $count_title=str_word_count($recomend->post_title);
                        $pieces = explode(" ", $recomend->post_title);
                        if($count_title > 5){
                            $shot_title = implode(" ", array_splice($pieces, 0, 5)).'...';
                        } else{
                            $shot_title = implode(" ", array_splice($pieces, 0, 5));
                        }
                        ?>
                <div class="single-youtube-channel d-flex">
                    <div class="youtube-channel-thumbnail">
                        <img src="<?php echo base_url();?>assets/img/news/<?php echo $recomend_pict;?>" alt="">
                    </div>
                    <div class="youtube-channel-content">
                        <a href="<?php echo base_url();?>home/post_detail/<?php echo $recomend->post_id;?>" class="channel-title">
                            <?php echo $shot_title;?>
                        </a>
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