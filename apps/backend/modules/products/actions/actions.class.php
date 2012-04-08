<?php

/**
 * products actions.
 *
 * @package    devil
 * @subpackage products
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class productsActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->productss = Doctrine_Core::getTable('Products')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->products = Doctrine_Core::getTable('Products')->find(array($request->getParameter('product_id')));
    $this->forward404Unless($this->products);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new ProductsForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new ProductsForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($products = Doctrine_Core::getTable('Products')->find(array($request->getParameter('product_id'))), sprintf('Object products does not exist (%s).', $request->getParameter('product_id')));
    $this->form = new ProductsForm($products);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($products = Doctrine_Core::getTable('Products')->find(array($request->getParameter('product_id'))), sprintf('Object products does not exist (%s).', $request->getParameter('product_id')));
    $this->form = new ProductsForm($products);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($products = Doctrine_Core::getTable('Products')->find(array($request->getParameter('product_id'))), sprintf('Object products does not exist (%s).', $request->getParameter('product_id')));
    $products->delete();

    $this->redirect('products/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $products = $form->save();

      $this->redirect('products/edit?product_id='.$products->getProductId());
    }
  }
}
