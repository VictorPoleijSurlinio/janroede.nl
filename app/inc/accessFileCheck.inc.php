<?php
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

// ACCES ALLOWED
accessAllowed($selectedModule['mod_id'], $allowedModules, 'access');

$navpage = $selectedModule['mod_link'];
$folder = $selectedModule['mod_link'].'/';