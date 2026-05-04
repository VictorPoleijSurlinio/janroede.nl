<?php
include __DIR__.'/../../inc/config.inc.php';

admin_level_required($_SESSION['app_'.$branchSessionVar.'_level'], 'access');


// GEEN ID, MOET NIET KUNNEN
if(empty($_POST['id'])){
    die;
}

$id = decloak($_POST['id']);

// CURRENT VALUES
$db->where('admacc_id', $id);
$current_value = $db->getOne('admin_accounts');

if(!$current_value){
    die;
}


// GEBRUIKER VERWIJDEREN UIT DB
$db->where('admacc_id', $id);
$db->delete('admin_accounts');


// LOG ACTIE
db_log("Verwijderd - Admin User " . $current_value['admacc_email'] . " (" . $current_value['admacc_id'] . ") - door " . $_SESSION['app_'.$branchSessionVar.'_user'], 'admin');


//SUCCES
$data['redirect']  = SITE_URL.'admin-users/';

echo json_encode($data);