    <?php
    $host = 'http://' . $_SERVER['HTTP_HOST'];
    $website_link = $host . public_path('/');
    $image_url = $host . public_path('/images/');
    echo $designs_url = $host . public_path('/uploads/designs/');
    ?>
    <body id="page1">
        <div class="body1">
            <div class="body2">
                <div class="body3">
                    <div class="main">
                        <!-- header -->
                        <header>
                            <div class="wrapper">
                                <h1><a href="index.html" id="logo"></a></h1>
                                <nav>
                                    <ul id="menu">
                                        <li id="active"><a href="index.html">Home</a></li>
                                        <li><a href="About.html">About</a></li>
                                        <li><a href="Folio.html">Folio</a></li>
                                        <li><a href="Services.html">Services</a></li>
                                        <li><a href="News.html">News</a></li>
                                        <li class="end"><a href="Contact.html">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
     
                        </header><div class="ic">More Website Templates at TemplateMonster.com!</div>	
                        <!-- / header-->
                        <!-- content -->
                        <section id="content">
                            <div class="line1">
                                <div class="line2 wrapper">
                                    <div class="wrapper">
                                        <?php $i = 0;?>
                                        <?php foreach ($all_products[0]['Products'] as $product): ?>
                                        <?php //if(($i % 3)==0)?>
                                        <article class="col1">
                                            <figure>
                                                <a href="<?php echo $designs_url . $product['image']; ?>" class="preview" title="" width="70px" height="80px">
                                                        <img src="<?php echo $designs_url . $product['image']; ?>" alt="" width="270px" height="280px"/></a>
                                            </figure>
                                            <div class="buynow">
                                                <p align="center">	
                                                    <a class="add popup" href="<?php echo url_for('category/size') ?>">
                                                        <img src="<?php echo $image_url; ?>button_buyNow.png" alt=""/>
                                                    </a>
                                                </p>
                                            </div>
                                        </article>
                                        <?php $i++;?>
                                         <?php endforeach; ?>

                                    </div>



                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
        <div class="body4">
            <div class="main">
                <section id="content2">
                    <div class="line2 wrapper">
                        <div class="wrapper">
                            <article class="col1">
                                <h2>My Philosophy</h2>
                                <div class="wrapper">
                                    <figure class="left marg_right1"><img src="<?php echo $image_url; ?>page1_img2.jpg" alt=""></figure>
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
                </section>
            </div>
        </div>
        <!-- / content -->
        <div class="main">
            <!-- footer -->
            <footer>
                <div class="wrapper">
                    <span class="left">
                        <a rel="nofollow" href="http://www.templatemonster.com/" target="_blank">Website template</a> designed by TemplateMonster.com<br>
                    </span>
                    <ul id="icons">
                        <li><a href="#" class="normaltip" title="Facebook"><img src="<?php echo $image_url; ?>icon1.png" alt=""></a></li>
                        <li><a href="#" class="normaltip" title="Delicious"><img src="<?php echo $image_url; ?>icon2.png" alt=""></a></li>
                        <li><a href="#" class="normaltip" title="Stumble Upon"><img src="<?php echo $image_url; ?>icon3.png" alt=""></a></li>
                        <li><a href="#" class="normaltip" title="Twitter"><img src="<?php echo $image_url; ?>icon4.png" alt=""></a></li>
                        <li><a href="#" class="normaltip" title="Linkedin"><img src="<?php echo $image_url; ?>icon5.png" alt=""></a></li>
                        <li><a href="#" class="normaltip" title="Reddit"><img src="<?php echo $image_url; ?>icon6.png" alt=""></a></li>
                    </ul>
                </div>
                <!-- {%FOOTER_LINK} -->
            </footer>
            <!-- / footer -->
        </div>
        <script type="text/javascript"> Cufon.now(); </script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('#myRoundabout').roundabout({
                    shape: 'square',
                    minScale: 0.93, // tiny!
                    maxScale: 1, // tiny!
                    easing:'easeOutExpo',
                    clickToFocus:'true',
                    focusBearing:'0',
                    duration:800,
                    reflect:true
                });
            });
        </script>
        
<div id="popupBackground-top" class="popUp01">

</div>


