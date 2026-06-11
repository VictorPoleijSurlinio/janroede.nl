<?php
include __DIR__ . '/inc/config.inc.php';

$title = "Jan Roëde Stichting | Kunstenaar Jan Roëde - schilderijen, tekeningen en grafiek";
$description = "De Jan Roëde Stichting beheert de artistieke nalatenschap van Jan Roëde (1914-2007). Ontdek zijn schilderijen, tekeningen, gouaches en grafiek en lees meer over de stichting en haar activiteiten.";
$nav_page = "home";
$language =  "nl";
$og_image = STATIC_URL . 'img/carousel/zelfportret.webp';
$lcp_preload_desktop = STATIC_URL . 'img/carousel/zelfportret.webp';
$lcp_preload_mobile = STATIC_URL . 'img/carousel/mobile/zelfportret.webp';

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
			<div class="col-md-8 offset-md-2 text-center">
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
	</div>
</section>


<?php include ABS_PATH . 'inc/werk-overview.inc.php'; ?>

<?php include ABS_PATH . 'inc/werk-highlights.inc.php'; ?>



<?php
include ABS_PATH . 'inc/footer.inc.php';
include ABS_PATH . 'inc/scripts.inc.php';
include ABS_PATH . 'inc/closingtags.inc.php';
?>