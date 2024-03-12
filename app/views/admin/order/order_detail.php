<h3 style="text-align: center; color: red; font-weight: bold;">Chi tiết đơn hàng</h3>
<div class="container" style="align-items: center">
    <h4 style="color: green">Chi tiết khách hàng</h4>
    <table class="table table-striped table-hover" style="font-size: 18px; border: 1px">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Tên khách hàng</th>
                <th scope="col">Số điện thoại</th>
                <th scope="col">Email</th>
                <th scope="col">Địa chỉ</th>
                <th scope="col">Ghi chú</th>
            </tr>
        </thead>
        <tbody>
        <?php
            foreach($order_infor as $key => $val_infor){ 
                  
            ?>
            
            <tr>
                <td scope="row"><?php echo $val_infor['name'];?></td>
                <td><?php echo $val_infor['phone']?></td>
                <td><?php echo $val_infor['email']?></td>
                <td><?php echo $val_infor['address']?></td>
                <td><?php echo $val_infor['content']?></td>
            </tr>
        <?php 
            };
        ?>
        </tbody>
    </table>

    <hr>
    <hr>

    <h4 style="color: green">Đơn hàng</h4>
    <table class="table table-striped table-hover" style="font-size: 18px; border: 1px">
        <thead class="thead-dark">
            <tr>
                <th>STT</th>
                <th scope="col">Tên sản phẩm</th>
                <th scope="col">Hình ảnh</th>
                <th scope="col">Số lượng</th>
                <th scope="col">Đơn giá</th>
                <th scope="col">Thành tiền</th>
            </tr>
        </thead>
        <tbody>
        <?php 
            $STT = 0;
            $total = 0;
            foreach($order_detail as $key => $val){ 
                $STT++;
                $total += $val['price_product']*$val['product_quantity'];     
            ?>
            
            <tr>
                <td><?php echo $STT?></td>
                <td scope="row"><?php echo $val['title_product'];?></td>
                <td><img height="100px" width="100px" src="<?php echo APP_URL?>public/uploads/product/<?php echo $val['image_product'];?>" alt=""></td>
                <td><?php echo $val['product_quantity'];?></td>
                <td><?php echo number_format($val['price_product']);?>đ</td>
                <td><?php echo number_format($val['price_product']*$val['product_quantity']);?>đ</td>
            </tr>
        <?php 
            };
        ?>
            <form action="<?php echo APP_URL?>order/order_confirm/<?php echo $val['order_code']?>" method="post">
            <tr>
                <td>
                    <input onclick="return confirm('Bạn đã xủ lý xong đơn hàng?')" type="submit" name="update_order" value="Đã xử lý" class="btn btn-default">
                </td>
                <td align="right" colspan="6"><span style="color: red; font-weight: bold;">Tổng tiền:</span> <?php echo number_format($total)?>đ</td>
            </tr>
            </form>
        </tbody>
    </table>
    
</div>

