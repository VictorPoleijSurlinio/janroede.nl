<?php
// ACCES CHECK
if(!$module){
	header('location: '.SITE_URL);
	die;
}

$db->where('mod_link', $module);
$selectedModule = $db->getOne('view_app_modules');

if(!$selectedModule){
	header('location: '.SITE_URL);
	die;
}


if(!accessAllowed($selectedModule['mod_id'], $allowedModules, 'accessajax')){
	$data['redirect'] = SITE_URL;
	echo json_encode($data);
	die;
}
$redirectLink = $module.'/';
// END ACCES CHECK