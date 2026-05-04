<?php
include __DIR__."/../inc/config.inc.php";

admin_level_required($_SESSION['app_'.$branchSessionVar.'_level'], 'access');

if($_SESSION['app_'.$branchSessionVar.'_user'] !== 'support@surlinio.com'){
	header('location:'.SITE_URL);
	die;
}

$navpage = "log";
$folder = 'log';


parse_str(decloak($_SERVER['QUERY_STRING']), $querystring);
if(empty($querystring['id'])) {
    header('location: '.SITE_URL.$folder.'/');
    die;
}
$id = $querystring['id'];

$db->where('id', $id);
$data = $db->getOne('log');

if(!$data){
    header('location: '.SITE_URL.$folder.'/');
    die;
}


$title = "Log verwijderen";

include __DIR__."/../inc/head.inc.php";
include __DIR__."/../inc/navbar.inc.php";
?>

<main>
	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="card card-client">
					<form data-ajaxurl="<?=SITE_URL.$folder.'/'?>ajax/verwijderen" data-replace="false">
						<input type="hidden" name="id" value="<?= cloak($data['id']) ?>">
						<div class="card-header">
							<h1><?= $title ?></h1>
							<hr>
						</div>
				        <div class="card-body card-body-action">
				        	<h2 class="delete-color">Weet u zeker dat u onderstaande log wilt verwijderen?</h2>
				        	<br>
				        	<h4>Section:</h4>
				        	<p class="ms-2"><?=$data['section']?></h4>
				        	<h4>Message:</h4>
				        	<p class="ms-2"><?=$data['message']?></p>
				        	<h4>IP:</h4>
				        	<p class="ms-2"><?=$data['ip']?></p>
				        	<h4>Useragen:</h4>
				        	<p class="ms-2"><?=$data['useragent']?></p>
				        	<br>
			        		<?php if(!empty($data['opl_afbeelding'])){ ?>
								<img src="<?=WEBSITE_STATIC_URL?>img/opleidingen/<?=$data['opl_id']?>/<?=$data['opl_afbeelding']?>" class="img-fluid" width="400" height="400" alt="<?=$data['opl_naam']?>">
							<?php } ?>
							<hr>
						</div>
						<div class="card-action">
							<div class="row">
								<div class="col-12 ">
									<div class="w-100">
										<a href="" onclick="history.back()" class="btn btn-client">
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