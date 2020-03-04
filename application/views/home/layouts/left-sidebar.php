<div class="post-sidebar-area left-sidebar mt-30 mb-30 bg-white box-shadow">
            <!-- Sidebar Widget most populars -->
            <div class="single-sidebar-widget p-30">
                <!-- Section Title -->
                <div class="section-heading">
                    <h5>Most Popular</h5>
                </div>

                <?php
                    foreach($populars as $pop){
                        $img=$pop->post_picture;
                        if($img==null){
                            $pict="noimage.gif";
                        } else{
                            $pict=$pop->post_picture;
                        }
                ?>
                <!-- Single Blog Post -->
                <div class="single-blog-post d-flex">
                    <div class="post-thumbnail">
                        <img src="<?php echo base_url();?>assets/img/news/<?php echo $pict;?>" alt="">
                    </div>
                    <div class="post-content">
                        <a href="<?php echo base_url();?>home/post_detail/<?php echo $pop->post_id;?>" class="post-title"><?php echo substr($pop->post_title,0,30);?></a>
                        
                        <div class="post-meta d-flex justify-content-between">
                            <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 34</a>
                            <!-- <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 84</a> -->
                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 14</a>
                        </div>
                    </div>
                </div>

            <?php } ?>

            </div>
             <!-- Widget most populars -->



            <!-- Sidebar Widget -->
            <div class="single-sidebar-widget p-30">
                <!-- Section Title -->
                <div class="section-heading">
                    <h5>Recomendation</h5>
                </div>

                <!-- Single Blog Post -->
                <div class="single-blog-post d-flex">
                    <div class="post-thumbnail">
                        <img src="<?php echo base_url();?>assets/img/logistics/marine.jpg" alt="">
                    </div>
                    <div class="post-content">
                        <a href="<?php echo base_url();?>home/post_detail/" class="post-title">Coventry City Guide Including Coventry</a>
                        <div class="post-meta d-flex justify-content-between">
                            <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 34</a>
                            <!-- <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 84</a> -->
                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 14</a>
                        </div>
                    </div>
                </div>

                <!-- Single Blog Post -->
                <div class="single-blog-post d-flex">
                    <div class="post-thumbnail">
                        <img src="<?php echo base_url();?>assets/img/logistics/perishables.jpg" alt="">
                    </div>
                    <div class="post-content">
                        <a href="<?php echo base_url();?>home/post_detail" class="post-title">Choose The Perfect Accommodations</a>
                        <div class="post-meta d-flex justify-content-between">
                            <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 34</a>
                            <!-- <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 84</a> -->
                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 14</a>
                        </div>
                    </div>
                </div>

                <!-- Single Blog Post -->
                <div class="single-blog-post d-flex">
                    <div class="post-thumbnail">
                        <img src="<?php echo base_url();?>assets/img/logistics/perishables.jpg" alt="">
                    </div>
                    <div class="post-content">
                        <a href="<?php echo base_url();?>home/post_detail" class="post-title">Get Ready Fast For Fall Leaf Viewing</a>
                        <div class="post-meta d-flex justify-content-between">
                            <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 34</a>
                            <!-- <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 84</a> -->
                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 14</a>
                        </div>
                    </div>
                </div>

                <!-- Single Blog Post -->
                <div class="single-blog-post d-flex">
                    <div class="post-thumbnail">
                        <img src="<?php echo base_url();?>assets/img/logistics/perishables.jpg" alt="">
                    </div>
                    <div class="post-content">
                        <a href="<?php echo base_url();?>home/post_detail" class="post-title">Global Resorts Network Grn Putting</a>
                        <div class="post-meta d-flex justify-content-between">
                            <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 34</a>
                            <!-- <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 84</a> -->
                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 14</a>
                        </div>
                    </div>
                </div>

                <!-- Single Blog Post -->
                <div class="single-blog-post d-flex">
                    <div class="post-thumbnail">
                        <img src="<?php echo base_url();?>assets/img/logistics/perishables.jpg" alt="">
                    </div>
                    <div class="post-content">
                        <a href="<?php echo base_url();?>home/post_detail" class="post-title">Travel Prudently Luggage And Carry</a>
                        <div class="post-meta d-flex justify-content-between">
                            <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 34</a>
                            <!-- <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 84</a> -->
                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 14</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>