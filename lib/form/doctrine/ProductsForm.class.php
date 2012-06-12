<?php

/**
 * Products form.
 *
 * @package    devil
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class ProductsForm extends BaseProductsForm {

    public function configure() {
        $this->setWidgets(array(
            'product_id' => new sfWidgetFormInputHidden(),
            'category_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Categories'), 'add_empty' => true)),
            'name' => new sfWidgetFormInputText(),
            'image' => new sfWidgetFormInputText(),
            'price' => new sfWidgetFormInputText(),
            'description' => new sfWidgetFormInputText(),
            'order_number' => new sfWidgetFormInputText(),
            'featured' => new sfWidgetFormInputText(),
        ));
        $this->setValidators(array(
            'product_id' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('product_id')), 'empty_value' => $this->getObject()->get('product_id'), 'required' => false)),
            'category_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Categories'), 'required' => false)),
            'name' => new sfValidatorString(array('max_length' => 50)),
            'image' => new sfValidatorString(array('max_length' => 255)),
            'price' => new sfValidatorInteger(),
            'description' => new sfValidatorString(array('max_length' => 255)),
            'order_number' => new sfValidatorInteger(array('required' => false)),
            'featured' => new sfValidatorInteger(array('required' => false)),
        ));
        $this->widgetSchema->setNameFormat('products[%s]');
        unset($this['created_at'], $this['updated_at']);

        $this->widgetSchema['image'] = new sfWidgetFormInputFileEditable(array(
                    'file_src' => '/' . basename(sfConfig::get('Products')) . '/' . $this->getObject()->getImage(),
                    'is_image' => true,
                    'edit_mode' => strlen($this->getObject()->getImage()) > 0,
                    'template' => '<div>%file%%input%</div>'
                ));

        $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);
        $this->setupInheritance();
    }

}
