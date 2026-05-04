<?php
// ADMIN CHECK
function admin_level_required($level, $type='access') {
	if(decloak($level) == 'admin'){
		return TRUE;
	}else{
		if($type == 'check'){
			return false;
		}else{
			header('Location:'. SITE_URL);
			die;
		}
	}
}