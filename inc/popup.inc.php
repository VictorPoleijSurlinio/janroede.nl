<?php
// Zet $SITE_POPUP_PERMANENT op true om altijd te tonen.
// Of gebruik start/eind om tijdsgebonden te tonen.
$SITE_POPUP_ENABLED = $SITE_POPUP_ENABLED ?? true;
$SITE_POPUP_PERMANENT = $SITE_POPUP_PERMANENT ?? true;
$SITE_POPUP_PERMANENT = $SITE_POPUP_PERMANENT ?? false;
$SITE_POPUP_START_AT = $SITE_POPUP_START_AT ?? '2026-06-29 00:00:00';
$SITE_POPUP_END_AT = $SITE_POPUP_END_AT ?? '2026-08-23 23:59:59';
$SITE_POPUP_KEY = $SITE_POPUP_KEY ?? 'benefietexpositie-vrolijkheid-2026-07';

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
					<h3 class="h4 mb-3">Benefietexpositie voor de Vrolijkheid: Kunst die een glimlach deelt</h3>
					<p class="mb-3">Van 29 juni t/m 23 augustus organiseert de Jan Ro&euml;de Stichting opnieuw een benefiettentoonstelling voor Stichting de Vrolijkheid, dit keer in de Mesdagzaal van Pulchri Studio.</p>
					<p class="mb-3">Wij tonen wederom een mooie selectie van schilderijen en werken op papier die voor schappelijke prijzen te koop worden aangeboden. De netto-opbrengsten komen volledig ten goede aan de activiteiten van de Vrolijkheid.</p>
					<p class="mb-3">De tentoonstelling wordt op 1 augustus om 17.00 uur officieel geopend door Cheeta Bruin, kunsthistoricus, lid van de RvT van de Vrolijkheid en projectleider tentoonstellingen van het Van Gogh Museum.</p>
					<p class="mb-0">Wij hopen u daar te begroeten, of op een ander moment tijdens de looptijd van de expositie.</p>
				</div>
				<div class="modal-footer d-flex justify-content-between">
					<a class="btn btn-client-rounded-purple" href="https://www.pulchri.nl/nl/tentoonstellingen/benefietexpositie-jan-roede-de-vrolijkheid-kunst-die-een-glimlach-deelt-1/" target="_blank" rel="noopener noreferrer">Naar Pulchri Studio</a>
					<button type="button" class="btn btn-client-rounded" data-bs-dismiss="modal" aria-label="Sluit popup">Sluiten</button>
				</div>
			</div>
		</div>
	</div>
<?php endif; ?>