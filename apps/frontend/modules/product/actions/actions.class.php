<?php

/**
 * product actions.
 *
 * @package    devil
 * @subpackage product
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class productActions extends sfActions {

    /**
     * Executes index action
     *
     * @param sfRequest $request A request object
     */
    public function executeIndex(sfWebRequest $request) {
        $this->product = $this->getUser()->getAttribute('product');
        if ($this->getUser()->getAttribute('product') != "") {
            $this->product = Doctrine::getTable('Products')->func_getProductsByName($this->getUser()->getAttribute('product'));
             $global_variables = GlobalVariablesHelper::getGlobalVariables();
             echo $working_key = $global_variables['working_key'];die;
        }
    }

    public function executeOrder(sfWebRequest $request) {
        $user_id = $this->getUser()->getAttribute('user_id');
        $this->post_array = $request->getParameterHolder()->getAll();
        $date = date('Y-m-d H:i:s', time());
        $size = $this->post_array['size'];
        $product_id = $this->post_array['product_id'];
        print_r($this->post_array);
        $insert_order = Doctrine_Manager::getInstance()
                ->getConnection('doctrine')
                ->getDbh()
                ->query("INSERT INTO orders (order_id,user_id,product_id,size,color,status,created_at,updated_at)
                        VALUES(NULL,$user_id,$product_id,'" . $size . "','',0,'" . $date . "','" . $date . "')");
        $conn = Doctrine_Manager::getInstance()->getCurrentConnection();
        $last_email_id = $conn->lastInsertId('order_id');
        $this->user_detail = Doctrine::getTable('User')->func_getUser($user_id);
        if (count($this->user_detail)) {
            $this->info = array();
            
            $this->product = Doctrine::getTable('Products')->func_getProduct($product_id);
            $this->info['merchant_id'] = ""; //This id(also User Id)  available at "Generate Working Key" of "Settings & Options" 
            $this->info['price'] = $this->product[0]['price']; //your script should substitute the amount in the quotes provided here
            $this->info['order_id'] = $last_email_id; //your script should substitute the order description in the quotes provided here
            $this->info['redirect_url'] = "http://localhost/devil/web/frontend_dev.php/product/thankyou"; //your redirect URL where your customer will be redirected after authorisation from CCAvenue
            $this->info['working_key'] = ""; //put in the 32 bit alphanumeric key in the quotes provided here.Please note that get this key ,login to your CCAvenue merchant account and visit the "Generate Working Key" section at the "Settings & Options" page. 
            $this->info['checksum'] = Doctrine::getTable('Orders')->getCheckSum($this->info['merchant_id'], $this->info['price'], $this->info['order_id'], $this->info['redirect_url'], $this->info['working_key']);
            
        }
        else{
            //$this->redirect('user/new');
        }
    }
    
    
        public function executeThankyou(sfWebRequest $request) {
        $this->product = $this->getUser()->getAttribute('product');
        if ($this->getUser()->getAttribute('product') != "") {
            $this->product = Doctrine::getTable('Products')->func_getProductsByName($this->getUser()->getAttribute('product'));
        }
    }

}
