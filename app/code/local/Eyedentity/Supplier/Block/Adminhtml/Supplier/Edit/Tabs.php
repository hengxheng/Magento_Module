<?php
	class Eyedentity_Supplier_Block_Adminhtml_Supplier_Edit_Tabs extends Mage_Adminhtml_Block_Widget_Tabs
	{
		public function __construct(){
			parent::__construct();
			$this->setId('supplier_tabs');
			$this->setDestElementId('edit_form');
			$this->setTitle('Information Supplier');
		}
		
		protected function _beforeToHtml(){
			$this->addTab('form_section', array(
					'label' => 'Supplier Information',
					'title' => 'Supplier Information',
					'content' => $this->getLayout()
			->createBlock('supplier/adminhtml_supplier_edit_tab_form')
			->toHtml()
			));
			return parent::_beforeToHtml();
	}
}