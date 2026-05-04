<?php
include __DIR__.'/../../inc/config.inc.php';


$user = strtolower($_POST['email']);

// verplicht
$errors = array();
if(empty($_POST['email'])) 			$errors['email'] 			= 'Vul je e-mailadres in';
if(empty($_POST['wachtwoord'])) 	$errors['wachtwoord'] 		= 'Vul je wachtwoord in';


if (!empty($errors)) {
	$data['errors']  = $errors;
	echo json_encode($data);
	die;
}



$db->where('admacc_email', $user);
$db->where('admacc_active', '1');
$gebruiker_exist = $db->getOne("admin_accounts");


if(!$gebruiker_exist){
	$errors['wachtwoord'] 	= 'E-mailadres of wachtwoord klopt niet';
}

if (!empty($errors)) {
	$data['errors']  = $errors;
	echo json_encode($data);

	$data = array();
	db_log('LOGIN FAIL (USERNAME): ' . $user, 'admin');
	die;
}


$hash = $gebruiker_exist['admacc_password'];


if(!password_verify($_POST['wachtwoord'], $hash)){
	$errors['wachtwoord'] = 'E-mailadres of wachtwoord klopt niet';
}

if ( ! empty($errors)) {
	$data['errors']  = $errors;
	echo json_encode($data);

	$data = array();
	db_log('LOGIN FAIL (WACHTWOORD): ' . $user, 'admin');
	die;
}

$_SESSION['app_'.$branchSessionVar.'_logged_in'] = true;
$_SESSION['app_'.$branchSessionVar.'_user'] = $user;



// UPDATE DB MET LAATSTE LOGIN
unset($data);
$data['admacc_last_accessed']			= time();
$db->where("admacc_id", $gebruiker_exist['admacc_id']);
$db->update('admin_accounts', $data);



db_log('LOGIN SUCCESS: ' . $user, 'admin');

$data = array();
$data['redirect']	=	SITE_URL.$DEFAULT_FOLDER.'/';

echo json_encode($data);