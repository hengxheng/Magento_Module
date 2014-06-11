<?php
class Eyedentity_Supplier_Block_List extends Mage_Core_Block_Template{
	public function listSuppliers() {

		$postData = Mage::app()->getRequest()->getPost();
		$collection = Mage::getModel('supplier/supplier')->getCollection()
		 										->setOrder('id','asc')
                                    			->addFilter('postcode',$postData['postcode']);
        return $collection;
		
	}

	public function allSuppliers(){
		$collection = Mage::getModel('supplier/supplier')->getCollection();
		return $collection;
	}
}