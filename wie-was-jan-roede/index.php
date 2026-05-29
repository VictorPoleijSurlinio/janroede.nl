<?php
include __DIR__ . '/../inc/config.inc.php';

$title = "Jan Roëde | Wie was Jan Roëde";
$description = "Introductie op Jan Roëde met vier subpagina's: Leven, Tijdlijn, Tentoonstellingen en Publicaties.";
$nav_page = "jan-roede";
$language = "nl";
$og_image = STATIC_URL . 'img/headers/de-stichting-header.webp';

include ABS_PATH . 'inc/head.inc.php';
include ABS_PATH . 'inc/navbar.inc.php';
?>

<section class="single-header single-header--de-stichting" aria-label="Wie was Jan Roëde">
    <div class="single-header__content">
        <h1>Jan Roëde</h1>
    </div>
</section>

<div class="bg-white shadow-sm">
    <div class="container">
        <?php include ABS_PATH . 'inc/breadcrumb.inc.php'; ?>
    </div>
</div>

<section>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <h2 class="mt-0">Wie was Jan Roëde</h2>
                <p>Op deze pagina vind je het hoofdonderwerp Jan Roëde met vier aparte subpagina's.</p>
                <div class="row g-3 mt-2">
                    <div class="col-md-6">
                        <a class="btn-client-rounded-purple w-100 text-center justify-content-center" href="<?= SITE_URL ?>wie-was-jan-roede/leven">LEVEN</a>
                    </div>
                    <div class="col-md-6">
                        <a class="btn-client-rounded-purple w-100 text-center justify-content-center" href="<?= SITE_URL ?>wie-was-jan-roede/tijdlijn">TIJDLIJN</a>
                    </div>
                    <div class="col-md-6">
                        <a class="btn-client-rounded-purple w-100 text-center justify-content-center" href="<?= SITE_URL ?>wie-was-jan-roede/tentoonstellingen">TENTOONSTELLINGEN</a>
                    </div>
                    <div class="col-md-6">
                        <a class="btn-client-rounded-purple w-100 text-center justify-content-center" href="<?= SITE_URL ?>wie-was-jan-roede/publicaties">PUBLICATIES</a>
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