<?php
include __DIR__ . '/inc/config.inc.php';

$title = "Jan Roëde Stichting | Kunstenaar Jan Roëde – schilderijen, tekeningen en grafiek";
$description = "De Jan Roëde Stichting beheert de artistieke nalatenschap van Jan Roëde (1932–2007). Ontdek zijn schilderijen, tekeningen, gouaches en grafiek en lees meer over de stichting en haar activiteiten.";
$nav_page = "home";
$language =  "nl";

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
			<img src="<?= STATIC_URL ?>img/carousel/overdracht.webp" class="d-block w-100 img-fluid" alt="Overdracht">
		</div>
		<div class="carousel-item">
			<img src="<?= STATIC_URL ?>img/carousel/le-moindre-de-ses-soucis.webp" class="d-block w-100 img-fluid" alt="Le moindre de ses soucis" loading="lazy">
		</div>
		<div class="carousel-item">
			<img src="<?= STATIC_URL ?>img/carousel/abstracte-figuren-in-rook.webp" class="d-block w-100 img-fluid" alt="Abstracte figuren in rook" loading="lazy">
		</div>
		<div class="carousel-item">
			<img src="<?= STATIC_URL ?>img/carousel/de-brief.webp" class="d-block w-100 img-fluid" alt="De brief" loading="lazy">
		</div>
		<div class="carousel-item">
			<img src="<?= STATIC_URL ?>img/carousel/phantome-discutant-la-verite.webp" class="d-block w-100 img-fluid" alt="Phantome discutant la vérité" loading="lazy">
		</div>
		<div class="carousel-item">
			<img src="<?= STATIC_URL ?>img/carousel/androgyn.webp" class="d-block w-100 img-fluid" alt="Androgyn" loading="lazy">
		</div>
		<div class="carousel-item">
			<img src="<?= STATIC_URL ?>img/carousel/voortaan.webp" class="d-block w-100 img-fluid" alt="Voortaan" loading="lazy">
		</div>
	</div>
</div>

<section class="p-0" id="about">
	<div class="floating-text">
		<div class="row">
			<div class="col-md-12">
				<h1 class="text-black display-2">Jan Roëde</h1>
				<h2 class="text-black mb-4">1932 – 2007</h2>
				<p>
					<strong>Jan Roëde was een veelzijdig Nederlands kunstenaar wiens werk getuigt van een diepe fascinatie voor het menselijk bestaan, de psyche en de kracht van het beeld.<br>
						Zijn schilderijen, tekeningen, gouaches en grafiek bewegen zich tussen het figuratieve en het expressieve — intens, poëtisch en altijd herkenbaar eigenhandig.
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
	<div class="container">
		<div class="row justify-content-center mt-5">
			<div class="col-lg-5 mb-5 mb-lg-0">
				<div class="d-flex flex-column h-100 py-5 px-2 px-lg-4">
					<i class="fal fa-paint-brush fa-3x mb-3"></i>
					<h3 class="text-white">Schilderijen</h3>
					<p class="my-4">
						<strong>Een overzicht van de schilderijen uit de nalatenschap van Jan Roëde. Van intieme figuurstudies tot grootse composities — werk dat raakt en blijft hangen.</strong>
					</p>
					<div class="mt-auto d-flex justify-content-center pt-3">
						<a class="btn-client-rounded" href="<?= SITE_URL ?>schilderijen/">BEKIJK SCHILDERIJEN</a>
						<a class="btn-side-icon" href="<?= SITE_URL ?>schilderijen/"><i class="fa-solid fa-arrow-right"></i></a>
					</div>
				</div>
			</div>

			<div class="col-lg-5">
				<div class="d-flex flex-column h-100 py-5 px-2 px-lg-4">
					<i class="fal fa-layer-group fa-3x mb-3"></i>
					<h3 class="text-white">Zeefdrukken</h3>
					<p class="my-4">
						<strong>De zeefdrukken van Jan Roëde tonen zijn grafische kracht. Gelaagd, kleurrijk en met een eigen karakter dat los staat van zijn geschilderd werk.</strong>
					</p>
					<div class="mt-auto d-flex justify-content-center pt-3">
						<a class="btn-client-rounded" href="<?= SITE_URL ?>zeefdrukken/">BEKIJK ZEEFDRUKKEN</a>
						<a class="btn-side-icon" href="<?= SITE_URL ?>zeefdrukken/"><i class="fa-solid fa-arrow-right"></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="secondary-bg">
	<div class="container">
		<div class="row">
			<div class="col-md-12 mb-2">
				<div class="d-flex flex-column h-100">
					<a href="<?= STATIC_URL ?>docs/haagsenieuwe-flyer.pdf" target="_blank">
						<img src="<?= STATIC_URL ?>img/content/discover-the-real-the-hague-1200-186px.webp" class="img-fluid logo-same-height d-none d-md-block pulse-breath" alt="Discover the real The Hague">
						<img src="<?= STATIC_URL ?>img/content/discover-the-real-the-hague-mobile-675-320px.webp" class="img-fluid logo-same-height d-md-none pulse-breath" alt="Discover the real The Hague">
					</a>
				</div>
			</div>
		</div>
	</div>
</section>



<?php
include ABS_PATH . 'inc/footer.inc.php';
include ABS_PATH . 'inc/scripts.inc.php';
include ABS_PATH . 'inc/closingtags.inc.php';
?>