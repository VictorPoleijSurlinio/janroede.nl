<?php
include __DIR__."/../inc/config.inc.php";

admin_level_required($_SESSION['app_'.$branchSessionVar.'_level'], 'access');

$navpage = "admin-users";
$folder = "admin-users/";

parse_str(decloak($_SERVER['QUERY_STRING']), $querystring);
if(empty($querystring['id'])) {
    header('location: '.SITE_URL.$folder);
    die;
}
$id = $querystring['id'];

$db->where('admacc_id', $id);
$data = $db->getOne('admin_accounts');

if(!$data){
    header('location: '.SITE_URL.$folder);
    die;
}

$title = "Account verwijderen - ".$data['admacc_first_name']." ".$data['admacc_last_name'];

include __DIR__."/../inc/head.inc.php";
include __DIR__."/../inc/navbar.inc.php";
?>


<main>
	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="card card-client">
					<form data-ajaxurl="<?=SITE_URL.$folder?>ajax/verwijderen" data-replace="false">
						<input type="hidden" name="id" value="<?= cloak($data['admacc_id']) ?>">
						<div class="card-header">
							<h1><?= $title ?></h1>
							<hr>
						</div>
				        <div class="card-body card-body-action">
				        	<h2 class="delete-color">Weet u zeker dat u onderstaande gebruiker wilt verwijderen?</h2>
				        	<br>
				        	<p>
				        		Naam: <?=$data['admacc_first_name']." ".$data['admacc_last_name']?><br>
				        		E-mail: <?=$data['admacc_email']?><br>
				        	</p>
							<hr>
						</div>
						<div class="card-action">
							<div class="row">
								<div class="col-12 ">
									<div class="w-100">
										<a onclick="history.back()" class="btn btn-client">
											Terug
										</a>
										<button class="btn btn-delete float-end" type="submit">
											Verwijderen <i class="fa-regular fa-trash-alt"></i>
										</button>
									</div>
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