        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="<?php echo APP_URL?>login/dashboard">AdminCPanel</a>
                </div>
                <ul class="nav navbar-nav">
                    <li class="active"><a style="font-size: 18px;" href="<?php echo APP_URL?>login/dashboard">Trang chủ</a></li>
                    <!-- <li><a style="font-size: 18px;" href="#">Thông tin website</a></li> -->
                    <li class="dropdown">
                        <a style="font-size: 18px;" class="dropdown-toggle" data-toggle="dropdown" href="#">Danh mục bải viết
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo APP_URL?>catepost/addcatepost">Thêm danh mục</a></li>
                            <li><a href="<?php echo APP_URL?>catepost/catepostList">Danh sách danh mục</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a style="font-size: 18px;" class="dropdown-toggle" data-toggle="dropdown" href="#">Bài viết
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo APP_URL?>post/addpost">Thêm bài viết</a></li>
                            <li><a href="<?php echo APP_URL?>post/postList">Danh sách bài viết</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a style="font-size: 18px;" class="dropdown-toggle" data-toggle="dropdown" href="#">Danh mục sản phẩm
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo APP_URL?>category/addcategory">Thêm danh mục</a></li>
                            <li><a href="<?php echo APP_URL?>category/cateList">Danh sách danh mục</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a style="font-size: 18px;" class="dropdown-toggle" data-toggle="dropdown" href="#">Sản phẩm
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo APP_URL?>product/addproduct">Thêm sản phẩm</a></li>
                            <li><a href="<?php echo APP_URL?>product/productList">Danh sách sản phẩm</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a style="font-size: 18px;" class="dropdown-toggle" data-toggle="dropdown" href="#">Đơn hàng
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo APP_URL?>order">Danh sách đơn hàng</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>