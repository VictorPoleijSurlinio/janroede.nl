<?php
include __DIR__.'/../inc/config.inc.php';

if(isset($_SESSION['app_'.$branchSessionVar.'_logged_in'])) {
	header('location:'.$default_page);
}

$title = "Login";

include __DIR__.'/../inc/head.inc.php';
?>

<div class="container">
	<div class="row d-flex align-items-center" style="height: 90vh;">
		<div class="col-lg-6 col-md-8 col-sm-12 offset-lg-3 offset-md-2 box">
			<div class="card card-client p-4">
				<form data-ajaxurl="<?=SITE_URL?>login/ajax/login" data-replace="false">

					<div class="card-header text-center">
						<img src="<?=STATIC_URL?>img/logo/logo.svg" class="img-fluid mx-auto" width="<?=$COMPANY_LOGO_LOGIN_WIDTH?>" height="auto" alt="Company Logo">
					</div>
					<div class="card-body card-body-action">
						<label class="form-label" for="email">E-mailadres</i></label>
						<input class="form-control" id="email" name="email" type="text">
						<label class="form-label"for="wachtwoord">Wachtwoord</label>
						<input class="form-control" id="wachtwoord" name="wachtwoord" type="password">
					</div>
					<div class="card-action">
						<button class="btn btn-client w-100" type="submit">Login</button>
						<p><small><em><a href="<?=SITE_URL?>login/wachtwoord-vergeten">Wachtwoord vergeten?</a></em></small></p>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<?php
include __DIR__.'/../inc/scripts.inc.php';
include __DIR__.'/../inc/closingtags.inc.php';