<?php
$host = 'http://' . $_SERVER['HTTP_HOST'];
$website_link = $host . public_path('/');
$image_url = $host . public_path('/images/');
$designs_url = $host . public_path('/uploads/designs/');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <?php include_http_metas() ?>
        <?php include_metas() ?>
        <?php include_title() ?>
        <link rel="shortcut icon" href="/favicon.ico" />
        <?php include_stylesheets() ?>
        <?php include_javascripts() ?>
    </head>
    <body class="body">


        <div class="main">
            <!-- header -->

            <div class="wrapper">
                <h1><a href="<?php echo $website_link;?>" id="logo"></a></h1>
                <nav>
                    <ul id="menu">
                        <!--<li id="active"><a href="">Home</a></li>
                        <li><a href="">About</a></li>
                        <li><a href="">Folio</a></li>
                        <li><a href="">Services</a></li>
                        <li><a href="">News</a></li>
                        <li><a href="">Contact</a></li>-->

                    </ul>
                </nav>
            </div>


            <?php echo $sf_content ?>



        </div>
        <div class="body4">
            <div class="main">
                <!--<section id="content2">
                    <div class="line2 wrapper">
                        <div class="wrapper">
                            <article class="col1">
                                <h2>My Philosophy</h2>
                                <div class="wrapper">
                                    <figure class="left marg_right1"><img src="<?php //echo $image_url;  ?>page1_img2.jpg" alt=""></figure>
                                    <p>
                                        <strong>At vero eos et accusamus iusto</strong>
                                        odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque <a href="#">corrupti quos dolores</a> et quas moles- tias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt.
                                    </p>
                                </div>
                                <div class="pad">
                                    <p>
                                        Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.
                                    </p>
                                </div>
                            </article>
                            <article class="col3 pad_left1">
                                <h2>Coming Soon</h2>
                                <div class="pad">
                                    <div class="wrapper">
                                        <span class="date"><span>12</span>jun</span>
                                        <p>
                                            <a href="#" class="link1">Sed ut perspiciatis</a><br>
                                            Unde omnis iste natuerror tium doloremque laudany tium totamrem.
                                        </p>
                                    </div>
                                    <div class="wrapper">
                                        <span class="date"><span>23</span>jun</span>
                                        <p>
                                            <a href="#" class="link1">Doperiam eaque ipsa </a><br>
                                            Quae ab illo inventore veritatis et quasi archiecto emo enim ipsam.
                                        </p>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="wrapper buttons">
                            <article class="col1">
                                <a href="#" class="button">Read More</a>
                            </article>
                            <article class="col3 pad_left1">
                                <a href="#" class="button">Read More</a>
                            </article>
                        </div>
                    </div>
                </section>-->
            </div>
        </div>
        <!-- / content -->
        <!--<div class="main">
            footer
            <footer>
                <div class="wrapper">
                    <span class="left">
                        <a rel="nofollow" href="http://www.templatemonster.com/" target="_blank">Website template</a> designed by TemplateMonster.com<br>
                    </span>
                    <ul id="icons">
                        <li><a href="#" class="normaltip" title="Facebook"><img src="<?php //echo $image_url;  ?>icon1.png" alt=""></a></li>
                        <li><a href="#" class="normaltip" title="Delicious"><img src="<?php //echo $image_url;  ?>icon2.png" alt=""></a></li>
                        <li><a href="#" class="normaltip" title="Stumble Upon"><img src="<?php //echo $image_url;  ?>icon3.png" alt=""></a></li>
                        <li><a href="#" class="normaltip" title="Twitter"><img src="<?php //echo $image_url;  ?>icon4.png" alt=""></a></li>
                        <li><a href="#" class="normaltip" title="Linkedin"><img src="<?php //echo $image_url;  ?>icon5.png" alt=""></a></li>
                        <li><a href="#" class="normaltip" title="Reddit"><img src="<?php //echo $image_url;  ?>icon6.png" alt=""></a></li>
                    </ul>
                </div>
          
            </footer>
        
        </div>-->
    </body>
</html>