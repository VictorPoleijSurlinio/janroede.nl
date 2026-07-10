</main>

<footer>
	<div class="container">

		<div class="row mb-3">

			<div class="col-lg-4">
				<h3 class="footer-heading">Contact</h3>
				<a style="word-break: break-all;" href="mailto:<?= $COMPANY_EMAIL ?>" aria-label="<?= $COMPANY_EMAIL ?>"><i class="fa fa-envelope secondary-color me-1"></i> <?= $COMPANY_EMAIL ?></a><br>
				<a href="tel:<?= $COMPANY_PHONE_LINK ?>"><i class="fa fa-phone secondary-color me-1"></i><?= $COMPANY_PHONE ?></a><br>
				<h3 class="footer-heading">Organisatie</h3>
				<span class="text-white"><i class="fa-solid fa-receipt secondary-color me-1"></i>KVK: <?= $COMPANY_KVK ?></span><br>
				<span class="text-white"><i class="fa-solid fa-university secondary-color me-1"></i>IBAN: <?= $COMPANY_IBAN ?></span><br>
				<span class="text-white"><i class="fa-solid fa-id-card secondary-color me-1"></i>RSIN: 815163423</span><br>
			</div>
			<div class="col-lg-4 text-white text-center">
			
			</div>
			<div class="col-lg-4 text-lg-end">
				<h3 class="footer-heading">Links</h3>
				<a href="<?= SITE_URL ?>wie-was-jan-roede">Wie was Jan Roëde</a><br>
				<a href="<?= SITE_URL ?>de-stichting">De Stichting</a><br>
				<a href="<?= SITE_URL ?>werk/schilderijen">Schilderijen</a><br>
				<a href="<?= SITE_URL ?>werk/zeefdrukken">Zeefdrukken</a><br>
				<a href="<?= SITE_URL ?>werk/werken-op-papier">Werken op papier</a><br>
				<a href="<?= SITE_URL ?>janroede-prijs">Jan Roede Prijs</a><br>
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

$isHomePage = (
	(isset($page) && $page === 'home') ||
	(isset($nav_page) && $nav_page === 'home')
);

$shouldLoadPopupByScope = (
	$SITE_POPUP_DISPLAY_SCOPE === 'sitewide' ||
	($SITE_POPUP_DISPLAY_SCOPE === 'home' && $isHomePage)
);

if (!empty($LOAD_SITE_POPUP_IN_FOOTER) && $shouldLoadPopupByScope) {
	$sitePopupUsesSessionStorage = ($SITE_POPUP_DISPLAY_SCOPE === 'sitewide');
	include ABS_PATH . 'inc/popup.inc.php';
}
?>