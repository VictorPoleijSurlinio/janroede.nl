<?php
include __DIR__ . '/../../inc/config.inc.php';

$title = "De Stichting | Verkoop uit nalatenschap";
$description = "Verkoop van werken uit de nalatenschap van Jan Roëde.";
$nav_page = "de-stichting";
$language = "nl";
$og_image = STATIC_URL . 'img/headers/de-stichting-header.webp';

include ABS_PATH . 'inc/head.inc.php';
include ABS_PATH . 'inc/navbar.inc.php';
?>

<section class="single-header single-header--de-stichting" aria-label="Verkoop uit nalatenschap">
    <div class="single-header__content">
        <h1>De Stichting</h1>
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
                <h2 class="mt-0">Verkoop uit nalatenschap</h2>
                <p>De Jan Roëde Stichting brengt de nagelaten kunst van Jan Roëde graag onder bij een kunstminnend publiek. Om deze reden verkopen wij actief werken uit de collectie. Inmiddels hebben al veel kunstwerken via deze weg een mooie plek gevonden bij liefhebbers thuis.</p>

                <h3 class="mt-4">Hoe kunt u een werk aankopen?</h3>
                <p>De verkoop van de kunstwerken verloopt op verschillende manieren:</p>
                <ul>
                    <li><strong>Exposities en galeries:</strong> wij verkopen werk tijdens tijdelijke tentoonstellingen en via samenwerkingen met galeries en kunsthandelaren.</li>
                    <li><strong>Rechtstreekse verkoop:</strong> u kunt kunstwerken ook direct via de stichting aankopen.</li>
                </ul>

                <h3 class="mt-4">Heeft u interesse in een specifiek werk?</h3>
                <p>Heeft een van de kunstwerken op deze website uw belangstelling gewekt? Neem dan gerust via e-mail contact met ons op voor meer informatie over de beschikbaarheid en de prijs. Het overzicht op deze website is overigens niet compleet. Ook voor informatie over andere werken die te koop zijn kunt u contact met ons opnemen.</p>
                <a class="btn-client-rounded-purple" href="<?= SITE_URL ?>contact">Contact opnemen</a>

                <h3 class="mt-4">Ondersteun de kunst</h3>
                <p>Met de aankoop van een werk van Jan Roëde draagt u direct bij aan de toekomst van de kunst. De opbrengsten uit verkoop zijn, na aftrek van de exploitatiekosten, bestemd voor het stimuleren van creativiteit en kunstbeoefening. Precies zoals Jan Roëde dit bij de oprichting van de stichting voor ogen had.</p>
            </div>
        </div>
    </div>
</section>

<?php
include ABS_PATH . 'inc/footer.inc.php';
include ABS_PATH . 'inc/scripts.inc.php';
include ABS_PATH . 'inc/closingtags.inc.php';
?>