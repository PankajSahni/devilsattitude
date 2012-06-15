<?php
$host = 'http://' . $_SERVER['HTTP_HOST'];
$website_link = $host . public_path('/');
$image_url = $host . public_path('/images/');
$designs_url = $host . public_path('/uploads/designs/');
?>
<div id="popupBackground-bottom">
    <div id="popUp">
        <a class="bClose" title="Close">Close</a>
        <li> <a class="age_range" id="age_small" title="small">small</a>
            <a class="age_range" id="age_medium" title="medium">medium</a>
            <a class="age_range <?php echo "active"; ?>" id="age_large" title="large">large</a>
            <a class="age_range" id="age_xl" title="xl">xl</a></li>   
            <form method="POST">
                <input type="hidden" id="age" value="large" name="size"/>
                <input type="hidden" value="<?php echo $data['product_id']; ?>" name="product_id"/>
                <table width="800px"><tr>
                <td><input type="image" style="margin-top: 30px" src="<?php echo $image_url.'continue_shopping.jpg';?>" value="Continue Shopping"  onclick="this.form.action='<?php echo url_for('category/index'); ?>'; return true;"/></td>
                <td><input type="image" class="checkout" src="<?php echo $image_url.'checkout.png';?>" value="Checkout"  onclick="this.form.action='<?php echo url_for('order/index'); ?>'; return true;"/></td>
            </tr></table>
                    </form>
    </div>
</div>