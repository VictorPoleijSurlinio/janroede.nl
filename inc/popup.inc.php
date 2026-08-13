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
					<h3 class="h4 mb-3">Kunst kopen voor het goede doel: expositie tot 23 augustus, veiling op 21 augustus</h3>
					<p class="mb-3">Bent u al in Pulchri Studio geweest? Onder de titel <em>Kunst die een glimlach deelt</em> organiseert de Jan Ro&euml;de Stichting een oogstrelende benefietexpositie voor Stichting de Vrolijkheid. In de monumentale Mesdagzaal vindt u nog tot en met 23 augustus een gevarieerde selectie schilderijen en werken op papier van Jan Ro&euml;de.</p>
					<p class="mb-3">De prijzen beginnen al bij &euro; 50 en de netto-verkoopopbrengst gaat volledig naar de organisatie van kunstzinnige activiteiten en creatieve workshops in azc&rsquo;s.</p>
					<p class="mb-3">Daarnaast zal Venduehuis op 21 augustus om 15:30 uur circa 20 grote schilderijen van Ro&euml;de veilen in de Mesdag. Ook de opbrengst hiervan gaat volledig naar De Vrolijkheid. Met uw aankoop brengt u kleur in het leven van jonge vluchtelingen. Kom kijken en draag een steentje bij aan deze benefietactie.</p>
					<p class="mb-0">Meer informatie over de benefietveiling vindt u <a href="https://vrolijkheid.nl/ti/specials/benefietveiling-jan-roede/" target="_blank" rel="noopener noreferrer">hier</a>.</p>
				</div>
				<div class="modal-footer d-flex justify-content-between gap-2 flex-wrap">
					<a class="btn btn-client-rounded-purple" href="https://www.pulchri.nl/nl/tentoonstellingen/benefietexpositie-jan-roede-de-vrolijkheid-kunst-die-een-glimlach-deelt-1/" target="_blank" rel="noopener noreferrer">Naar Pulchri Studio</a>
					<button type="button" class="btn btn-client-rounded" data-bs-dismiss="modal" aria-label="Sluit popup">Sluiten</button>
				</div>
			</div>
		</div>
	</div>
<?php endif; ?>