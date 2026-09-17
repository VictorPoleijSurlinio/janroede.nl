<?php
// Zet $SITE_POPUP_PERMANENT op true om altijd te tonen.
// Of gebruik start/eind om tijdsgebonden te tonen.
$SITE_POPUP_ENABLED = $SITE_POPUP_ENABLED ?? true;
$SITE_POPUP_PERMANENT = $SITE_POPUP_PERMANENT ?? false;
$SITE_POPUP_START_AT = $SITE_POPUP_START_AT ?? '2026-09-17 00:00:00';
$SITE_POPUP_END_AT = $SITE_POPUP_END_AT ?? '2026-10-18 23:59:59';
$SITE_POPUP_KEY = $SITE_POPUP_KEY ?? 'art-the-hague-vrolijkheid-2026-10';

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
					<h3 class="h4 mb-3" id="sitePopupTitle">Geweldig nieuws: &euro; 66.211 voor Stichting de Vrolijkheid!</h3>
					<p class="mb-3">Dankzij onze verkoopactiviteiten vanaf juni (&ldquo;Kunst die een glimlach deelt&rdquo;) hebben we dit prachtige bedrag opgehaald voor kunstprojecten met jongeren in azc's. En we gaan nog even door!</p>
					<p class="mb-0">Van <strong>14 t/m 18 oktober</strong> staan we samen met De Vrolijkheid op <a class="fw-bold text-decoration-underline" href="https://artthehague.nl/" target="_blank" rel="noopener noreferrer">Art The Hague 2026</a>. Helpt u mee om de schenking n&oacute;g groter te maken? Bezoek onze stand!</p>
				</div>
				<div class="modal-footer d-flex justify-content-between gap-2 flex-wrap">
					<a class="btn btn-client-rounded-purple" href="https://artthehague.nl/" target="_blank" rel="noopener noreferrer">Art The Hague 2026</a>
					<button type="button" class="btn btn-client-rounded" data-bs-dismiss="modal" aria-label="Sluit popup">Sluiten</button>
				</div>
			</div>
		</div>
	</div>
<?php endif; ?>
