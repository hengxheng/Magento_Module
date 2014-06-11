<?php
class Eyedentity_Supplier_Block_Adminhtml_Supplier_Edit_Tab_Form extends Mage_Adminhtml_Block_Widget_Form
{
	protected function _prepareForm()
	{
		$form = new Varien_Data_Form();
		$this->setForm($form);
		$fieldset = $form->addFieldset('supplier_form', array('legend'=>'Supplier information'));
		$fieldset->addField('name', 'text', array(
											'label' => 'Name',
											'class' => 'required-entry',
											'required' => true,
											'name' => 'name',
							));
		$fieldset->addField('website', 'text', array(
											'label' => 'Website',
											'class' => 'required-entry',
											'required' => true,
											'name' => 'website',
							));
		$fieldset->addField('phone', 'text', array(
											'label' => 'Phone',
											'class' => 'required-entry',
											'required' => true,
											'name' => 'phone',
							));
		$fieldset->addField('email', 'text', array(
											'label' => 'Email',
											'class' => 'required-entry',
											'required' => true,
											'name' => 'email',
							));
		$fieldset->addField('address1', 'text', array(
											'label' => 'Address1',
											'class' => 'required-entry',
											'required' => true,
											'name' => 'address1',
							));
		$fieldset->addField('address2', 'text', array(
											'label' => 'Address2',
											// 'class' => 'required-entry',
											// 'required' => true,
											'name' => 'address2',
							));
		$fieldset->addField('suburb', 'text', array(
											'label' => 'Suburb',
											'class' => 'required-entry',
											'required' => true,
											'name' => 'suburb',
							));
		$fieldset->addField('postcode', 'text', array(
											'label' => 'Postcode',
											'class' => 'required-entry',
											'required' => true,
											'name' => 'postcode',
							));
		$fieldset->addField('city', 'text', array(
											'label' => 'City',
											'class' => 'required-entry',
											'required' => true,
											'name' => 'city',
							));
		
		if ( Mage::registry('supplier_data') )
		{
			$form->setValues(Mage::registry('supplier_data')->getData());
		}
		return parent::_prepareForm();
	}
}