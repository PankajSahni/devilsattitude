<?php

	$host = 'http://' . $_SERVER['HTTP_HOST'];
	$website_link = $host . public_path('/');
	$image_url = $host . public_path('images/');


?>
<div id="content" class="innerPages membershipRegister">
	  
	<form action="<?php echo url_for('user/create') ?>" method="post" name="new_user"> 
		<ol>
			<li class="error_list"> 
				<?php echo $sf_user->getFlash('message'); ?>
			</li>
		</ol>
		<ol>
			<li>
				<?php echo $form ?>
			</li>
			<li>
				<p>This will be the line with the legal in it about the T&C and the PP and clicking is agreeing.</p>
				<a class="registerNow" href="javascript:void();" onclick="new_user.submit();" title="Register Now">Register Now</a>
				<h4>Already Registered ?<a href="<?php //echo url_for('@login') ?>" title="Sign In Now">Sign In Now</a></h4>
			</li>
		</ol>	
	</form>
<br clear="all" />
</div>