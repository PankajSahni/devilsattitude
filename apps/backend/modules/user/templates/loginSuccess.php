<div id="logIn">
<h2>Already a Member?</h2>
 <p>Sign in to view your child's progress</p>
<form action="<?php echo url_for('user/login') ?>" method="post"> 

<ol><li style="color:#FF0000; margin-bottom:-8px"><?php
				echo $sf_user->getFlash('message');
				?></li></ol> 
				
<ol class="loginForm"><li><?php 
    echo $form; 
    ?></li></ol>

    <input type="submit"/>
</form>
 </div>
