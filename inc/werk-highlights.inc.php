<section class="secondary-bg">
	<div class="container">
		<div class="row justify-content-center align-items-center g-5">
			<?php
			include_once ABS_PATH . 'inc/arrays/schilderijen.php';
			$schilderijen = $schilderijen ?? ['items' => []];

			// Index array by inventory_number for fast lookup
			$schilderijenIndex = array_column($schilderijen['items'], null, 'inventory_number');

			$highlights = [
				['inventory_number' => 'JRD235', 'rotate' => '-6deg'],
				['inventory_number' => 'JRD232', 'rotate' => '-2deg'],
				['inventory_number' => 'JRD246', 'rotate' => '2deg'],
				['inventory_number' => 'JRD242', 'rotate' => '5deg'],
				['inventory_number' => 'JRD252', 'rotate' => '-3deg'],
			];
			foreach ($highlights as $h):
				$inv  = $h['inventory_number'];
				$item = $schilderijenIndex[$inv] ?? [];

				$title_work = $item['title']      ?? $inv;
				$year       = $item['year']        ?? null;
				$material   = $item['material']    ?? null;
				$heightCm   = $item['height_cm']   ?? null;
				$widthCm    = $item['width_cm']    ?? null;
				$signed     = $item['signed']      ?? false;
				$salePriceEur = $item['sale_price_eur'] ?? null;
				$imageName  = $item['image_name']  ?? $inv;

				$captionParts = [$title_work];
				if ($year) {
					$captionParts[] = $year;
				}
				if ($material) {
					$captionParts[] = $material;
				}
			    if ($heightCm !== null && $widthCm !== null) {
                    $captionParts[] = $heightCm . ' ' . "\xC3\x97" . ' ' . $widthCm . ' cm';
                }
                if (is_numeric($salePriceEur)) {
                    $captionParts[] = 'prijs: ' . "\xE2\x82\xAC" . ' ' . number_format((float) $salePriceEur, 0, ',', '.');
                }
                if ($signed) {
                    $captionParts[] = 'gesigneerd';
                }
				$caption = implode(' | ', $captionParts);
				$contactUrl = SITE_URL . 'contact/?category=schilderijen&amp;item=' . urlencode($inv) . '#contact-form';
				$captionHtml = htmlspecialchars($caption, ENT_QUOTES, 'UTF-8')
					. ' <br><a href=\'' . $contactUrl . '\' class=\'btn btn-client-rounded primary-color my-2\' style=\'font-size:0.75rem\'>Beschikbaarheid van dit werk opvragen</a>';

				$thumbPath = ABS_PATH . 'static/img/schilderijen/thumbnails/' . $imageName . '.webp';
				$src = file_exists($thumbPath)
					? STATIC_URL . 'img/schilderijen/thumbnails/' . $imageName . '.webp'
					: STATIC_URL . 'img/schilderijen/' . $imageName . '.webp';
				$fullSrc = STATIC_URL . 'img/schilderijen/' . $imageName . '.webp';
			?>
				<div class="col-auto">
					<a
						href="<?= htmlspecialchars($fullSrc, ENT_QUOTES, 'UTF-8') ?>"
						data-lightbox="schilderijen-highlight"
						data-title="<?= $captionHtml ?>"
						aria-label="<?= htmlspecialchars($title_work, ENT_QUOTES, 'UTF-8') ?>"
						style="display:block; transform: rotate(<?= $h['rotate'] ?>);">
						<img
							src="<?= htmlspecialchars($src, ENT_QUOTES, 'UTF-8') ?>"
							alt="<?= htmlspecialchars($title_work, ENT_QUOTES, 'UTF-8') ?>"
							loading="lazy"
							decoding="async"
							class="pulse-breath"
							style="height: 180px; width: auto; border-radius: 6px; box-shadow: 0 8px 24px rgba(0,0,0,0.3);">
					</a>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>
