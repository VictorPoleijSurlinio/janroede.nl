<?php
include __DIR__ . "/../inc/config.inc.php";

$module = 'dashboard';
$title = 'Dashboard';
include __DIR__ . "/../inc/accessFileCheck.inc.php";

include __DIR__ . "/../inc/head.inc.php";
include __DIR__ . "/../inc/navbar.inc.php";

// Fetch admin account details
$db->where('admacc_email', $_SESSION['app_' . $branchSessionVar . '_user']);
$user = $db->getOne('admin_accounts');


?>
<main>
	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
			<h1>Welkom <?= $user['admacc_first_name'] ?> <?= $user['admacc_last_name'] ?>,</h1>
			</div>
		</div>

	</div>
</main>

<?php
include __DIR__ . "/../inc/scripts.inc.php";
?>