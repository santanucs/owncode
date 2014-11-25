<?php

class Colorcode_Colorcode_Model_Colorcode extends Mage_Core_Model_Abstract
{
    public function _construct()
    {
        parent::_construct();
        $this->_init('colorcode/colorcode');
    }
}