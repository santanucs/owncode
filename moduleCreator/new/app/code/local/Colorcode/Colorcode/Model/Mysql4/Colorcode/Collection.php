<?php

class Colorcode_Colorcode_Model_Mysql4_Colorcode_Collection extends Mage_Core_Model_Mysql4_Collection_Abstract
{
    public function _construct()
    {
        parent::_construct();
        $this->_init('colorcode/colorcode');
    }
}