<!DOCTYPE html>
<html><head><meta charset='UTF-8'>
        <title>Vivid Photo</title>
        <?php
$host = 'http://' . $_SERVER['HTTP_HOST'];
$website_link = $host . public_path('/');
$image_url = $host . public_path('/images/');
$books_url = $host . public_path('/uploads/book/');
?>
</head>
    <body>
        <div id="main" class="main"> 
            <img src="<?php echo $image_url;?>album/1.jpg" alt="" class="preview" style="display:none;"/> 
            <section class="overlay"></section> 
            <header id="header"> 
                <h3>Vivid Photo</h3> 
                <h6>Photographs by <a href="http://www.flickr.com/photos/avengermark/" target="_blank">markusrichmond</a></h6> 
                <h6>Design by <a href="http://www.priteshgupta.com" target="_blank">PriteshGupta.com</a></h6> </header> 
            <div id="loading" class="loading"><span>Loading...</span></div> 
            <nav> <ul id="menu" class="menu"> <li> <a href="#" id="about"> <img src="<?php echo $image_url;?>1.jpg" alt=""/> 
                            <span class="active"></span> <span class="wrap"> <span class="link">About</span> 
                                <span class="descr">Know me</span> </span> </a> </li> 
                                <li> <a href="#" id="projects"> <img src="<?php echo $image_url;?>2.jpg" alt=""/> 
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
                    <div class="thumbs"> <img src="<?php echo $image_url;?>album/thumbs/1.jpg" alt="<?php echo $image_url;?>album/1.jpg"/> 
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
                    </div> </div> </li></ul><article id="popupAbout" class="popupAbout"> 
                        <a id="popupAboutClose"><img src="<?php echo $image_url;?>close.png" width="20" alt="" /></a> 
                        <h1>About: Lorem Ipsum</h1>
                        <p><img src="<?php echo $image_url;?>200x200.png" alt="" class="image"/>  nisi quis por
                        </p> <h6>Software Company(1995-2000)</h6> 
                        <p><img src="<?php echo $image_url;?>200x150.png" alt="" class="image"/>tis.<br /> </p></article>
        <article id="popupContact" class="popupContact"> <a id="popupContactClose"><img src="<?php echo $image_url;?>close.png" width="20" alt="" /></a> <h1>Contact: Lorem Ipsum</h1> <p></p> <form action="form.php" method="post"> <label for="name">Name:</label> <input type="text" name="name" id="name" required placeholder="Name" /> <label for="email">Email:</label> <input type="email" name="email" id="email" required placeholder="email@example.com" /> <label for="website">Website:</label> <input type="url" name="website" id="website" required placeholder="http://www.example.com" />
                <label for="message">Message:</label>
                <textarea name="message" id="message" required></textarea> 
                <input type="submit" value="Send Message" /> </form>
          <!--  <iframe width="425" height="300" class="map" src="http://maps.google.com/maps?hl=en&amp;q=701+first+ave+sunnyvale+ca&amp;ie=UTF8&amp;hq=&amp;hnear=701+1st+Ave,+Sunnyvale,+California+94089&amp;z=14&amp;ll=37.416883,-122.026022&amp;output=embed"></iframe> -->
            <div id="social-network">
                <a href="#" target="_blank"><img src="<?php echo $image_url;?>facebook.png" alt="Facebook" /></a>
                <a href="#" target="_blank"><img src="<?php echo $image_url;?>flickr.png" alt="Flicker" /></a>
                <a href="#" target="_blank"><img src="<?php echo $image_url;?>linkedin.png" alt="Linkedin" /></a> 
                <a href="#" target="_blank"><img src="<?php echo $image_url;?>myspace.png" alt="Myspace" /></a> 
                <a href="#" target="_blank"><img src="<?php echo $image_url;?>twitter.png" alt="Twitter" /></a> 
            </div></article>

    </body></html>