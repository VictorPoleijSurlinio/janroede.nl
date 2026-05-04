<?php
include __DIR__."/../inc/config.inc.php";

admin_level_required($_SESSION['app_'.$branchSessionVar.'_level'], 'access');

if($_SESSION['app_'.$branchSessionVar.'_user'] !== 'support@surlinio.com'){
	header('location:'.SITE_URL);
	die;
}

$title = "Overzicht Logs";
$navpage = "log";
$folder = 'log';


// PAGE SET?
if(!isset($_GET['page'])) {
	$page = 1;
} else {
	$page = $_GET['page'];
}

$search = '';
$search = @strtolower($_GET['search']);

if(!isset($_GET['order'])) {
	$order = '';
} else {
	$order = $_GET['order'];
}


// STUKJES QUERIES MAKEN
$searchquery = '';
if(!empty($search)){
	$searchquery = "(lower(section) like '%$search%' OR lower(message) like '%$search%' OR ip like '%$search%')";
}

$order_colum		= 'id';
$order_direction	= 'DESC';
if($order == 'az'){
	$order_colum		= 'lower(section)';
	$order_direction	= 'ASC';
}elseif($order == 'za'){
	$order_colum		= 'lower(section)';
	$order_direction	= 'DESC';
}elseif($order == 'reg-asc'){
	$order_colum		= 'id';
	$order_direction	= 'ASC';
}elseif($order == 'reg-desc'){
	$order_colum		= 'id';
	$order_direction	= 'DESC';
}else{
	$order_colum		= 'id';
	$order_direction	= 'DESC';
}


if(!empty($searchquery)){
	$db->where($searchquery);
}
$count = $db->getValue("log", "COUNT(*)");

$itemsperpage = 500;
$offset = ($page*$itemsperpage)-$itemsperpage;
$totalpages = ceil($count / $itemsperpage);

if(!empty($searchquery)){
	$db->where($searchquery);
}

$db->orderBy($order_colum, $order_direction);
$logs = $db->get("log", [$offset, $itemsperpage]);

include __DIR__."/../inc/head.inc.php";
include __DIR__."/../inc/navbar.inc.php";

?>

<main>
	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="card card-client">
					<div class="card-header">
						<h1><?= $title ?> (<?=$count?>)</h1>
						<hr>
						<div class="row">
							<div class="col-md-8 col-sm-8 col-12">
								<form data-ajaxurl="<?=SITE_URL.$folder.'/'?>ajax/zoeken" data-replace="false">
									<input type="hidden" name="order" value="<?=$order?>">
									<div class="form-group has-icon">
										<span class="fa-regular fa-search form-control-feedback"></span>
										<input class="form-control" type="text" id="search" name="search" value="<?=@$_GET['search']?>" placeholder="zoeken">
									</div>
								</form>
							</div>
							<div class="col-md-4 col-sm-4 col-12 text-end">
								<select class="form-control selectpicker" id="order_select" name="order_select">
									<option value="" selected>Volgorde</option>
									<?php $_GET['order'] = 'az' ?>
									<option value="?<?=http_build_query($_GET)?>">Section - A-Z</option>
									<?php $_GET['order'] = 'za' ?>
									<option value="?<?=http_build_query($_GET)?>">Section - Z-A</option>
									<?php $_GET['order'] = 'reg-asc' ?>
									<option value="?<?=http_build_query($_GET)?>">Invoer - Oud-nieuw</option>
									<?php $_GET['order'] = 'reg-desc' ?>
									<option value="?<?=http_build_query($_GET)?>">Invoer - Nieuw-oud</option>
									<?php $_GET['order'] = 'volg-desc' ?>
								</select>
							</div>
						</div>
					</div>
					<div class="card-body">
						<div class="row">
							<div class="col-12">
								<div class="table-responsive w-100">
									<table class="table-client-default striped-client">
										<thead>
											<tr>
												<th class="min-width-100">Tijd</th>
												<th class="min-width-100">Section</th>
												<th class="min-width-200">Message</th>
												<th class="min-width-100">IP</th>
												<th class="min-width-200">Useragent</th>
												<th class="min-width-50 text-end"></th>
											</tr>
										</thead>

										<tbody>
											<?php foreach($logs as $log) { ?>
												<tr>
													<td class="table-double-row">
														<small>
															<?=date('d-m-Y', strtotime($log['timestamp']))?><br>
															<em><small>&nbsp;&nbsp;&nbsp;om <?=date('H:i\u', strtotime($log['timestamp']))?></small></em>
														</small>
													</td>
													<td><small><?= $log['section'] ?></small></td>
													<td><small><?= $log['message'] ?></small></td>
													<td><small><?= $log['ip'] ?></small></td>
													<td><small><small><?= $log['useragent'] ?></small></small></td>
													<td class="text-end">
														<a href="<?=SITE_URL.$folder.'/'?>verwijderen?<?= cloak("id=$log[id]") ?>" class="btn btn-delete"><i class="fa-regular fa-trash-alt"></i></a>
													</td>
												</tr>
											<?php } ?>
										</tbody>
									</table>
								</div>
							</div>
						</div>
						<div class="row pagination-div">
							<div class="col-12">
								<nav>
									<ul class="pagination">
										<?php
										new Pagination($totalpages, 5);
										?>
									</ul>
								</nav>
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
?>

<script type="text/javascript">
	$("select").on("changed.bs.select", function(e, clickedIndex, newValue, oldValue) {
	    location.href = $(this).val();
	});
</script>

<?php
include __DIR__.'/../inc/closingtags.inc.php';
?>

