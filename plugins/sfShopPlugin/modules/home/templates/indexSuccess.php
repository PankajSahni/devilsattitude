<!DOCTYPE html>
<html><head><meta charset='UTF-8'>
        <title>Devil's Attitude</title>
        <?php
        $host = 'http://' . $_SERVER['HTTP_HOST'];
        $website_link = $host . public_path('/');
        $image_url = $host . public_path('/images/');
        $books_url = $host . public_path('/uploads/book/');
        ?>
    </head>
    <body>
        <div id="main" class="main"> 
            <img src="<?php echo $image_url; ?>album/1.jpg" alt="" class="preview" style="display:none;"/> 
            <section class="overlay"></section> 
            <header id="header"> 
            <div id="loading" class="loading"><span>Loading...</span></div> 
            <nav> <ul id="menu" class="menu">

                    <li><a href="<?php echo $website_link . 'category'; ?>" id="projects">
                            <img src="<?php echo $website_link; ?>uploads/designs/thumbs/amritsarblack.jpg" alt="<?php echo $website_link; ?>uploads/designs/amritsarblack.jpg" alt=""/></a>
                        <span class="active"></span>
                        <span class="wrap">
                            <a href="<?php echo $website_link . 'category'; ?>">
                                <span class="link">Category 1</span>
                                <span class="descr"></span></span></a></li> 

                    <li><a href="<?php echo $website_link . 'category'; ?>" id="projects">
                            <img src="<?php echo $website_link; ?>uploads/designs/thumbs/BugsBlack.jpg" alt="<?php echo $website_link; ?>uploads/designs/amritsarblack.jpg" alt=""/></a>
                        <span class="active"></span>
                        <span class="wrap">
                            <a href="<?php echo $website_link . 'category'; ?>">
                                <span class="link">Category 2</span>
                                <span class="descr"></span></span></a></li>

                    <li><a href="<?php echo $website_link . 'category'; ?>" id="projects">
                            <img src="<?php echo $website_link; ?>uploads/designs/thumbs/PunjabiBlackKuttiZindagi.jpg" alt="<?php echo $website_link; ?>uploads/designs/amritsarblack.jpg" alt=""/></a>
                        <span class="active"></span>
                        <span class="wrap">
                            <a href="<?php echo $website_link . 'category'; ?>">
                                <span class="link">Category 3</span>
                                <span class="descr"></span></span></a></li>

                </ul> </nav></div>
        <ul id="nav" class="navigation footer" style=""> <li class="album"> 
                <span class="link" id="toggle"><span class="arrow_down"></span></span> 
                <div class="wrapper thumbs_wrapper"> 
                    <div class="thumbs"> 
                        <img src="<?php echo $website_link; ?>uploads/designs/thumbs/amritsarblack.jpg" alt="<?php echo $website_link; ?>uploads/designs/amritsarblack.jpg"/>
                        <img src="<?php echo $website_link; ?>uploads/designs/thumbs/BugsBlack.jpg" alt="<?php echo $website_link; ?>uploads/designs/BugsBlack.jpg"/>
                        <img src="<?php echo $website_link; ?>uploads/designs/thumbs/NaturalBlack.jpg" alt="<?php echo $website_link; ?>uploads/designs/NaturalBlack.jpg"/>
                        <img src="<?php echo $website_link; ?>uploads/designs/thumbs/PunjabiBlackKuttiZindagi.jpg" alt="<?php echo $website_link; ?>uploads/designs/PunjabiBlackKuttiZindagi.jpg"/>
                        <img src="<?php echo $website_link; ?>uploads/designs/thumbs/PunjabiDilApnaPunjabi.jpg" alt="<?php echo $website_link; ?>uploads/designs/PunjabiDilApnaPunjabi.jpg"/> 
                    </div> </div> </li></ul><article id="popupAbout" class="popupAbout"> 
            <a id="popupAboutClose"><img src="<?php echo $image_url; ?>close.png" width="20" alt="" /></a> 
            <h1>About: Lorem Ipsum</h1>
            <p><img src="<?php echo $image_url; ?>200x200.png" alt="" class="image"/>  nisi quis por
            </p> <h6>Software Company(1995-2000)</h6> 
            <p><img src="<?php echo $image_url; ?>200x150.png" alt="" class="image"/>tis.<br /> </p></article>
        <article id="popupContact" class="popupContact"> <a id="popupContactClose"><img src="<?php echo $image_url; ?>close.png" width="20" alt="" /></a> <h1>Contact: Lorem Ipsum</h1> <p></p> <form action="form.php" method="post"> <label for="name">Name:</label> <input type="text" name="name" id="name" required placeholder="Name" /> <label for="email">Email:</label> <input type="email" name="email" id="email" required placeholder="email@example.com" /> <label for="website">Website:</label> <input type="url" name="website" id="website" required placeholder="http://www.example.com" />
                <label for="message">Message:</label>
                <textarea name="message" id="message" required></textarea> 
                <input type="submit" value="Send Message" /> </form>
          <!--  <iframe width="425" height="300" class="map" src="http://maps.google.com/maps?hl=en&amp;q=701+first+ave+sunnyvale+ca&amp;ie=UTF8&amp;hq=&amp;hnear=701+1st+Ave,+Sunnyvale,+California+94089&amp;z=14&amp;ll=37.416883,-122.026022&amp;output=embed"></iframe> -->
            <div id="social-network">
                <a href="#" target="_blank"><img src="<?php echo $image_url; ?>facebook.png" alt="Facebook" /></a>
                <a href="#" target="_blank"><img src="<?php echo $image_url; ?>flickr.png" alt="Flicker" /></a>
                <a href="#" target="_blank"><img src="<?php echo $image_url; ?>linkedin.png" alt="Linkedin" /></a> 
                <a href="#" target="_blank"><img src="<?php echo $image_url; ?>myspace.png" alt="Myspace" /></a> 
                <a href="#" target="_blank"><img src="<?php echo $image_url; ?>twitter.png" alt="Twitter" /></a> 
            </div></article>

    </body></html>