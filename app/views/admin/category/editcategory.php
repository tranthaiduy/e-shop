<h3 style="text-align: center; color: red; font-weight: bold;">Cập nhật danh mục sản phẩm</h3>
<div class="col-md-12">
    <?php
    foreach($categorybyid as $key => $val){

    ?>
    <form action="<?php echo APP_URL?>category/updatecategory/<?php echo $val['id_category_product']?>" method="post">
        <div class="form-group">
            <label style="font-size: 25px;">Tên danh mục:</label>
            <input type="text" value="<?php echo $val['title_category_product']?>" name="title_category_product" class="form-control" required>
        </div>
        <div class="form-group">
            <label style="font-size: 25px;">Mô tả danh mục:</label>
            <textarea id="editor" name="desc_category_product" style="resize: none;" class="form-control" rows="5"><?php echo $val['desc_category_product']?></textarea>
        </div>
        <button type="submit" class="btn btn-default btn-primary"><i class="fa-solid fa-floppy-disk"></i> Cập nhật</button>
    </form>
    <?php
    }
    ?>
</div>