<?php
class Colorcode_Colorcode_Block_Colorcode extends Mage_Core_Block_Template
{
	public function _prepareLayout()
    {
		return parent::_prepareLayout();
    }
    
     public function getColorcode()     
     { 
        if (!$this->hasData('colorcode')) {
            $this->setData('colorcode', Mage::registry('colorcode'));
        }
        return $this->getData('colorcode');
        
    }
}