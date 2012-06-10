<div id="popupBackground-bottom">
<div id="popUp">
<a class="bClose" title="Close">Close</a>
    <li> <a class="age_range" id="age_small" title="small">small</a>
        <a class="age_range" id="age_medium" title="medium">medium</a>
        <a class="age_range <?php echo "active";?>" id="age_large" title="large">large</a>
    <a class="age_range" id="age_xl" title="xl">xl</a></li>
    <li>    
        <form method="POST">
<input type="hidden" id="age" value="large" name="size"/>
<input type="hidden" value="<?php echo $data['product_id'];?>" name="product_id"/>
<input type="submit" value="Continue Shopping"  onclick="this.form.action='<?php echo url_for('category/index');?>'; return true;"/>
<input type="submit" value="Checkout"  onclick="this.form.action='<?php echo url_for('order/index');?>'; return true;"/>
</form>
    </li>
</div>
</div>