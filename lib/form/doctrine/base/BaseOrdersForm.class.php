<?php

/**
 * Orders form base class.
 *
 * @method Orders getObject() Returns the current form's model object
 *
 * @package    devil
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseOrdersForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'order_id'          => new sfWidgetFormInputHidden(),
      'order_sessions_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('OrderSessions'), 'add_empty' => true)),
      'user_id'           => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('User'), 'add_empty' => false)),
      'status'            => new sfWidgetFormInputText(),
      'created_at'        => new sfWidgetFormDateTime(),
      'updated_at'        => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'order_id'          => new sfValidatorChoice(array('choices' => array($this->getObject()->get('order_id')), 'empty_value' => $this->getObject()->get('order_id'), 'required' => false)),
      'order_sessions_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('OrderSessions'), 'required' => false)),
      'user_id'           => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('User'))),
      'status'            => new sfValidatorInteger(array('required' => false)),
      'created_at'        => new sfValidatorDateTime(),
      'updated_at'        => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('orders[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Orders';
  }

}
