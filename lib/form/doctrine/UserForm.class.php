<?php

/**
 * User form.
 *
 * @package    devil
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class UserForm extends BaseUserForm {

    public function configure() {
        unset($this['created_at'], $this['updated_at']);

        $this->setWidgets(array(
            'email' => new sfWidgetFormInputText(array(), array('onfocus' => 'this.value=""', 'title' => 'Email Address', 'value' => 'someone@somewhere.com',)),
            'pass' => new sfWidgetFormInputPassword(),
            'confirm_password' => new sfWidgetFormInputPassword(),
            'name' => new sfWidgetFormInputText(),
            'mobile' => new sfWidgetFormInputText(),
            'address' => new sfWidgetFormInputText(array(), array('onfocus' => 'this.value=""', 'title' => 'Delivery Address', 'value' => 'Order Will be delivered here',)),
        ));
        $this->widgetSchema->setLabel('pass', 'Password');
        $this->widgetSchema->setLabel('confirm_password', 'Confirm Password');

        $this->setValidators(array(
            'pass' => new sfValidatorString(array('required' => true)),
            'pass' => new sfValidatorString(array('min_length' => 4)),
            'confirm_password' => new sfValidatorString(array('required' => true)),
            'name' => new sfValidatorString(array('min_length' => 1)),
            'mobile' => new sfValidatorString(array('required' => true)),
            'address' => new sfValidatorString(array('required' => true)),
            'email' => new sfValidatorEmail()));
        $this->mergePostValidator(new sfValidatorSchemaCompare('pass',
                        sfValidatorSchemaCompare::EQUAL, 'confirm_password',
                        array(),
                        array('invalid' => 'The two passwords must be the same.')));
        $this->widgetSchema->setNameFormat('user[%s]');
    }

}
