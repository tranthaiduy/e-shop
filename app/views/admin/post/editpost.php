<h3 style="text-align: center; color: red; font-weight: bold;">Cập nhật bài viết</h3>
<div class="col-md-12">
    <?php
    foreach($postbyid as $key => $val){
    ?>
    <form action="<?php echo APP_URL?>post/updatepost/<?php echo $val['id_post']?>" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label style="font-size: 25px;">Tên bài viết:</label>
            <input type="text" value="<?php echo $val['title_post']?>" name="title_post" class="form-control" required>
        </div>
        <div class="form-group">
            <label style="font-size: 25px;">Hình ảnh bài viết:</label>
            <input type="file" name="image_post" class="form-control">
            <p><img height="80" width="80" src="<?php echo APP_URL.'public/uploads/post/'.$val['image_post'];?>" alt="<?php echo $val['image_post'];?>"></p>
        </div>
        <div class="form-group">
            <label style="font-size: 25px;">Nội dung bài viết:</label>
            <textarea id="editor" name="content_post" style="resize: none;" class="form-control" rows="5"><?php echo $val['content_post']?></textarea>
        </div>
        <div class="form-group">
            <label style="font-size: 25px;">Danh mục sản phẩm:</label>
            <select type="text" name="category_post" class="form-control">
                <option>---Chọn---</option>
                <?php 
                foreach($category as $key => $value){
                ?>
                <option <?php if($value['id_category_post']==$val['id_category_post']){echo 'selected';}?> value="<?php echo $value['id_category_post']?>"><?php echo $value['title_category_post']?></option>
                <?php
                }
                ?>
            </select>
        </div>
        <button type="submit" class="btn btn-default btn-primary"><i class="fa-solid fa-floppy-disk"></i> Cập nhật</button>
    </form>
    <?php 
    }
    ?>
</div>