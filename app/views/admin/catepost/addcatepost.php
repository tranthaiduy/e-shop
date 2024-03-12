<h3 style="text-align: center; color: red; font-weight: bold;">Thêm danh mục bài viết</h3>
<div class="col-md-12">
    <form action="<?php echo APP_URL?>catepost/insertCatePost" method="post">
        <div class="form-group">
            <label style="font-size: 25px;">Tên danh mục bài viết:</label>
            <input type="text" name="title_category_post" class="form-control" required>
        </div>
        <div class="form-group">
            <label style="font-size: 25px;">Mô tả danh mục bài viết:</label>
            <textarea id="editor" name="desc_category_post" style="resize: none;" class="form-control" rows="5"></textarea>
        </div>
        <button type="submit" class="btn btn-default btn-primary"><i class="fa-solid fa-plus"></i> Thêm</button>
    </form>
</div>