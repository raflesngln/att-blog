<style type="text/css">
.el-element-overlay .el-card-item .el-overlay-1 img{
    height:200px;
}
/*    .list-img img{
        height:100px;
        width: 100%;
    }*/
.box-item-news{
    height: 500px;
    position: relative;
}
.bottom-btn{
    position: relative;
    bottom: 0px;
    text-align: center;
}
.desc-news{
    height: 200px;
    padding: 6px;
}
.halaman{
    text-align: center;
    border: 1px #f2f7f8 solid;
    padding: 14px;
    background-color: white;
}
.halaman a, .halaman strong{
    padding: 7px 15px 7px 15px;
}
.halaman strong{
    background-color: #009efb;
    color: white;
}
.halaman a{
    color: #2f3d4a;
}
.btn-search-hdr{
    margin-top: -8px;
}
.custom-select{
    background:url(<?php echo base_url();?>assets/assets_admin/monster/images/custom-select.png) right 0.75rem center no-repeat;
}
.el-element-overlay .el-card-item .el-card-content a{
    color: white;
}
.el-card-content p{
   text-align: justify !important;
}
</style>

<div class="row">
    <div class="col-md-6 col-12 align-self-center"><h2>List News</h2> </div>
    
    <div class="col-md-6 col-12 align-self-center">   
        

<!-- ///////////////////////////// -->
                                        <div class="row">
                                            <!--/span-->
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <label>Category</label>
                                                    <select class="form-control custom-select">
                                                        <option value="all">All</option>
                                                        <?php
                                                            foreach ($category as $rw) {
                                                        ?>
                                                        <option value="<?php echo $rw->category_id;?>"><?php echo $rw->category_title;?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <label>&nbsp; <small><i>leave blank if not filter text </i></small></label>
                                                    <input type="text" class="form-control" placeholder="search">
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <p>&nbsp;</p>
                                                    <button class="btn pull-right btn-success btn-search-hdr"><i class="mdi mdi-magnify large"></i> Search</button>
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>

    </div>

</div>

<div class="row">
    <div class="row el-element-overlay">
        <div class="col-md-12">
            <h4 class="card-title">Gallery page</h4>
            <h6 class="card-subtitle m-b-20 text-muted">you can make gallery like this</h6></div>

        <?php 
            foreach($list as $row){
                $img=$row->post_picture;
                    if($img==null){
                        $list_pict="noimage.gif";
                    } else{
                        $list_pict=$row->post_picture;
                    }
            ?>
        <div class="col-lg-3 col-md-6 box-item-news">
            <div class="card">
                <div class="el-card-item">
                    <div class="el-card-avatar el-overlay-1" class="list-img"> 
                        <img src="<?php echo base_url();?>assets/img/news/<?php echo $list_pict?>" alt="user" />
                        <div class="el-overlay">
                            <ul class="el-info">
                                <li><a class="btn default btn-outline image-popup-vertical-fit" href="<?php echo base_url();?>assets/img/news/<?php echo $list_pict?>"><i class="mdi mdi-loupe medium"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="el-card-content desc-news">
                        <h3 class="box-title"><?php echo substr($row->post_title,0,50);?></h3>
                        <small><?php echo substr($row->post_desc,0,150);?></small>
                        <br/> 
                    </div>
                </div>
                    <div class="bottom-btn">
                        <a href="#" class="btn btn-primary">Edit</a>
                        <a href="#" class="btn btn-primary">View</a>
                    </div>
            </div>
        </div>
    <?php } ?>
    </div>

            <!-- FOR PAGING -->
                <div style="clear:both;"></div>
                <div class="col-lg-12 col-md-12 col-sm-12 halaman">
                     <?php echo $paginator;?>
                </div>
</div>


