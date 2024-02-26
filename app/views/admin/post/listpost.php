<h3 style="text-align: center;">Danh sách bài viết</h3>
<div class="container" style="align-items: center">
    <table class="table table-striped table-hover" style="font-size: 18px; border: 1px">
        <thead class="thead-dark">
            <tr>
                <th>STT</th>
                <th scope="col">Tên bài viết</th>
                <th scope="col">Hình ảnh</th>
                <th scope="col">Danh mục</th>
                <th scope="col">Hành động</th>
            </tr>
        </thead>
        <tbody>
        <?php 
            $STT = 0;
            foreach($post as $key => $val){ 
                $STT++    
            ?>
            
            <tr>
                <td><?php echo $STT?></td>
                <td scope="row"><?php echo $val['title_post'];?></td>
                <td><img height="80" width="80" src="<?php echo APP_URL.'public/uploads/post/'.$val['image_post'];?>" alt="<?php echo $val['image_post'];?>"></td>
                <td><?php echo $val['title_category_post'];?></td>
                <td>
                    <a href="<?php echo APP_URL?>post/editpost/<?php echo $val['id_post']?>">
                        <button class="btn btn-warning">Sửa</button>
                    </a>
                    <a href="<?php echo APP_URL?>post/deletePost/<?php echo $val['id_post']?>">
                        <button onclick="return confirm('Bạn có chắc muốn xóa không?')" class="btn btn-danger">Xóa</button>
                    </a>
                </td>
            </tr>
        <?php 
            };
        ?>
        </tbody>
    </table>
</div>