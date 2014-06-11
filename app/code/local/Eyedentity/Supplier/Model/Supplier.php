<?php 

class Eyedentity_Supplier_Model_Supplier extends Mage_Core_Model_Abstract{
    protected function _construct(){

    	parent::_construct();
        $this->_init('supplier/supplier');
    }
}