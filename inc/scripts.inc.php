<script src="<?=STATIC_URL?>js/min/client.min.js?v=<?=filemtime(ABS_PATH.'static/js/min/client.min.js')?>"></script>

<?php if (!empty($sitePopupIsActive)): ?>
	<script>
		document.addEventListener('DOMContentLoaded', function () {
			var popupEl = document.getElementById('sitePopupModal');
			if (!popupEl || typeof bootstrap === 'undefined') {
				return;
			}

			var popup = new bootstrap.Modal(popupEl);
			popup.show();
		});
	</script>
<?php endif; ?>
