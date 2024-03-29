    <section>
        <div class="bg_in">
            <div class="module_pro_all">
                <div class="box-title">
                    <div class="title-bar">
                        <h1>Sản phẩm HOT</h1>
                        <a class="read_more" href="<?php echo APP_URL?>sanpham/sanphamhot">
                        Xem thêm
                        </a>
                    </div>
                </div>
                <div class="pro_all_gird">
                    <div class="girds_all list_all_other_page ">
                        <?php 
                        foreach($product as $key => $val){ 
                            if($val['product_hot']==1){
                        ?>
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
                                                <ul class="details-product-overlay">
                                                    <?php echo $val['desc_product']?>
                                                </ul>
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
                                                <span style="margin-left: 40px" class="news_price"><?php echo number_format($val['price_product'])?>đ </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <?php 
                            }
                        } 
                        ?>
                        <div class="clear"></div>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="clear"></div>
            </div>
            <?php 
            foreach($category as $key => $val_cate_list){

            ?>
            <div class="module_pro_all">
                <div class="box-title">
                    <div class="title-bar">
                        <h1><?php echo $val_cate_list['title_category_product']?></h1>
                        <a class="read_more" href="<?php echo APP_URL?>sanpham/danhmuc/<?php echo $val_cate_list['id_category_product']?>">
                  Xem thêm
                  </a>
                    </div>
                </div>
                <div class="pro_all_gird">
                    <div class="girds_all list_all_other_page ">
                        <?php foreach($product as $key => $val_product_list){
                            if($val_cate_list['id_category_product']==$val_product_list['id_category_product']){
                        ?>
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
                                            <a href="sanpham.php">
                                                <img class="lazy img-pro content-image" src="<?php echo APP_URL?>public/uploads/product/<?php echo $val_product_list['image_product']?>" data-original="image/mac.jpg" alt="Máy in Canon MF229DW" />
                                            </a>
                                            <div class="content-overlay"></div>
                                            <div class="content-details fadeIn-top">
                                                <ul class="details-product-overlay">
                                                    <?php echo $val_product_list['desc_product']?>
                                                </ul>

                                            </div>
                                        </div>
                                        <div class="name-pro-right">
                                            <a href="<?php echo APP_URL?>sanpham/chitietsanpham/<?php echo $val_product_list['id_product']?>">
                                                <h3><?php echo $val_product_list['title_product']?></h3>
                                            </a>
                                        </div>
                                        <div>
                                            <input class="btn btn-success" style="box-shadow: none;" type="submit" name="addcart" value="Đặt hàng">
                                        </div>
                                        <div class="price_old_new">
                                            <div class="price">
                                                <span style="margin-left: 40px" class="news_price"><?php echo number_format($val_product_list['price_product'])?>đ </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php
                            }
                        }
                        ?>
                        <div class="clear"></div>
                        </form>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="clear"></div>
            </div>
            <?php }?>
        </div>
    </section>
    <div class="clear"></div>
    