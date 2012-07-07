<?php
$host = 'http://' . $_SERVER['HTTP_HOST'];
$website_link = $host . public_path('/');
$image_url = $host . public_path('/images/');
$designs_url = $host . public_path('/uploads/designs/');
?>
<table>
    <tr><td><img src="<?php echo $designs_url . $product[0]['image']; ?>" width="470px" height="480px"/></td>
        <td>
            <table><tr>
                    <td><h1><?php echo $product[0]['price']; ?></h1><img src="<?php echo $image_url; ?>rupee.jpg" width="50px" height="50px" style="padding-top: 55px"/></td></tr>
                <tr><td><div class="buynow">
                            <p align="center">	
                                <a class="add popup" href="<?php echo url_for('category/size?product_id=' . $product[0]['product_id']) ?>">
                                    <img src="<?php echo $image_url; ?>button_buyNow.png" alt=""/>
                                </a>
                            </p>
                        </div>
                        <a href="<?php echo url_for('category/index') ?>"><img src="<?php echo $image_url ?>button_viewAll.png"/></a></td></tr></table>
        </td>
    </tr>
</table>
<div id="popupBackground-top" class="popUp01">

</div>

