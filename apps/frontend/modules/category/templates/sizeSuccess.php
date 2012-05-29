<div id="popupBackground-bottom">
<div id="popUp">
<a class="bClose" title="Close">Close</a>
    <li> <a class="age_range" id="age_small" title="small">small</a>
        <a class="age_range" id="age_medium" title="medium">medium</a>
        <a class="age_range <?php echo "active";?>" id="age_large" title="large">large</a>
    <a class="age_range" id="age_xl" title="xl">xl</a></li>
    <li>    <form action="<?php echo url_for('product/order');?>">
<input type="hidden" id="age" value="large" name="size"/>
<input type="hidden" value="q" name="product_id"/>
<input type="submit"/>
</form></li>
</div>
</div>