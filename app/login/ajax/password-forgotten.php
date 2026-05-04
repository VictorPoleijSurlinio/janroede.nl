<?php
include __DIR__.'/../../inc/config.inc.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


$errors			= array();
$data			= array();


if ($_POST['robo'] <> '') {
	$errors['spam'] = 'Hello robot';
}


// VARIBELEN
$username		= isset($_POST["username"]) ? strip_tags(trim($_POST["username"])) : '';


// CHECKS
if(!filter_var($username, FILTER_VALIDATE_EMAIL))	$errors['username']	= 'Vul een geldig e-mailadres in';



if (!empty($errors)) {
	$data['errors']  = $errors;
	echo json_encode($data);
	die;
}


// Variables
$emailadres = strtolower($username);


// CHECK USERNAME
$db->where('admacc_email', $emailadres);
$db->where('admacc_active', '1');
$user_exist = $db->getOne("admin_accounts");


// LOG
$data = array();
if(!$user_exist){
	db_log('WW VERGETEN AANVRAAG (FAIL): '.$emailadres, 'admin');
}else{
	db_log('WW VERGETEN AANVRAAG (SUCCES): '.$emailadres, 'admin');
}



if($user_exist) {
	// NAAM KLANT
	$full_name_user = $user_exist['admacc_first_name'].' '.$user_exist['admacc_last_name'];


	unset($data);
	$data['admacc_password_forgotten']       = uniqid().uniqid();
	$data['admacc_password_forgotten_time']  = time();
	$db->where('admacc_email', $emailadres);
	$db->update('admin_accounts', $data);

	$cloak = cloak("pwstring=".$data['admacc_password_forgotten'].'&passwordtime='.$data['admacc_password_forgotten_time']);


    // RESET EMAIL
	$mail_password_reset = new PHPMailer();

	$mail_password_reset->setFrom($MAIL_CLIENT_FROM, $MAIL_CLIENT_SIGNATURE);
	if($production){
		$mail_password_reset->addAddress($emailadres, $full_name_user);
	}else{
		$mail_password_reset->addAddress($MAIL_TEST_RECEIVER);
	}
	$mail_password_reset->CharSet = 'UTF-8';

	$html_content = "<!DOCTYPE HTML PUBLIC '-//W3C//DTD HTML 4.01 Transitional//EN' 'http://www.w3.org/TR/html4/loose.dtd'>";
	$html_content .= "<html><head><meta http-equiv='Content-Type' content='text/html; charset=utf-8'>";
	$html_content .= "<title>Wachtwoord herstellen</title></head><body>";
	$html_content .= "<div style='font-family: Arial, Helvetica, sans-serif; font-size: 14px;'>";
	$html_content .= "<p>Beste ".$full_name_user.",</p>";
	$html_content .= "<p>Je hebt aangegeven je wachtwoord voor ".$COMPANY_FULLNAME." te zijn vergeten.<br>Geen probleem! Stel met onderstaande link direct een nieuw wachtwoord in.</p>";
	$html_content .= "<p><br><a href='".SITE_URL."/login/wachtwoord-vergeten?".$cloak."' target='_blank' style='padding: 8px 12px; border: 1px solid #1d65a1; background-color: #1d65a1; border-radius: 2px; color: #ffffff; text-decoration: none;'>Wachtwoord resetten</a><br><br><em>De link is een uur geldig</em></p>";
	$html_content .= "<br>";
	$html_content .= "<p>Met vriendelijke groet,<br><br>".$MAIL_CLIENT_SIGNATURE."</p>";
	$html_content .= "</div></body></html>";

	$mail_password_reset->Subject = 'Wachtwoord herstel - '.$MAIL_CLIENT_SIGNATURE;

	$mail_password_reset->msgHTML($html_content);
	$mail_password_reset->AltBody = 'Wachtwoord herstel - '.$MAIL_CLIENT_SIGNATURE;

	$mail_password_reset->send();
}

// SUCCES
$returndata['success'] = '<div class="formreplace-bedankt-div p-2">';
$returndata['success'] .= '<p>Beste,';
$returndata['success'] .= '<p>Als uw emailadres bij ons bekend is, dan ontvangt u binnen enkele minuten van ons een e-mail met daarin instructies om uw wachtwoord te herstellen.</p>';
$returndata['success'] .= '<p>Niks ontvangen?<br>Controleer ook de spambox even voor de zekerheid.</p>';
$returndata['success'] .= '<p>Met vriendelijke groet,<br>'.$COMPANY_FULLNAME.'</p>';
$returndata['success'] .= '</div>';


print json_encode($returndata);
