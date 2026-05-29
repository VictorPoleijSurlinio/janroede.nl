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
				<li class="nav-item">
					<a class="nav-link" href="<?= SITE_URL ?>leven">LEVEN</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?= SITE_URL ?>de-stichting">STICHTING</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
						WERK
					</a>
					<ul class="dropdown-menu">
						<li><a class="dropdown-item" href="<?= SITE_URL ?>schilderijen">SCHILDERIJEN</a></li>
						<li><a class="dropdown-item" href="<?= SITE_URL ?>zeefdrukken">ZEEFDRUKKEN</a></li>

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