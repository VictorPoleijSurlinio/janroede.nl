<?php
include __DIR__ . '/../../inc/config.inc.php';

$title = "Jan Roëde | Tentoonstellingen";
$description = "Overzicht van groeps- en solotentoonstellingen van Jan Roëde.";
$nav_page = "jan-roede";
$language = "nl";
$og_image = STATIC_URL . 'img/headers/de-stichting-header.webp';

include ABS_PATH . 'inc/head.inc.php';
include ABS_PATH . 'inc/navbar.inc.php';
?>

<section class="single-header single-header--de-stichting" aria-label="Tentoonstellingen">
    <div class="single-header__content">
        <h1>Tentoonstellingen</h1>
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
                <h2>Groepstentoonstellingen</h2>
                <ul>
                    <li>1943 - Galerie Les Beaux Arts, Den Haag</li>
                    <li>1945 - Galerie Martinus Liernur, Den Haag; Stedelijk Museum Amsterdam (12 Schilders)</li>
                    <li>1948 - Stedelijk Museum Amsterdam (Vrije Beelden); Panorama Mesdag, Den Haag</li>
                    <li>1949 - Gemeentemuseum Den Haag (Haagse kunstenaars)</li>
                    <li>1950 - Stedelijk Museum Amsterdam (Nieuwe stromingen in de beeldende kunst)</li>
                    <li>1966 - Stedelijk Museum Schiedam; Het Prinsenhof Delft (Contour onzer beeldende kunst)</li>
                    <li>1984 - De Lakenhal Leiden en reizend: De doorbraak van de moderne kunst in Nederland</li>
                    <li>1996 - Cobra Museum Amstelveen (Doorbraak van de moderne kunst)</li>
                    <li>2014 - De Fundatie Zwolle (Van Gogh tot Cremer)</li>
                    <li>2025 - Kunstmuseum Den Haag (Nieuwe Haagse School - Bovenal vrij)</li>
                </ul>

                <h2 class="mt-5">Solo- en duotentoonstellingen</h2>
                <ul>
                    <li>1947 - Galerie Buydens & Berthet, Parijs</li>
                    <li>1948 - Galerie Gummeson, Stockholm</li>
                    <li>1957/1958 - De Posthoorn, Den Haag</li>
                    <li>1965 - Het Princessehof Leeuwarden; Stichting De Utrechtse Kring; Stedelijk Museum Schiedam</li>
                    <li>1968 - Gemeentemuseum Den Haag; Pulchri Studio; Galerie Punt Vier Schiedam</li>
                    <li>1972 - Oost-Berlijn, Potsdam, Rostock (reizende tentoonstelling)</li>
                    <li>1988 - Gemeentemuseum Den Haag; Galerie Maris Amsterdam</li>
                    <li>1999 - Cobra Museum Amstelveen; Galerie De Compagnie Dordrecht</li>
                    <li>2010 - Galerie Quintessens Utrecht; Museum Rijswijk</li>
                    <li>2016 - Pictura Groningen; Drents Museum Assen</li>
                    <li>2022 - WTC The Hague Art Gallery; Kunst aan de Dijk Kortenhoef; Galerie Quintessens Utrecht</li>
                    <li>2025/2026 - Museum Belvedere Oranjewoud; Pulchri Studio Den Haag</li>
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