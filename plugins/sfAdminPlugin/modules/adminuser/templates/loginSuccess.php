<div id="logIn">
<h2>Already a Member?</h2>
 <p>Backend Sign In</p>
<form action="<?php echo url_for('adminuser/login') ?>" method="post"> 

<ol><li style="color:#FF0000; margin-bottom:-8px"><?php
				echo $sf_user->getFlash('message');
				?></li></ol> 
				
<ol class="loginForm"><li><?php 
    echo $form; 
    ?></li></ol>

    <input type="submit"/>
</form>
 </div>
