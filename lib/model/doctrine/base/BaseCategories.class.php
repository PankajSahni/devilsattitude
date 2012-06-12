<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Categories', 'doctrine');

/**
 * BaseCategories
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $category_id
 * @property string $name
 * @property string $category_image
 * @property timestamp $created_at
 * @property timestamp $updated_at
 * @property Doctrine_Collection $Products
 * 
 * @method integer             getCategoryId()     Returns the current record's "category_id" value
 * @method string              getName()           Returns the current record's "name" value
 * @method string              getCategoryImage()  Returns the current record's "category_image" value
 * @method timestamp           getCreatedAt()      Returns the current record's "created_at" value
 * @method timestamp           getUpdatedAt()      Returns the current record's "updated_at" value
 * @method Doctrine_Collection getProducts()       Returns the current record's "Products" collection
 * @method Categories          setCategoryId()     Sets the current record's "category_id" value
 * @method Categories          setName()           Sets the current record's "name" value
 * @method Categories          setCategoryImage()  Sets the current record's "category_image" value
 * @method Categories          setCreatedAt()      Sets the current record's "created_at" value
 * @method Categories          setUpdatedAt()      Sets the current record's "updated_at" value
 * @method Categories          setProducts()       Sets the current record's "Products" collection
 * 
 * @package    devil
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseCategories extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('categories');
        $this->hasColumn('category_id', 'integer', 8, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 8,
             ));
        $this->hasColumn('name', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('category_image', 'string', 225, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 225,
             ));
        $this->hasColumn('created_at', 'timestamp', 25, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 25,
             ));
        $this->hasColumn('updated_at', 'timestamp', 25, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 25,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('Products', array(
             'local' => 'category_id',
             'foreign' => 'category_id'));
    }
}