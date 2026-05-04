<?php
// ACCESS CHECK
function accessAllowed($module, $allowedModules, $type='access') {
	$accesFound = false;
	foreach ($allowedModules as $key => $val) {
		if ($val['mod_id'] === $module) {
			$accesFound = true;
		}
	}
	if($accesFound){
		return TRUE;
	}else{
		if($type == 'check'){
			return false;
		}elseif($type == 'accessajax'){
			return false;
		}else{
			header('Location:'. SITE_URL);
			die;
		}
	}
}