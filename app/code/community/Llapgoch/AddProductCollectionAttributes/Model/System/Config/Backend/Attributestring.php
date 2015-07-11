<?php
class Llapgoch_AddProductCollectionAttributes_Model_System_Config_Backend_Attributestring extends Mage_Core_Model_Config_Data{
	public function _afterSave(){
		$helper = Mage::helper('llapgoch_addpcattributes');
		
		if(strpos($this->getValue(), ",") !== false){
			 Mage::getSingleton('core/session')->addNotice($helper->__('Please use spaces to separate your attribute names instead of commas'));
		}
		
		parent::_afterSave();
		
	}
}