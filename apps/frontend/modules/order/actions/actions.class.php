<?php

/**
 * order actions.
 *
 * @package    devil
 * @subpackage order
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class orderActions extends sfActions {

    /**
     * Executes index action
     *
     * @param sfRequest $request A request object
     */
    public function executeIndex(sfWebRequest $request) {
        $this->current_session_products = Doctrine::getTable('OrderSessions')->func_getCurrentSessionOrder();
        //echo "<pre>";        print_r($this->current_session_products); die;
        if (!count($this->current_session_products)) {
            $this->redirect('category/index');
        }
    }

    public function executeUpdate_cart(sfWebRequest $request) {
        $post_array = $request->getParameterHolder()->getAll();
        if ($post_array['do'] == 'reduce') {
            $nos = $post_array['nos'] - 1;
        } else if ($post_array['do'] == 'add') {
            $nos = $post_array['nos'] + 1;
        }
        Doctrine::getTable('OrderSessions')->func_updateCart($post_array['id'], $nos);
        $this->redirect('order/index');
    }

    public function executeDelete_product(sfWebRequest $request) {
        $post_array = $request->getParameterHolder()->getAll();
        Doctrine::getTable('OrderSessions')->func_deleteProduct($post_array['id']);
        $this->redirect('order/index');
    }

}
