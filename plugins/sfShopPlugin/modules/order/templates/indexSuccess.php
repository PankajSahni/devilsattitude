<?php
$host = 'http://' . $_SERVER['HTTP_HOST'];
$website_link = $host . public_path('/');
$image_url = $host . public_path('/images/');
$designs_url = $host . public_path('/uploads/designs/');
?>
<?php $this->i = 0; ?>
<table width="70%" border="0" cellspacing="0" cellpadding="0" style="margin-left: 140px">
    <tr>
        <td width="193" height="25" bgcolor="#1B94E0"  align="center"><strong>Name</strong></td>
        <td width="193" bgcolor="#1B94E0"  align="center"><strong>Product</strong></td>
        <td width="193" bgcolor="#1B94E0"  align="center"><strong>Size</strong></td>
        <td width="193" bgcolor="#1B94E0"  align="center"><strong>Quantity</strong></td>
        <td width="193" bgcolor="#1B94E0"  align="center"><strong>Price</strong></td>
        <td width="193" bgcolor="#1B94E0"  align="center"><strong>Delete</strong></td>
    </tr>
    <form action="<?php echo url_for('order/update_cart') ?>">
        <?php foreach ($current_session_products as $value): ?>
            <?php ($this->i % 2) == 0 ? $this->td_class = "daedff" : $this->td_class = "ecf6ff"; ?>
            <tr>
                <td bgcolor="#<?php echo $this->td_class; ?>" align="center"><?php echo $value['Products']['name']; ?></td>
                <td bgcolor="#<?php echo $this->td_class; ?>" align="center"><img src="<?php echo $designs_url . $value['Products']['image']; ?>" alt="" width="70px" height="70px"/></td>
                <td bgcolor="#<?php echo $this->td_class; ?>" align="center"><?php echo $value['size']; ?></td>

                <td bgcolor="#<?php echo $this->td_class; ?>" align="center">
                    <table><tr>
                            <td><a href="<?php echo url_for('order/update_cart?id=' . $value['id'] . '&nos=' . $value['nos'] . '&do=reduce'); ?>"><span class="DSubtract" title="reduce one"></span></a></td>
                            <td style="margin-top: 20px"><?php echo $value['nos']; ?></td>
                            <td><a href="<?php echo url_for('order/update_cart?id=' . $value['id'] . '&nos=' . $value['nos'] . '&do=add'); ?>"><span class="DAdd" title="add one"></span></a></td>
                        </tr></table>
                </td>
                <td bgcolor="#<?php echo $this->td_class; ?>" align="center"><?php echo $value['Products']['price'] * $value['nos']; ?></td>
                <td bgcolor="#<?php echo $this->td_class; ?>" align="center"><a href="<?php echo url_for('order/delete_product?id=' . $value['id']); ?>" class="bClose" title="delete from cart"></a></td>
            </tr>
            <?php $this->i++; ?> 
        <?php endforeach; ?>
    </form>
<?php if($total != ""):?>
    <tr><td colspan="6" align="right"><h1><?php echo 'Total:Rs '. $total;?></h1></td></tr>
<?php endif;?>
    <tr>
        <td colspan="3"><a href="<?php echo url_for('category/index') ?>"><img style="margin-top:10px;margin-left:100px;" src="<?php echo $image_url . 'continue_shopping.jpg'; ?>"/></a></td>
        
<?php if ($if_login): ?>
    <form method="post" action="https://www.ccavenue.com/shopzone/cc_details.jsp">
        <input type=hidden name=Merchant_Id value="<?php echo $global_variables['merchant_id']; ?>">
        <input type=hidden name=Amount value="<?php echo $total; ?>">
        <input type=hidden name=Order_Id value="<?php echo $user_info[0]['Orders'][0]['order_id']; ?>"/> 
        <input type=hidden name=Redirect_Url value="<?php echo $global_variables['redirect_url']; ?>">
        <input type=hidden name=Checksum value="<?php echo $checksum; ?>">
        <input type="hidden" name="billing_cust_name" value="<?php echo $user_info[0]['name']; ?>"/> 
        <input type="hidden" name="billing_cust_address" value="<?php echo $user_info[0]['address']; ?>"/> 
        <input type="hidden" name="billing_cust_country" value="<?php echo 'India'; ?>"/> 
        <input type="hidden" name="billing_cust_state" value="<?php echo 'NA'; ?>"/> 
        <input type="hidden" name="billing_zip" value="<?php echo '123456'; ?>"/>
        <input type="hidden" name="billing_cust_tel" value="<?php echo $user_info[0]['mobile']; ?>"/> 
        <input type="hidden" name="billing_cust_email" value="<?php echo $user_info[0]['email']; ?>"/>
        <input type="hidden" name="delivery_cust_name" value="<?php echo $user_info[0]['name']; ?>"/>
        <input type="hidden" name="delivery_cust_address" value="<?php echo $user_info[0]['address']; ?>"/> 
        <input type="hidden" name="delivery_cust_country" value="<?php echo 'India'; ?>"/> 
        <input type="hidden" name="delivery_cust_state" value="<?php echo 'NA'; ?>"/>
        <input type="hidden" name="delivery_cust_tel" value="<?php echo $user_info[0]['mobile']; ?>"/>
        <input type="hidden" name="delivery_cust_notes" value="<?php echo 'NA'; ?>"/> 
        <input type="hidden" name="Merchant_Param" value=""> 
        <input type="hidden" name="billing_cust_city" value="<?php echo 'NA'; ?>"/>
        <input type="hidden" name="billing_zip_code" value="<?php echo '123456'; ?>"/>
        <input type="hidden" name="delivery_cust_city" value="<?php echo 'NA'; ?>"/>
        <input type="hidden" name="delivery_zip_code" value="<?php echo '123456'; ?>"/>
        <td colspan="3"><INPUT TYPE="image"  width="190px" height="70px" src="<?php echo $image_url . 'button_online_payment.gif'; ?>" value="submit"/></td>
    </form>
<?php else: ?>
    <td colspan="3"><a href="<?php echo url_for('user/new') ?>"><img width="190px" height="70px" src="<?php echo $image_url . 'proceed.png'; ?>"/></a></td>
<?php endif; ?>
</tr>
</table>
