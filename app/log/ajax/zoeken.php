<?php
include __DIR__.'/../../inc/config.inc.php';

admin_level_required($_SESSION['app_'.$branchSessionVar.'_level'], 'access');

if($_SESSION['app_'.$branchSessionVar.'_user'] !== 'support@surlinio.com'){
	header('location:'.SITE_URL);
	die;
}

$folder = 'log';

// Required fields / Checks
$errors = array();

if (!empty($errors)) {
	$data['errors']  = $errors;
	echo json_encode($data);
	die;
}


$data['redirect']  = SITE_URL.$folder."/?page=1&search=".$_POST['search']."&order=".$_POST['order'];


echo json_encode($data);