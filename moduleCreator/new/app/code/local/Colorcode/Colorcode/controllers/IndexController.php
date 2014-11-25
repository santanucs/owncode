<?php
class Colorcode_Colorcode_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
    	
    	/*
    	 * Load an object by id 
    	 * Request looking like:
    	 * http://site.com/colorcode?id=15 
    	 *  or
    	 * http://site.com/colorcode/id/15 	
    	 */
    	/* 
		$colorcode_id = $this->getRequest()->getParam('id');

  		if($colorcode_id != null && $colorcode_id != '')	{
			$colorcode = Mage::getModel('colorcode/colorcode')->load($colorcode_id)->getData();
		} else {
			$colorcode = null;
		}	
		*/
		
		 /*
    	 * If no param we load a the last created item
    	 */ 
    	/*
    	if($colorcode == null) {
			$resource = Mage::getSingleton('core/resource');
			$read= $resource->getConnection('core_read');
			$colorcodeTable = $resource->getTableName('colorcode');
			
			$select = $read->select()
			   ->from($colorcodeTable,array('colorcode_id','title','content','status'))
			   ->where('status',1)
			   ->order('created_time DESC') ;
			   
			$colorcode = $read->fetchRow($select);
		}
		Mage::register('colorcode', $colorcode);
		*/

			
		$this->loadLayout();     
		$this->renderLayout();
    }
}