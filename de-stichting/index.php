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

<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">

                <!-- OPRICHTING EN DOELSTELLING -->
                <h2 id="oprichting-en-doelstelling" class="mt-5">Oprichting en doelstelling</h2>
                <p>Jan Roëde heeft de Jan Roëde Stichting in 2005 opgericht om zijn artistieke nalatenschap op ideële basis te laten beheren als hij er zelf niet meer zou zijn. De Stichting is actief geworden na zijn overlijden in 2007 en heeft sinds 2010 de status van een Algemeen Nut Beogende Instelling (ANBI).</p>
                <p>De doelstelling van de Jan Roëde Stichting is tweeledig. Allereerst zet zij zich in om de kunstwerken die Jan heeft nagelaten (schilderijen, tekeningen, gouaches, grafiek) zo goed mogelijk te beheren en onder de aandacht te brengen van kunstminnend publiek. Dit gebeurt door tentoonstellingen te organiseren, mee te werken aan publicaties over Jan Roëde, schenkingen te doen aan musea en werk te verkopen aan kunstliefhebbers. De opbrengsten maken het mogelijk te werken aan de tweede doelstelling: het stimuleren van talent in de beeldende kunst, bijvoorbeeld door kunstenaars financieel te ondersteunen. Deze ideële doelstelling wordt breed opgevat. Niet alleen wordt jaarlijks een prijs uitgereikt aan een afstuderend kunstenaar van de Koninklijke Academie van Beeldende Kunst (KABK) in Den Haag, ook steunde Stichting de activiteiten van De Vrolijkheid, een stichting die beeldend kunstenaars inzet om kunstprojecten in asielzoekerscentra te initiëren en te begeleiden.</p>

                <!-- BESTUUR EN BASISGEGEVENS -->
                <h2 id="bestuur-en-basisgegevens" class="mt-5">Bestuur en basisgegevens</h2>
                <p>Het bestuur van de stichting bestaat uit Louw van Sinderen (voorzitter), Olga van Hulsen, Dick Stapel en Huub van Wersch (secretaris-penningmeester). De bestuursleden verrichten hun werkzaamheden onbetaald.</p>
                <table class="table table-borderless mt-3">
                    <tbody>
                        <tr>
                            <th scope="row" class="ps-0" style="width:200px;">Vestigingsadres</th>
                            <td><?= $COMPANY_STREET ?>, <?= $COMPANY_ZIP ?> <?= $COMPANY_CITY ?></td>
                        </tr>
                        <tr>
                            <th scope="row" class="ps-0">Website</th>
                            <td><a href="<?= $COMPANY_WEBSITE ?>"><?= $COMPANY_WEBSITE ?></a></td>
                        </tr>
                        <tr>
                            <th scope="row" class="ps-0">E-mail</th>
                            <td><a href="mailto:<?= $COMPANY_EMAIL ?>"><?= $COMPANY_EMAIL ?></a></td>
                        </tr>
                        <tr>
                            <th scope="row" class="ps-0">Telefoon</th>
                            <td><a href="tel:<?= $COMPANY_PHONE_LINK ?>"><?= $COMPANY_PHONE ?></a></td>
                        </tr>
                        <tr>
                            <th scope="row" class="ps-0">Bankrekening</th>
                            <td><?= $COMPANY_IBAN ?></td>
                        </tr>
                        <tr>
                            <th scope="row" class="ps-0">KvK nummer</th>
                            <td><?= $COMPANY_KVK ?></td>
                        </tr>
                        <tr>
                            <th scope="row" class="ps-0">ANBI-status</th>
                            <td>Sinds 1-1-2010; aangemerkt als culturele ANBI sinds 1-1-2012</td>
                        </tr>
                        <tr>
                            <th scope="row" class="ps-0">RSIN</th>
                            <td>815163423</td>
                        </tr>
                    </tbody>
                </table>

                <!-- BELEIDSPLAN -->
                <div class="row mt-5 g-4">
                    <div class="col-lg-6">
                        <h2 id="beleidsplan">Beleidsplan</h2>
                        <p>Het beleidsplan van de Jan Roëde Stichting is beschikbaar als download:</p>
                        <ul class="list-unstyled">
                            <li class="mb-2">
                                <a href="<?= STATIC_URL ?>docs/Beleidsplan Jan Roëde Stichting 2026-2029.pdf" target="_blank" class="btn btn-outline-secondary btn-sm me-2"><i class="fa-regular fa-file-pdf me-1"></i> Beleidsplan (PDF)</a>
                                <a href="<?= STATIC_URL ?>docs/beleidsplan Jan Roëde Stichting 2026-2029.docx" target="_blank" class="btn btn-outline-secondary btn-sm"><i class="fa-regular fa-file-word me-1"></i> Beleidsplan (Word)</a>
                            </li>
                        </ul>
                    </div>

                    <!-- JAARVERSLAGEN -->
                    <div class="col-lg-6">
                        <h2 id="jaarverslagen">Jaarverslagen</h2>
                        <p>De jaarverslagen zijn beschikbaar als download:</p>
                        <ul class="list-unstyled">
                            <li class="mb-2">
                                <strong>Jaarverslag 2025</strong> &mdash;
                                <a href="<?= STATIC_URL ?>docs/Jaarverslag en jaarrekening Jan Roede Stichting 2025 (te publiceren op website).pdf" target="_blank" class="btn btn-outline-secondary btn-sm me-2"><i class="fa-regular fa-file-pdf me-1"></i> PDF</a>
                                <a href="<?= STATIC_URL ?>docs/Jaarverslag en jaarrekening Jan Roede Stichting 2025 (te publiceren op website).docx" target="_blank" class="btn btn-outline-secondary btn-sm"><i class="fa-regular fa-file-word me-1"></i> Word</a>
                            </li>
                            <li class="mb-2">
                                <strong>Jaarverslag 2024</strong> &mdash;
                                <a href="<?= STATIC_URL ?>docs/Jaarverslag en jaarrekening Jan Roede Stichting 2024 (voor publicatie).pdf" target="_blank" class="btn btn-outline-secondary btn-sm me-2"><i class="fa-regular fa-file-pdf me-1"></i> PDF</a>
                                <a href="<?= STATIC_URL ?>docs/Jaarverslag en jaarrekening Jan Roede Stichting 2024 (voor publicatie).docx" target="_blank" class="btn btn-outline-secondary btn-sm"><i class="fa-regular fa-file-word me-1"></i> Word</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- ACTIVITEITEN -->
                <h2 id="activiteiten" class="mt-5">Activiteiten</h2>

                <h3 class="mt-4">Tentoonstellingen</h3>
                <p>De Jan Roëde Stichting heeft in afgelopen jaren tentoonstellingen georganiseerd of doen organiseren in Den Haag (Pulchri Studio), Utrecht (Galerie Quintessens), Rijswijk (Museum Rijswijk), Amstelveen (Museum Jan van der Togt, nu Museum JAN), Haarlem (Teylers Museum), Groningen (Pictura), Assen (Drents Museum) en Heerenveen (Museum Belvédère).</p>

                <h3 class="mt-4">Schenkingen</h3>
                <p>Een deel van de artistieke nalatenschap is dankzij de inspanningen van Stichting ondergebracht bij enkele Nederlandse musea. Het Drents Museum in Assen, het Teylers Museum in Haarlem en Museum Belvédère in Oranjewoud (Heerenveen) hebben hun collecties met onze steun verrijkt met aanwinsten uit de nalatenschap van Jan Roëde. Het archief van Jan Roëde (tweeëneenhalve meter documentatie) hebben we ondergebracht bij het RKD, dat deze schenking goed ontsloten heeft. In incidentele gevallen zijn ook werken uit de nalatenschap geschonken aan instellingen met een maatschappelijke functie zonder winstoogmerk.</p>

                <h3 class="mt-4">Publicaties</h3>
                <p>In samenwerking met de Stichting HBKK hebben we in de serie Haags Palet een mooi boekje over het leven en werk van Jan Roëde laten verschijnen: <em>Jan Roëde – een verborgen dialoog</em> van John Sillevis (2010, ISBN 978-80-70003-26-5). Het boekje is nog altijd verkrijgbaar en wordt tijdens exposities voor een gereduceerde prijs aangeboden. Ook andere publicaties over Roëde zijn in samenwerking met onze Stichting uitgebracht, zoals <em>Tegendraads Modern – een bevrijdend alternatief voor de strenge Goed Wonen norm</em> van André Koch (2014, ISBN 978-90-5594-871-0), <em>Jan Roëde – een keuze uit het werk</em> van Wouter Welling (2016, ISBN 978-90-70884-67-3) en <em>Jan Roëde – verwondering in kleur</em> van Anne Marie Boorsma (1922, ISBN 978-90-816769-4-6).</p>

                <!-- VERKOOP VAN WERKEN UIT DE NALATENSCHAP -->
                <h2 id="verkoop" class="mt-5">Verkoop van werken uit de nalatenschap</h2>
                <p>De Stichting ziet graag dat de kunst die Jan Roëde heeft nagelaten zijn weg vindt naar het kunstminnend publiek. Om die reden zijn wij ook actief met het verkopen van werken uit de collectie. De verkoop verloopt deels via tentoonstellingen en samenwerking met galeries en kunsthandelaars. Daarnaast is het ook mogelijk rechtstreeks via de Stichting in het bezit van een mooi werk van Jan Roëde te komen. Als een of meer op deze website getoonde werken uw belangstelling hebben gewekt, neem dan gerust via de e-mail contact met ons op. Inmiddels hebben op deze manier al aardig wat werken uit onze collectie hun weg gevonden naar liefhebbers. De opbrengsten uit onze verkoop gaan, na aftrek van onze exploitatiekosten, naar de ontwikkeling van kunstzinnig talent, zoals Jan Roëde bij de oprichting heeft beoogd.</p>
                <a class="btn-client-rounded-purple" href="<?= SITE_URL ?>contact">Contact opnemen</a>
            </div>
        </div>
    </div>
</section>

<?php
include ABS_PATH . 'inc/footer.inc.php';
include ABS_PATH . 'inc/scripts.inc.php';
include ABS_PATH . 'inc/closingtags.inc.php';
?>