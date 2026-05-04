

<nav class="navbar navbar-expand fixed-top">
	<div class="menu-collapse-btn collapse-out <?php if(!$sidenavHidden) echo 'd-md-none';?>">
		<i class="fa-regular fa-bars"></i>
	</div>
	<div class="logo-navbar w-100 mx-auto text-center">
		<img src="<?=STATIC_URL?>img/logo/logo.svg" class="img-fluid" width="<?=$COMPANY_LOGO_TOP_WIDTH?>" height="auto" alt="Company Logo">
	</div>
	<ul class="navbar-nav ms-auto">
		<li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownProfile" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				<?php if(!empty($ingelogdAccount['admacc_avatar'])){ ?>
					<img src="<?=STATIC_URL?>img/avatars/thumbnails/<?= $ingelogdAccount['admacc_avatar'] ?>" class="img-fluid rounded-circle" width="50" height="50" alt="Avatar">
				<?php }else{ ?>
					<img src="<?=STATIC_URL?>img/avatars/thumbnails/default.jpg" width="50" height="50" class="img-fluid rounded-circle">
				<?php } ?>
			</a>
			<ul class="dropdown-menu nav-dropdown-profile" aria-labelledby="navbarDropdownProfile">
				<li><a class="dropdown-item" href="<?= SITE_URL ?>profiel/"><i class="fa-regular fa-user-crown"></i> Profiel</a></li>
				<li><a class="dropdown-item" href="<?= SITE_URL ?>logout"><i class="fa-regular fa-lock-alt"></i> Uitloggen</a></li>
			</ul>
		</li>
	</ul>
</nav>

<div class="sidenav" id="slide-out">
	<?php
	$db->where('mod_visible', 1);
	$db->orderBy('mod_order', 'ASC');
	$navModules = $db->get('view_app_modules');

	$subheaderNav = '';
	$moduleCounter = 1;
	foreach($navModules as $navModule):
		if(accessAllowed($navModule['mod_id'], $allowedModules, 'check')){
			if($subheaderNav !== $navModule['mod_group']){
				$subheaderNav = $navModule['mod_group'];
				if($moduleCounter !== 1){
					echo '<div class="divider '.$moduleCounter.'"></div>';
				}
				echo '<p class="subheader">'.$navModule['mod_group'].'</p>';
			}
			?>
			<a class="sidenav-item <?php if($navpage==$navModule['mod_link']) echo 'active'?> 
				" href="<?=SITE_URL.$navModule['mod_link'].'/'?>">
				<i class="fa-light <?=$navModule['mod_fontawesome']?>"></i> <?=$navModule['mod_name']?>
			</a>
			<?php
		}
		$moduleCounter++;
	endforeach
	?>
	<div class="divider"></div>
	<?php if(admin_level_required($_SESSION['app_'.$branchSessionVar.'_level'], 'check')){ ?>
		<p class="subheader">Admin</p>
		<?php if($_SESSION['app_'.$branchSessionVar.'_user'] == 'support@surlinio.com'){ ?>
			<a class="sidenav-item <?php if($navpage=="log") echo 'active' ?>" href="<?=SITE_URL?>log/">
				<i class="fa-light fa-database"></i> Log
			</a>
		<?php } ?>
		<a class="sidenav-item <?php if($navpage=="admin-users") echo 'active' ?>" href="<?=SITE_URL?>admin-users/">
			<i class="fa-light fa-users-crown"></i> Admin Gebruikers
		</a>
	<?php } ?>
</div>
