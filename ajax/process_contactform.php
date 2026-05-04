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


//Checks
if (empty($firstname))            $errors['firstname']                    = 'Please enter a first name';
if (empty($lastname))             $errors['lastname']                     = 'Please enter a last name';
if (empty($email))                $errors['email']                        = 'Please enter a valid email address';


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
        <title>Contact form received from <?= $firstname ?> <?= $lastname ?></title>
    </head>
    <body>
        <p style="font-family: Verdana, Arial, sans-serif; font-size: 11px"> </p>
        <table style="border-color: #666;" cellpadding="10">
            <tr>
                <td style="font-family: Verdana, Arial, sans-serif; font-size: 11px"><strong>Name:</strong></td>
                <td style="font-family: Verdana, Arial, sans-serif; font-size: 11px"><?= $firstname ?> <?= $lastname ?></td>
            </tr>
            <tr>
                <td style="font-family: Verdana, Arial, sans-serif; font-size: 11px"><strong>Email:</strong></td>
                <td style="font-family: Verdana, Arial, sans-serif; font-size: 11px"><?= $email ?></td>
            </tr>
            <?php if(!empty($phone)){ ?>
            <tr>
                <td style="font-family: Verdana, Arial, sans-serif; font-size: 11px"><strong>Phone number:</strong></td>
                <td style="font-family: Verdana, Arial, sans-serif; font-size: 11px"><?= $phone ?></td>
            </tr>
            <?php } ?>
            <?php  if(!empty($comment)){ ?>
            <tr>
                <td style="font-family: Verdana, Arial, sans-serif; font-size: 11px"><strong>Message:</strong></td>
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
$mail->Subject = 'Contact form received from ' . $firstname.' '.$lastname;
$mail->msgHTML($html_content);
$mail->AltBody = 'Thank you for your contact request. Your email client does not support HTML mail.';

$bSubmitted = ($mail->send());


if ($bSubmitted) {
    $data['success'] = '<div class="my-3 text-white text-center text-md-start" data-aos="fade-right" data-aos-duration="800" data-aos-offset="50">';
    $data['success'] .= '<p>Dear ' . $firstname . ',</p>';
    $data['success'] .= '<p>Thank you for your contact request.<br> We will get back to you as soon as possible.</p>';
    $data['success'] .= '<p>Kind regards,<br> ' . $COMPANY_NAME . '</p>';
    $data['success'] .= '</div>';
}
else {
    $data['success'] = '<div class="alert alert-danger" role="alert">';
    $data['success'] .= '<p>Something went wrong while sending the form. You can try again later.<br><br>Sorry for the inconvenience,<br> ' . $COMPANY_NAME . '</p>';
    $data['success'] .= '</div>';
}

print json_encode($data);
?>