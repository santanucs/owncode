<?php
class Gsl_Customtheme_Model_Observer
{
	
	public function checkStock($observer)
	{
		$event 		= $observer->getEvent()->getProduct();
		$stock 		= $event->getStockData();
		$pId		= $event->getId();
		$isInStock	= $stock['is_in_stock'];
		if($isInStock == '1'){
			$con 	= Mage::getSingleton('core/resource')->getConnection('core_write');
			$tName	= Mage::getSingleton('core/resource')->getTableName('gsl_product_notify');
			$query	= "SELECT `email` FROM $tName WHERE `product_id` = $pId";
			$result	= $con->query($query);
			$rows	= $result->fetchAll(PDO::FETCH_ASSOC);
			$fEmail = Mage::getStoreConfig('trans_email/ident_general/email');
			$fName = Mage::getStoreConfig('trans_email/ident_general/name');
			$pUrl	= Mage::getUrl().$event->getUrlPath();
			$pName	= $event->getName();
			$sub 	= "Product stock updated"; 
			$body	= '';	
			if(count($rows) > 0){
				foreach($rows as $row){
					$customerEmailId 	= $row['email'];
		            $customerFName 		= $fName;		            
		            $emailTemplate 		= Mage::getModel('core/email_template')
		            						->loadDefault('stock_notify_email_template');
		           
		            $emailTemplateVariables 				= array();
		            $emailTemplateVariables['product_url'] 	= $pUrl;
		            $emailTemplateVariables['product_name'] = $pName;		            
		            $emailTemplate->setSenderName($fName);
		            $emailTemplate->setSenderEmail($fEmail);
		            $emailTemplate->setType('html');
		            $emailTemplate->setTemplateSubject($sub);
		            $emailTemplate->send($customerEmailId, $customerFName, $emailTemplateVariables);
				}
				
				$dQuery = "DELETE FROM $tName WHERE `product_id` = $pId";
				$con->query($dQuery);
			}
		}
	}
	
}