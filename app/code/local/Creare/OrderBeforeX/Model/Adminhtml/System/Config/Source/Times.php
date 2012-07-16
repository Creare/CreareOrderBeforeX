<?php
class Creare_OrderBeforeX_Model_Adminhtml_System_Config_Source_Times
{
    public function toOptionArray()
    {
		$arr = array();		
		$event_time = "00:00";
		$time_block = 96;
		$event_length = 15; // minutes
		for($i = 0,$eTime =strtotime($event_time);$i<$time_block; $i++, $eTime = strtotime("+$event_length minutes", $eTime))
		{
			$time = date('H:i', $eTime);
			$arr[] = array('value'=>$time, 'label'=>$time);
		}        
        return $arr;
    }
}
