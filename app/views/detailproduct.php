<?php foreach($detail_product as $key => $val){
   $name = $val['title_product'];
?>
<section>
   <div class="bg_in">
      <div class="wrapper_all_main">
         <div class="wrapper_all_main_right no-padding-left" style="width:100%;">
            
            <form action="<?php echo APP_URL?>giohang/themgiohang" method="post">
            <input type="hidden" value="<?php echo $val['id_product']?>" name="product_id">
            <input type="hidden" value="<?php echo $val['title_product']?>" name="product_title">
            <input type="hidden" value="<?php echo $val['image_product']?>" name="product_image">
            <input type="hidden" value="<?php echo $val['price_product']?>" name="product_price">
            <input type="hidden" value="1" name="product_quantity">
            <div class="content_page">
               <div class="content-right-items margin0">
                  <div class="title-pro-des-ct">
                     <h1><?php echo $name?></h1>
                  </div>
                  <div class="slider-galery ">
                     <div id="sync1" class="owl-carousel owl-theme">
                        <div class="item">
                           <img src="<?php echo APP_URL?>public/uploads/product/<?php echo $val['image_product']?>" width="100%">
                        </div>
                        
                     </div>

                     <div id="sync2" class="owl-carousel owl-theme">
                        <div class="item">
                           <img src="<?php echo APP_URL?>public/uploads/product/<?php echo $val['image_product']?>" width="100%">
                        </div>
                           
                     </div> 
                     
                  </div>
                  <div class="content-des-pro">
                     <div class="content-des-pro_in">
                        <div class="pro-des-sum">
                           <div class="price">
                              
                           </div>
                           <div class="color_price">
                              <span class="title_price bg_green">Giá bán</span> <?php echo number_format($val['price_product'])?> <span>vnđ</span>.
                              <div class="clear"></div>
                           </div>
                        </div>
                        <div class="clear"></div>
                     </div>
                     <div class="content-pro-des">
                        <div class="content_des">
                           <?php echo $val['desc_product']?>

                        </div>
                     </div>
                     <div class="ct">
                        <div class="number_price">
                           <div class="custom pull-left">
                              <button onclick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty ) && qty > 0 ) result.value--;return false;" class="reduced items-count" type="button">-</button>
                              <input type="text" class="input-text qty" title="Qty" value="1" maxlength="12" id="qty" name="qty">
                              <button onclick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty )) result.value++;return false;" class="increase items-count" type="button">+</button>
                              <div class="clear"></div>
                           </div>
                           <div class="clear"></div>
                        </div>
                        <div class="wp_a">
                           <input class="btn btn-success" style="box-shadow: none;" type="submit" name="addcart" value="Đặt hàng">
                           
                           <div class="clear"></div>
                        </div>
                        <div class="clear"></div>
                     </div>
                     <div class="tags_products prodcut_detail">
                        <div class="tab_link">
                           <h3 class="title_tab_link">TAGS: </h3>
                           <div class="content_tab_link"> <a href="tag/"></a></div>
                        </div>
                     </div>
                  </div>
                  <div class="content-des-pro-suport">
                     <div class="box-setup">
                        <div class="title-setup">
                           <i class="fa fa-tasks" aria-hidden="true"></i> Dịch vụ &amp; Chú ý
                        </div>
                        <div class="info-setup">
                           <div class="row-setup">
                              <p style="text-align:justify">Quý khách vui lòng liên hệ với nhân viên bán hàng theo số điện thoại Hotline sau :</p>
                              <p><span style="color:#d50100">0932 023 992</span>&nbsp;để biết thêm chi tiết về Phụ kiện sản phẩm.</p>
                           </div>
                        </div>
                     </div>
                     <div class="info-prod prod-price freeship">
                        <span class="title">
                           <p>
                              <!-- <img alt="chuyển hàng miễn phí tại thietbivanphong123.com" src="/data/upload/ship-hang-mien-phi.png" style="height:33px; width:60px" /> --> Bạn sẽ được giao hàng miễn phí trong khu vực nội thành TPHCM khi mua sản phẩm này.
                           </p>
                        </span>
                        <span class="row more"><a href="" title="">Xem thêm</a>
                        </span>
                     </div>
                     <div class="bx-contact">
                        <span class="title-cnt">Bạn cần hỗ trợ?</span> 
                        <p>Chat với chúng tôi :</p>
                        <p><img alt="icon skype " src="<?php echo APP_URL?>public/image/icon skype.png" style="height:24px; width:24px" />&nbsp;<a href="skype:quangtran.123corp?chat">thietbivanphong.com</a></p>
                        <p><img alt="icon skype " src="<?php echo APP_URL?>public/image/icon skype.png" style="height:24px; width:24px" />&nbsp;<a href="skype:quangtran.123corp?chat">thietbivanphong.com</a></p>
                        <p><img alt="icon skype " src="<?php echo APP_URL?>public/image/icon skype.png" style="height:24px; width:24px" />&nbsp;<a href="skype:quangtran.123corp?chat">thietbivanphong.com</a></p>
                        
                     </div>
                  </div>
                  <div class="clear"></div>
               </div>
            </div>
            </form>
         </div>
         <div class="wrapper_all_main_right">
            
            <div class="product_detail_info">
               
            </div>
            <div class="clear"></div>
            
            <div class="clear"></div>
            <div class="dmsub">
               <div class="tags_products desktop">
                  
               </div>
            </div>
            <div class="module_pro_all">
               <div class="box-title">
                  <div class="title-bar">
                     <h3>Sản phẩm liên quan</h3>
                  </div>
               </div>
               <div class="pro_all_gird">
                  <div class="girds_all list_all_other_page ">
                     <?php foreach($related as $key => $val_related){?>
                     <form action="<?php echo APP_URL?>giohang/themgiohang" method="post">
                     <input type="hidden" value="<?php echo $val_related['id_product']?>" name="product_id">
                     <input type="hidden" value="<?php echo $val_related['title_product']?>" name="product_title">
                     <input type="hidden" value="<?php echo $val_related['image_product']?>" name="product_image">
                     <input type="hidden" value="<?php echo $val_related['price_product']?>" name="product_price">
                     <input type="hidden" value="1" name="product_quantity">
                     <div class="grids">
                        <div class="grids_in">
                           <div class="content">
                              <div class="img-right-pro">
                                 <a href="sanpham.php">
                                    <img class="lazy img-pro content-image" src="<?php echo APP_URL?>public/uploads/product/<?php echo $val_related['image_product']?>" data-original="image/iphone.png" alt="Máy in Canon MF229DW" />
                                 </a>
                                 <div class="content-overlay"></div>
                                 <div class="content-details fadeIn-top">
                                    <ul class="details-product-overlay">
                                       <?php echo $val_related['desc_product']?>
                                    </ul>
                                 </div>
                              </div>
                              <div iv class="name-pro-right">
                                 <a href="<?php echo APP_URL?>sanpham/chitietsanpham/<?php echo $val_related['id_product']?>">
                                    <h3><?php echo $val_related['title_product']?></h3>
                                 </a>
                              </div>
                              <div>
                                 <input class="btn btn-success" style="box-shadow: none;" type="submit" name="addcart" value="Đặt hàng">
                              </div>
                              <div class="price_old_new">
                                 <div class="price">
                                    <span style="margin-left: 40px" class="news_price"><?php echo number_format($val_related['price_product'])?>đ </span>
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
         
         <!--end:left-->
         <div class="clear"></div>
      </div>
      <div class="clear"></div>
   </div>
   <script>
      jQuery(document).ready(function() {
      
      
      
            var div_fixed = jQuery('.product_detail_info').offset().top;
      
            jQuery(window).scroll(function() {
      
               if (jQuery(window).scrollTop() > div_fixed) {
      
                  jQuery('.tabs-animation').addClass('fix_top');
      
               } else {
      
                  jQuery('.tabs-animation').removeClass('fix_top');
      
               }
      
            });
      
            jQuery(window).load(function() {
      
               if (jQuery(window).scrollTop() > div_fixed) {
      
                  jQuery('.tabs-animation').addClass('fix_top');
      
               }
      
            });
      
      });
      
   </script>
</section>
<?php }?>