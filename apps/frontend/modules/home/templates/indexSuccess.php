<!DOCTYPE html>
<html><head><meta charset='UTF-8'>
        <title>Vivid Photo</title>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
    </head>
    <body>
        <?php
$host = 'http://' . $_SERVER['HTTP_HOST'];
$website_link = $host . public_path('/');
$image_url = $host . public_path('/images/');
?>
        <div id="main" class="main"> 
            <img src="<?php echo $image_url;?>album/1.jpg" alt="" class="preview" style="display:none;"/> 
            <section class="overlay"></section> 
            <div id="loading" class="loading"><span>Loading...</span></div> 
            <nav> <ul id="menu" class="menu"> 
                    <li> <a href="#" id="about"> <img src="<?php echo $image_url;?>1.jpg" alt=""/> 
                            <span class="active"></span> <span class="wrap"> <span class="link">About</span> 
                                <span class="descr">Know me</span> </span> </a> </li> 
                                <li><a href="#" id="projects"> <img src="<?php echo $image_url;?>2.jpg" alt=""/> 
                                        <span class="active"></span> <span class="wrap"> 
                                            <span class="link">Projects</span> 
                                            <span class="descr">My work</span> </span> </a> </li> 
                                            <li> <a href="#" id="contact"> <img src="<?php echo $image_url;?>3.jpg" alt=""/> 
                                                    <span class="active"></span> <span class="wrap"> 
                                                        <span class="link">Contact</span> 
                                                        <span class="descr">Get in touch</span> </span> </a> </li> </ul> </nav></div>
        <ul id="nav" class="navigation footer" style=""> <li class="album"> 
                <span class="link" id="toggle"><span class="arrow_down"></span></span> 
                <div class="wrapper thumbs_wrapper"> 
                    <div class="thumbs"> 
                        <img src="<?php echo $image_url;?>album/thumbs/1.jpg" alt="<?php echo $image_url;?>album/1.jpg"/> 
                        <img src="<?php echo $image_url;?>album/thumbs/2.jpg" alt="<?php echo $image_url;?>album/2.jpg"/> 
                        <img src="<?php echo $image_url;?>album/thumbs/3.jpg" alt="<?php echo $image_url;?>album/3.jpg"/> 
                        <img src="<?php echo $image_url;?>album/thumbs/4.jpg" alt="<?php echo $image_url;?>album/4.jpg"/> 
                        <img src="<?php echo $image_url;?>album/thumbs/5.jpg" alt="<?php echo $image_url;?>album/5.jpg"/> 
                        <img src="<?php echo $image_url;?>album/thumbs/6.jpg" alt="<?php echo $image_url;?>album/6.jpg"/> 
                        <img src="<?php echo $image_url;?>album/thumbs/1.jpg" alt="<?php echo $image_url;?>album/1.jpg"/> 
                        <img src="<?php echo $image_url;?>album/thumbs/2.jpg" alt="<?php echo $image_url;?>album/2.jpg"/> 
                        <img src="<?php echo $image_url;?>album/thumbs/3.jpg" alt="<?php echo $image_url;?>album/3.jpg"/> 
                        <img src="<?php echo $image_url;?>album/thumbs/4.jpg" alt="<?php echo $image_url;?>album/4.jpg"/> 
                        <img src="<?php echo $image_url;?>album/thumbs/5.jpg" alt="<?php echo $image_url;?>album/5.jpg"/> 
                        <img src="<?php echo $image_url;?>album/thumbs/6.jpg" alt="<?php echo $image_url;?>album/6.jpg"/> 
                    </div> </div> </li></ul>
    </body></html>