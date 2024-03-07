    <section>
        <div class="bg_in">
            <div class="module_pro_all">
                <div class="box-title">
                    <div class="title-bar">
                        <h1>Sản phẩm HOT</h1>
                    </div>
                </div>
                <div class="pro_all_gird">
                    <div class="girds_all list_all_other_page ">
                        <?php foreach($product_hot as $key => $val){ ?>
                        <div class="grids">
                            <div class="grids_in">
                                <div class="content">
                                <div class="img-right-pro">
                                
                                <a href="">
                                <img class="lazy img-pro content-image" src="<?php echo APP_URL?>public/uploads/product/<?php echo $val['image_product']?>" data-original="image/iphone.png" alt="Máy in Canon MF229DW" />
                                </a>

                                <div class="content-overlay"></div>
                                <div class="content-details fadeIn-top">
                                    <?php echo $val['desc_product']?>
                                    
                                </div>
                                </div>
                                <div class="name-pro-right">
                                <a href="<?php echo APP_URL?>sanpham/chitietsanpham/<?php echo $val['id_product']?>">
                                    <h3><?php echo $val['title_product']?></h3>
                                </a>
                                </div>
                                <div class="add_card">
                                    <a onclick="return giohang(579);">
                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i> Đặt hàng
                                    </a>
                                </div>
                                <div class="price_old_new">
                                <div class="price">
                                    <span class="news_price"><?php echo number_format($val['price_product'],0,',','.')?> đ</span>
                                </div>
                                </div>
                            </div>
                        </div>
                        </div>
                        <?php }?>
                        <div class="clear"></div>
                    </div>
                <div class="clear"></div>
                </div>
                <div class="clear"></div>
            </div>
        </div> 
         
    </section>