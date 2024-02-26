<h3 style="text-align: center;">Danh sách các danh mục bài viết</h3>
<div class="container" style="align-items: center">
    <table class="table table-striped table-hover" style="font-size: 18px; border: 1px">
        <thead class="thead-dark">
            <tr>
                <th>STT</th>
                <th scope="col">Tên danh mục bài viết</th>
                <th scope="col">Mô tả danh mục bài viết</th>
                <th scope="col">Hành động</th>
            </tr>
        </thead>
        <tbody>
        <?php 
            $STT = 0;
            foreach($catepost as $key => $val){ 
                $STT++    
            ?>
            
            <tr>
                <td><?php echo $STT?></td>
                <td scope="row"><?php echo $val['title_category_post'];?></td>
                <td><?php echo $val['desc_category_post'];?></td>
                <td>
                    <a href="<?php echo APP_URL?>catepost/editcatepost/<?php echo $val['id_category_post']?>">
                        <button class="btn btn-warning">Sửa</button>
                    </a>
                    <a href="<?php echo APP_URL?>catepost/deleteCatePost/<?php echo $val['id_category_post']?>">
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