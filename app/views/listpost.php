<section>
    <div class="bg_in">
        <div class="wrapper_all_main">
            <div class="content_page">
                <div class="box-title">
                    <div class="title-bar">
                        <h1>Tất cả tin tức</h1>
                    </div>
                </div>
                <div class="content_text">
                    <ul class="list_ul">
                        <?php foreach($list_post as $key => $val){?>
                        <li class="lists">
                            <div class="img-list">
                            <a href="<?php echo APP_URL?>tintuc/chitiettin/<?php echo $val['id_post']?>">
                                <img src="<?php echo APP_URL?>public/uploads/post/<?php echo $val['image_post']?>" alt="<?php echo $val['title_post']?>" class="img-list-in">
                            </a>
                            </div>
                            <div class="content-list">
                                <div class="content-list_inm">
                                    <div class="title-list">
                                        <h3>
                                            <a href="<?php echo APP_URL?>tintuc/chitiettin/<?php echo $val['id_post']?>"><?php echo $val['title_post']?></a>
                                        </h3>
                                    </div>
                                    <div class="content-list-in">
                                        <p><span style="font-size:16px"><?php echo $val['content_post']?></span></p>
                                    </div>
                                    <div class="xt"><a href="<?php echo APP_URL?>tintuc/chitiettin/<?php echo $val['id_post']?>">Xem thêm</a></div>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </li>
                        <?php } ?>
                    </ul>
                    <div class="clear"></div>
                    <div class="wp_page">
                        <div class="page">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clear"></div>
    </div>
    <div class="clear"></div>
</section>
