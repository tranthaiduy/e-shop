<h3 style="text-align: center;">Cập nhật sản phẩm</h3>
<div class="col-md-12">
    <?php
    foreach($productbyid as $key => $val){
    ?>
    <form action="<?php echo APP_URL?>product/updateproduct/<?php echo $val['id_product']?>" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label style="font-size: 25px;">Tên sản phẩm:</label>
            <input type="text" value="<?php echo $val['title_product']?>" name="title_product" class="form-control" required>
        </div>
        <div class="form-group">
            <label style="font-size: 25px;">Hình ảnh sản phẩm:</label>
            <input type="file" name="image_product" class="form-control">
            <p><img height="80" width="80" src="<?php echo APP_URL.'public/uploads/product/'.$val['image_product'];?>" alt="<?php echo $val['image_product'];?>"></p>
        </div>
        <div class="form-group">
            <label style="font-size: 25px;">Giá sản phẩm:</label>
            <input type="text" value="<?php echo $val['price_product']?>" name="price_product" class="form-control" required>
        </div>
        <div class="form-group">
            <label style="font-size: 25px;">Mô tả sản phẩm:</label>
            <textarea name="desc_product" style="resize: none;" class="form-control" rows="5"><?php echo $val['desc_product']?></textarea>
        </div>
        <div class="form-group">
            <label style="font-size: 25px;">Số lượng:</label>
            <input type="text" value="<?php echo $val['quantity_product']?>" name="quantity_product" class="form-control" required>
        </div>
        <div class="form-group">
            <label style="font-size: 25px;">Danh mục sản phẩm:</label>
            <select type="text" name="category_product" class="form-control">
                <option>---Chọn---</option>
                <?php 
                foreach($category as $key => $value){
                ?>
                <option <?php if($value['id_category_product']==$val['id_category_product']){echo 'selected';}?> value="<?php echo $value['id_category_product']?>"><?php echo $value['title_category_product']?></option>
                <?php
                }
                ?>
            </select>
        </div>
        <button type="submit" class="btn btn-default btn-primary">Lưu</button>
    </form>
    <?php 
    }
    ?>
</div>