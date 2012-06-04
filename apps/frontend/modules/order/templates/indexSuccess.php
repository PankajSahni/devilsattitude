<?php
$host = 'http://' . $_SERVER['HTTP_HOST'];
$website_link = $host . public_path('/');
$image_url = $host . public_path('/images/');
$designs_url = $host . public_path('/uploads/designs/');
?>
<table border="1" width="100%">
    <tr><td>name<td>image</td><td>size</td><td>quantity</td><td>price</td><td>delete</td></tr> 
    <form action="<?php echo url_for('order/update_cart') ?>">
        <?php $total = 0;?>
        <?php foreach ($current_session_products as $value): ?>
            <tr>
                <td><?php echo $value['Products']['name']; ?></td>
                <td><img src="<?php echo $designs_url . $value['Products']['image']; ?>" alt="" width="70px" height="70px"/></td>
                <td><?php echo $value['size']; ?></td>
                
                <td><a href="<?php echo url_for('order/update_cart?id='.$value['id'].'&nos='.$value['nos'].'&do=reduce');?>"><span class="DSubtract" title="reduce one"></span></a>
                <?php echo $value['nos']; ?>
                    <a href="<?php echo url_for('order/update_cart?id='.$value['id'].'&nos='.$value['nos'].'&do=add');?>"><span class="DAdd" title="add one"></span></a></td>
                <td><?php echo $value['Products']['price'] * $value['nos']; ?></td>
                <td><a href="<?php echo url_for('order/delete_product?id='.$value['id']);?>" class="bClose" title="delete from cart"></a></td>
            </tr>
            <?php $total = $total + $value['Products']['price'] * $value['nos'];?>
        <?php endforeach; ?>
            <?php echo $total; ?>
    </form>

</table>
<a href="<?php echo url_for('category/index')?>">Shop More</a>