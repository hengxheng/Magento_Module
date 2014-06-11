<?php
class Eyedentity_Supplier_Block_Adminhtml_Supplier_Edit extends Mage_Adminhtml_Block_Widget_Form_Container{
	public function __construct()
	{
		parent::__construct();
		$this->_objectId = 'id';
		//vwe assign the same blockGroup as the Grid Container
		$this->_blockGroup = 'supplier';
		//and the same controller
		$this->_controller = 'adminhtml_supplier';
		//define the label for the save and delete button
		$this->_updateButton('save', 'label','Save Supplier');
		$this->_updateButton('delete', 'label', 'Delete Supplier');
	}
	/* Here, we're looking if we have transmitted a form object,to update the good text in the header of the page (edit or add) */
	public function getHeaderText()
	{
		if( Mage::registry('supplier_data')&&Mage::registry('supplier_data')->getId())
		{
			return 'Edit Supplier '.$this->htmlEscape(
			Mage::registry('supplier_data')->getTitle()).'<br />';
		}
		else
		{
			return 'Add a Supplier';
		}
	}
}