<?php
$host = 'http://' . $_SERVER['HTTP_HOST'];
$website_link = $host . public_path('/');
$image_url = $host . public_path('/images/');
$designs_url = $host . public_path('/uploads/designs/');
?>
<?php if ($activate_cart_button == 1): ?>
    <li align="center" class="end"><a href="<?php echo url_for('order/index') ?>"><img width="150px" height="40px" src="<?php echo $image_url . 'view_cart.png'; ?>"/></a></li>
<?php endif; ?>

<!-- / header-->
<!-- content -->
<section id="content">
    <div class="line1">
        <div class="line2 wrapper">
            <div class="wrapper">
                <?php $i = 0; ?>
                <?php foreach ($all_products[0]['Products'] as $product): ?>
                    <?php //if(($i % 3)==0)?>
                    <article class="col1">
                        <figure>
                            <a href="<?php echo url_for('tshirts/index?product=' . $product['name']); ?>" class="preview" title="" width="70px" height="80px">
                                <img src="<?php echo $designs_url . $product['image']; ?>" alt="" width="270px" height="280px"/></a>
                        </figure>
                        <div class="buynow">
                            <p align="center">	
                                <a class="add popup" href="<?php echo url_for('category/size?product_id=' . $product['product_id']) ?>">
                                    <img src="<?php echo $image_url; ?>button_buyNow.png" alt=""/>
                                </a>
                            </p>
                        </div>
                    </article>
                    <?php $i++; ?>
                <?php endforeach; ?>

            </div>



        </div>
    </div>
</section>





<div id="popupBackground-top" class="popUp01">

</div>


