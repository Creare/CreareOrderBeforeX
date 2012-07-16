<?php
class Creare_Orderbeforex_Block_OrderBeforeX extends Mage_Core_Block_Template
{
	
	public function getCountDownClock()
	{
		$time = Mage::getStoreConfig('carriers/orderbeforex/time');
		
		return $time;
	}
	
	public function checkAvailableDays()
	{
		$day = strtolower(date("l"));
		$notarr = explode(",",Mage::getStoreConfig('carriers/orderbeforex/available'));
		if(!in_array($day, $notarr)){
			return false;		
		} else {
			return true;	
		}
	}
	
}