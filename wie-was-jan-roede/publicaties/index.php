<?php
include __DIR__ . '/../../inc/config.inc.php';

$title = "Jan Roëde | Publicaties";
$description = "Publicaties over en van Jan Roëde.";
$nav_page = "jan-roede";
$language = "nl";
$og_image = STATIC_URL . 'img/headers/de-stichting-header.webp';

include ABS_PATH . 'inc/head.inc.php';
include ABS_PATH . 'inc/navbar.inc.php';
?>

<section class="single-header single-header--de-stichting" aria-label="Publicaties">
    <div class="single-header__content">
        <h1>Publicaties</h1>
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
                <h2>Audio</h2>
                <p>Henk Augustijn (Art-on-Video): <em>Jan Roëde - een portret</em>, gefilmd in zijn atelier in Clingendael (voorjaar 1993), gepubliceerd op YouTube.</p>
                <p><a href="https://www.youtube.com/watch?v=VIY8M7kHgFQ" target="_blank" rel="noopener">Bekijk videoportret</a></p>

                <h2 class="mt-5">Van de hand van Jan Roëde</h2>
                <ul>
                    <li><em>Jodeltje en Bodeltje</em> - ca. 1950</li>
                    <li><em>Je kunt niet alles begrijpen!</em> - 's-Gravenhage, 1955 (voorwoord: Paul Rodenko)</li>
                    <li><em>Humouresques I & II</em> - Nijmegen, Galerie De Verbeelding, 1993</li>
                    <li><em>Het is gewoon een truc</em> in <em>De tas van Paul Rodenko</em> - Haarlem, 1995</li>
                </ul>

                <h2 class="mt-5">Monografieen en catalogi</h2>
                <ul>
                    <li>Marie Christine Walraven: <em>Jan Roëde</em> (1988)</li>
                    <li>Marike van der Knaap: <em>Roëde</em> (1990)</li>
                    <li>Marike van der Knaap: <em>Jan Roëde - in dialoog met...</em> (1991)</li>
                    <li>Erik Slagter: <em>Jan Roëde - een kunstenaar keert terug tot zijn middelpunt</em> (1999)</li>
                    <li>John Sillevis: <em>Jan Roëde - een verborgen dialoog</em> (2010)</li>
                    <li>Wouter Welling en Annemiek Rens: <em>Jan Roëde - keuze uit het werk</em> (2016)</li>
                    <li>Anne Marie Boorsma: <em>Jan Roëde - verwondering in kleur</em> (2022)</li>
                </ul>

                <h2 class="mt-5">Overige publicaties (selectie)</h2>
                <ul>
                    <li>R.A. Cornets de Groot: <em>De kunst van het falen</em> (1978)</li>
                    <li>Willemijn Stokvis (red.): <em>De doorbraak van de moderne kunst in Nederland - de jaren 1945-1951</em> (1984)</li>
                    <li>Marike van der Knaap: <em>Vrijheid van verbeelding</em> (1990)</li>
                    <li>Marike van der Knaap: <em>Over abstractie en figuratie</em> (1992)</li>
                    <li>George Moormann (red.): <em>De tas van Rodenko</em> (1995)</li>
                    <li>Leo Duppen e.a.: <em>Vrije Beelden en Creatie</em> (1996)</li>
                    <li>R.W.D. Oxenaer: <em>Haagse Avantgarde - De Posthoorngroep</em> (1997)</li>
                    <li>Henk van Gelder: <em>Carmiggelt - het levensverhaal</em> (1999)</li>
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