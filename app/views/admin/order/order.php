<h3 style="text-align: center; color: red; font-weight: bold;">Danh sách các đơn hàng</h3>
<div class="container" style="align-items: center">
    <table class="table table-striped table-hover" style="font-size: 18px; border: 1px">
        <thead class="thead-dark">
            <tr>
                <th>STT</th>
                <th scope="col">Mã đơn hàng</th>
                <th scope="col">Ngày đặt</th>
                <th scope="col">Tình trạng</th>
                <th scope="col">Hành động</th>
            </tr>
        </thead>
        <tbody>
        <?php 
            $STT = 0;
            foreach($list_order as $key => $val){ 
                $STT++    
            ?>
            
            <tr>
                <td><?php echo $STT?></td>
                <td scope="row"><?php echo $val['order_code'];?></td>
                <td><?php echo $val['order_date'];?></td>
                <td><?php
                    if($val['order_status']==0){
                        echo '<span style="color: red">Mới</span>';
                    }else{
                        echo '<span style="color: green"><i class="fa-solid fa-check"></i> Đã xử lý</span>';
                    }
                        
                    ?>
                </td>
                <td>
                    <a href="<?php echo APP_URL?>order/order_detail/<?php echo $val['order_code']?>">
                        <button class="btn btn-success"><i class="fa-regular fa-eye"></i> Xem đơn hàng</button>
                    </a>
                </td>
            </tr>
        <?php 
            };
        ?>
        </tbody>
    </table>
</div>