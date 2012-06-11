<?php
$host = 'http://' . $_SERVER['HTTP_HOST'];
$website_link = $host . public_path('/');
$image_url = $host . public_path('/images/');
$designs_url = $host . public_path('/uploads/designs/');
?>
<img src="<?php echo $designs_url . $product[0]['image']; ?>" width="270px" height="280px"/>
<h1><?php echo $product[0]['price']; ?></h1>
<div class="buynow">
    <p align="center">	
        <a class="add popup" href="<?php echo url_for('category/size?product_id=' . $product[0]['product_id']) ?>">
            <img src="<?php echo $image_url; ?>button_buyNow.png" alt=""/>
        </a>
    </p>
</div>
<a href="<?php echo url_for('category/index')?>">View All Products</a>

<div id="popupBackground-top" class="popUp01">

</div>
