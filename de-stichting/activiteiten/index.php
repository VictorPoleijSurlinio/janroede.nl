<?php
include __DIR__ . '/../../inc/config.inc.php';

$title = "De Stichting | Activiteiten";
$description = "Activiteiten van de Jan Roëde Stichting.";
$nav_page = "de-stichting";
$language = "nl";
$og_image = STATIC_URL . 'img/headers/de-stichting-header.webp';

include ABS_PATH . 'inc/head.inc.php';
include ABS_PATH . 'inc/navbar.inc.php';
?>

<section class="single-header single-header--de-stichting" aria-label="Activiteiten">
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
                <h2 class="mt-0">Activiteiten</h2>

                <h3 class="mt-4">Tentoonstellingen</h3>
                <p>De Jan Roëde Stichting organiseert geregeld tentoonstellingen. De eerstvolgende is een kortlopende benefietexpositie voor <a href="https://vrolijkheid.nl/" target="_blank" rel="noopener noreferrer">Stichting De Vrolijkheid</a> in Pulchri Studio Den Haag (3 t/m 7 juni 2026): <a href="https://www.pulchri.nl/nl/tentoonstellingen/benefietexpositie-jan-roede-de-vrolijkheid-kunst-die-een-glimlach-deelt/" target="_blank" rel="noopener noreferrer">bekijk tentoonstelling</a>.</p>
                <p>In de afgelopen jaren heeft de Stichting tentoonstellingen georganiseerd of laten organiseren in Den Haag (<em>Pulchri Studio, RKD, WTC The Hague Art Gallery</em>), Utrecht (<em>Galerie Quintessens</em>), Rijswijk (<em>Museum Rijswijk</em>), Wassenaar (<em>Raadhuis De Paauw</em>), Amstelveen (<em>Museum Jan van der Togt, nu Museum JAN</em>), Haarlem (<em>Teylers Museum</em>), Groningen (<em>Pictura</em>), Assen (<em>Drents Museum</em>) en Heerenveen (<em>Museum Belvédère</em>). Ook is medewerking verleend aan tentoonstellingen in Zwolle (<em>De Fundatie</em>) en Kortenhoef (<em>Kunst aan de Dijk</em>).</p>

                <h3 class="mt-4">Schenkingen</h3>
                <p>Een deel van de artistieke nalatenschap is dankzij de inspanningen van Stichting ondergebracht bij enkele Nederlandse musea. Het Drents Museum in Assen, het Teylers Museum in Haarlem en Museum Belvédère in Oranjewoud (Heerenveen) hebben hun collecties met onze steun verrijkt met aanwinsten uit de nalatenschap van Jan Roëde. Het archief van Jan Roëde (tweeëneenhalve meter documentatie) is geschonken aan het RKD, dat dit archief goed ontsloten heeft. Incidenteel zijn ook werken uit de nalatenschap geschonken aan instellingen met een maatschappelijke functie zonder winstoogmerk.</p>

                <h3 class="mt-4">Publicaties</h3>
                <p>De Stichting heeft in samenwerking met de Stichting HBKK in de serie Haags Palet een mooi boekje over het leven en werk van Jan Roëde laten verschijnen: <em>Jan Roëde – een verborgen dialoog</em> van John Sillevis (2010). Het boekje is nog altijd verkrijgbaar en wordt tijdens exposities voor een gereduceerde prijs aangeboden. Ook andere publicaties over Roëde zijn in samenwerking met onze Stichting uitgebracht, zoals <em>Tegendraads Modern – een bevrijdend alternatief voor de strenge Goed Wonen norm</em> van André Koch (2014), <em>Jan Roëde – een keuze uit het werk</em> van Wouter Welling (2016) en <em>Jan Roëde – verwondering in kleur</em> van Anne Marie Boorsma (2022).</p>

                <h3 class="mt-4">Jan Roëde Prijs</h3>
                <p>Sinds 2014 reikt de Stichting jaarlijks de <a href="<?= SITE_URL ?>janroede-prijs">Jan Roëde Prijs</a> uit aan een afstuderend kunstenaar van de KABK.</p>
            </div>
        </div>
    </div>
</section>

<?php
include ABS_PATH . 'inc/footer.inc.php';
include ABS_PATH . 'inc/scripts.inc.php';
include ABS_PATH . 'inc/closingtags.inc.php';
?>