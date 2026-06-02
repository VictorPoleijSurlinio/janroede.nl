<?php
include __DIR__ . '/../../inc/config.inc.php';

$title = "De Stichting | Oprichting en doelstelling";
$description = "Oprichting en doelstelling van de Jan Roëde Stichting.";
$nav_page = "de-stichting";
$language = "nl";
$og_image = STATIC_URL . 'img/headers/de-stichting-header.webp';

include ABS_PATH . 'inc/head.inc.php';
include ABS_PATH . 'inc/navbar.inc.php';
?>

<section class="single-header single-header--de-stichting" aria-label="Oprichting en doelstelling">
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
                <h2 class="mt-0">Oprichting en doelstelling</h2>
                <p>Jan Roëde richtte de Jan Roëde Stichting in 2005 op om zijn artistieke nalatenschap op ideële basis te laten beheren na zijn overlijden. Sinds zijn heengaan in 2007 is de stichting actief. Vanaf 2010 heeft de organisatie de officiële ANBI-status (Algemeen Nut Beogende Instelling).</p>
                <p>De doelstelling van de Jan Roëde Stichting is tweeledig:</p>

                <h3 class="mt-4">1. Beheer en promotie van de nalatenschap</h3>
                <p>De stichting zet zich in om de nagelaten kunstwerken, waaronder schilderijen, tekeningen, gouaches en grafiek, optimaal te beheren en onder de aandacht te brengen van een kunstminnend publiek. Dit gebeurt via:</p>
                <ul>
                    <li>Het organiseren van tentoonstellingen</li>
                    <li>Medewerking aan publicaties over Jan Roëde</li>
                    <li>Schenkingen aan musea</li>
                    <li>De verkoop van kunstwerken aan liefhebbers</li>
                </ul>

                <h3 class="mt-4">2. Stimuleren van beeldend talent</h3>
                <p>De opbrengsten uit de verkoop maken het mogelijk om de tweede, brede maatschappelijke doelstelling te realiseren: het ondersteunen van talent in de beeldende kunst. Dit vullen wij onder andere in door:</p>
                <ul>
                    <li><strong>De Jan Roëde Prijs:</strong> een jaarlijkse geldprijs voor een afstuderende kunstenaar aan de Koninklijke Academie van Beeldende Kunsten (KABK) in Den Haag.</li>
                    <li><strong>Maatschappelijke kunstprojecten:</strong> financiële steun aan stichting De Vrolijkheid, die met beeldend kunstenaars creatieve projecten opzet en begeleidt in asielzoekerscentra.</li>
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