    <?php
    $host = 'http://' . $_SERVER['HTTP_HOST'];
    $website_link = $host . public_path('/');
    $image_url = $host . public_path('/images/');
    $designs_url = $host . public_path('/uploads/designs/');
    ?>
<img src="<?php echo $designs_url.$product[0]['image']; ?>" width="270px" height="280px"/>
    <div id="popUp">
    <li> <a class="age_range" id="age_small" title="small">small</a>
        <a class="age_range" id="age_medium" title="medium">medium</a>
        <a class="age_range <?php echo "active";?>" id="age_large" title="large">large</a>
    <a class="age_range" id="age_xl" title="xl">xl</a></li>
</div>
	<form method="post" action="https://www.ccavenue.com/shopzone/cc_details.jsp">
	<input type=hidden name=Merchant_Id value="<?php echo $Merchant_Id; ?>">
	<input type=hidden name=Amount value="<?php echo $Amount; ?>">
	<input type=hidden name=Order_Id value="<?php echo $user_info[0]['Orders'][0]['order_id']; ?>"/> 
	<input type=hidden name=Redirect_Url value="<?php echo $Redirect_Url; ?>">
	<input type=hidden name=Checksum value="<?php echo $Checksum; ?>">
	<input type="hidden" name="billing_cust_name" value="<?php echo $user_info[0]['name']; ?>"/> 
	<input type="hidden" name="billing_cust_address" value="<?php echo $user_info[0]['address']; ?>"/> 
	<input type="hidden" name="billing_cust_country" value="<?php echo 'IN';?>"/> 
	<input type="hidden" name="billing_cust_state" value="<?php echo $user_info[0]['name']; ?>"/>
	<input type="hidden" name="billing_zip" value="<?php echo $user_info[0]['name']; ?>"/>
	<input type="hidden" name="billing_cust_tel" value="<?php echo $user_info[0]['name']; ?>"/> 
	<input type="hidden" name="billing_cust_email" value="<?php echo $user_info[0]['name']; ?>"/>
	<input type="hidden" name="delivery_cust_name" value="<?php echo $user_info[0]['name']; ?>"/>
	<input type="hidden" name="delivery_cust_address" value="<?php echo $user_info[0]['name']; ?>"/> 
	<input type="hidden" name="delivery_cust_country" value="<?php echo 'IN';?>"/> 
	<input type="hidden" name="delivery_cust_state" value="<?php echo $user_info[0]['name']; ?>"/>
	<input type="hidden" name="delivery_cust_tel" value="<?php echo $user_info[0]['name']; ?>"/>
	<input type="hidden" name="delivery_cust_notes" value="<?php echo $user_info[0]['name']; ?>"/> 
	<input type="hidden" name="Merchant_Param" value="<?php echo $Merchant_Param; ?>"> 
	<input type="hidden" name="billing_cust_city" value="<?php echo $user_info[0]['name']; ?>"/>
	<input type="hidden" name="billing_zip_code" value="<?php echo $user_info[0]['name']; ?>"/>
	<input type="hidden" name="delivery_cust_city" value="<?php echo $user_info[0]['name']; ?>"/>
	<input type="hidden" name="delivery_zip_code" value="<?php echo $user_info[0]['name']; ?>"/>
	<INPUT TYPE="submit" value="submit">
	</form>
<form action="<?php echo url_for('product/order');?>">
<input type="hidden" id="age" value="large" name="size"/>
<input type="hidden" value="<?php echo $product[0]['product_id'];?>" name="product_id"/>
<input type="submit"/>
</form>