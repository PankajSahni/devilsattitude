<?php

/**
 * user actions.
 *
 * @package    devil
 * @subpackage user
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class userActions extends sfActions {

    public function executeIndex(sfWebRequest $request) {
        $this->users = Doctrine_Core::getTable('User')
                ->createQuery('a')
                ->execute();
    }

    public function executeShow(sfWebRequest $request) {
        $this->user = Doctrine_Core::getTable('User')->find(array($request->getParameter('user_id')));
        $this->forward404Unless($this->user);
    }

    public function executeNew(sfWebRequest $request) {
        $post_array = $request->getParameterHolder()->getAll();
        $go_to = 'order/index';
        if ($this->getUser()->getAttribute('user_id') != "") {
            $this->redirect($go_to);
        } else {
            $this->form = new UserForm();
            $this->form1 = new UsersLoginForm();
        }
    }

    public function executeCreate(sfWebRequest $request) {
        $this->forward404Unless($request->isMethod(sfRequest::POST));

        $this->form = new UserForm();

        $this->processForm($request, $this->form);

        $this->setTemplate('new');
    }

    public function executeEdit(sfWebRequest $request) {
        $this->forward404Unless($user = Doctrine_Core::getTable('User')->find(array($request->getParameter('user_id'))), sprintf('Object user does not exist (%s).', $request->getParameter('user_id')));
        $this->form = new UserForm($user);
    }

    public function executeUpdate(sfWebRequest $request) {
        $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
        $this->forward404Unless($user = Doctrine_Core::getTable('User')->find(array($request->getParameter('user_id'))), sprintf('Object user does not exist (%s).', $request->getParameter('user_id')));
        $this->form = new UserForm($user);

        $this->processForm($request, $this->form);

        $this->setTemplate('edit');
    }

    public function executeDelete(sfWebRequest $request) {
        $request->checkCSRFProtection();

        $this->forward404Unless($user = Doctrine_Core::getTable('User')->find(array($request->getParameter('user_id'))), sprintf('Object user does not exist (%s).', $request->getParameter('user_id')));
        $user->delete();

        $this->redirect('user/index');
    }

    protected function processForm(sfWebRequest $request, sfForm $form) {
        $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
        if ($form->isValid()) {
            $user = $form->save();
            $this->getUser()->setAttribute('user_id', $user->getUserId());
            $orders = new Orders();
            $orders->setOrderSessionsId(session_id());
            $orders->setUserId($user->getUserId());
            $orders->setStatus('pending');
            $orders->setCreatedAt(date('Y-m-d H:i:s', time()));
            $orders->setUpdatedAt(date('Y-m-d H:i:s', time()));
            $orders->save();
            if ($this->getUser()->getAttribute('product_in_cart') == "") {
                $this->redirect('category/index');
            } else {
                $this->redirect('order/index');
            }
        }
    }

    public function executeLogin(sfWebRequest $request) {
        $this->post_array = $request->getParameterHolder()->getAll();
        if (count($this->post_array)) {
            $this->login_result = Doctrine::getTable('User')->func_checkLogin($this->post_array);
            //echo "<pre>";    print_r($this->post_array); die;
            if (count($this->login_result)) {
                $this->getUser()->setAttribute('user_id', $this->login_result[0]['user_id']);
                $orders = new Orders();
                $orders->setOrderSessionsId(session_id());
                $orders->setUserId($this->login_result[0]['user_id']);
                $orders->setStatus('pending');
                $orders->setCreatedAt(date('Y-m-d H:i:s', time()));
                $orders->setUpdatedAt(date('Y-m-d H:i:s', time()));
                $orders->save();
                if ($this->getUser()->getAttribute('product_in_cart') == "") {
                    $this->redirect('category/index');
                } else {
                    $this->redirect('order/index');
                }
            } else {
                $this->redirect('user/new');
            }
        } else {
            $this->form = new UserForm();
        }
        $this->setTemplate('login');
    }

    public function executeLogout(sfWebRequest $request) {

        $this->getUser()->removeCredential('user');
        $this->getUser()->setAuthenticated(false);
        $this->getUser()->setAttribute('user_id', "");
        $this->redirect('category/index');
    }

}
