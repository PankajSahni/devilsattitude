<?php

/**
 * order actions.
 *
 * @package    devil
 * @subpackage order
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class orderActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
      //echo session_id();
    $current_session_products = Doctrine::getTable('OrderSessions')->func_getCurrentSessionOrder();
    echo "<pre>";    print_r($current_session_products);die;
  }
}
