<?php
class Eyedentity_Supplier_Block_Adminhtml_Grid extends Mage_Adminhtml_Block_Widget_Grid_Container
{
    public function __construct()
    {
     //where is the controller
     $this->_controller = 'adminhtml_supplier';
     $this->_blockGroup = 'supplier';
     //text in the admin header
     $this->_headerText = 'Suppliers';
     //value of the add button
     $this->_addButtonLabel = 'Add a supplier';
     parent::__construct();
     }
}