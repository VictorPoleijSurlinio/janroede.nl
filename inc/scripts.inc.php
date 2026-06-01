<script src="<?=STATIC_URL?>js/min/client.min.js?v=<?=filemtime(ABS_PATH.'static/js/min/client.min.js')?>"></script>

<?php if (!empty($sitePopupIsActive)): ?>
	<script>
		document.addEventListener('DOMContentLoaded', function () {
			var popupEl = document.getElementById('sitePopupModal');
			if (!popupEl || typeof bootstrap === 'undefined') {
				return;
			}

			var useSessionStorage = <?= !empty($sitePopupUsesSessionStorage) ? 'true' : 'false' ?>;
			var popupKey = popupEl.getAttribute('data-popup-key') || 'default';
			var storageKey = 'sitePopupSeen:' + popupKey;
			if (useSessionStorage && sessionStorage.getItem(storageKey) === '1') {
				return;
			}

			var popup = new bootstrap.Modal(popupEl);
			popupEl.addEventListener('hidden.bs.modal', function () {
				if (useSessionStorage) {
					sessionStorage.setItem(storageKey, '1');
				}
			});
			popup.show();
		});
	</script>
<?php endif; ?>
