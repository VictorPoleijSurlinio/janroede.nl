<?php
include __DIR__.'/../../inc/config.inc.php';

admin_level_required($_SESSION['app_'.$branchSessionVar.'_level'], 'access');

if($_SESSION['app_'.$branchSessionVar.'_user'] !== 'support@surlinio.com'){
    header('location:'.SITE_URL);
    die;
}

// GEEN ID, MOET NIET KUNNEN
if(empty($_POST['id'])){
    die;
}

$id = decloak($_POST['id']);

// CURRENT VALUES
$db->where('id', $id);
$current_value = $db->getOne('log');


if(!$current_value){
    die;
}


// LOG VERWIJDEREN UIT DB
$db->where('id', $id);
$db->delete('log');


// LOG ACTIE
// db_log("Verwijderd - LOG ".$current_value['message']." (".$id.") - door ".$_SESSION['app_'.$branchSessionVar.'_user'], 'log');



//SUCCES
$data['redirect']  = SITE_URL.'log/';

echo json_encode($data);