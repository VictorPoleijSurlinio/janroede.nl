<?php
include __DIR__.'/../../inc/config.inc.php';


// CURRENT VALUES
$db->where('admacc_email', $_SESSION['app_'.$branchSessionVar.'_user']);
$current_value = $db->getOne('admin_accounts');

if(!$current_value){
    die;
}


// VARIABELEN
$first_name				= isset($_POST["first_name"]) ? strip_tags(trim($_POST["first_name"])) : '';
$last_name				= isset($_POST["last_name"]) ? strip_tags(trim($_POST["last_name"])) : '';
$wachtwoord             = isset($_POST["wachtwoord"]) ? strip_tags(trim($_POST["wachtwoord"])) : '';
$wachtwoord_check		= isset($_POST["wachtwoord_check"]) ? strip_tags(trim($_POST["wachtwoord_check"])) : '';


// VERPLICHT
$errors = array();


if(empty($first_name))					$errors['first_name']			= 'Vul jouw voornaam in';
if(empty($last_name))					$errors['last_name']			= 'Vul een achternaam in';
if(!empty($wachtwoord)){
	if(strlen($wachtwoord) < 8) 			$errors['wachtwoord']	= 'Maak het wachtwoord minimaal 8 tekens lang';
	if($wachtwoord !== $wachtwoord_check)	$errors['wachtwoord']	= 'Wachtwoorden komen niet overeen';
}


// GEEN ERRORS?
if (!empty($errors)) {
	$data['errors']  = $errors;
	echo json_encode($data);
	die;
}


// AANPASSEN IN DB
unset($data);
$data['admacc_first_name']				= $first_name;
$data['admacc_last_name']				= $last_name;
if(!empty($wachtwoord)){
	$data['admacc_password']			= password_hash($wachtwoord, PASSWORD_DEFAULT);
}

$db->where('admacc_email', $_SESSION['app_'.$branchSessionVar.'_user']);
$db->update('admin_accounts', $data);




// CREATE FOLDER FOR IMAGES
$uploadpath = __DIR__ . "/../../uploads/img/avatars/";
// @mkdir($uploadpath, 0777, TRUE);
// @mkdir(__DIR__.'/../../static/img/kunstenaars/'.$folder.'', 0777, TRUE);
// @mkdir(__DIR__.'/../../static/img/kunstenaars/'.$folder.'/thumb', 0777, TRUE);


// TOEGEVOEGDE HOOFDAFBEELDING
$imagename = strtolower($current_value['admacc_id'] . "-" . uniqid());


// IMAGE VERWIJDEREN
if(isset($_POST['avatar_verwijderen']) && $_POST['avatar_verwijderen'] == TRUE && $current_value['admacc_avatar'] !== NULL){
	if(file_exists(__DIR__.'/../../static/img/avatar/'.$current_value['admacc_avatar'])){
		unlink(__DIR__.'/../../static/img/avatar/'.$current_value['admacc_avatar']);
	}
	if(file_exists(__DIR__.'/../../static/img/avatar/thumbnails/'.$current_value['admacc_avatar'])){
		unlink(__DIR__.'/../../static/img/avatar/thumbnails/'.$current_value['admacc_avatar']);
	}
	$data = null;
	$data['admacc_avatar'] = '';
	$db->where('admacc_email', $_SESSION['app_'.$branchSessionVar.'_user']);
	$db->update('admin_accounts', $data);
}



// TOEGEVOEGDE HOOFDAFBEELDING
if(!empty($_POST['avatar'])) {

	//REMOVE OUDE avatar
	if($current_value['admacc_avatar'] !== '' && $current_value['admacc_avatar'] !== NULL){
		if(file_exists(__DIR__.'/../../static/img/avatars/'.$current_value['admacc_avatar'])){
			unlink(__DIR__.'/../../static/img/avatars/'.$current_value['admacc_avatar']);
		}
		if(file_exists(__DIR__.'/../../static/img/avatars/thumbnails/'.$current_value['admacc_avatar'])){
			unlink(__DIR__.'/../../static/img/avatars/thumbnails/'.$current_value['admacc_avatar']);
		}
	}

    // NEW IMAGE
	$json = json_decode($_POST['avatar']);
	$temp_name = $json->output->name;

	$base64 = $json->output->image;
	$base64 = explode(',', $base64)[1];

	$afbeelding_bestand = base64_decode($base64);

	// naam bepalen voor afbeelding
	$temp_name = str_replace(' ', '-', $temp_name);
	$extension = pathinfo($temp_name, PATHINFO_EXTENSION);

	// UPLOAD AFBEELDING UITGESNEDEN
	$image = $imagename.'.'.$extension;
	file_put_contents($uploadpath.$image, $afbeelding_bestand);

	$src = $uploadpath . $image;
	image_correct_orientation($src);

	// CREATE FIXED SIZE
	$dest = __DIR__.'/../../static/img/avatars/'.$image;
	if(!imageResizeMaxWidth($src, $dest, 400)) {
        copy($src, $dest);
    }

    // CREATE THUMB
    $dest_thumb = __DIR__.'/../../static/img/avatars/thumbnails/'.$image;
    image_resize_cutoff($src, $dest_thumb, 150, 150);

    unset($data);
    $data['admacc_avatar'] = $image;
    $db->where('admacc_email', $_SESSION['app_'.$branchSessionVar.'_user']);
	$db->update('admin_accounts', $data);
}






db_log("Gewijzigd - Profiel door " . $_SESSION['app_'.$branchSessionVar.'_user']);


//SUCCES
$data = null;
$data['toast'] = 'toast-succes';


echo json_encode($data);