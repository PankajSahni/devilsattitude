<?php

	$host = 'http://' . $_SERVER['HTTP_HOST'];
	$website_link = $host . public_path('/');
	$image_url = $host . public_path('images/');
?>
<div id="content" class="innerPages">
<div id="purchaseContent" class="readerAccount">
<p class="bigText">Start the process by registering or signing in with<br /> your Devil's Attitude account:</p>
<p style="color: #009933;margin-bottom: 2px;margin-top: -5px; font-size:16px"><?php echo $sf_user->getFlash('regis_message');?></p>
<fieldset>
<form action="<?php echo url_for('user/create') ?>" method="post" name="new_user">
<ol>
<li style="color: #FF0000;margin-bottom: 2px;margin-top: -15px; font-size:16px"><?php echo $sf_user->getFlash('message1');?></li>
<li>
<?php echo $form ?>
<li><p>By tapping "Register Now" below, you confirm that you agree to our <a href="#" title="Terms and Conditions">Terms and Conditions</a> and <a href="#" title="Privacy Policy">Privacy Policy</a>.</p></li>
<li class="last-Child"><a class="registerNow" href="javascript:void();" onclick="new_user.submit();" title="Register Now">Register Now</a></li>
</ol>
</form>
</fieldset>
<div id="or">or</div>
<fieldset class="last-Child">
<form action="<?php echo url_for('user/login') ?>" method="post" name="login"> 
<ol>
<li style="color: #FF0000;margin-bottom: 2px;margin-top: -15px; font-size:16px"><?php echo $sf_user->getFlash('message');?></li>
<li>
<?php echo $form1; ?></li>
<li><a class="forgetPassword" href="#" title="I forgot my password">I forgot my password</a></li>
<li class="last-Child"><a class="SignIn" href="javascript:void();" onclick="login.submit();" title="Sign In">Sign in</a></li>
</ol>
</form>
</fieldset>

<br clear="all" />
</div>
</div>