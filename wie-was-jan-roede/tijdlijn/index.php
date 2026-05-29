<?php
include __DIR__ . '/../../inc/config.inc.php';

$title = "Jan Roëde | Tijdlijn";
$description = "Tijdlijn van het leven en werk van Jan Roëde.";
$nav_page = "jan-roede";
$language = "nl";
$og_image = STATIC_URL . 'img/headers/de-stichting-header.webp';

include ABS_PATH . 'inc/head.inc.php';
include ABS_PATH . 'inc/navbar.inc.php';
?>

<section class="single-header single-header--de-stichting" aria-label="Tijdlijn">
    <div class="single-header__content">
        <h1>Tijdlijn</h1>
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
                <ul class="list-unstyled">
                    <li class="mb-3"><strong>1914</strong> - Geboren op 13 juni in Groningen.</li>
                    <li class="mb-3"><strong>1915-1916</strong> - Verblijft als baby enige tijd in Assen.</li>
                    <li class="mb-3"><strong>1916</strong> - Verhuist met zijn ouders naar Vlissingen; kort daarna overlijdt zijn vader.</li>
                    <li class="mb-3"><strong>1918</strong> - Verhuist met zijn moeder naar Den Haag.</li>
                    <li class="mb-3"><strong>1930-1932</strong> - Opleiding tot tekenleraar aan de KABK in Den Haag.</li>
                    <li class="mb-3"><strong>1933-1935</strong> - Avondopleiding reclame; start loopbaan als reclametekenaar, graficus en illustrator.</li>
                    <li class="mb-3"><strong>1935</strong> - Trouwt met Maria Barbara Leewen.</li>
                    <li class="mb-3"><strong>1940</strong> - Tekent omslag voor Vijftig Dwaasheden van Simon Carmiggelt.</li>
                    <li class="mb-3"><strong>1941</strong> - Begint te schilderen; verdiept zich in Zenboeddhisme.</li>
                    <li class="mb-3"><strong>1945</strong> - Exposeert bij Kunsthandel Martinus Liernur in Den Haag.</li>
                    <li class="mb-3"><strong>1946</strong> - Deelname aan 12 Schilders in het Stedelijk Museum; reizen naar Zweden en Parijs; neemt voortaan de naam Roëde aan.</li>
                    <li class="mb-3"><strong>1948</strong> - Exposeert in Stockholm; werkt in Parijs; ontmoeting met Maurice Esteve.</li>
                    <li class="mb-3"><strong>1949</strong> - Keert terug naar Den Haag; wijst uitnodiging van de Experimentele Groep (later Cobra) af.</li>
                    <li class="mb-3"><strong>1950</strong> - Deelname Nieuwe stromingen in de beeldende kunst (Stedelijk Museum Amsterdam).</li>
                    <li class="mb-3"><strong>1951</strong> - Maakt omslag voor Atonaal van de Vijftigers.</li>
                    <li class="mb-3"><strong>1955</strong> - Publiceert Je kunt niet alles begrijpen.</li>
                    <li class="mb-3"><strong>1961-1966</strong> - Realiseert muurschilderingen, glasmozaiek en monumentale werken in opdracht.</li>
                    <li class="mb-3"><strong>1968</strong> - Eerste overzichtstentoonstelling in het Gemeentemuseum Den Haag.</li>
                    <li class="mb-3"><strong>1984</strong> - Vertegenwoordigd in De doorbraak van de moderne kunst in Nederland.</li>
                    <li class="mb-3"><strong>1988</strong> - Grote overzichtstentoonstelling in het Haags Gemeentemuseum.</li>
                    <li class="mb-3"><strong>1999</strong> - Overzichtstentoonstelling in het Cobra Museum Amstelveen.</li>
                    <li class="mb-3"><strong>2005</strong> - Richt de Jan Roëde Stichting op.</li>
                    <li class="mb-3"><strong>2007</strong> - Overlijdt op 30 mei.</li>
                    <li class="mb-3"><strong>2014</strong> - Jan Roëde Prijs ingesteld bij 100e geboortedag.</li>
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