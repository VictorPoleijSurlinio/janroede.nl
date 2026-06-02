<?php
include __DIR__ . '/../inc/config.inc.php';

$title = "Jan Roëde | Wie was Jan Roëde";
$description = "Introductie op Jan Roëde met vier subpagina's: Leven, Tijdlijn, Tentoonstellingen en Publicaties.";
$nav_page = "jan-roede";
$language = "nl";
$og_image = STATIC_URL . 'img/headers/wie-was-jan-roede-header.webp';

include ABS_PATH . 'inc/head.inc.php';
include ABS_PATH . 'inc/navbar.inc.php';
?>

<section class="single-header single-header--wie-was-jan-roede" aria-label="Wie was Jan Roëde">
    <div class="single-header__content">
        <h1>Jan Roëde</h1>
    </div>
</section>

<div class="bg-white shadow-sm">
    <div class="container">
        <?php include ABS_PATH . 'inc/breadcrumb.inc.php'; ?>
    </div>
</div>

<section class="jr-roede-overview">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-xl-12">
                <div class="jr-roede-intro mb-4">
                    <span class="jr-roede-intro__eyebrow">Overzicht</span>
                    <h2 class="mt-0 mb-3">Wie was Jan Roëde</h2>
                    <p class="mb-0">Op deze pagina vind je een overzicht van de verschillende invalshoeken van het leven en werk van Jan Roëde. Via de onderstaande subpagina's lees je meer over zijn levensloop, zijn ontwikkeling in de tijd en zijn werk als kunstenaar, ontwerper en illustrator.</p>
                </div>

                <div class="row g-4 mt-1">
                    <div class="col-md-6 col-xl-4">
                        <article class="jr-roede-card">
                            <span class="jr-roede-card__icon"><i class="fa-regular fa-user"></i></span>
                            <h3>Leven</h3>
                            <p>Een compacte introductie op Jan Roëde, zijn achtergrond en de belangrijkste lijnen in zijn loopbaan.</p>
                            <a class="btn-client-rounded-purple" href="<?= SITE_URL ?>wie-was-jan-roede/leven">Bekijk Leven</a>
                        </article>
                    </div>
                    <div class="col-md-6 col-xl-4">
                        <article class="jr-roede-card">
                            <span class="jr-roede-card__icon"><i class="fa-regular fa-clock"></i></span>
                            <h3>Tijdlijn</h3>
                            <p>Volg de ontwikkeling van Jan Roëde stap voor stap, van opleiding en ontwerpwerk tot tentoonstellingen en prijzen.</p>
                            <a class="btn-client-rounded-purple" href="<?= SITE_URL ?>wie-was-jan-roede/tijdlijn">Bekijk Tijdlijn</a>
                        </article>
                    </div>
                    <div class="col-md-6 col-xl-4">
                        <article class="jr-roede-card">
                            <span class="jr-roede-card__icon"><i class="fa-regular fa-image"></i></span>
                            <h3>Tentoonstellingen</h3>
                            <p>Een overzicht van exposities en presentaties waarin het werk van Jan Roëde centraal stond.</p>
                            <a class="btn-client-rounded-purple" href="<?= SITE_URL ?>wie-was-jan-roede/tentoonstellingen">Bekijk Tentoonstellingen</a>
                        </article>
                    </div>
                    <div class="col-md-6 col-xl-4">
                        <article class="jr-roede-card">
                            <span class="jr-roede-card__icon"><i class="fa-regular fa-book-open"></i></span>
                            <h3>Publicaties</h3>
                            <p>Lees meer over boeken, artikelen en andere uitgaven waarin Jan Roëde en zijn werk aan bod komen.</p>
                            <a class="btn-client-rounded-purple" href="<?= SITE_URL ?>wie-was-jan-roede/publicaties">Bekijk Publicaties</a>
                        </article>
                    </div>
                    <div class="col-md-6 col-xl-4">
                        <article class="jr-roede-card">
                            <span class="jr-roede-card__icon"><i class="fa-regular fa-pen-nib"></i></span>
                            <h3>De ontwerper en illustrator</h3>
                            <p>Ontdek Jan Roëde vanuit zijn werk als grafisch ontwerper en illustrator, met documenten en verwijzingen.</p>
                            <a class="btn-client-rounded-purple" href="<?= SITE_URL ?>wie-was-jan-roede/de-ontwerper-en-illustrator-jan-roede">Bekijk deze pagina</a>
                        </article>
                    </div>
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