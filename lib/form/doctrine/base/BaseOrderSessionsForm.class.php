<?php

/**
 * OrderSessions form base class.
 *
 * @method OrderSessions getObject() Returns the current form's model object
 *
 * @package    devil
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseOrderSessionsForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'session_id' => new sfWidgetFormInputText(),
      'product_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Products'), 'add_empty' => false)),
      'nos'        => new sfWidgetFormInputText(),
      'size'       => new sfWidgetFormInputText(),
      'created_at' => new sfWidgetFormDateTime(),
      'updated_at' => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'session_id' => new sfValidatorString(array('max_length' => 225)),
      'product_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Products'))),
      'nos'        => new sfValidatorInteger(),
      'size'       => new sfValidatorString(array('max_length' => 5)),
      'created_at' => new sfValidatorDateTime(),
      'updated_at' => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('order_sessions[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'OrderSessions';
  }

}
