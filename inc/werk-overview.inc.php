<?php
$werkOverviewIntroTitle = isset($werkOverviewIntroTitle) ? trim((string) $werkOverviewIntroTitle) : '';
$werkOverviewIntroText = isset($werkOverviewIntroText) ? trim((string) $werkOverviewIntroText) : '';
$hasWerkOverviewIntro = $werkOverviewIntroTitle !== '' || $werkOverviewIntroText !== '';
?>

<section class="primary-bg text-white text-center" id="werk">
	<div class="container">
		<?php if ($hasWerkOverviewIntro): ?>
			<div class="row justify-content-center mb-4">
				<div class="col-lg-9">
					<?php if ($werkOverviewIntroTitle !== ''): ?>
						<h2 class="text-white mb-3"><?= htmlspecialchars($werkOverviewIntroTitle, ENT_QUOTES, 'UTF-8') ?></h2>
					<?php endif; ?>
					<?php if ($werkOverviewIntroText !== ''): ?>
						<p class="mb-0"><strong><?= nl2br(htmlspecialchars($werkOverviewIntroText, ENT_QUOTES, 'UTF-8')) ?></strong></p>
					<?php endif; ?>
				</div>
			</div>
		<?php endif; ?>

		<div class="row justify-content-center">
			<div class="col-lg-4 mb-4 mb-lg-0">
				<div class="d-flex flex-column h-100 py-5 px-2 px-lg-4">
					<img
						src="<?= STATIC_URL ?>img/headers/mobile/schilderijen-header.webp"
						alt="Schilderijen header preview"
						decoding="async"
						class="img-fluid rounded-3 shadow mb-3 mx-auto d-block"
						style="max-width: min(360px, 100%); width: 100%;">
					<h3 class="text-white">Schilderijen</h3>
					<p class="my-4">
						<strong>Een overzicht van de schilderijen uit de nalatenschap van Jan Roëde. Van intieme figuurstudies tot grootse composities - werk dat raakt en blijft hangen.</strong>
					</p>
					<div class="mt-auto d-flex justify-content-center pt-3">
						<a class="btn-client-rounded" href="<?= SITE_URL ?>werk/schilderijen/">SCHILDERIJEN</a>
						<a class="btn-side-icon" href="<?= SITE_URL ?>werk/schilderijen/" aria-label="Ga naar schilderijen"><i class="fa-solid fa-arrow-right"></i></a>
					</div>
				</div>
			</div>

			<div class="col-lg-4 mb-4 mb-lg-0">
				<div class="d-flex flex-column h-100 py-5 px-2 px-lg-4">
					<img
						src="<?= STATIC_URL ?>img/headers/mobile/zeefdrukken-header.webp"
						alt="Zeefdrukken header preview"
						decoding="async"
						class="img-fluid rounded-3 shadow mb-3 mx-auto d-block"
						style="max-width: min(360px, 100%); width: 100%;">
					<h3 class="text-white">Zeefdrukken</h3>
					<p class="my-4">
						<strong>De zeefdrukken van Jan Roëde tonen zijn grafische kracht. Gelaagd, kleurrijk en met een eigen karakter dat los staat van zijn geschilderd werk.</strong>
					</p>
					<div class="mt-auto d-flex justify-content-center pt-3">
						<a class="btn-client-rounded" href="<?= SITE_URL ?>werk/zeefdrukken/">ZEEFDRUKKEN</a>
						<a class="btn-side-icon" href="<?= SITE_URL ?>werk/zeefdrukken/" aria-label="Ga naar zeefdrukken"><i class="fa-solid fa-arrow-right"></i></a>
					</div>
				</div>
			</div>

			<div class="col-lg-4">
				<div class="d-flex flex-column h-100 py-5 px-2 px-lg-4">
					<img
						src="<?= STATIC_URL ?>img/headers/mobile/werken-op-papier-header.webp"
						alt="Werken op papier header preview"
						decoding="async"
						class="img-fluid rounded-3 shadow mb-3 mx-auto d-block"
						style="max-width: min(360px, 100%); width: 100%;">
					<h3 class="text-white">Werken op papier</h3>
					<p class="my-4">
						<strong>Tekeningen, aquarellen en gouaches op papier - van kleine schetsen tot volwaardige composities. Intiem werk dat de veelzijdigheid van Jan Roëde toont.</strong>
					</p>
					<div class="mt-auto d-flex justify-content-center pt-3">
						<a class="btn-client-rounded" href="<?= SITE_URL ?>werk/werken-op-papier/">WERKEN OP PAPIER</a>
						<a class="btn-side-icon" href="<?= SITE_URL ?>werk/werken-op-papier/" aria-label="Ga naar werken op papier"><i class="fa-solid fa-arrow-right"></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
