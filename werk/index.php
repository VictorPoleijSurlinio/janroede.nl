<?php
include __DIR__ . '/../inc/config.inc.php';

$title = "Werk | Jan Roede Stichting";
$description = "Overzicht van het werk van Jan Roede: schilderijen, zeefdrukken en werken op papier.";
$language = "nl";
$og_image = STATIC_URL . 'img/headers/schilderijen-header.webp';

include ABS_PATH . 'inc/head.inc.php';
include ABS_PATH . 'inc/navbar.inc.php';
?>

<section class="single-header single-header--schilderijen" aria-label="Werk van Jan Roede">
    <div class="single-header__content">
        <h1>Werk</h1>
    </div>
</section>

<div class="bg-white shadow-sm">
    <div class="container">
        <?php include ABS_PATH . 'inc/breadcrumb.inc.php'; ?>
    </div>
</div>

<?php
$werkOverviewIntroTitle = 'Ontdek het Werk van Jan Roede';
$werkOverviewIntroText = 'In dit overzicht vind je de drie hoofdcollecties uit de nalatenschap: schilderijen, zeefdrukken en werken op papier. Bekijk per categorie de beschikbare werken en lees verder in de detailpagina\'s.';
?>

<?php include ABS_PATH . 'inc/werk-overview.inc.php'; ?>
<?php include ABS_PATH . 'inc/werk-highlights.inc.php'; ?>

<?php
include ABS_PATH . 'inc/footer.inc.php';
include ABS_PATH . 'inc/scripts.inc.php';
include ABS_PATH . 'inc/closingtags.inc.php';
?>
