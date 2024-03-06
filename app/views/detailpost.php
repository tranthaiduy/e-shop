<?php foreach($detailpost as $key => $val){ ?>
<section>
    
    <div class="bg_in">
        
        <div class="wrapper_all_main">
            <div class="wrapper_all_main_right">
                
                <!--breadcrumbs-->
                <div class="content_page">
                    <div class="box-title">
                        <div class="title-bar">
                            <h1><?php echo $val['title_post']?></h1>
                        </div>
                    </div>
                    <div class="content_text">
                        <h4></h4>
                        <img src="<?php echo APP_URL?>public/uploads/post/<?php echo $val['image_post']?>" height="200px" alt="">
                        <div><?php echo $val['content_post']?></div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
            <div class="module_pro_all">
                    <div class="box-title">
                        <div class="title-bar">
                            <h3>Tin tức liên quan</h3>
                        </div>
                    </div>
                    <div class="pro_all_gird">
                        <div class="girds_all list_all_other_page ">
                            <?php foreach($related as $key => $val_related){?>
                            <div class="grids">
                                <div class="grids_in">
                                    <div class="content">
                                        <div class="img-right-pro">
                                            <a href="<?php echo APP_URL?>tintuc/chitiettin/<?php echo $val_related['id_post']?>">
                                            <img class="lazy img-pro content-image" src="<?php echo APP_URL?>public/uploads/post/<?php echo $val_related['image_post']?>" data-original="image/iphone.png" alt="Máy in Canon MF229DW" />
                                            </a>
                                            
                                        </div>
                                        <div class="name-pro-right">
                                            <a href="<?php echo APP_URL?>tintuc/chitiettin/<?php echo $val_related['id_post']?>">
                                                <h3><?php echo $val_related['title_post']?></h3>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php }?>
                        </div>
                    </div>
                </div>
            <!--start:left-->
            <div class="wrapper_all_main_left">
                
            </div>
            <!--end:left-->
            <div class="clear"></div>
        </div>
        
        <div class="clear"></div>
    </div>
    
</section>
<?php }?>