<?php
include __DIR__ . '/../../inc/config.inc.php';

$title = "Jan Roëde | De ontwerper en illustrator";
$description = "Overzicht van publicaties en documenten over Jan Roëde als ontwerper en illustrator.";
$nav_page = "jan-roede";
$language = "nl";
$og_image = STATIC_URL . 'img/headers/de-stichting-header.webp';

include ABS_PATH . 'inc/head.inc.php';
include ABS_PATH . 'inc/navbar.inc.php';
?>

<section class="single-header single-header--de-stichting" aria-label="De ontwerper en illustrator Jan Roëde">
    <div class="single-header__content">
        <h1>De ontwerper en illustrator Jan Roëde</h1>
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
            <div class="col-lg-12">
                <h2 class="mt-0">De ontwerper en illustrator Jan Roëde</h2>
                <p>Op deze pagina staan de documenten en verwijzingen rond Jan Roëde als ontwerper en illustrator.</p>

                <ul class="mt-4">
                    <li>
                        <a href="<?= SITE_URL ?>static/docs/Affiches, illustraties, boekomslagen 19-5-2026.pdf" target="_blank" rel="noopener noreferrer">
                            Affiches, illustraties, boekomslagen 19-5-2026 (pdf)
                        </a>
                    </li>
                    <li>
                        <a href="<?= SITE_URL ?>static/docs/Inkttekeningen%20JRS%20Je%20kunt%20niet%20alles%20begrijpen%20en%20daaromtrent.pdf" target="_blank" rel="noopener noreferrer">
                            Tekeningen 'Je kunt niet alles begrijpen' (pdf)
                        </a>
                    </li>
                    <li>
                        <a href="<?= SITE_URL ?>static/docs/artikel%20Max%20Nord%20Jan%20Ro%C3%ABde%20als%20illustrator%20Halcyon%20nr.%208.pdf" target="_blank" rel="noopener noreferrer">
                            Max Nord over de illustrator Jan Roede (pdf)
                        </a>
                    </li>
                    <li>
                        <a href="<?= SITE_URL ?>static/docs/PAUL%20RODENKO%20over%20JAN%20RO%C3%8BDE.pdf" target="_blank" rel="noopener noreferrer">
                            Paul Rodenko over de tekeningen van Jan Roëde (pdf)
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<?php
include ABS_PATH . 'inc/footer.inc.php';
include ABS_PATH . 'inc/scripts.inc.php';
include ABS_PATH . 'inc/closingtags.inc.php';
?>
