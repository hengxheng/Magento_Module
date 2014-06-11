<?php
class Eyedentity_Supplier_Block_Adminhtml_Supplier_Grid extends Mage_Adminhtml_Block_Widget_Grid{
	public function __construct(){
		parent::__construct();
		$this->setId('contactGrid');
		$this->setDefaultSort('id');
		$this->setDefaultDir('DESC');
		$this->setSaveParametersInSession(true);
	}


	protected function _prepareCollection(){
		$collection = Mage::getModel('supplier/supplier')->getCollection();
		$this->setCollection($collection);
		return parent::_prepareCollection();
	}
	
	protected function _prepareColumns(){
		$this->addColumn('id',
			array(
				'header' => 'ID',
				'align' =>'right',
				'width' => '50px',
				'index' => 'id',
               ));
		$this->addColumn('name',
			array(
				'header' => 'Name',
				'align' =>'left',
				'index' => 'name',
              ));
		$this->addColumn('email', array(
				'header' => 'Email',
				'align' =>'left',
				'index' => 'email',
             ));
		$this->addColumn('phone', array(
				'header' => 'telephone',
				'align' =>'left',
				'index' => 'phone',
          ));
		$this->addColumn('website', array(
				'header' => 'Website',
				'align' => 'left',
				'index' => 'website',
			));
		$this->addColumn('postcode', array(
				'header' => 'Postcode',
				'align' => 'left',
				'index' => 'postcode',
				));
		return parent::_prepareColumns();
	}
	
	public function getRowUrl($row){
		return $this->getUrl('*/*/edit', array('id' => $row->getId()));
	}
}