<?php
include __DIR__.'/../vendor/autoload.php';
// include __DIR__.'/../app/inc/app-settings.inc.php';
// include __DIR__.'/../app/database/config.php';
// include __DIR__.'/../app/inc/functions.inc.php';

date_default_timezone_set('Europe/Amsterdam');
setlocale(LC_ALL, 'nl_NL');

header('Content-type: text/html; charset=utf-8');
header_remove("X-Powered-By");

define('ABS_PATH', substr(__DIR__,0,strlen(__DIR__)-3));



// START SESSION BY DEFAULT
if(session_status() !== PHP_SESSION_ACTIVE){
    session_start();
} 


// IF MULTIPLE LANGUAGES
if(isset($language)){
    if ($language == 'nl'){
        $_SESSION['language'] = 'nl';
        $_SESSION['head_lang'] = 'nl-NL';
        setlocale(LC_TIME, 'NL_nl');
    }elseif ($language == 'en'){
        $_SESSION['language'] = 'en';
        $_SESSION['head_lang'] = 'en-GB';
        setlocale(LC_TIME, 'en_US');
    }else{
        $_SESSION['language'] = 'nl';
        $_SESSION['head_lang'] = 'nl-NL';
        setlocale(LC_TIME, 'NL_nl');
    }
}else{
    $_SESSION['language'] = 'nl';
    $_SESSION['head_lang'] = 'nl-NL';
    setlocale(LC_TIME, 'NL_nl');
}


// $CONFIG
if(
    $_SERVER['REMOTE_ADDR'] == '::1' ||
    $_SERVER['REMOTE_ADDR'] == '127.0.0.1' ||
    $_SERVER["HTTP_HOST"] == "k1jk.nl" ||
    $_SERVER["HTTP_HOST"] == "demo01.nl" ||
    $_SERVER["HTTP_HOST"] == "demo02.nl" ||
    $_SERVER["HTTP_HOST"] == "demo03.nl" ||
    $_SERVER["HTTP_HOST"] == "demo04.nl" ||
    $_SERVER["HTTP_HOST"] == "demo05.nl" ||
    $_SERVER["HTTP_HOST"] == "demo06.nl" ||
    $_SERVER["HTTP_HOST"] == "demo07.nl" ||
    $_SERVER["HTTP_HOST"] == "demo08.nl") {
    $production = false;
} else {
    $production = true;
}


$FORCE_WWW          = $production;
$FORCE_HTTPS        = $production;
$SECURE_COOKIES     = $production;
$DISABLE_ERRORS     = $production;
$ENABLE_CACHING     = false;
$ENABLE_COMPRESSION = false;
$ENABLE_CSP         = true;



// DEFINE SITE_URL
$siteURL = $currentURL = '';
if(isset($_SERVER['HTTPS'])) {
    $siteURL = str_replace("/inc", "/", 'https://'.$_SERVER['HTTP_HOST'].str_replace(str_replace("/private_html", "/public_html", $_SERVER['DOCUMENT_ROOT']), '', str_replace("\\", '/', __DIR__)));
    $currentURL = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
} else {
    $siteURL = str_replace("/inc", "/", 'http://'.$_SERVER['HTTP_HOST'].str_replace($_SERVER['DOCUMENT_ROOT'], '', str_replace("\\", '/', __DIR__)));
    $currentURL = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
}
define('SITE_URL', $siteURL);
define("CURRENT_URL", $currentURL);
define('STATIC_URL', SITE_URL.'static/');



// FORCE WWW
if($FORCE_WWW && strpos(SITE_URL, "://www.") === FALSE) {
    header("HTTP/1.1 301 Moved Permanently");
    header("Location: ".str_replace("://", "://www.", CURRENT_URL));
    die();
}



// FORE HTTPS
if($FORCE_HTTPS && strpos(SITE_URL, "https://") === FALSE) {
    header("HTTP/1.1 301 Moved Permanently");
    header("Location: ".str_replace("http://", "https://", CURRENT_URL));
    die();
} else if(!$FORCE_HTTPS && strpos(SITE_URL, "https://") === TRUE) {
    header("HTTP/1.1 301 Moved Permanently");
    header("Location: ".str_replace("https://", "http://", CURRENT_URL));
    die();
}



// if($SECURE_COOKIES) {
//     session_set_cookie_params('60*60*24*30','/',$_SERVER['HTTP_HOST'],1,1);
// }



// PHP ERROR REPORTING
if($DISABLE_ERRORS) {
    ini_set('display_errors', 0);
    ini_set('log_errors', 1);
    ini_set('display_startup_errors', 0);
    error_reporting(0);
}
else {
    ini_set('display_errors', 1);
    ini_set('log_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
}



// CACHE CONTROLE
if($ENABLE_CACHING) {
    header('Expires: '.gmdate('D, d M Y H:i:s \G\M\T', time() + (60 * 60 * 24)));
    header('Cache-Control: public');
    header_remove("X-Powered-By");
    header_remove("Pragma");
}
else {
    header("Cache-Control: no-store, no-cache, must-revalidate");
    header("Cache-Control: post-check=0, pre-check=0", false);
    header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");
    header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
}



// FORCE COMPRESSION
function sanitize_output($buf) {
    return preg_replace(array('/<!--(.*)-->/Uis',"/[[:blank:]]+/"),array('',' '),str_replace(array("\n","\r","\t"),'',$buf));
}

if($ENABLE_COMPRESSION && $_SERVER['REMOTE_ADDR'] <> "::1") {
    ob_start("sanitize_output");
}
else {
    ob_start();
}



if ($ENABLE_CSP) {
    // $csp_header  = "Content-Security-Policy: ";
    // $csp_header .= "default-src 'none'; ";
    // $csp_header .= "base-uri 'self'; ";
    // $csp_header .= "font-src 'self' ".STATIC_URL." https://fonts.gstatic.com https://use.typekit.net; ";
    // $csp_header .= "script-src 'self' ".STATIC_URL." https://www.google-analytics.com https://www.googletagmanager.com; ";
    // $csp_header .= "style-src 'self' 'unsafe-inline' ".STATIC_URL." https://fonts.googleapis.com https://p.typekit.net https://use.typekit.net; ";
    // $csp_header .= "connect-src 'self' ".STATIC_URL." https://www.google-analytics.com https://www.googletagmanager.com; ";
    // $csp_header .= "img-src 'self' ".STATIC_URL." https://www.google-analytics.com; ";
    // $csp_header .= "frame-src 'self' https://www.googletagmanager.com; ";
    // $csp_header .= "frame-ancestors 'none'; ";
    // $csp_header .= "form-action 'self'; ";
    // $csp_header .= "manifest-src 'self'; ";
    // $csp_header .= "media-src 'self'; ";
    // $csp_header .= "object-src 'self' ";

    // header("Strict-Transport-Security: max-age=63072000");
    // header($csp_header);
    // header("X-Frame-Options: DENY");
    // header("X-XSS-Protection: 1; mode=block");
    // header("X-Content-Type-Options: nosniff");
    // header("Referrer-Policy: strict-origin-when-cross-origin");
}



// COMPANY SETTINGS
include __DIR__."/company-settings.inc.php";

// MONEYFORMAT
// $fmt = numfmt_create('nl_NL', NumberFormatter::CURRENCY );
