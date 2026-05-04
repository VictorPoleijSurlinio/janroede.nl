<?php
// START CONFIG
include __DIR__."/../../vendor/autoload.php";
include __DIR__."/../../inc/company-settings.inc.php";
include __DIR__."/../inc/app-settings.inc.php";
include __DIR__."/../database/config.php";
include __DIR__."/../inc/functions.inc.php";


// Start session by default
if (!isset($_SESSION)) session_start();


if(!isset($_SESSION['app_'.$branchSessionVar.'_logged_in']) && stripos($_SERVER['SCRIPT_FILENAME'], "app/login/") === FALSE && stripos($_SERVER['SCRIPT_FILENAME'], "app/cron/") === FALSE) {
    header('location: '.SITE_URL.'login');
    die;
}


// PHP ERROR REPORTING
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(0);


// CACHE CONTROLE
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
// END CONFIG


// BACKUP MAKEN
$backup_status = copy(__DIR__."/../../../database/".$branchDatabase.".sqlite3", __DIR__."/../../../database/backups/".$branchDatabase."-".date("YmdH").".sqlite3");


if($backup_status == TRUE){
	echo "Backup gelukt";
}else{
		echo "Backup mislukt";
}


// OPSCHONEN INDIEN OUDER DAN 2 WEKEN
$backup_folder = __DIR__."/../../../database/backups/";
$backups = scandir($backup_folder);
foreach ($backups as $backup) {
	if(!is_file($backup_folder.$backup)) continue;
	if(filemtime($backup_folder.$backup) < strtotime(date('Ymd'). '-2 weeks')) {
		unlink($backup_folder.$backup);
	}
}
