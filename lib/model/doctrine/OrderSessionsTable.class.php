<?php

/**
 * OrderSessionsTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class OrderSessionsTable extends Doctrine_Table {

    /**
     * Returns an instance of this class.
     *
     * @return object OrderSessionsTable
     */
    public static function getInstance() {
        return Doctrine_Core::getTable('OrderSessions');
    }

    public function func_checkProductAndSize($post_values) {
        $q = $this->createQuery('os')
                ->where('os.product_id = ?  ', $post_values['product_id'])
                ->andWhere('os.size = ?', $post_values['size'])
                ->andWhere('os.session_id = ?', session_id())
                ->fetchArray();
        return $q;
    }

    public function func_updateProductAndSize($post_values) {
        Doctrine_Query::create()
                ->update('OrderSessions os')
                ->set('os.nos', '?', $post_values[0]['nos'] + 1)
                ->where('os.id = ?', $post_values[0]['id'])
                ->execute();
    }

    public function func_getCurrentSessionOrder() {
        $q = $this->createQuery('os')
                ->innerJoin('os.Products s')
                ->andWhere('os.session_id = ?', session_id())
                ->fetchArray();
        return $q;
    }

}