<h3 style="text-align: center;">Thêm sản phẩm</h3>
<div class="col-md-12">
    <form action="<?php echo APP_URL?>product/insertProduct" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label style="font-size: 25px;">Tên sản phẩm:</label>
            <input type="text" name="title_product" class="form-control" required>
        </div>
        <div class="form-group">
            <label style="font-size: 25px;">Hình ảnh sản phẩm:</label>
            <input type="file" name="image_product" class="form-control">
        </div>
        <div class="form-group">
            <label style="font-size: 25px;">Giá sản phẩm:</label>
            <input type="text" name="price_product" class="form-control" required>
        </div>
        <div class="form-group">
            <label style="font-size: 25px;">Mô tả danh mục sản phẩm:</label>
            <textarea name="desc_product" style="resize: none;" class="form-control" rows="5"></textarea>
        </div>
        <div class="form-group">
            <label style="font-size: 25px;">Số lượng:</label>
            <input type="text" name="quantity_product" class="form-control" required>
        </div>
        <div class="form-group">
            <label style="font-size: 25px;">Danh mục sản phẩm:</label>
            <select type="text" name="category_product" class="form-control">
                <option>---Chọn---</option>
                <?php 
                foreach($category as $key => $val){
                ?>
                <option value="<?php echo $val['id_category_product']?>"><?php echo $val['title_category_product']?></option>
                <?php
                }
                ?>
            </select>
        </div>
        <div class="form-group">
            <label style="font-size: 25px;">Sản phẩm hot:</label>
            <select type="text" name="product_hot" class="form-control">
                <option>---Chọn---</option>
                <option value="0">Không</option>
                <option value="1">Có</option>
            </select>
        </div>
        <button type="submit" class="btn btn-default btn-primary">Thêm</button>
    </form>
</div>