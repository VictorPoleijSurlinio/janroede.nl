<?php
include __DIR__.'/../../inc/config.inc.php';

admin_level_required($_SESSION['app_'.$branchSessionVar.'_level'], 'access');

// GEEN ID, MOET NIET KUNNEN
if(empty($_POST['id'])){
    die;
}

$id = decloak($_POST['id']);

if($id === '0'){
	$insertData = TRUE;

}else{
	// CURRENT VALUES
	$db->where('admacc_id', $id);
	$current_value = $db->getOne('admin_accounts');

	$admacc_id = $id;

	if(!$current_value){
	    die;
	}
	$insertData = FALSE;
}



// VARIABELEN
$active				= isset($_POST["active"]) ? strip_tags(trim($_POST["active"])) : '';
$email				= isset($_POST["email"]) ? strtolower(strip_tags(trim($_POST["email"]))) : '';
$first_name			= isset($_POST["first_name"]) ? strip_tags(trim($_POST["first_name"])) : '';
$last_name			= isset($_POST["last_name"]) ? strip_tags(trim($_POST["last_name"])) : '';
$level				= isset($_POST["level"]) ? strip_tags(trim($_POST["level"])) : '';
$wachtwoord			= isset($_POST["wachtwoord"]) ? strip_tags(trim($_POST["wachtwoord"])) : '';
$access_modules		= isset($_POST["access_modules"]) ? $_POST["access_modules"] : '';



// VERPLICHT
$errors = array();
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) $errors['email'] 	= 'Vul een geldig e-mailadres in';
if(empty($first_name)) 		$errors['first_name'] 					= 'Vul een voornaam in';
if(empty($last_name)) 		$errors['last_name'] 					= 'Vul een achternaam in';

// EMAILCHECK
$db->where('admacc_email', $email);
if(!$insertData){
	$db->where('admacc_id', $id, "!=");
}
$username_exist = $db->getOne("admin_accounts");
if($username_exist){
	$errors['email']			= 'E-mailadres al in gebruik';
}


// GEEN ERRORS?
if (!empty($errors)) {
	$data['errors']  = $errors;
	echo json_encode($data);
	die;
}



// AANPASSEN/TOEVOEGEN IN DB
unset($data);
$data['admacc_email']			= $email;
$data['admacc_first_name']		= $first_name;
$data['admacc_last_name']		= $last_name;
$data['admacc_level']			= $level;
$data['admacc_active']			= $active;
if(!empty($wachtwoord)){
	$data['admacc_password']	= password_hash($wachtwoord, PASSWORD_DEFAULT);
}
if($insertData){
	$data['admacc_date_created']			= time();
	$admacc_id = $db->insert('admin_accounts', $data);
}else{
	$db->where('admacc_id', $id);
	$db->update('admin_accounts', $data);
}


// AFDELINGEN
if($insertData == false){
	// Huidige records verwijderen
	$db->where('aam_admin_account_id', $admacc_id);
	$db->delete('app_access_modules');
}
// NIEUWE TOEVOEGEN
if(isset($_POST["access_modules"])) {
	foreach($_POST["access_modules"] as $moduleId) {
		$data = null;
		$data['aam_admin_account_id']	= $admacc_id;
		$data['aam_module_id']			= $moduleId;
		$db->insert("app_access_modules", $data);
	}
}


// LOG ACTIE
if($insertData){
	db_log("Toegevoegd - Admin User ".$email." (".$admacc_id.") - door ".$_SESSION['app_'.$branchSessionVar.'_user'], 'admin');
}else{
	db_log("Gewijzigd - Admin User ".$email." (".$admacc_id.") - door ".$_SESSION['app_'.$branchSessionVar.'_user'], 'admin');
}



//SUCCES
$data = null;
$data['redirect']  = SITE_URL.'admin-users/';


echo json_encode($data);