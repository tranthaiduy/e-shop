<section>

    <div class="bg_in">
        <div class="content_page cart_page">
            <div class="breadcrumbs">
                <ol itemscope itemtype="http://schema.org/BreadcrumbList">
                    <li itemprop="itemListElement" itemscope
                        itemtype="http://schema.org/ListItem">
                        <a itemprop="item" href="<?php echo APP_URL?>index">
                            <span itemprop="name">Trang chủ</span>
                        </a>
                        <meta itemprop="position" content="1" />
                    </li>
                    <li itemprop="itemListElement" itemscope
                        itemtype="http://schema.org/ListItem">
                        <span itemprop="item">
                            <strong itemprop="name">
                            Sản phẩm
                            </strong>
                        </span>
                        <meta itemprop="position" content="2" />
                    </li>
                </ol>
            </div>
            <div class="module_pro_all">
                <div class="box-title">
                    <div class="title-bar">
                        <h1>Tất cả sản phẩm</h1>
                    </div>
                </div>
                <div class="pro_all_gird">
                    <!-- <style type="text/css">
                        .girds.girds-list-product {

                        }
                    </style> -->
                    <div class="girds_all list_all_other_page ">
                        <?php foreach($list_product as $key => $val){ ?>
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
                                                <span class="news_price"><?php echo number_format($val['price_product'],0,',','.')?> đ</span>
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
    </div> 
 
</section>