<?php
// Zet $SITE_POPUP_PERMANENT op true om altijd te tonen.
// Of gebruik start/eind om tijdsgebonden te tonen.
$SITE_POPUP_ENABLED = $SITE_POPUP_ENABLED ?? true;
$SITE_POPUP_PERMANENT = $SITE_POPUP_PERMANENT ?? true;
$SITE_POPUP_START_AT = $SITE_POPUP_START_AT ?? '2026-06-01 00:00:00';
$SITE_POPUP_END_AT = $SITE_POPUP_END_AT ?? '2026-06-14 23:59:59';
$SITE_POPUP_KEY = $SITE_POPUP_KEY ?? 'actualiteit-jan-roede-prijs-2026-07';

$sitePopupIsActive = false;
if (!empty($SITE_POPUP_ENABLED)) {
	if (!empty($SITE_POPUP_PERMANENT)) {
		$sitePopupIsActive = true;
	} else {
		$popupStartTs = !empty($SITE_POPUP_START_AT) ? strtotime($SITE_POPUP_START_AT) : false;
		$popupEndTs = !empty($SITE_POPUP_END_AT) ? strtotime($SITE_POPUP_END_AT) : false;
		$nowTs = time();

		if ($popupStartTs !== false && $popupEndTs !== false && $nowTs >= $popupStartTs && $nowTs <= $popupEndTs) {
			$sitePopupIsActive = true;
		}
	}
}
?>

<?php if ($sitePopupIsActive): ?>
	<div class="modal fade" id="sitePopupModal" tabindex="-1" aria-labelledby="sitePopupTitle" aria-hidden="true" data-bs-backdrop="static" data-popup-key="<?= htmlspecialchars($SITE_POPUP_KEY, ENT_QUOTES, 'UTF-8') ?>">
		<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
			<div class="modal-content border-0 shadow-lg">
				<div class="modal-header">
					<button type="button" class="btn-close primary-color" data-bs-dismiss="modal" aria-label="Sluiten"></button>
				</div>
				<div class="modal-body">
					<h3 class="h4 mb-3">JAN RO&Euml;DE PRIJS 2026</h3>
					<p class="mb-3">Op 6 juli 2026 heeft onze stichting voor de 13e keer de Jan Ro&euml;de Prijs uitgereikt aan een afstuderend beeldend kunstenaar van de KABK.</p>
					<p class="mb-3">Na beoordeling van 25 afstudeerprojecten heeft de jury de Iraanse kunstenaar <a href="https://graduation.kabk.nl/2026/Kimia-Khedri" target="_blank" rel="noopener noreferrer">Kimia Khedri</a> geselecteerd als winnaar van de Jan Ro&euml;de Prijs 2026.</p>
					<p class="mb-3">De jury roemde haar project <em>Something to hold on</em> in het <a href="<?= STATIC_URL ?>docs/jan-roede-prijs/juryrapport-jan-roede-prijs-2026.pdf" target="_blank" rel="noopener noreferrer">juryrapport</a> als een monument voor weerstand en hoop in catastrofale tijden. De prijs bestaat uit een geldbedrag van € 3.000 en een oorkonde.</p>
					<p class="mb-0"><a href="<?= STATIC_URL ?>docs/jan-roede-prijs/juryrapport-jan-roede-prijs-2026.pdf" target="_blank" rel="noopener noreferrer">Lees het juryrapport</a>.</p>
				</div>
				<div class="modal-footer d-flex justify-content-between">
					<a class="btn btn-client-rounded-purple" href="<?= STATIC_URL ?>docs/jan-roede-prijs/juryrapport-jan-roede-prijs-2026.pdf" target="_blank" rel="noopener noreferrer">Naar juryrapport</a>
					<button type="button" class="btn btn-client-rounded" data-bs-dismiss="modal" aria-label="Sluit popup">Sluiten</button>
				</div>
			</div>
		</div>
	</div>
<?php endif; ?>