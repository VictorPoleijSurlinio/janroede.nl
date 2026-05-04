<?php
include __DIR__."/../inc/config.inc.php";

$navpage = "profiel";
$folder = "profiel";

$db->where('admacc_email', $_SESSION['app_'.$branchSessionVar.'_user']);
$data = $db->getOne('admin_accounts');

if(!$data){
	header('location: '.SITE_URL);
	die;
}

$title = "Profiel bewerken";


include __DIR__."/../inc/head.inc.php";
include __DIR__."/../inc/navbar.inc.php";
?>

<main>
	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="card card-client">
					<form data-ajaxurl="<?=SITE_URL.$folder.'/'?>/ajax/bewerken" data-replace="false">
						<input type="hidden" name="id" value="<?= cloak($data['admacc_id']) ?>">
						<div class="card-header">
							<h1><?= $title ?></h1>
							<hr>
						</div>
						<div class="card-body card-body-action">
							<div class="row">
								<div class="col-lg-8">
									<div class="row">
										<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
											<h4>Gegevens</h4>
											<hr>
										</div>
									</div>
									<div class="row">
										<div class="col-lg-6 col-md-6 col-sm-6 col-12">
											<label class="form-label" for="gebruikersnaam">Gebruikersnaam</label>
											<input class="form-control" type="email" id="gebruikersnaam" name="gebruikersnaam" value="<?= $data['admacc_email'] ?>" readonly disabled>
										</div>
									</div>
									<div class="row">
										<div class="col-lg-6 col-md-6 col-sm-6 col-12">
											<label class="form-label" for="first_name">Voornaam</label>
											<input class="form-control" type="text" id="first_name" name="first_name" value="<?= $data['admacc_first_name'] ?>">
										</div>
										<div class="col-lg-6 col-md-6 col-sm-6 col-12">
											<div class="input-field">
												<label class="form-label" for="last_name">Achternaam</label>
												<input class="form-control" type="text" id="last_name" name="last_name" value="<?= $data['admacc_last_name'] ?>">
											</div>
										</div>
									</div>
									<div class="row mt-5">
										<div class="col-lg-12 col-md-12 col-sm-12 col-12">
											<h5>Wachtwoord wijzigen</h5>
											<hr class="mb-0">
										</div>
										<div class="col-lg-6 col-md-6 col-sm-6 col-12">
											<label class="form-label" for="wachtwoord">Wachtwoord</label>
											<input class="form-control" type="password" id="wachtwoord" name="wachtwoord">
										</div>
										<div class="col-lg-6 col-md-6 col-sm-6 col-12">
											<label class="form-label" for="wachtwoord_check">Herhaal wachtwoord</label>
											<input class="form-control" type="password" id="wachtwoord_check" name="wachtwoord_check">
										</div>
									</div>
								</div>
								<div class="col-lg-4">
									<div class="row">
										<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
											<h4>Profielfoto</h4>
											<hr>
										</div>
										<?php if(!empty($data['admacc_avatar'])){ ?>
											<div class="col-lg-6 col-md-6 col-sm-6 col-6">
												<img src="<?=STATIC_URL?>img/avatars/<?= $data['admacc_avatar'] ?>" class="img-fluid" width="400" height="400" alt="Avatar">
											</div>
										<?php } ?>
										<div class="col-lg-6 col-md-6 col-sm-6 col-6">
											<div class="form-group">
												<div class="afbeelding-avatar-slim">
													<input type="file" name="avatar" accept="image/jpeg, image/jpg, image/png">
												</div>
											</div>
											<br>
										</div>
										<?php if(!empty($data['admacc_avatar'])){ ?>
											<div class="col-lg-12 col-md-12 col-sm-12 col-12">
												<div class="form-check form-switch">
													<input class="form-check-input" type="checkbox" id="avatar_verwijderen" name="avatar_verwijderen" value="1">
													<label class="form-check-label" for="avatar_verwijderen">Afbeelding verwijderen</label>
												</div>
											</div>
										<?php } ?>
									</div>
								</div>
							</div>
							<hr class="mt-5">
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
					</div>
				</form>
			</div>
		</div>
	</div>
</main>


<div class="toast-client bottom-0 end-0 p-3">
	<div id="toast-succes" class="toast hide save-border" role="alert" aria-live="assertive" aria-atomic="true">
		<div class="toast-header">
			<strong class="me-auto">Beste <?= $data['admacc_first_name']?></strong>
			<button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
		</div>
		<div class="toast-body">
			Wijziging succesvol opgeslagen
		</div>
	</div>
</div>



<?php
include __DIR__."/../inc/scripts.inc.php";
?>


<script type="text/javascript">
	function init_slim() {
		$('.afbeelding-avatar-slim').slim({
			ratio: '1:1',
		    minSize: {
		        width: 400,
		        height: 400,
		    },
			label: 'Upload afbeelding',
			instantEdit: true,
			forceMinSize: {
		        width: 400,
		        height: 400,
		    },

			// nieuw plaatje inserted
			didLoad: function() {
				init_slim();
				return true;
			},
		});
	}

	init_slim();
</script>

<?php
include __DIR__."/../inc/closingtags.inc.php";
?>

