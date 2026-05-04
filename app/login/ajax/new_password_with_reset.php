<?php
include __DIR__ . '/../../inc/config.inc.php';


// GET ID/ KLANT EMAIL
if(empty($_POST['id'])){
	die;
}

// CONTROLE OP BESTAAN MODEL EN HAAL DATA OP
$emailadres = decloak($_POST['id']);


// CHECK IF EMAILADRES IS VALID
$db->where('admacc_email', $emailadres);
$db->where('admacc_active', '1');
$admacc_exist = $db->getOne("admin_accounts");

if(!$admacc_exist){
	die;
}

// NAAM KLANT
$full_name_user = $admacc_exist['admacc_first_name'] . ' ' . $admacc_exist['admacc_last_name'];



// INPUT
$nieuw_wachtwoord 	= isset($_POST["nieuw_wachtwoord"]) ? strip_tags(trim($_POST["nieuw_wachtwoord"])) : '';
$nieuw_wachtwoord_2	= isset($_POST["nieuw_wachtwoord_2"]) ? strip_tags(trim($_POST["nieuw_wachtwoord_2"])) : '';




// KLANT BESTAAT, CHECKS
$errors = array();
if($nieuw_wachtwoord !== $nieuw_wachtwoord_2){
	$errors['nieuw_wachtwoord'] = 'Wachtwoorden zijn niet gelijk';
	$errors['nieuw_wachtwoord_2'] = '';
}
if(strlen(trim($nieuw_wachtwoord)) < 8) $errors['nieuw_wachtwoord'] = 'Maak je wachtwoord minimaal 8 tekens lang';
if(empty($nieuw_wachtwoord))            $errors['nieuw_wachtwoord'] = 'Vul je nieuwe wachtwoord in';



if (!empty($errors)) {
	$data['errors']  = $errors;
	echo json_encode($data);
	die;
}



// UPDATE DATA
unset($data);
$data['admacc_password']				= password_hash($nieuw_wachtwoord, PASSWORD_DEFAULT);
$data['admacc_password_forgotten']		= '';
$data['admacc_password_forgotten_time']	= '';
$db->where('admacc_email', $emailadres);
$db->update('admin_accounts', $data);


// LOG
db_log('NIEUW WW NA RESET: ' . $emailadres, 'admin');


// SUCCES
$returndata['success'] = '<div class="formreplace-bedankt-div p-2">';
$returndata['success'] .= "<p>Beste ".$full_name_user.",";
$returndata['success'] .= "<p>Uw wachtwoord is succesvol gewijzigd.</p>";
$returndata['success'] .= "<p><a href='".SITE_URL. "/login/' class='btn btn-client w-100' style='width: 100%;''>Inloggen</a></p>";
$returndata['success'] .= "</div>";

print json_encode($returndata);