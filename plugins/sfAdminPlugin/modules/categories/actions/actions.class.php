<?php

/**
 * categories actions.
 *
 * @package    devil
 * @subpackage categories
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class categoriesActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->categoriess = Doctrine_Core::getTable('Categories')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->categories = Doctrine_Core::getTable('Categories')->find(array($request->getParameter('category_id')));
    $this->forward404Unless($this->categories);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new CategoriesForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new CategoriesForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($categories = Doctrine_Core::getTable('Categories')->find(array($request->getParameter('category_id'))), sprintf('Object categories does not exist (%s).', $request->getParameter('category_id')));
    $this->form = new CategoriesForm($categories);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($categories = Doctrine_Core::getTable('Categories')->find(array($request->getParameter('category_id'))), sprintf('Object categories does not exist (%s).', $request->getParameter('category_id')));
    $this->form = new CategoriesForm($categories);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($categories = Doctrine_Core::getTable('Categories')->find(array($request->getParameter('category_id'))), sprintf('Object categories does not exist (%s).', $request->getParameter('category_id')));
    $categories->delete();

    $this->redirect('categories/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $categories = $form->save();

      $this->redirect('categories/edit?category_id='.$categories->getCategoryId());
    }
  }
}
