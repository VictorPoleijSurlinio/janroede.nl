<?php
include __DIR__ . '/../inc/config.inc.php';

$title = "De Stichting | Jan Roëde Stichting";
$description = "Overzicht van De Stichting met vier subpagina's: Oprichting en doelstelling, Bestuur, Activiteiten en Verkoop uit de nalatenschap.";
$nav_page = "de-stichting";
$language = "nl";
$og_image = STATIC_URL . 'img/headers/de-stichting-header.webp';

include ABS_PATH . 'inc/head.inc.php';
include ABS_PATH . 'inc/navbar.inc.php';
?>

<section class="single-header single-header--de-stichting" aria-label="De Stichting">
    <div class="single-header__content">
        <h1>De Stichting</h1>
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
                    <h2 class="mt-0 mb-3">De Stichting</h2>
                    <p class="mb-0">Op deze pagina vind je een overzicht van de vier hoofdonderwerpen over de Jan Roëde Stichting. Via de onderstaande subpagina's lees je meer over de doelstelling, het bestuur, de activiteiten en de verkoop uit de nalatenschap.</p>
                </div>

                <div class="row g-4 mt-1">
                    <div class="col-md-6 col-xl-4">
                        <article class="jr-roede-card">
                            <span class="jr-roede-card__icon"><i class="fa-regular fa-flag"></i></span>
                            <h3>Oprichting en doelstelling</h3>
                            <p>Lees hoe de stichting is ontstaan en welke ideele en maatschappelijke doelen centraal staan.</p>
                            <a class="btn-client-rounded-purple" href="<?= SITE_URL ?>de-stichting/oprichting-en-doelstelling">Bekijk pagina</a>
                        </article>
                    </div>
                    <div class="col-md-6 col-xl-4">
                        <article class="jr-roede-card">
                            <span class="jr-roede-card__icon"><i class="fa-regular fa-users"></i></span>
                            <h3>Bestuur</h3>
                            <p>Bekijk wie het bestuur vormen en raadpleeg beleidsplan en jaarverslagen van de stichting.</p>
                            <a class="btn-client-rounded-purple" href="<?= SITE_URL ?>de-stichting/bestuur">Bekijk pagina</a>
                        </article>
                    </div>
                    <div class="col-md-6 col-xl-4">
                        <article class="jr-roede-card">
                            <span class="jr-roede-card__icon"><i class="fa-regular fa-calendar-check"></i></span>
                            <h3>Activiteiten</h3>
                            <p>Ontdek tentoonstellingen, schenkingen, publicaties en de Jan Roede Prijs.</p>
                            <a class="btn-client-rounded-purple" href="<?= SITE_URL ?>de-stichting/activiteiten">Bekijk pagina</a>
                        </article>
                    </div>
                    <div class="col-md-6 col-xl-4">
                        <article class="jr-roede-card">
                            <span class="jr-roede-card__icon"><i class="fa-regular fa-euro-sign"></i></span>
                            <h3>Verkoop uit nalatenschap</h3>
                            <p>Lees hoe verkoop van werken verloopt en hoe je interesse in een kunstwerk kunt doorgeven.</p>
                            <a class="btn-client-rounded-purple" href="<?= SITE_URL ?>de-stichting/verkoop-uit-nalatenschap">Bekijk pagina</a>
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