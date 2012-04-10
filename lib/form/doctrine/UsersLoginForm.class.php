<?php
class UsersLoginForm extends sfForm 
{ 
    public function configure() 
         { 
          $this->setWidgets(array( 
            'email' => new sfWidgetFormInput(array(),array('onfocus' => 'this.value=""','title' =>'Email Address','value' =>'Email Address',)), 
            'password' => new sfWidgetFormInputPassword(array(),array('onfocus' => 'this.value=""','title' =>'Password','value' =>'Password',)),
			'reffernce_uri' => new sfWidgetFormInputHidden(array(),array('title' =>'','value' =>(isset($_GET['refference_uri'])?$_GET['refference_uri']:''))) 
             )); 
			$this->widgetSchema->setNameFormat('login[%s]'); 
			$this->setValidators(array(
				'email'    => new sfValidatorString(array('required' => false)),
				'pass' => new sfValidatorString(array('required' => false)))
			);
			
			$this->widgetSchema->setLabel('email', "Email Address :");
			$this->widgetSchema->setLabel('password', 'Password :'); 
			
			
	
		  
          $this->widgetSchema->setNameFormat('users[%s]'); 
          $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema); 
          parent::setup(); 
    } 
} 
?>