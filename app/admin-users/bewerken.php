<?php
include __DIR__."/../inc/config.inc.php";

admin_level_required($_SESSION['app_'.$branchSessionVar.'_level'], 'access');

$navpage = "admin-users";
$folder = "admin-users/";

$placeholdersNieuw['admacc_id']				= 0;
$placeholdersNieuw['admacc_active']			= 1;
$placeholdersNieuw['admacc_email']			= '';
$placeholdersNieuw['admacc_level']			= 'admin';
$placeholdersNieuw['admacc_first_name']		= '';
$placeholdersNieuw['admacc_last_name']		= '';


parse_str(decloak($_SERVER['QUERY_STRING']), $querystring);
if(empty($querystring['id'])) {
	$data = $placeholdersNieuw;
}else{
	$id = $querystring['id'];

	$db->where('admacc_id', $id);
	$data = $db->getOne('admin_accounts');

	if(!$data){
		$data = $placeholdersNieuw;
	}
}


if($data['admacc_id'] == 0){
	$title = "Admin account toevoegen";
}else{
	$title = "Admin account bewerken - ".$data['admacc_first_name']." ".$data['admacc_last_name'];
}


include __DIR__."/../inc/head.inc.php";
include __DIR__."/../inc/navbar.inc.php";
?>



<main>
	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="card card-client">
					<form data-ajaxurl="<?=SITE_URL.$folder?>ajax/bewerken" data-replace="false">
						<input type="hidden" name="id" value="<?= cloak($data['admacc_id']) ?>">
						<div class="card-header">
							<h1><?= $title ?></h1>
							<hr>
							<div class="w-100">
								<button onclick="history.back()" class="btn btn-client">
									Terug
								</button>
								<?php if($data['admacc_id'] !== 0){ ?>
									<a href="<?=SITE_URL.$folder?>verwijderen?<?= cloak("id=$data[admacc_id]") ?>" class="btn btn-delete float-end">
										Verwijderen <i class="fa-regular fa-trash-alt"></i></a>
								<?php } ?>
							</div>
						</div>
				        <div class="card-body card-body-action">
				        	<div class="row">
								<div class="col-lg-4 col-md-6 col-sm-6 col-12">
				        			<div class="form-check form-switch">
										<input class="form-check-input" type="checkbox" id="active" name="active" value="1" <?php if($data['admacc_active']) echo 'checked'; ?>>
										<label class="form-check-label" for="active">Account actief</label>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-4 col-md-6 col-sm-6 col-12">
									<label class="form-label" for="email">E-mailadres</label>
									<input class="form-control" type="email" id="email" name="email" value="<?= $data['admacc_email'] ?>">
								</div>
								<div class="col-lg-4 col-md-6 col-sm-6 col-12">
									<label class="form-label" for="first_name">Rechten</label>
									<select class="form-control selectpicker" id="level" name="level">
										<option value="medewerker" <?php if($data['admacc_level'] == 'medewerker') echo 'selected'; ?>>Medewerker</option>
										<option value="admin" <?php if($data['admacc_level'] == 'admin') echo 'selected'; ?>>Admin</option>
									</select>
								</div>
							</div>

							<div class="row">
								<div class="col-lg-4 col-md-6 col-sm-6 col-12">
									<label class="form-label" for="first_name">Voornaam</label>
									<input class="form-control" type="text" id="first_name" name="first_name" value="<?= $data['admacc_first_name'] ?>">
								</div>
								<div class="col-lg-4 col-md-6 col-sm-6 col-12">
									<label class="form-label" for="last_name">Achternaam</label>
									<input class="form-control" type="text" id="last_name" name="last_name" value="<?= $data['admacc_last_name'] ?>">
								</div>
							</div>
							<div class="row">
								<div class="col-lg-4 col-md-6 col-sm-6 col-12">
									<label class="form-label" for="wachtwoord">Wachtwoord</label>
									<input class="form-control" type="password" id="wachtwoord" name="wachtwoord">
								</div>
							</div>
							<div class="row mt-4">
								<div class="col-lg-12 col-md-12 col-sm-12 col-12">
									<h2>Rechten</h2>
								</div>
							</div>
							<div class="row">
							<?php
							$db->where('mod_visible', 1);
							$db->orderBy('mod_order', 'ASC');
							$availableModules = $db->get('modules');

							$groupModule = '';
							foreach($availableModules as $availableModule):
								$modActive = false;

								$db->where('aam_module_id', $availableModule['mod_id']);
								$db->where('aam_admin_account_id', $ingelogdAccount['admacc_id']);
								$modActive = $db->getOne('view_app_access_modules');

								if($groupModule !== $availableModule['mod_group']){
									$groupModule = $availableModule['mod_group'];
									// if(!$availableModuleCounter !== 1){
									// 	echo '<div class="divider"></div>';
									// }
									echo '<div class="col-12 mt-3">';
									echo '<p class="primary-color mb-0"><strong><em>'.$availableModule['mod_group'].'</em></strong></p>';
									echo '</div>';
								}
								?>
								<div class="col-lg-4 col-md-6 col-sm-6 col-12 mb-2">
				        			<div class="form-check form-switch">
										<input class="form-check-input" type="checkbox" id="access_modules_<?=$availableModule['mod_id']?>" name="access_modules[]" value="<?=$availableModule['mod_id']?>" <?php if($modActive) echo 'checked'; ?>>
										<label class="form-check-label" for="access_modules_<?=$availableModule['mod_id']?>"><?=$availableModule['mod_name']?></label>
									</div>
								</div>

							<?php
							endforeach
							?>
							</div>

							<hr>
						</div>
						<div class="card-action">
							<div class="row">
								<div class="col-12 text-end">
									<button class="btn btn-save" type="submit">
										Opslaan <i class="fa-regular fa-save"></i>
									</button>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</main>


<?php
include __DIR__."/../inc/scripts.inc.php";
include __DIR__."/../inc/closingtags.inc.php";
?>

