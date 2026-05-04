<?php
include __DIR__."/../../vendor/autoload.php";
include __DIR__."/../../inc/company-settings.inc.php";
include __DIR__."/app-settings.inc.php";
include __DIR__."/../database/config.php";
include __DIR__."/functions.inc.php";


// Start session by default
// START SESSION BY DEFAULT
if(session_status() !== PHP_SESSION_ACTIVE){
    session_start();
}


// $CONFIG
if($_SERVER["REMOTE_ADDR"] == "::1" ||
    $_SERVER["REMOTE_ADDR"] == "localhost"  ||
    $_SERVER["HTTP_HOST"] == "localhost:8888"  ||
    $_SERVER["HTTP_HOST"] == "www.localhost:8888") {
    $production = false;
} else {
    $production = true;
}

$HIDEERRORS         = $production;
$FORCE_WWW          = $production;
$FORCE_HTTPS        = $production;
$ENABLE_CACHING     = false;


// Define root domain for php includes
define('ROOT_DIR', __DIR__.'/../');


// Define root for HTML, CSS, JS and IMG links
$siteURL = $currentURL = '';
if(isset($_SERVER['HTTPS'])) {
    $siteURL = str_replace("/inc", "/", 'https://'.$_SERVER['HTTP_HOST'].str_replace(str_replace("/private_html", "/public_html", $_SERVER['DOCUMENT_ROOT']), '', str_replace("\\", '/', __DIR__)));
    $websiteURL = str_replace("/app/inc", "/", 'https://'.$_SERVER['HTTP_HOST'].str_replace(str_replace("/private_html", "/public_html", $_SERVER['DOCUMENT_ROOT']), '', str_replace("\\", '/', __DIR__)));
    $currentURL = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
} else {
    $siteURL = str_replace("/inc", "/", 'http://'.$_SERVER['HTTP_HOST'].str_replace($_SERVER['DOCUMENT_ROOT'], '', str_replace("\\", '/', __DIR__)));
    $websiteURL = str_replace("/app/inc", "/", 'http://'.$_SERVER['HTTP_HOST'].str_replace($_SERVER['DOCUMENT_ROOT'], '', str_replace("\\", '/', __DIR__ )));
    $currentURL = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
}
define('SITE_URL', $siteURL);
define("CURRENT_URL", $currentURL);
define('WEBSITE_URL', $websiteURL);
define('STATIC_URL', SITE_URL.'static/');
define('WEBSITE_STATIC_URL', WEBSITE_URL.'static/');


// redirect to login if not logged in
$default_page = SITE_URL.$DEFAULT_FOLDER.'/';
if(!isset($_SESSION['app_'.$branchSessionVar.'_logged_in']) && stripos($_SERVER['SCRIPT_FILENAME'], "app/login/") === FALSE && stripos($_SERVER['SCRIPT_FILENAME'], "app/cron/") === FALSE) {
    header('location: '.SITE_URL.'login');
    die;
}


// Force url to go www. when true
if($FORCE_WWW && strpos(SITE_URL, "://www.") === FALSE) {
    header("HTTP/1.1 301 Moved Permanently");
    header("Location: ".str_replace("://", "://www.", CURRENT_URL));
    die();
}


// Force url to go https when true
if($FORCE_HTTPS && strpos(SITE_URL, "https://") === FALSE) {
    header("HTTP/1.1 301 Moved Permanently");
    header("Location: ".str_replace("http://", "https://", CURRENT_URL));
    die();
} else if(!$FORCE_HTTPS && strpos(SITE_URL, "https://") === TRUE) {
    header("HTTP/1.1 301 Moved Permanently");
    header("Location: ".str_replace("https://", "http://", CURRENT_URL));
    die();
}


// Site variables used in head.inc.php
if (!isset($title)) $title = "No Title";
if (!isset($description)) $description = "No Description";


// PHP error reporting
if($HIDEERRORS) {
    ini_set('display_errors', 0);
    ini_set('display_startup_errors', 0);
    error_reporting(0);
} else {
    ini_set('display_errors', 1);
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


// MONEYFORMAT
// $fmt = numfmt_create('nl_NL', NumberFormatter::CURRENCY );



// INDIEN INGELOGD GEGEVENS OPAHLEN
if(isset($_SESSION['app_'.$branchSessionVar.'_logged_in'])){

    $db->where('admacc_email', $_SESSION['app_'.$branchSessionVar.'_user']);
    $ingelogdAccount = $db->getOne('admin_accounts');

    $_SESSION['app_'.$branchSessionVar.'_level'] = cloak($ingelogdAccount['admacc_level']);

    if(!$ingelogdAccount){
        header('location: '.SITE_URL);
        die;
    }

    // ACCES LEVELS
    $db->where('aam_admin_account_id', $ingelogdAccount['admacc_id']);
    $allowedModules = $db->get('view_app_access_modules');
}