<?php
class Creare_OrderBeforeX_Model_Adminhtml_System_Config_Source_Days
{
    public function toOptionArray()
    {
		$arr = array("monday", "tuesday", "wednesday", "thursday", "friday", "saturday", "sunday");
		$array = array();
		foreach($arr as $a)
		{
			$array[] = array('value'=>$a, 'label'=>ucfirst($a));
		}        
        return $array;
    }
}
