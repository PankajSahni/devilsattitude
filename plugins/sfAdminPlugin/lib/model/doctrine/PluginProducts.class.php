<?php

/**
 * Products
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    devil
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class Products extends BaseProducts
{
    public function save(Doctrine_Connection $conn = null) {
        $path = sfConfig::get('sf_root_dir') . '/';       
        $this->setCategoryId($this->getCategoryId());
        $this->setName(str_replace('"', "'", $this->getName()));
        $this->setPrice($this->getPrice());
        $this->setDescription($this->getDescription());
        $this->setOrderNumber($this->getOrderNumber());
        $this->setFeatured($this->getFeatured());
        if ($this->isNew()) {
            $this->setCreatedAt(date('Y-m-d H:i:s', time()));
        }
        $this->setUpdatedAt(date('Y-m-d H:i:s', time()));

        $file = $_FILES;
        if ($file['products']['name']['image'] != '') {
            if (move_uploaded_file($file['products']['tmp_name']['image'], $path . "uploads/designs/" . time() . "_" . $file['products']['name']['image'])) {
                $this->setImage(time() . "_" . $file['products']['name']['image']);
            }
        } else {
            $product_id = $this->getProductId();
            $q = Doctrine_Query::create()
                    ->from('Products p')
                    ->where('p.product_id=?', array($product_id));
            $data = $q->fetchArray();
            $this->setImage($data[0]['image']);
        }

        return parent::save($conn);
    }
}