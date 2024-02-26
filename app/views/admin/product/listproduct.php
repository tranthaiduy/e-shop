<h3 style="text-align: center;">Danh sách sản phẩm</h3>
<div class="container" style="align-items: center">
    <table class="table table-striped table-hover" style="font-size: 18px; border: 1px">
        <thead class="thead-dark">
            <tr>
                <th>STT</th>
                <th scope="col">Tên sản phẩm</th>
                <th scope="col">Hình ảnh</th>
                <th scope="col">Giá (VND)</th>
                <th scope="col">Số lượng</th>
                <th scope="col">Danh mục</th>
                <th scope="col">Hành động</th>
            </tr>
        </thead>
        <tbody>
        <?php 
            $STT = 0;
            foreach($product as $key => $val){ 
                $STT++    
            ?>
            
            <tr>
                <td><?php echo $STT?></td>
                <td scope="row"><?php echo $val['title_product'];?></td>
                <td><img height="80" width="80" src="<?php echo APP_URL.'public/uploads/product/'.$val['image_product'];?>" alt="<?php echo $val['image_product'];?>"></td>
                <td><?php echo number_format($val['price_product'], 0);?></td>
                <td><?php echo $val['quantity_product'];?></td>
                <td><?php echo $val['title_category_product'];?></td>
                <td>
                    <a href="<?php echo APP_URL?>product/editproduct/<?php echo $val['id_product']?>">
                        <button class="btn btn-warning">Sửa</button>
                    </a>
                    <a href="<?php echo APP_URL?>product/deleteProduct/<?php echo $val['id_product']?>">
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