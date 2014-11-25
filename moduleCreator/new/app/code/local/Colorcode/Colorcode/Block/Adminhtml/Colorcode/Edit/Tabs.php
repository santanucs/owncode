<?php

class Colorcode_Colorcode_Block_Adminhtml_Colorcode_Edit_Tabs extends Mage_Adminhtml_Block_Widget_Tabs
{

  public function __construct()
  {
      parent::__construct();
      $this->setId('colorcode_tabs');
      $this->setDestElementId('edit_form');
      $this->setTitle(Mage::helper('colorcode')->__('Item Information'));
  }

  protected function _beforeToHtml()
  {
      $this->addTab('form_section', array(
          'label'     => Mage::helper('colorcode')->__('Item Information'),
          'title'     => Mage::helper('colorcode')->__('Item Information'),
          'content'   => $this->getLayout()->createBlock('colorcode/adminhtml_colorcode_edit_tab_form')->toHtml(),
      ));
     
      return parent::_beforeToHtml();
  }
}