<section>
    <div class="bg_in">
        <div class="content_page cart_page">
            <div class="breadcrumbs">
                <ol itemscope itemtype="http://schema.org/BreadcrumbList">
                    <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                        <a itemprop="item" href="<?php echo APP_URL?>index">
                            <span itemprop="name">Trang chủ</span>
                        </a>
                        <meta itemprop="position" content="1" />
                    </li>
                    <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                        <a itemprop="item" href="#">
                            <span itemprop="name">
                                <strong itemprop="name">
                                Tất cả tin tức
                                </strong>
                            </span>
                        </a>
                        <meta itemprop="position" content="2" />
                    </li>
                </ol>
            </div>
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
                                    <img style="height: 150px; width: 100px;" src="<?php echo APP_URL?>public/uploads/post/<?php echo $val['image_post']?>" alt="<?php echo $val['title_post']?>" class="img-list-in">
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
                                            <p><span style="font-size:16px"><?php echo substr($val['content_post'],0,100)?>...</span></p>
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
    </div>
    <div class="clear"></div>
</section>
