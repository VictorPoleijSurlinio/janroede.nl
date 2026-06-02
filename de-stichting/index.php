<?php
include __DIR__ . '/../inc/config.inc.php';

$title = "De Stichting | Jan Roëde Stichting";
$description = "Informatie over de Jan Roëde Stichting: oprichting, doelstelling, bestuur, beleidsplan, jaarverslagen, activiteiten en verkoop van werken uit de nalatenschap.";
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

<div class="container py-4">
    <section class="less-padding">
        <!-- OPRICHTING EN DOELSTELLING -->
        <h2 id="oprichting-en-doelstelling" class="mb-3">Oprichting en doelstelling</h2>
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
    </section>

    <section class="less-padding">

        <div class="row">
            <div class="col-lg-6">
                <!-- BESTUUR-->
                <h2 id="bestuur-en-basisgegevens">Bestuur</h2>
                <p>Het bestuur van de stichting bestaat uit Louw van Sinderen (voorzitter), Olga van Hulsen, Dick Stapel en Huub van Wersch (secretaris-penningmeester). De bestuursleden verrichten hun werkzaamheden onbetaald. </p>
                <p>De stichting is sinds 1 januari 2010 aangemerkt als ANBI, sinds 1 januari 2012 als culturele ANBI (RSIN 815163423). De stichting is sinds haar oprichting gevestigd in Den Haag (Benoordenhoutseweg 262, 2596 BJ).</p>
            </div>

            <!-- BELEIDSPLAN + JAARVERSLAGEN -->
            <div class="col-lg-6">
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
    </section>

    <section class="less-padding">
        <!-- ACTIVITEITEN -->
        <h2 id="activiteiten" class="mb-3">Activiteiten</h2>

        <h3 class="mt-4">Tentoonstellingen</h3>
        <p>De Jan Roëde Stichting organiseert geregeld tentoonstellingen. De eerstvolgende is een kortlopende benefietexpositie voor <a href="https://vrolijkheid.nl/" target="_blank" rel="noopener noreferrer">Stichting De Vrolijkheid</a> in Pulchri Studio Den Haag (3 t/m 7 juni 2026): <a href="https://www.pulchri.nl/nl/tentoonstellingen/benefietexpositie-jan-roede-de-vrolijkheid-kunst-die-een-glimlach-deelt/" target="_blank" rel="noopener noreferrer">bekijk tentoonstelling</a>.</p>
        <p>In de afgelopen jaren heeft de Stichting tentoonstellingen georganiseerd of laten organiseren in Den Haag (<em>Pulchri Studio, RKD, WTC The Hague Art Gallery</em>), Utrecht (<em>Galerie Quintessens</em>), Rijswijk (<em>Museum Rijswijk</em>), Wassenaar (<em>Raadhuis De Paauw</em>), Amstelveen (<em>Museum Jan van der Togt, nu Museum JAN</em>), Haarlem (<em>Teylers Museum</em>), Groningen (<em>Pictura</em>), Assen (<em>Drents Museum</em>) en Heerenveen (<em>Museum Belvédère</em>). Ook is medewerking verleend aan tentoonstellingen in Zwolle (<em>De Fundatie</em>) en Kortenhoef (<em>Kunst aan de Dijk</em>).</p>

        <h3 class="mt-4">Schenkingen</h3>
        <p>Een deel van de artistieke nalatenschap is dankzij de inspanningen van Stichting ondergebracht bij enkele Nederlandse musea. Het Drents Museum in Assen, het Teylers Museum in Haarlem en Museum Belvédère in Oranjewoud (Heerenveen) hebben hun collecties met onze steun verrijkt met aanwinsten uit de nalatenschap van Jan Roëde. Het archief van Jan Roëde (tweeëneenhalve meter documentatie) is geschonken aan het RKD, dat dit archief goed ontsloten heeft. Incidenteel zijn ook werken uit de nalatenschap geschonken aan instellingen met een maatschappelijke functie zonder winstoogmerk.</p>

        <h3 class="mt-4">Publicaties</h3>
        <p>De Stichting heeft in samenwerking met de Stichting HBKK in de serie Haags Palet een mooi boekje over het leven en werk van Jan Roëde laten verschijnen: <em>Jan Roëde – een verborgen dialoog</em> van John Sillevis (2010). Het boekje is nog altijd verkrijgbaar en wordt tijdens exposities voor een gereduceerde prijs aangeboden. Ook andere publicaties over Roëde zijn in samenwerking met onze Stichting uitgebracht, zoals <em>Tegendraads Modern – een bevrijdend alternatief voor de strenge Goed Wonen norm</em> van André Koch (2014), <em>Jan Roëde – een keuze uit het werk</em> van Wouter Welling (2016) en <em>Jan Roëde – verwondering in kleur</em> van Anne Marie Boorsma (2022).</p>

        <h3 class="mt-4">Jan Roëde Prijs</h3>
        <p>Sinds 2014 reikt de Stichting jaarlijks de <a href="<?= SITE_URL ?>janroede-prijs">Jan Roëde Prijs</a> uit aan een afstuderend kunstenaar van de KABK.</p>
    </section>

    <section class="less-padding">
        <!-- VERKOOP VAN WERKEN UIT DE NALATENSCHAP -->
        <h2 id="verkoop" class="mb-3">Verkoop van werken uit de nalatenschap</h2>
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
    </section>
</div>

<?php
include ABS_PATH . 'inc/footer.inc.php';
include ABS_PATH . 'inc/scripts.inc.php';
include ABS_PATH . 'inc/closingtags.inc.php';
?>