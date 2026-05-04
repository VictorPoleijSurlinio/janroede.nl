<?php
include __DIR__.'/../inc/config.inc.php';

if(isset($_SESSION['app_'.$branchSessionVar.'_logged_in'])) {
	header('location:'.$default_page);
}

$title = "Wachtwoord vergeten";
include __DIR__.'/../inc/head.inc.php';
?>

<?php
// CHECK IF RESET LINK IS AVAILABLE
if(!empty($_SERVER['QUERY_STRING'])) {
	parse_str(decloak($_SERVER['QUERY_STRING']), $querystring);
	if(empty($querystring['pwstring']) || empty($querystring['passwordtime'])) {
		header('location: '.SITE_URL.'/login/wachtwoord-vergeten');
		die;
	}
	$pwstring = $querystring['pwstring'];
	$passwordtime = $querystring['passwordtime'];


	// CHECK IF PWSTRING IS VALID
	$db->where('admacc_password_forgotten', $pwstring);
	$db->where('admacc_password_forgotten_time', $passwordtime);
	$db->where('admacc_active', '1');
	$wachtwoord_vergeten_exist = $db->getOne("admin_accounts");

	if($wachtwoord_vergeten_exist) {

		// Check is valid, check if within 24h
		if($passwordtime > time()-(60 * 60)) {

			$cloak_email = cloak(strtolower($wachtwoord_vergeten_exist['admacc_email']));
			?>
			<div class="container">
				<div class="row d-flex align-items-center" style="height: 90vh;">
					<div class="col-lg-6 col-md-8 col-sm-12 offset-lg-3 offset-md-2 box">
						<div class="card card-client p-4">
							<form data-ajaxurl="<?=SITE_URL?>login/ajax/new_password_with_reset" data-replace="false">
								<input type="hidden" name="id" value="<?= $cloak_email ?>">
								<div class="card-header text-center">
									<img src="<?=STATIC_URL?>img/logo/logo.svg" class="img-fluid mx-auto" width="<?=$COMPANY_LOGO_LOGIN_WIDTH?>" height="auto" alt="Company Logo">
								</div>
								<div class="card-body card-body-action">
									<label class="form-label" for="nieuw_wachtwoord">Nieuw wachtwoord</label>
									<input class="form-control" type="password" id="nieuw_wachtwoord" name="nieuw_wachtwoord">
									<label class="form-label" for="nieuw_wachtwoord_2">Voer nogmaals je nieuwe wachtwoord in</label>
									<input class="form-control" type="password" id="nieuw_wachtwoord_2" name="nieuw_wachtwoord_2">
								</div>
								<div class="card-action">
									<button class="btn btn-client w-100" type="submit">Wachtwoord aanpassen</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>

			<?php


		// STRING GELDIG, MAAR VERLOPEN
		}else{
			?>

			<div class="container">
				<div class="row d-flex align-items-center" style="height: 90vh;">
					<div class="col-lg-6 col-md-8 col-sm-12 offset-lg-3 offset-md-2 box">
						<div class="card card-client p-4">
							<form data-ajaxurl="<?= SITE_URL ?>login/ajax/password-forgotten" data-replace="false">
								<div class="card-header text-center">
								<img src="<?=STATIC_URL?>img/logo/logo.svg" class="img-fluid mx-auto" width="<?=$COMPANY_LOGO_LOGIN_WIDTH?>" height="auto" alt="Company Logo">
								<h2>De gebruikte link is verlopen</h2>
									<p>De gebruikte link is verlopen. Gebruik onderstaand formulier om opnieuw een wachtwoord reset aan te vragen</p>
								</div>
								<div class="card-body card-body-action">
									<label class="form-label" for="username">E-mailadress</label>
									<input type="email" class="form-control" name="username" id="username" placeholder="E-mailadress">
								</div>
								<div class="card-action">
									<button class="btn btn-client w-100" type="submit">Wachtwoord resetten</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>

		<?php }

	// QUERY DATA NIET GELDIG
	}else{
		header('location: '.SITE_URL.'login/wachtwoord-vergeten');
	}


// PASSWORD RESET - GEEN QUERYSTRING
}else{
	?>
	<div class="container">
		<div class="row d-flex align-items-center" style="height: 90vh;">
			<div class="col-lg-6 col-md-8 col-sm-12 offset-lg-3 offset-md-2 box">
				<div class="card card-client p-4">
					<form data-ajaxurl="<?= SITE_URL ?>login/ajax/password-forgotten" data-replace="false">
						<input type="text" class="d-none" name="robo" id="robo">
						<div class="card-header text-center">
						<img src="<?=STATIC_URL?>img/logo/logo.svg" class="img-fluid mx-auto" width="<?=$COMPANY_LOGO_LOGIN_WIDTH?>" height="auto" alt="Company Logo">
						</div>
						<div class="card-body card-body-action">
							<label class="form-label" for="username">E-mailadress</label>
							<input type="email" class="form-control" name="username" id="username" placeholder="E-mailadress">
						</div>
						<div class="card-action">
							<button class="btn btn-client w-100" type="submit">Wachtwoord resetten</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

<?php } ?>


<?php
include __DIR__.'/../inc/scripts.inc.php';
include __DIR__.'/../inc/closingtags.inc.php';

