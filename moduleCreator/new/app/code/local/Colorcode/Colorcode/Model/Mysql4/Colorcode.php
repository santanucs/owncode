<?php

class Colorcode_Colorcode_Model_Mysql4_Colorcode extends Mage_Core_Model_Mysql4_Abstract
{
    public function _construct()
    {    
        // Note that the colorcode_id refers to the key field in your database table.
        $this->_init('colorcode/colorcode', 'colorcode_id');
    }
}