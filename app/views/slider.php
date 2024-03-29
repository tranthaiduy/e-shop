<section>
        <div class="bg_in">
            <div class="col-md-7 col-xs-12 col-sm-12" style="padding: 0;margin-top:10px;">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <img src="<?php echo APP_URL?>public/image/banner3.jpg" alt="Siêu khuyến mãi">
                        </div>

                        <div class="item">
                            <img src="<?php echo APP_URL?>public/image/banner3.jpg" alt="Siêu khuyến mãi">
                        </div>

                        <div class="item">
                            <img src="<?php echo APP_URL?>public/image/banner3.jpg" alt="Siêu khuyến mãi">
                        </div>
                    </div>

                    <!-- Left and right controls -->
                    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="col-md-4 col-xs-12 col-sm-12" style="padding: 0;margin-left:30px;margin-top:5px;">
                <div class="row">
                    <div class="panel  panel-warning panel-styling">
                        <div class="panel-heading">Tin tức cập nhật</div>
                        <div class="panel-body scrollable-panel">
                            <?php foreach($post_index as $key => $val){?>
                            <div class="row">
                                <div class="col-md-4 col-xs-4 col-sm-4">
                                    <img src="<?php echo APP_URL?>public/uploads/post/<?php echo $val['image_post']?>">
                                </div>
                                <div class="col-md-8 col-xs-8 col-sm-8">
                                    <h4><?php echo $val['title_post']?></h4>
                                    <p><?php echo substr($val['content_post'],0, 60)?>...</p>
                                </div>
                            </div>
                            <hr>
                            <?php }?>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="clear"></div>
    </section>