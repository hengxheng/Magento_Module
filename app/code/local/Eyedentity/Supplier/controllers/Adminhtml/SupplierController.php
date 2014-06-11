<?php

class Eyedentity_Supplier_Adminhtml_SupplierController extends Mage_Adminhtml_Controller_Action {
	// protected function _initAction()
	// {
	// 	$this->loadLayout()->_setActiveMenu('supplier/set_time')
	// 						->_addBreadcrumb('test Manager','test Manager');
	// 	return $this;
	// }
	 
	public function indexAction(){
		$this->loadLayout()->_setActiveMenu('supplier/list_supplier');
		$this->renderLayout();
	}

	public function editAction()
	{
		$SupplierId = $this->getRequest()->getParam('id');
		$SupplierModel = Mage::getModel('supplier/supplier')->load($SupplierId);
		if ($SupplierModel->getId() || $SupplierId == 0){
			Mage::register('supplier_data', $SupplierModel);
			$this->loadLayout();
			$this->_setActiveMenu('supplier/set_time');
			$this->_addBreadcrumb('test Manager', 'test Manager');
			$this->_addBreadcrumb('Test Description', 'Test Description');
			$this->getLayout()->getBlock('head')
								->setCanLoadExtJs(true);
			$this->_addContent($this->getLayout()
					->createBlock('supplier/adminhtml_supplier_edit'))
					->_addLeft($this->getLayout()
					->createBlock('supplier/adminhtml_supplier_edit_tabs')
			);
			$this->renderLayout();
		}
		else
		{
			Mage::getSingleton('adminhtml/session')
						->addError('Supplier does not exist');
			$this->_redirect('*/*/');
		}
	}


	public function newAction(){
		$this->_forward('edit');
	}


	public function saveAction(){
		if ($this->getRequest()->getPost()){
			try {
				$postData = $this->getRequest()->getPost();
				$SupplierModel = Mage::getModel('supplier/supplier');
				if( $this->getRequest()->getParam('id') <= 0 )
					$SupplierModel->setCreatedTime(
						Mage::getSingleton('core/date')->gmtDate()
					);
				$SupplierModel ->addData($postData)
								->setUpdateTime(
									Mage::getSingleton('core/date')
								->gmtDate())
								->setId($this->getRequest()->getParam('id'))
								->save();
				Mage::getSingleton('adminhtml/session')
								->addSuccess('successfully saved');
				Mage::getSingleton('adminhtml/session')
								->setSupplierData(false);
				$this->_redirect('*/*/');
				return;
			} catch (Exception $e){
				Mage::getSingleton('adminhtml/session')
							->addError($e->getMessage());
				Mage::getSingleton('adminhtml/session')
							->setSupplierData($this->getRequest()
							->getPost()
				);
				$this->_redirect('*/*/edit', array('id' => $this->getRequest()
																	->getParam('id')));
				return;
			}
		}
		$this->_redirect('*/*/');
	}


	public function deleteAction()
	{
		if($this->getRequest()->getParam('id') > 0){
			try{
				$SupplierModel = Mage::getModel('supplier/supplier');
				$SupplierModel->setId($this->getRequest()
										->getParam('id'))
										->delete();
				Mage::getSingleton('adminhtml/session')
							->addSuccess('successfully deleted');
				$this->_redirect('*/*/');
			}
			catch (Exception $e){
				Mage::getSingleton('adminhtml/session')
								->addError($e->getMessage());
				$this->_redirect('*/*/edit', array('id' => $this->getRequest()->getParam('id')));
			}
		}
		$this->_redirect('*/*/');
	}
}