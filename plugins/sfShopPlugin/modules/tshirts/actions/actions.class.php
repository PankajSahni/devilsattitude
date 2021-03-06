<?php

/**
 * product actions.
 *
 * @package    devil
 * @subpackage product
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class tshirtsActions extends sfActions {

    /**
     * Executes index action
     *
     * @param sfRequest $request A request object
     */
    public function executeIndex(sfWebRequest $request) {
        $post_array = $request->getParameterHolder()->getAll();
        $this->product = Doctrine::getTable('Products')->func_getProductsByName($post_array['product']);
    }

    public function executeSize(sfWebRequest $request) {
        $this->data = $request->getParameterHolder()->getAll();
    }
}
