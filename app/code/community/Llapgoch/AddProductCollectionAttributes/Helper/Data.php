<?php
class Llapgoch_AddProductCollectionAttributes_Helper_Data extends Mage_Core_Helper_Abstract{
	const XML_PATH_PRODUCT_ATTRIBUTES = "llapgoch_addpcattributes/general/attributes";
	
	public function getAttributesToAdd(){
		$attrs = explode(" ", Mage::getStoreConfig(self::XML_PATH_PRODUCT_ATTRIBUTES));
		
		if(count($attrs)){
			return $attrs;
		}
		
		return false;
	}
		
}