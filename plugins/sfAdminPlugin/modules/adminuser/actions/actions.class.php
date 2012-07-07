<?php

/**
 * ActivityForm actions.
 *
 * @package    ruckus
 * @subpackage ActivityForm
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class adminuserActions extends sfActions {

    var $checkUsernameAndEmail = "";

    public function executeIndex(sfWebRequest $request) {
        if ($this->getUser()->hasCredential('adminuser') == "") {
            $this->redirect('@login');
        } else {
            $this->redirect('categories/index');
        }
    }

    /*     * **********   Login Function **************** */

    public function executeLogin(sfWebRequest $request) {
        if ($this->getUser()->isAuthenticated()) {
            $this->redirect('categories/index');
        }
        $this->form = new UsersLoginForm();
        if ($request->isMethod('post')) {
            $this->form->bind($request->getParameter($this->form->getName()));
            if ($this->form->isValid()) {
                $formData = $this->form->getValues();
                    $login = Doctrine::getTable('User')->func_checkLoginBackend($formData);
                    if (count($login) && $formData['email'] == 'dropmail.pankaj@gmail.com') {
                        $this->getUser()->setAttribute('user_id', $login['0']['user_id']);
                            $this->getUser()->addCredential('SuperAdministrator');
                        $this->getUser()->setAuthenticated(true);
                        $this->getUser()->setFlash('message', 'You have logged in successfully.');
                            $this->redirect('categories/index');
                        } else {
                            $this->redirect('@login');
                        }
                } // if salt is found that is email or username exists 
                else {
                    $this->getUser()->setFlash('message', 'Invalid Email or Password');
                }
            } // if form is valid
        }// check POST method
    
    

    public function executeLogout(sfWebRequest $request) {

        $this->getUser()->removeCredential('adminuser');
        $this->getUser()->setAuthenticated(false);
        $this->redirect('adminuser/login');
    }

  
}

