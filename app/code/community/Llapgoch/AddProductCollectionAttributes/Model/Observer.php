<?php
class Llapgoch_AddProductCollectionAttributes_Model_Observer{
	public function addAttributes($observer){
		$attrs = Mage::helper('llapgoch_addpcattributes')->getAttributesToAdd();
		
		if(is_array($attrs) && count($attrs)){
			$observer->getCollection()->addAttributeToSelect($attrs);
		}
	}
}