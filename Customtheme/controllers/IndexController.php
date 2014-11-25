<?php
class Gsl_Customtheme_IndexController extends Mage_Core_Controller_Front_Action
{
	public function indexAction(){
		$data 	= $this->getRequest()->getParams();
		$url 	= $data['curl'];
		$pid 	= $data['pid'];
		$cname 	= $data['cnm'];
		if($url && $pid){
			$exp1 = explode('?', $url);
			if(count($exp1) > 1){ $nUrl = $exp1[0].'?'.$this->removeUrl($exp1[1]).'&mode='.$cname.'&p='.$pid; } else { $nUrl = $url.'?mode='.$cname.'&p='.$pid; }			
			$content = file_get_contents($nUrl);			
			$dom = new DOMDocument();
			$dom->loadHTML($content);		
			$xpath = new DOMXPath($dom);		
			//$div = $xpath->query('//div[@id="category_products_list_scroll"]');
			$div = $xpath->query('//div[@class="category-products"]');
			$div = $div->item(0);		
			echo $dom->saveXML($div);
		}	
	}
	
	function removeUrl($url)
	{
		$eurl = explode('&', $url);
		if(count($eurl) > 1){
			$arrU = array();
			foreach($eurl as $_eurl){ $expU = explode('=', $_eurl); if($expU[0] == 'p' || $expU[0] == 'limit' || $expU[0] == 'mode'){ } else { $arrU[] = $_eurl; } }
			return implode('&', $arrU);
		} else {
			$expU = explode('=', $eurl[0]);
			if(count($expU) > 1){ if($expU[0] == 'p' || $expU[0] == 'limit' || $expU[0] == 'mode'){ return; } else { return $url; } } else { return $url; }
		}
	}
	
	public function notifyEmailAction(){		
		$data 	= $this->getRequest()->getParams();
		$email 	= $data['email'];
		$pid 	= $data['pid'];
		if($email && $pid){
			$con 	= Mage::getSingleton('core/resource')->getConnection('core_write');
			$tName 	= Mage::getSingleton('core/resource')->getTableName('gsl_product_notify');
			$query	= "SELECT count(`product_id`) as pcount FROM $tName  
						WHERE `product_id` = $pid AND `email` = '$email'";
			$result	= $con->query($query);
			$row	= $result->fetch(PDO::FETCH_ASSOC);
			if($row['pcount']==0){
				$iQuery = "INSERT INTO $tName(`product_id`, `email`, `request_date`)  
							VALUES ($pid, '$email', now())";			
				$con->query($iQuery);
				echo "<div class='note_success_msg'>".$this->__("Request has successfuly saved.")."</div>";				
			}
			else{			    
			    echo "<div class='note_error_msg'>".$this->__("Request has already saved.")."</div>";			    
			}	
		}				
	}
	
	public function checkPinCodeAction(){		
		$pval 	= $this->getRequest()->getParam('pval');
		if($pval){
			$codPinModule = Mage::getModel('codavl/codavl')->load($pval, 'cod_pin')->getData();
			if(!empty($codPinModule)){				
				echo '<div style="width:320px;" id="pincoderesult"><div class="pin-desti">'.Mage::helper('page')->__('Destination Pincode').' : '.$pval.' <a onclick="removePinResult()" id="changepin" href="javascript:void(0)" style="text-decoration:underline;font-size:11px;">'.Mage::helper('page')->__('Change').'</a></div><div class="pin-item">'.Mage::helper('page')->__('Item can be delivered to your location').'</div><div class="pin-item">'.Mage::helper('page')->__('Cash-on-Delivery is also available').'<br></div></div>';
			}
			else{		
				echo '<div style="width:320px;" id="pincoderesult"><div class="pin-desti">'.Mage::helper('page')->__('Destination Pincode').' : '.$pval.' <a onclick="removePinResult()" id="changepin" href="javascript:void(0)" style="text-decoration:underline;font-size:11px;">'.Mage::helper('page')->__('Change').'</a></div><div class="pin-item">'.Mage::helper('page')->__('Item can\'t be delivered to your location</div></div>').'</div>';	    
			}	
		}				
	}
	
}