<?php
$currentPath = trim(parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH), '/');
$siteBasePath = trim(parse_url(SITE_URL, PHP_URL_PATH), '/');

if ($siteBasePath !== '' && strpos($currentPath, $siteBasePath . '/') === 0) {
	$currentPath = substr($currentPath, strlen($siteBasePath) + 1);
} elseif ($siteBasePath !== '' && $currentPath === $siteBasePath) {
	$currentPath = '';
}

// Normalize direct index.php routes so section roots still match on localhost and live.
$currentPath = preg_replace('#(?:^|/)index\.php$#i', '', $currentPath);
$currentPath = trim((string) $currentPath, '/');

$isWieWasJanRoedeGroupActive = preg_match('#^wie-was-jan-roede(?:/|$)#i', $currentPath) === 1;
$isDeStichtingGroupActive = preg_match('#^de-stichting(?:/|$)#i', $currentPath) === 1;
$isWerkGroupActive = preg_match('#^(werk|schilderijen|zeefdrukken|werken-op-papier)(?:/|$)#i', $currentPath) === 1;
?>

<div id="mainNavigation">
	<div class="navbar-expand-xxl my-xxl-0 navbar-shape">
		<div class="navbar-dark d-flex align-items-center justify-content-between">
			<a href="<?= SITE_URL ?>" aria-label="Logo, navigate to home page" class="d-xxl-none name-logo">
				Jan Roëde Stichting
				<div><?php $brushClass = 'jr-brushstroke--secondary'; include ABS_PATH . 'inc/brushstroke.inc.php'; ?></div>
			</a>
			<div style="width: 75px;" class="d-flex justify-content-end">
				<button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Menu">
					<span class="icon-bar top-bar"></span>
					<span class="icon-bar middle-bar"></span>
					<span class="icon-bar bottom-bar"></span>
				</button>
			</div>


		</div>
		<div class="text-center collapse navbar-collapse d-flex-xxl justify-content-xxl-between" id="navbarNavDropdown">

			<a class="d-none d-xxl-inline name-logo" href="<?= SITE_URL ?>" aria-label="Logo, navigate to home page">
				Jan Roëde Stichting 
				<div><?php $brushClass = 'jr-brushstroke--secondary';include ABS_PATH . 'inc/brushstroke.inc.php'; ?></div>
			</a>

			<ul class="navbar-nav">
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle<?= $isWieWasJanRoedeGroupActive ? ' active' : '' ?>" href="<?= SITE_URL ?>wie-was-jan-roede" role="button" data-bs-toggle="dropdown" aria-expanded="false">
						<span>WIE WAS JAN ROËDE</span>
						<i class="fa-solid fa-chevron-down nav-dropdown-icon" aria-hidden="true"></i>
					</a>
					<ul class="dropdown-menu">
						<li><a class="dropdown-item" href="<?= SITE_URL ?>wie-was-jan-roede/leven">LEVEN</a></li>
						<li><a class="dropdown-item" href="<?= SITE_URL ?>wie-was-jan-roede/tijdlijn">TIJDLIJN</a></li>
						<li><a class="dropdown-item" href="<?= SITE_URL ?>wie-was-jan-roede/tentoonstellingen">TENTOONSTELLINGEN</a></li>
						<li><a class="dropdown-item" href="<?= SITE_URL ?>wie-was-jan-roede/publicaties">PUBLICATIES</a></li>
						<li><a class="dropdown-item" href="<?= SITE_URL ?>wie-was-jan-roede/de-ontwerper-en-illustrator-jan-roede">DE ONTWERPEN EN ILLUSTRATOR</a></li>
					</ul>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle<?= $isDeStichtingGroupActive ? ' active' : '' ?>" href="<?= SITE_URL ?>de-stichting" role="button" data-bs-toggle="dropdown" aria-expanded="false">
						<span>STICHTING</span>
						<i class="fa-solid fa-chevron-down nav-dropdown-icon" aria-hidden="true"></i>
					</a>
					<ul class="dropdown-menu">
						<li><a class="dropdown-item" href="<?= SITE_URL ?>de-stichting/oprichting-en-doelstelling">OPRICHTING EN DOELSTELLING</a></li>
						<li><a class="dropdown-item" href="<?= SITE_URL ?>de-stichting/bestuur">BESTUUR</a></li>
						<li><a class="dropdown-item" href="<?= SITE_URL ?>de-stichting/activiteiten">ACTIVITEITEN</a></li>
						<li><a class="dropdown-item" href="<?= SITE_URL ?>de-stichting/verkoop-uit-nalatenschap">VERKOOP UIT NALATENSCHAP</a></li>
					</ul>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle<?= $isWerkGroupActive ? ' active' : '' ?>" href="<?= SITE_URL ?>werk" role="button" data-bs-toggle="dropdown" aria-expanded="false">
						<span>WERK</span>
						<i class="fa-solid fa-chevron-down nav-dropdown-icon" aria-hidden="true"></i>
					</a>
					<ul class="dropdown-menu">
						<li><a class="dropdown-item" href="<?= SITE_URL ?>werk/schilderijen">SCHILDERIJEN</a></li>
						<li><a class="dropdown-item" href="<?= SITE_URL ?>werk/zeefdrukken">ZEEFDRUKKEN</a></li>
						<li><a class="dropdown-item" href="<?= SITE_URL ?>werk/werken-op-papier">WERKEN OP PAPIER</a></li>

					</ul>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?= SITE_URL ?>janroede-prijs" >JANROËDE PRIJS</a>
				</li>
			</ul>
			<div class="d-flex justify-content-center">
				<a class="btn-client-rounded" href="<?= SITE_URL ?>contact">CONTACT</a>
				<a class="btn-side-icon" href="<?= SITE_URL ?>contact" aria-label="Ga naar contactpagina"><i class="fa-solid fa-arrow-right"></i></a>
			</div>
		</div>
	</div>
</div>

<main id="main-content">