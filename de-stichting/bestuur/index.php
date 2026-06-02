<?php
include __DIR__ . '/../../inc/config.inc.php';

$title = "De Stichting | Bestuur";
$description = "Bestuur en belangrijkste documenten van de Jan Roëde Stichting.";
$nav_page = "de-stichting";
$language = "nl";
$og_image = STATIC_URL . 'img/headers/de-stichting-header.webp';

include ABS_PATH . 'inc/head.inc.php';
include ABS_PATH . 'inc/navbar.inc.php';
?>

<section class="single-header single-header--de-stichting" aria-label="Bestuur">
    <div class="single-header__content">
        <h1>Bestuur</h1>
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
                <h2 class="mt-0">Bestuur</h2>
                <p>Het bestuur van de stichting bestaat uit Louw van Sinderen (voorzitter), Olga van Hulsen, Dick Stapel en Huub van Wersch (secretaris-penningmeester). De bestuursleden verrichten hun werkzaamheden onbetaald.</p>
                <p>De stichting is sinds 1 januari 2010 aangemerkt als ANBI, sinds 1 januari 2012 als culturele ANBI (RSIN 815163423). De stichting is sinds haar oprichting gevestigd in Den Haag (Benoordenhoutseweg 262, 2596 BJ).</p>
                <h3>Beleidsplan</h3>
                <p>Het beleidsplan van de Jan Roëde Stichting is beschikbaar als download:</p>
                <ul class="list-unstyled">
                    <li class="mb-2">
                        <a href="<?= STATIC_URL ?>docs/Beleidsplan Jan Roëde Stichting 2026-2029.pdf" target="_blank" class="btn btn-outline-secondary btn-sm"><i class="fa-regular fa-file-pdf me-1"></i> Download Beleidsplan (PDF)</a>
                    </li>
                </ul>

                <h3>Jaarverslagen</h3>
                <p>De jaarverslagen zijn beschikbaar als download:</p>
                <ul class="list-unstyled">
                    <li class="mb-2">
                        <strong>Jaarverslag 2025</strong> &mdash;
                        <a href="<?= STATIC_URL ?>docs/Jaarverslag en jaarrekening Jan Roede Stichting 2025 (te publiceren op website).pdf" target="_blank" class="btn btn-outline-secondary btn-sm"><i class="fa-regular fa-file-pdf me-1"></i> Download PDF</a>
                    </li>
                    <li class="mb-2">
                        <strong>Jaarverslag 2024</strong> &mdash;
                        <a href="<?= STATIC_URL ?>docs/Jaarverslag en jaarrekening Jan Roede Stichting 2024 (voor publicatie).pdf" target="_blank" class="btn btn-outline-secondary btn-sm"><i class="fa-regular fa-file-pdf me-1"></i> Download PDF</a>
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