<?php

class Eyedentity_Supplier_Model_Mysql4_Supplier_Collection extends Mage_Core_Model_Mysql4_Collection_Abstract
{
	public function _construct()
	{
	parent::_construct();
	$this->_init('supplier/supplier');
	}
}