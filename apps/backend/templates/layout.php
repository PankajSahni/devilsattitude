<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

    <head>

        <?php include_http_metas() ?>

        <?php include_metas() ?>

        <?php include_title() ?>

        <link rel="shortcut icon" href="/images/favicon.ico" />

        <?php include_stylesheets() ?>

        <?php include_javascripts() ?>

    </head>

    <body>

        <?php //if ($sf_user->getGuardUser() != ""): ?>

        <?php //if (!$sf_user->getGuardUser()->getIsSuperAdmin()): ?>

        <?php //echo 'You are not allowed to access backend. Your privileges are limited for frontend only'; ?>





        <?php //exit;?>

        <?php //else: ?>



        <?php //endif; ?>

        <?php //endif; ?>



        <div id="bg">&nbsp;</div>

        <div id="page">         

            <div id="logo">

                <h1><a href="#">Devil's</a></h1>

                <p class="description">Devil's backend</p>

            </div>			          					

            <div id="main"><div id="main2"><div id="main3">	

                        <?php if ($sf_user->isAuthenticated()): ?>

                            <div id="menu"><div id="menu2">

                                    <ul>                               

                                        <li><a href="<?php echo url_for('@logout') ?>">Logout</a></li>

                                    </ul>

                                </div></div>

                        <?php endif; ?>

                        <?php if ($sf_user->hasCredential('SuperAdministrator') && $sf_user->isAuthenticated()): ?>

                            <div id="sidebar"><div id="sidebar2">

                                    <h2>User Management</h2>

                                    <ul>

                                        <li><a href="<?php echo url_for('categories/index') ?>">Category Management</a></li>
                                        <li><a href="<?php echo url_for('products/index') ?>">Products Management</a></li>
                                        <li><a href="<?php echo url_for('orders/index') ?>">Orders Management</a></li>

                                    </ul>


                                </div></div>

                        <?php elseif (!$sf_user->hasCredential('SuperAdministrator') && $sf_user->isAuthenticated()): ?>

                            <p>This section is only for Super Administrators</p> 

                        <?php endif; ?>



                        <div id="content">

                            <?php echo $sf_content ?>

                        </div><!-- content -->                  

                        <div class="clearing">&nbsp;</div>

                    </div></div></div><!-- main --><!-- main2 --><!-- main3 -->

            <div id="footer">

                <p>Copyright &copy; 2011</p>

            </div>

        </div><!-- page -->

    </body>

</html>