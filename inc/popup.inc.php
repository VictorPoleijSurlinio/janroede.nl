<?php
// Zet $SITE_POPUP_PERMANENT op true om altijd te tonen.
// Of gebruik start/eind om tijdsgebonden te tonen.
$SITE_POPUP_ENABLED = $SITE_POPUP_ENABLED ?? true;
$SITE_POPUP_PERMANENT = $SITE_POPUP_PERMANENT ?? true;
$SITE_POPUP_START_AT = $SITE_POPUP_START_AT ?? '2026-06-01 00:00:00';
$SITE_POPUP_END_AT = $SITE_POPUP_END_AT ?? '2026-06-14 23:59:59';
$SITE_POPUP_KEY = $SITE_POPUP_KEY ?? 'actualiteit-kunst-die-een-glimlach-deelt-2026-06';

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
					<h3 class="h4 mb-3">KUNST DIE EEN GLIMLACH DEELT</h3>
					<p class="mb-3">De recente 5-daagse benefietexpositie van de Jan Roëde Stichting in Pulchri Studio heeft ruim € 11.500 opgeleverd voor <a href="https://vrolijkheid.nl/" target="_blank" rel="noopener noreferrer">Stichting de Vrolijkheid</a>.</p>
					<p class="mb-3">Dit geweldige succes smaakt naar meer. Wij blijven ons daarom inzetten om via de verkoop van Jan Roëdes kunst bij te dragen aan kunstzinnige activiteiten voor jongeren in asielzoekerscentra.</p>
					<p class="mb-0">Onze volgende stap? In augustus organiseren we een nieuwe verkoopexpositie in de grote Mesdagzaal van Pulchri Studio. Ook de netto-opbrengst van dit evenement komt weer volledig ten goede aan De Vrolijkheid.</p>
				</div>
				<div class="modal-footer d-flex justify-content-between">
					<a class="btn btn-client-rounded-purple" href="https://vrolijkheid.nl/" target="_blank" rel="noopener noreferrer">Naar De Vrolijkheid</a>
					<button type="button" class="btn btn-client-rounded" data-bs-dismiss="modal" aria-label="Sluit popup">Sluiten</button>
				</div>
			</div>
		</div>
	</div>
<?php endif; ?>