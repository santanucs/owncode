<?php
class Colorcode_Colorcode_Block_Adminhtml_Colorcode extends Mage_Adminhtml_Block_Widget_Grid_Container
{
  public function __construct()
  {
    $this->_controller = 'adminhtml_colorcode';
    $this->_blockGroup = 'colorcode';
    $this->_headerText = Mage::helper('colorcode')->__('Item Manager');
    $this->_addButtonLabel = Mage::helper('colorcode')->__('Add Item');
    parent::__construct();
  }
}