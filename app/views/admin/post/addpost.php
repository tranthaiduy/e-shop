<h3 style="text-align: center; color: red; font-weight: bold;">Thêm bài viết</h3>
<div class="col-md-12">
    <form action="<?php echo APP_URL?>post/insertPost" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label style="font-size: 25px;">Tên bài viết:</label>
            <input type="text" name="title_post" class="form-control" required>
        </div>
        <div class="form-group">
            <label style="font-size: 25px;">Hình ảnh bài viết:</label>
            <input type="file" name="image_post" class="form-control">
        </div>
        <div class="form-group">
            <label style="font-size: 25px;">Chi tiết bài viết:</label>
            <textarea id="editor" name="content_post" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label style="font-size: 25px;">Danh mục bài viết:</label>
            <select type="text" name="category_post" class="form-control">
                <option>---Chọn---</option>
                <?php
                foreach($catepost as $key => $value){
                ?>
                <option value="<?php echo $value['id_category_post']?>"><?php echo $value['title_category_post']?></option>
                <?php
                }
                ?>
            </select>
        </div>
        <button type="submit" class="btn btn-default btn-primary"><i class="fa-solid fa-plus"></i> Thêm</button>
    </form>
</div>