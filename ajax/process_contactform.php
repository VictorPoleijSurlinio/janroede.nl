<?php
include '../inc/config.inc.php';

$errors         = array();
$data           = array();

if (@$_POST['robo'] <> '') {
  $errors['spam'] = 'Hello robot';
}

$firstname       	= isset($_POST["firstname"]) ? strip_tags(trim($_POST["firstname"])) : '';
$lastname       	= isset($_POST["lastname"]) ? strip_tags(trim($_POST["lastname"])) : '';
$phone     			= isset($_POST["phone"]) ? strip_tags(trim($_POST["phone"])) : '';
$email              = isset($_POST["email"]) ? strip_tags(trim($_POST["email"])) : '';
$comment            = isset($_POST["comment"]) ? strip_tags(trim($_POST["comment"])) : '';
$interestCategory   = isset($_POST["interest_category"]) ? strip_tags(trim($_POST["interest_category"])) : '';
$interestItem       = isset($_POST["interest_item"]) ? strip_tags(trim($_POST["interest_item"])) : '';


//Checks
if (empty($firstname))            $errors['firstname']                    = 'Vul een voornaam in';
if (empty($lastname))             $errors['lastname']                     = 'Vul een achternaam in';
if (empty($email))                $errors['email']                        = 'Vul een geldig e-mailadres in';


if (!empty($errors)){
    $data['errors'] = $errors;
    echo json_encode($data);
    die;
}

// Send email
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require '../vendor/autoload.php';


ob_flush();
ob_start();

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Contactformulier ontvangen van <?= $firstname ?> <?= $lastname ?></title>
    </head>
    <body>
        <p style="font-family: Verdana, Arial, sans-serif; font-size: 11px"> </p>
        <table style="border-color: #666;" cellpadding="10">
            <tr>
                <td style="font-family: Verdana, Arial, sans-serif; font-size: 11px"><strong>Naam:</strong></td>
                <td style="font-family: Verdana, Arial, sans-serif; font-size: 11px"><?= $firstname ?> <?= $lastname ?></td>
            </tr>
            <tr>
                <td style="font-family: Verdana, Arial, sans-serif; font-size: 11px"><strong>E-mail:</strong></td>
                <td style="font-family: Verdana, Arial, sans-serif; font-size: 11px"><?= $email ?></td>
            </tr>
            <?php if(!empty($phone)){ ?>
            <tr>
                <td style="font-family: Verdana, Arial, sans-serif; font-size: 11px"><strong>Telefoonnummer:</strong></td>
                <td style="font-family: Verdana, Arial, sans-serif; font-size: 11px"><?= $phone ?></td>
            </tr>
            <?php } ?>
            <?php if(!empty($interestCategory) || !empty($interestItem)){ ?>
            <tr>
                <td style="font-family: Verdana, Arial, sans-serif; font-size: 11px"><strong>Interesse:</strong></td>
                <td style="font-family: Verdana, Arial, sans-serif; font-size: 11px">
                    <?php
                    $interestParts = [];
                    if (!empty($interestCategory)) {
                        $interestParts[] = ucfirst($interestCategory);
                    }
                    if (!empty($interestItem)) {
                        $interestParts[] = $interestItem;
                    }
                    echo implode(' | ', $interestParts);
                    ?>
                </td>
            </tr>
            <?php } ?>
            <?php  if(!empty($comment)){ ?>
            <tr>
                <td style="font-family: Verdana, Arial, sans-serif; font-size: 11px"><strong>Bericht:</strong></td>
                <td style="font-family: Verdana, Arial, sans-serif; font-size: 11px"><?= nl2br($comment) ?></td>
            </tr>
            <?php } ?>
        </table>
    </body>
</html>
<?php

$html_content = ob_get_clean();


$mail = new PHPMailer();
$mail->setFrom($MAIL_CLIENT_FROM);
if($email !== $MAIL_TEST_RECEIVER){
    $mail->addAddress($COMPANY_EMAIL, $COMPANY_NAME);
    // $mail->addAddress('victor.poleij@surlinio.com', 'Surlinio Support');;
    // $mail->addBCC('victor.poleij@surlinio.com', 'Surlinio Support');
}else{
    $mail->addAddress($MAIL_TEST_RECEIVER);
}
$mail->AddReplyTo($email);

$mail->CharSet = "UTF-8";
$mail->Subject = 'Contactformulier ontvangen van ' . $firstname.' '.$lastname;
$mail->msgHTML($html_content);
$mail->AltBody = 'Bedankt voor uw contactverzoek. Uw e-mailclient ondersteunt geen HTML-mail.';

$bSubmitted = ($mail->send());


if ($bSubmitted) {
    $data['success'] = '<div class="my-3 text-white text-center text-md-start" data-aos="fade-right" data-aos-duration="800" data-aos-offset="50">';
    $data['success'] .= '<p>Beste ' . $firstname . ',</p>';
    $data['success'] .= '<p>Bedankt voor uw contactverzoek.<br> We nemen zo snel mogelijk contact met u op.</p>';
    $data['success'] .= '<p>Met vriendelijke groet,<br> ' . $COMPANY_NAME . '</p>';
    $data['success'] .= '</div>';
}
else {
    $data['success'] = '<div class="alert alert-danger" role="alert">';
    $data['success'] .= '<p>Er is iets misgegaan bij het versturen van het formulier. U kunt het later opnieuw proberen.<br><br>Onze excuses voor het ongemak,<br> ' . $COMPANY_NAME . '</p>';
    $data['success'] .= '</div>';
}

print json_encode($data);
?>