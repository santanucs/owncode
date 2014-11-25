<?php

class Colorcode_Colorcode_Block_Adminhtml_Colorcode_Edit extends Mage_Adminhtml_Block_Widget_Form_Container
{
    public function __construct()
    {
        parent::__construct();
                 
        $this->_objectId = 'id';
        $this->_blockGroup = 'colorcode';
        $this->_controller = 'adminhtml_colorcode';
        
        $this->_updateButton('save', 'label', Mage::helper('colorcode')->__('Save Item'));
        $this->_updateButton('delete', 'label', Mage::helper('colorcode')->__('Delete Item'));
		
        $this->_addButton('saveandcontinue', array(
            'label'     => Mage::helper('adminhtml')->__('Save And Continue Edit'),
            'onclick'   => 'saveAndContinueEdit()',
            'class'     => 'save',
        ), -100);

        $this->_formScripts[] = "
            function toggleEditor() {
                if (tinyMCE.getInstanceById('colorcode_content') == null) {
                    tinyMCE.execCommand('mceAddControl', false, 'colorcode_content');
                } else {
                    tinyMCE.execCommand('mceRemoveControl', false, 'colorcode_content');
                }
            }

            function saveAndContinueEdit(){
                editForm.submit($('edit_form').action+'back/edit/');
            }
        ";
    }

    public function getHeaderText()
    {
        if( Mage::registry('colorcode_data') && Mage::registry('colorcode_data')->getId() ) {
            return Mage::helper('colorcode')->__("Edit Item '%s'", $this->htmlEscape(Mage::registry('colorcode_data')->getTitle()));
        } else {
            return Mage::helper('colorcode')->__('Add Item');
        }
    }
}