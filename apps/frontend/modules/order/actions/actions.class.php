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
        $post_array = $request->getParameterHolder()->getAll();
        if (isset($post_array['product_id'])) {
            $go_to = 'order/index';
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
        $this->current_session_products = Doctrine::getTable('OrderSessions')->func_getCurrentSessionOrder();
        if (!count($this->current_session_products)) {
            $this->redirect('category/index');
        }
        $this->if_login = 0;
        if ($this->getUser()->getAttribute('user_id') != "") {
            $this->if_login = 1;
            $this->global_variables = GlobalVariablesHelper::getGlobalVariables();
            $this->user_info = Doctrine::getTable('User')->func_getUserAndOrderId($this->getUser()->getAttribute('user_id'));
            $this->total = 0;
            foreach ($this->current_session_products as $value) {
                $this->total = $this->total + $value['Products']['price'] * $value['nos'];
            }
            $this->checksum = Doctrine::getTable('Orders')->getCheckSum($this->global_variables['merchant_id'], $this->total, $this->user_info[0]['Orders'][0]['order_id'], $this->global_variables['redirect_url'], $this->global_variables['working_key']);
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

    public function executeThankyou(sfWebRequest $request) {
        session_regenerate_id();
        $this->getUser()->setAttribute('user_id',"");
        $post_array = $request->getParameterHolder()->getAll();
        if($post_array['Merchant_Id'] == ""){
        $this->redirect('category/index');    
        }
        $global_variables = GlobalVariablesHelper::getGlobalVariables();
        $WorkingKey = $global_variables['working_key']; //put in the 32 bit working key in the quotes provided here
	$Merchant_Id= $post_array['Merchant_Id'];
	$Amount= $post_array['Amount'];
	$Order_Id= $post_array['Order_Id'];
	$Merchant_Param= $post_array['Merchant_Param'];
	$Checksum= $post_array['Checksum'];
	$AuthDesc=$post_array['AuthDesc'];
    $Checksum = Doctrine::getTable('Orders')->verifyChecksum($Merchant_Id, $Order_Id , $Amount,$AuthDesc,$Checksum,$WorkingKey);
    	if($Checksum=="true" && $AuthDesc=="Y")
	{
            Doctrine::getTable('Orders')->func_confirmOrder($Order_Id);
		$this->message = "<p style='color: green; '>Thank you for shopping with us. Your credit card has been charged and your transaction is successful. We will be shipping your order to you soon.</p>";
		
		//Here you need to put in the routines for a successful 
		//transaction such as sending an email to customer,
		//setting database status, informing logistics etc etc
	}
	else if($Checksum=="true" && $AuthDesc=="N")
	{
		$this->message = "<p style='color: red; '>Thank you for shopping with us.However,the transaction has been declined.</p>";
		
		//Here you need to put in the routines for a failed
		//transaction such as sending an email to customer
		//setting database status etc etc
	}
	else
	{
		$this->message = "<p style='color: red; '>Security Error. Illegal access detected.</p>";
		
		//Here you need to simply ignore this and dont need
		//to perform any operation in this condition
	}
    }

}
