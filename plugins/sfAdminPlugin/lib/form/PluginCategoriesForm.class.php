<?php

/**
 * Categories form.
 *
 * @package    devil
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class CategoriesForm extends BaseCategoriesForm {

    public function configure() {
        $category_id = intval($this->getObject()->get('category_id'));
        $this->setWidgets(array(
            'name' => new sfWidgetFormInputText(),
            'category_image' => new sfWidgetFormInputText(),
        ));
        $this->setValidators(array(
            'name' => new sfValidatorString(array('max_length' => 255)),
            'category_image' => new sfValidatorString(array('max_length' => 255)),
        ));
        $this->widgetSchema->setNameFormat('categories[%s]');
        unset($this['created_at'], $this['updated_at']);

        $this->widgetSchema['category_image'] = new sfWidgetFormInputFileEditable(array(
                    'file_src' => '/' . basename(sfConfig::get('Categories')) . '/' . $this->getObject()->getCategoryImage(),
                    'is_image' => true,
                    'edit_mode' => strlen($this->getObject()->getCategoryImage()) > 0,
                    'template' => '<div>%file%%input%</div>'
                ));

        $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);
        $this->setupInheritance();
    }

}
