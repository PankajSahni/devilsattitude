<?php
$host = 'http://' . $_SERVER['HTTP_HOST'];
$website_link = $host . public_path('/');
$image_url = $host . public_path('/images/');
$designs_url = $host . public_path('/uploads/designs/');
?>
<table border="1" width="100%">
    <tr><td>name<td>image</td><td>size</td><td>quantity</td><td>price</td><td>delete</td></tr> 
    <form action="<?php echo url_for('order/update_cart') ?>">
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
        <?php endforeach; ?>
    </form>

</table>
<a href="<?php echo url_for('category/index')?>">Shop More</a>
<?php if($if_login):?>
	<form method="post" action="https://www.ccavenue.com/shopzone/cc_details.jsp">
	<input type=hidden name=Merchant_Id value="<?php echo $global_variables['merchant_id']; ?>">
	<input type=hidden name=Amount value="<?php echo $total; ?>">
	<input type=hidden name=Order_Id value="<?php echo $user_info[0]['Orders'][0]['order_id']; ?>"/> 
	<input type=hidden name=Redirect_Url value="<?php echo $global_variables['redirect_url']; ?>">
	<input type=hidden name=Checksum value="<?php echo $checksum; ?>">
	<input type="hidden" name="billing_cust_name" value="<?php echo $user_info[0]['name']; ?>"/> 
	<input type="hidden" name="billing_cust_address" value="<?php echo $user_info[0]['address']; ?>"/> 
	<input type="hidden" name="billing_cust_country" value="<?php echo 'India';?>"/> 
	<input type="hidden" name="billing_cust_state" value="<?php echo 'NA';?>"/> 
	<input type="hidden" name="billing_zip" value="<?php echo '123456';?>"/>
	<input type="hidden" name="billing_cust_tel" value="<?php echo $user_info[0]['mobile']; ?>"/> 
	<input type="hidden" name="billing_cust_email" value="<?php echo $user_info[0]['email']; ?>"/>
	<input type="hidden" name="delivery_cust_name" value="<?php echo $user_info[0]['name']; ?>"/>
	<input type="hidden" name="delivery_cust_address" value="<?php echo $user_info[0]['address']; ?>"/> 
	<input type="hidden" name="delivery_cust_country" value="<?php echo 'India';?>"/> 
	<input type="hidden" name="delivery_cust_state" value="<?php echo 'NA';?>"/>
	<input type="hidden" name="delivery_cust_tel" value="<?php echo $user_info[0]['mobile']; ?>"/>
	<input type="hidden" name="delivery_cust_notes" value="<?php echo 'NA';?>"/> 
	<input type="hidden" name="Merchant_Param" value=""> 
	<input type="hidden" name="billing_cust_city" value="<?php echo 'NA';?>"/>
	<input type="hidden" name="billing_zip_code" value="<?php echo '123456';?>"/>
	<input type="hidden" name="delivery_cust_city" value="<?php echo 'NA';?>"/>
	<input type="hidden" name="delivery_zip_code" value="<?php echo '123456';?>"/>
	<INPUT TYPE="submit" value="submit">
	</form>
<?php else:?>
<a href="<?php echo url_for('user/new')?>">Proceed</a>
<?php endif; ?>
