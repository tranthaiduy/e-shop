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
                        <form action="<?php echo APP_URL?>giohang/themgiohang" method="post">
                            <input type="hidden" value="<?php echo $val['id_product']?>" name="product_id">
                            <input type="hidden" value="<?php echo $val['title_product']?>" name="product_title">
                            <input type="hidden" value="<?php echo $val['image_product']?>" name="product_image">
                            <input type="hidden" value="<?php echo $val['price_product']?>" name="product_price">
                            <input type="hidden" value="1" name="product_quantity">
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
                                    <div>
                                        <input class="btn btn-success" style="box-shadow: none;" type="submit" name="addcart" value="Đặt hàng">
                                    </div>
                                    <div class="price_old_new">
                                    <div class="price">
                                        <span style="margin-left: 40px" class="news_price"><?php echo number_format($val['price_product'])?>đ</span>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </form>
                        <?php }?>
                        <div class="clear"></div>
                    </div>
                <div class="clear"></div>
                </div>
                <div class="clear"></div>
            </div>
        </div> 
         
    </section>