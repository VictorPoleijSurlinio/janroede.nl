<?php
include __DIR__."/../inc/config.inc.php";

admin_level_required($_SESSION['app_'.$branchSessionVar.'_level'], 'access');

$title = "Overzicht Admin Accounts";
$navpage = "admin-users";
$folder = "admin-users/";

$admin_accounts = $db->get("admin_accounts");

include __DIR__."/../inc/head.inc.php";
include __DIR__."/../inc/navbar.inc.php";

?>

<main>
	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="card card-client">
					<div class="card-header">
						<h1><?= $title ?></h1>
						<hr>
					</div>
			        <div class="card-body">
			        	<div class="row">
			        		<div class="col-12">
								<div class="table-responsive w-100">
						            <table class="table-client-default striped-client">
										<thead>
											<tr>
												<th class="min-width-150">Naam</th>
												<th class="min-width-150">E-mail</th>
												<th class="min-width-125">Rechten</th>
												<th class="min-width-100 text-center">Actief</th>
												<th class="min-width-150">Laatste inlog</th>
												<th class="min-width-150 text-end">
													<a href="<?=SITE_URL.$folder?>bewerken" class="btn btn-add">
														Toevoegen <i class="fas fa-plus"></i>
													</a>
												</th>
											</tr>
										</thead>

										<tbody>
											<?php foreach($admin_accounts as $account) { ?>
												<tr>
													<td><?= $account['admacc_first_name'] .' '.$account['admacc_last_name'] ?></td>
													<td><?= $account['admacc_email'] ?></td>
													<td><?= ucfirst($account['admacc_level']) ?></td>
													<td class="text-center">
														<?php
															if($account['admacc_active'] == TRUE) {
																echo '<strong><i class="far fa-check"></i></strong>';
															}
														?>
													</td>
													<td>
														<?php if(!empty($account['admacc_last_accessed'])){
															echo date("d-m-Y",$account['admacc_last_accessed']);
														} ?>
													</td>
													<td class="text-end">
														<a href="<?=SITE_URL.$folder?>bewerken?<?= cloak("id=$account[admacc_id]") ?>" class="btn btn-edit"><i class="fa-regular fa-pen"></i></a>
														<a href="<?=SITE_URL.$folder?>verwijderen?<?= cloak("id=$account[admacc_id]") ?>" class="btn btn-delete"><i class="fa-regular fa-trash-alt"></i></a>
													</td>
												</tr>
											<?php } ?>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
			    </div>
			</div>
		</div>
	</div>
</main>


<?php
include __DIR__."/../inc/scripts.inc.php";
include __DIR__."/../inc/closingtags.inc.php";
?>

