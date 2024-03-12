<h3 style="text-align: center; color: red; font-weight: bold;">Cập nhật danh mục bài viết</h3>
<div class="col-md-12">
    <?php
    foreach($catepostbyid as $key => $val){

    ?>
    <form action="<?php echo APP_URL?>catepost/updatecatepost/<?php echo $val['id_category_post']?>" method="post">
        <div class="form-group">
            <label style="font-size: 25px;">Tên danh mục bài viết:</label>
            <input type="text" value="<?php echo $val['title_category_post']?>" name="title_category_post" class="form-control" required>
        </div>
        <div class="form-group">
            <label style="font-size: 25px;">Mô tả danh mục bài viết:</label>
            <textarea id="editor" name="desc_category_post" style="resize: none;" class="form-control" rows="5"><?php echo $val['desc_category_post']?></textarea>
        </div>
        <button type="submit" class="btn btn-default btn-primary"><i class="fa-solid fa-floppy-disk"></i> Cập nhật</button>
    </form>
    <?php
    }
    ?>
</div>