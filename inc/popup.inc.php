<?php
// Zet $SITE_POPUP_PERMANENT op true om altijd te tonen.
// Of gebruik start/eind om tijdsgebonden te tonen.
$SITE_POPUP_ENABLED = $SITE_POPUP_ENABLED ?? true;
$SITE_POPUP_PERMANENT = $SITE_POPUP_PERMANENT ?? true;
$SITE_POPUP_START_AT = $SITE_POPUP_START_AT ?? '2026-06-01 00:00:00';
$SITE_POPUP_END_AT = $SITE_POPUP_END_AT ?? '2026-06-14 23:59:59';
$SITE_POPUP_KEY = $SITE_POPUP_KEY ?? 'benefietexpositie-2026-06';

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
					<h3 class="h4 mb-3">Benefietexpositie Jan Roede - De Vrolijkheid: kunst die een glimlach deelt</h3>
					<p class="mb-3">Van 3 t/m 7 juni 2026 organiseert de Jan Roede Stichting in Pulchri Studio een kortlopende benefietexpositie voor Stichting De Vrolijkheid.</p>
					<div class="mb-3">
						<p class="mb-1"><strong>Vanaf:</strong> woensdag 03 juni 2026</p>
						<p class="mb-1"><strong>Tot en met:</strong> zondag 07 juni 2026</p>
						<p class="mb-1"><strong>Waar:</strong> Klinkenberggaleries (Pulchri Studio)</p>
					</div>
					<p class="mb-0">
						<a href="https://www.pulchri.nl/nl/tentoonstellingen/benefietexpositie-jan-roede-de-vrolijkheid-kunst-die-een-glimlach-deelt/" target="_blank" rel="noopener noreferrer">Bekijk alle informatie op pulchri.nl</a>
					</p>

				</div>
				<div class="modal-footer d-flex justify-content-between">
					<a class="btn btn-client-rounded-purple" href="https://www.pulchri.nl/nl/tentoonstellingen/benefietexpositie-jan-roede-de-vrolijkheid-kunst-die-een-glimlach-deelt/" target="_blank" rel="noopener noreferrer">Meer info</a>
					<button type="button" class="btn btn-client-rounded" data-bs-dismiss="modal" aria-label="Sluit popup">Sluiten</button>
				</div>
			</div>
		</div>
	</div>
<?php endif; ?>