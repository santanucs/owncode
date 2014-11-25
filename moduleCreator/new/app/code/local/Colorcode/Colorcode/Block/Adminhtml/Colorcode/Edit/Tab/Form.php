<?php

class Colorcode_Colorcode_Block_Adminhtml_Colorcode_Edit_Tab_Form extends Mage_Adminhtml_Block_Widget_Form
{
  protected function _prepareForm()
  {
      $form = new Varien_Data_Form();
      $this->setForm($form);
      $fieldset = $form->addFieldset('colorcode_form', array('legend'=>Mage::helper('colorcode')->__('Item information')));
     
      $fieldset->addField('title', 'text', array(
          'label'     => Mage::helper('colorcode')->__('Title'),
          'class'     => 'required-entry',
          'required'  => true,
          'name'      => 'title',
      ));

      $fieldset->addField('filename', 'file', array(
          'label'     => Mage::helper('colorcode')->__('File'),
          'required'  => false,
          'name'      => 'filename',
	  ));
		
      $fieldset->addField('status', 'select', array(
          'label'     => Mage::helper('colorcode')->__('Status'),
          'name'      => 'status',
          'values'    => array(
              array(
                  'value'     => 1,
                  'label'     => Mage::helper('colorcode')->__('Enabled'),
              ),

              array(
                  'value'     => 2,
                  'label'     => Mage::helper('colorcode')->__('Disabled'),
              ),
          ),
      ));
     
      $fieldset->addField('content', 'editor', array(
          'name'      => 'content',
          'label'     => Mage::helper('colorcode')->__('Content'),
          'title'     => Mage::helper('colorcode')->__('Content'),
          'style'     => 'width:700px; height:500px;',
          'wysiwyg'   => false,
          'required'  => true,
      ));
     
      if ( Mage::getSingleton('adminhtml/session')->getColorcodeData() )
      {
          $form->setValues(Mage::getSingleton('adminhtml/session')->getColorcodeData());
          Mage::getSingleton('adminhtml/session')->setColorcodeData(null);
      } elseif ( Mage::registry('colorcode_data') ) {
          $form->setValues(Mage::registry('colorcode_data')->getData());
      }
      return parent::_prepareForm();
  }
}