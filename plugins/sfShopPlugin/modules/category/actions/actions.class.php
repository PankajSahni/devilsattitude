<?php

/**
 * category actions.
 *
 * @package    devil
 * @subpackage category
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class categoryActions extends sfActions {

    /**
     * Executes index action
     *
     * @param sfRequest $request A request object
     */
    public function executeIndex(sfWebRequest $request) {
        $post_array = $request->getParameterHolder()->getAll();
        if (isset($post_array['product_id'])) {
            $this->getUser()->setAttribute('product_in_cart', 1);
            $if_product = Doctrine::getTable('OrderSessions')->func_checkProductAndSize($post_array);
            if (count($if_product)) {
                $if_product = Doctrine::getTable('OrderSessions')->func_updateProductAndSize($if_product);
            } else {
                $order_sessions = new OrderSessions();
                $order_sessions->setSessionId(session_id());
                $order_sessions->setProductId($post_array['product_id']);
                $order_sessions->setNos(1);
                $order_sessions->setSize($post_array['size']);
                $order_sessions->setCreatedAt(date('Y-m-d H:i:s', time()));
                $order_sessions->setUpdatedAt(date('Y-m-d H:i:s', time()));
                $order_sessions->save();
            }
        }
        $this->activate_cart_button = 0;
        $this->current_session_products = Doctrine::getTable('OrderSessions')->func_getCurrentSessionOrder();
        if (count($this->current_session_products)) {
            $this->activate_cart_button = 1;
        }
        $this->name = 'gujrati';
        $this->featured_products = Doctrine::getTable('Categories')->func_getProductsByCategoryNameFeatured($this->name = 'punjabi');
        $this->all_products = Doctrine::getTable('Categories')->func_getProductsByCategoryName($this->name = 'punjabi');
        //echo "<pre>";      print_r($this->featured_products); die;
    }

    public function executeSize(sfWebRequest $request) {
        $this->data = $request->getParameterHolder()->getAll();
    }

}
