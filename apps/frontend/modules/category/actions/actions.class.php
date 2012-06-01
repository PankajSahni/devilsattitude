<?php

/**
 * category actions.
 *
 * @package    devil
 * @subpackage category
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class categoryActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
      echo session_id();
    //$this->forward('default', 'module');
      $this->name = 'gujrati';
      $this->featured_products = Doctrine::getTable('Categories')->func_getProductsByCategoryNameFeatured($this->name = 'punjabi');
      $this->all_products = Doctrine::getTable('OrderSessions')->func_getProductsByCategoryName($this->name = 'punjabi');
      //echo "<pre>";      print_r($this->featured_products); die;
     
  }
    public function executeSize(sfWebRequest $request)
  {
     $this->data = $request->getParameterHolder()->getAll();
  }
}
