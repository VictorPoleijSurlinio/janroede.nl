<?php
include __DIR__ . '/inc/config.inc.php';

$title = "Jan Roëde Stichting | Kunstenaar Jan Roëde - schilderijen, tekeningen en grafiek";
$description = "De Jan Roëde Stichting beheert de artistieke nalatenschap van Jan Roëde (1914-2007). Ontdek zijn schilderijen, tekeningen, gouaches en grafiek en lees meer over de stichting en haar activiteiten.";
$nav_page = "home";
$language =  "nl";
$og_image = STATIC_URL . 'img/carousel/de-brief.webp';
$lcp_preload_desktop = STATIC_URL . 'img/carousel/de-brief.webp';
$lcp_preload_mobile = STATIC_URL . 'img/carousel/mobile/de-brief.webp';

include ABS_PATH . 'inc/head.inc.php';
include ABS_PATH . 'inc/navbar.inc.php';
?>

<div id="mainCarousel" class="carousel slide" data-bs-ride="carousel">
	<div class="carousel-indicators mx-auto">
		<?php
		$slideCount = 7; // Set the number of slides here
		for ($i = 0; $i < $slideCount; $i++):
			$active = $i === 0 ? 'active' : '';
			$current = $i === 0 ? 'aria-current="true"' : '';
		?>
			<button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="<?= $i ?>" class="<?= $active ?>" <?= $current ?> aria-label="Slide <?= $i + 1 ?>"></button>
		<?php endfor; ?>
	</div>

	<div class="carousel-inner">
		<div class="carousel-item active">
			<picture>
				<source media="(max-width: 768px)" srcset="<?= STATIC_URL ?>img/carousel/mobile/zelfportret.webp">
				<img src="<?= STATIC_URL ?>img/carousel/zelfportret.webp" class="d-block w-100 img-fluid" alt="Zelfportret" loading="eager" fetchpriority="high">
			</picture>
		</div>
		<div class="carousel-item">
			<picture>
				<source media="(max-width: 768px)" srcset="<?= STATIC_URL ?>img/carousel/mobile/de-brief.webp">
				<img src="<?= STATIC_URL ?>img/carousel/de-brief.webp" class="d-block w-100 img-fluid" alt="De brief" loading="lazy">
			</picture>
		</div>
		<div class="carousel-item">
			<picture>
				<source media="(max-width: 768px)" srcset="<?= STATIC_URL ?>img/carousel/mobile/overdracht.webp">
				<img src="<?= STATIC_URL ?>img/carousel/overdracht.webp" class="d-block w-100 img-fluid" alt="Overdracht" loading="lazy">
			</picture>
		</div>
		<div class="carousel-item">
			<picture>
				<source media="(max-width: 768px)" srcset="<?= STATIC_URL ?>img/carousel/mobile/abstracte-figuren-in-rook.webp">
				<img src="<?= STATIC_URL ?>img/carousel/abstracte-figuren-in-rook.webp" class="d-block w-100 img-fluid" alt="Abstracte figuren in rook" loading="lazy">
			</picture>
		</div>
		<div class="carousel-item">
			<picture>
				<source media="(max-width: 768px)" srcset="<?= STATIC_URL ?>img/carousel/mobile/phantome-discutant-la-verite.webp">
				<img src="<?= STATIC_URL ?>img/carousel/phantome-discutant-la-verite.webp" class="d-block w-100 img-fluid" alt="Phantome discutant la vérité" loading="lazy">
			</picture>
		</div>
		<div class="carousel-item">
			<picture>
				<source media="(max-width: 768px)" srcset="<?= STATIC_URL ?>img/carousel/mobile/androgyn.webp">
				<img src="<?= STATIC_URL ?>img/carousel/androgyn.webp" class="d-block w-100 img-fluid" alt="Androgyn" loading="lazy">
			</picture>
		</div>
		<div class="carousel-item">
			<picture>
				<source media="(max-width: 768px)" srcset="<?= STATIC_URL ?>img/carousel/mobile/voortaan.webp">
				<img src="<?= STATIC_URL ?>img/carousel/voortaan.webp" class="d-block w-100 img-fluid" alt="Voortaan" loading="lazy">
			</picture>
		</div>
	</div>
</div>

<section class="p-0" id="about">
	<div class="floating-text">
		<div class="row">
			<div class="col-md-12">
				<h1 class="text-black display-2">Jan Roëde</h1>
				<h2 class="text-black mb-4">1914 - 2007</h2>
				<p>
					<strong>Jan Roëde was een veelzijdig Nederlands kunstenaar wiens werk getuigt van een diepe fascinatie voor het menselijk bestaan en de kracht van het beeld.<br>
						Zijn schilderijen, tekeningen en gouaches bewegen zich tussen het figuratieve en het expressieve — intens, poëtisch en altijd met een duidelijke eigen signatuur.
					</strong>
				</p>
				<p class="mb-5">
					De Jan Roëde Stichting beheert zijn artistieke nalatenschap en zet zich in om zijn werk onder de aandacht te brengen van een breed publiek.<br>
					Naast het beheren en tentoonstellen van zijn werk ondersteunt de stichting jong talent in de beeldende kunst.<br>
					Zo leeft de geest van Jan Roëde voort — in kunst, in mensen, in inspiratie.
				</p>
				<a class="text-black" href="<?= SITE_URL ?>de-stichting/">LEES MEER OVER DE STICHTING <i class="ms-2 fa-solid fa-arrow-right"></i></a>
			</div>
		</div>
	</div>
</section>


<section class="primary-bg text-white text-center" id="werk">
	<?php /*
	<div class="jr-werk-brush jr-werk-brush--left" aria-hidden="true">
		<?php
		$brushClass = 'jr-brushstroke--secondary';
		include ABS_PATH . 'inc/brushstroke-vertical.inc.php';
		?>
		<div class="jr-werk-brush__second">
			<?php
			$brushClass = 'jr-brushstroke--secondary';
			include ABS_PATH . 'inc/brushstroke-vertical.inc.php';
			?>
		</div>
	</div>
	<div class="jr-werk-brush jr-werk-brush--right" aria-hidden="true">
		<?php
		$brushClass = 'jr-brushstroke--secondary';
		include ABS_PATH . 'inc/brushstroke-vertical.inc.php';
		?>
		<div class="jr-werk-brush__second">
			<?php
			$brushClass = 'jr-brushstroke--secondary';
			include ABS_PATH . 'inc/brushstroke-vertical.inc.php';
			?>
		</div>
	</div>
	*/ ?>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-5 mb-4 mb-lg-0">
				<div class="d-flex flex-column h-100 py-5 px-2 px-lg-4">
					<img
						src="<?= STATIC_URL ?>img/headers/mobile/schilderijen-header.webp"
						alt="Schilderijen header preview"
						decoding="async"
						class="img-fluid rounded-3 shadow mb-3 mx-auto d-block"
						style="max-width: min(360px, 100%); width: 100%;"
					>
					<h3 class="text-white">Schilderijen</h3>
					<p class="my-4">
						<strong>Een overzicht van de schilderijen uit de nalatenschap van Jan Roëde. Van intieme figuurstudies tot grootse composities — werk dat raakt en blijft hangen.</strong>
					</p>
					<div class="mt-auto d-flex justify-content-center pt-3">
					<a class="btn-client-rounded" href="<?= SITE_URL ?>schilderijen/">SCHILDERIJEN</a>
						<a class="btn-side-icon" href="<?= SITE_URL ?>schilderijen/" aria-label="Ga naar schilderijen"><i class="fa-solid fa-arrow-right"></i></a>
					</div>
				</div>
			</div>

			<div class="col-lg-5">
				<div class="d-flex flex-column h-100 py-5 px-2 px-lg-4">
					<img
						src="<?= STATIC_URL ?>img/headers/mobile/zeefdrukken-header.webp"
						alt="Zeefdrukken header preview"
						decoding="async"
						class="img-fluid rounded-3 shadow mb-3 mx-auto d-block"
						style="max-width: min(360px, 100%); width: 100%;"
					>
					<h3 class="text-white">Zeefdrukken</h3>
					<p class="my-4">
						<strong>De zeefdrukken van Jan Roëde tonen zijn grafische kracht. Gelaagd, kleurrijk en met een eigen karakter dat los staat van zijn geschilderd werk.</strong>
					</p>
					<div class="mt-auto d-flex justify-content-center pt-3">
					<a class="btn-client-rounded" href="<?= SITE_URL ?>zeefdrukken/">ZEEFDRUKKEN</a>
						<a class="btn-side-icon" href="<?= SITE_URL ?>zeefdrukken/" aria-label="Ga naar zeefdrukken"><i class="fa-solid fa-arrow-right"></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="secondary-bg">
	<div class="container">
		<div class="row justify-content-center align-items-center g-5">
			<?php
			include_once __DIR__ . '/inc/arrays/schilderijen.php';

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
				$imageName  = $item['image_name']  ?? $inv;

				$captionParts = [$title_work];
				if ($year)                              $captionParts[] = $year;
				if ($material)                          $captionParts[] = $material;
				if ($heightCm && $widthCm)              $captionParts[] = $heightCm . ' × ' . $widthCm . ' cm';
				if ($signed)                            $captionParts[] = 'gesigneerd';
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



<?php
include ABS_PATH . 'inc/footer.inc.php';
include ABS_PATH . 'inc/scripts.inc.php';
include ABS_PATH . 'inc/closingtags.inc.php';
?>