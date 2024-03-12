<h3 style="text-align: center; color: red; font-weight: bold;">Thêm danh mục sản phẩm</h3>
<div class="col-md-12">
    <form action="<?php echo APP_URL?>category/insertCate" method="post">
        <div class="form-group">
            <label style="font-size: 25px;">Tên danh mục sản phẩm:</label>
            <input type="text" name="title_category_product" class="form-control" required>
        </div>
        <div class="form-group">
            <label style="font-size: 25px;">Mô tả danh mục sản phẩm:</label>
            <textarea id="editor" name="desc_category_product" style="resize: none;" class="form-control" rows="5"></textarea>
        </div>
        <button type="submit" class="btn btn-default btn-primary"><i class="fa-solid fa-plus"></i> Thêm</button>
    </form>
</div>