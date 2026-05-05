<footer>
	<div class="container">

		<div class="row mb-3">

			<div class="col-lg-4">
				<!-- <img src="<?= STATIC_URL ?>img/logo/logo.svg" class="img-fluid mb-3" width="200" height="59" alt="Logo"><br> -->
				<h3 class="footer-heading">Contact</h3>
				<a target="blank" aria-label="<?= $COMPANY_STREET ?> <?= $COMPANY_ZIP ?>, <?= $COMPANY_CITY ?>" href="https://www.google.com/maps/dir/?api=1&destination=<?= $COMPANY_STREET . "," . $COMPANY_CITY ?>">
					<i class="fa fa-map-marker-alt secondary-color me-1"></i>
					<?= $COMPANY_STREET ?>,
					<?= $COMPANY_ZIP ?> <?= $COMPANY_CITY ?>
				</a><br>
				<a style="word-break: break-all;" href="mailto:<?= $COMPANY_EMAIL ?>" aria-label="<?= $COMPANY_EMAIL ?>"><i class="fa fa-envelope secondary-color me-1"></i> <?= $COMPANY_EMAIL ?></a><br>
				<a href="tel:<?= $COMPANY_PHONE_LINK ?>"><i class="fa fa-phone secondary-color me-1"></i><?= $COMPANY_PHONE ?></a><br>
				<h3 class="footer-heading">Organisatie</h3>
				<span class="text-white"><i class="fa-solid fa-receipt secondary-color me-1"></i>KVK: <?= $COMPANY_KVK ?></span><br>
				<span class="text-white"><i class="fa-solid fa-university secondary-color me-1"></i>IBAN: <?= $COMPANY_IBAN ?></span><br>
			</div>
			<div class="col-lg-4 text-white">
				<h3 class="footer-heading">Openingstijden</h3>
				<?php $today = date('l');
				$dayMap = ['Monday' => 'Maandag', 'Tuesday' => 'Dinsdag', 'Wednesday' => 'Woensdag', 'Thursday' => 'Donderdag', 'Friday' => 'Vrijdag', 'Saturday' => 'Zaterdag', 'Sunday' => 'Zondag'];
				$todayNl = $dayMap[$today] ?? ''; ?>
				<?php foreach ($COMPANY_OPENING_HOURS ?? [] as $day => $hours): ?>
					<div class="d-flex justify-content-between<?= $day === $todayNl ? ' fw-bold' : '' ?>">
						<span><?= htmlspecialchars($day, ENT_QUOTES, 'UTF-8') ?></span>
						<span><?= htmlspecialchars($hours, ENT_QUOTES, 'UTF-8') ?></span>
					</div>
				<?php endforeach; ?>
			</div>
			<div class="col-lg-4 text-lg-end">
				<h3 class="footer-heading">Links</h3>
				<a href="<?= SITE_URL ?>">Home</a><br>
				<a href="<?= SITE_URL ?>de-stichting">De Stichting</a><br>
				<a href="<?= SITE_URL ?>schilderijen">Schilderijen</a><br>
				<a href="<?= SITE_URL ?>zeefdrukken">Zeefdrukken</a><br>
				<a href="<?= SITE_URL ?>contact">Contact</a><br>
			</div>


		</div>
		<div class="row">
			<div><?php $brushClass = 'jr-brushstroke--secondary'; include ABS_PATH . 'inc/brushstroke.inc.php'; ?></div>
			<div class="text-center">
				<p class="mb-0">©<?= date("Y"); ?> <a href="<?= $COMPANY_WEBSITE ?>" target="_blank"><?= $COMPANY_NAME ?> </a> | <a href="https://surlinio.com/" target="_blank">Surlinio<i class="fa-solid fa-code ms-1"></i> </a><br>
				</p>
			</div>
		</div>
	</div>
</footer>

<?php
// Zet op false om de popup op een specifieke pagina helemaal niet te laden.
$LOAD_SITE_POPUP_IN_FOOTER = $LOAD_SITE_POPUP_IN_FOOTER ?? true;

// Keuzes: 'sitewide' of 'home'.
$SITE_POPUP_DISPLAY_SCOPE = $SITE_POPUP_DISPLAY_SCOPE ?? 'home';

$isHomePage = (isset($page) && $page === 'home');

$shouldLoadPopupByScope = (
	$SITE_POPUP_DISPLAY_SCOPE === 'sitewide' ||
	($SITE_POPUP_DISPLAY_SCOPE === 'home' && $isHomePage)
);

if (!empty($LOAD_SITE_POPUP_IN_FOOTER) && $shouldLoadPopupByScope) {
	include ABS_PATH . 'inc/popup.inc.php';
}
?>