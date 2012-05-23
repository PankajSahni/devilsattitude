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
	<input type=hidden name=Order_Id value="<?php echo $Order_Id; ?>">
	<input type=hidden name=Redirect_Url value="<?php echo $Redirect_Url; ?>">
	<input type=hidden name=Checksum value="<?php echo $Checksum; ?>">
	<input type="hidden" name="billing_cust_name" value="<?php echo $billing_cust_name; ?>"> 
	<input type="hidden" name="billing_cust_address" value="<?php echo $billing_cust_address; ?>"> 
	<input type="hidden" name="billing_cust_country" value="<?php echo $billing_cust_country; ?>"> 
	<input type="hidden" name="billing_cust_state" value="<?php echo $billing_cust_state; ?>"> 
	<input type="hidden" name="billing_zip" value="<?php echo $billing_zip; ?>"> 
	<input type="hidden" name="billing_cust_tel" value="<?php echo $billing_cust_tel; ?>"> 
	<input type="hidden" name="billing_cust_email" value="<?php echo $billing_cust_email; ?>"> 
	<input type="hidden" name="delivery_cust_name" value="<?php echo $delivery_cust_name; ?>"> 
	<input type="hidden" name="delivery_cust_address" value="<?php echo $delivery_cust_address; ?>"> 
	<input type="hidden" name="delivery_cust_country" value="<?php echo $delivery_cust_country; ?>"> 
	<input type="hidden" name="delivery_cust_state" value="<?php echo $delivery_cust_state; ?>"> 
	<input type="hidden" name="delivery_cust_tel" value="<?php echo $delivery_cust_tel; ?>"> 
	<input type="hidden" name="delivery_cust_notes" value="<?php echo $delivery_cust_notes; ?>"> 
	<input type="hidden" name="Merchant_Param" value="<?php echo $Merchant_Param; ?>"> 
	<input type="hidden" name="billing_cust_city" value="<?php echo $billing_city; ?>"> 
	<input type="hidden" name="billing_zip_code" value="<?php echo $billing_zip; ?>"> 
	<input type="hidden" name="delivery_cust_city" value="<?php echo $delivery_city; ?>"> 
	<input type="hidden" name="delivery_zip_code" value="<?php echo $delivery_zip; ?>"> 
	<INPUT TYPE="submit" value="submit">
	</form>
<form action="<?php echo url_for('product/order');?>">
<input type="hidden" id="age" value="large" name="size"/>
<input type="hidden" value="<?php echo $product[0]['product_id'];?>" name="product_id"/>
<input type="submit"/>
</form>