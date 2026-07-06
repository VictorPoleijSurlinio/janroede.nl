<?php
include __DIR__ . '/../inc/config.inc.php';

$title = "Jan Roëde | Jan Roëde Prijs";
$description = "Informatie over de Jan Roëde Prijs en de prijswinnaars sinds 2014.";
$nav_page = "jan-roede-prijs";
$language = "nl";
$og_image = STATIC_URL . 'img/headers/de-stichting-header.webp';

include ABS_PATH . 'inc/head.inc.php';
include ABS_PATH . 'inc/navbar.inc.php';
?>

<section class="single-header single-header--de-stichting" aria-label="Jan Roëde Prijs">
    <div class="single-header__content">
        <h1>Jan Roëde Prijs</h1>
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
                <h2 class="mt-0">Jan Roëde Prijs</h2>

                <p>Ter gelegenheid van de 100e geboortedag van Jan Roëde in 2014, stelde de stichting de <strong>Jan Roëde Prijs</strong> in. Dit gebeurde in nauwe samenwerking met de Koninklijke Academie van Beeldende Kunsten (KABK) in Den Haag. Dit is de academie waar Jan Roëde destijds zelf zijn opleiding genoot.</p>
                <p>De prijs bestaat uit een geldbedrag (nu € 3.000) en een officiele oorkonde.</p>

                <h3 class="mt-4">Jaarlijkse uitreiking</h3>
                <p>Deze stimuleringsprijs wordt ieder jaar uitgereikt aan een talentvolle beeldend kunstenaar die afstudeert aan de KABK. Sinds de oprichting in 2014 heeft de Jan Roëde Stichting de prijs al dertien keer met trots mogen overhandigen aan een nieuwe generatie kunstenaars.</p>

                <ul>
                    <li>2014 Vincent Both <a href="<?= STATIC_URL ?>docs/jan-roede-prijs/juryrapport-jan-roede-prijs-2014.pdf" target="_blank" rel="noopener noreferrer">(bekijk juryrapport)</a></li>
                    <li>2015 Liza Pace <a href="<?= STATIC_URL ?>docs/jan-roede-prijs/juryrapport-jan-roede-prijs-2015.pdf" target="_blank" rel="noopener noreferrer">(bekijk juryrapport)</a></li>
                    <li>2016 Tobias Lengkeek <a href="<?= STATIC_URL ?>docs/jan-roede-prijs/juryrapport-jan-roede-prijs-2016.pdf" target="_blank" rel="noopener noreferrer">(bekijk juryrapport)</a></li>
                    <li>2017 Mattia Papp <a href="<?= STATIC_URL ?>docs/jan-roede-prijs/juryrapport-jan-roede-prijs-2017.pdf" target="_blank" rel="noopener noreferrer">(bekijk juryrapport)</a></li>
                    <li>2018 Quentley Barbara <a href="<?= STATIC_URL ?>docs/jan-roede-prijs/juryrapport-jan-roede-prijs-2018.pdf" target="_blank" rel="noopener noreferrer">(bekijk juryrapport)</a></li>
                    <li>2019 Eliza Reszka <a href="<?= STATIC_URL ?>docs/jan-roede-prijs/juryrapport-jan-roede-prijs-2019.pdf" target="_blank" rel="noopener noreferrer">(bekijk juryrapport)</a></li>
                    <li>2020 Erlend Evensen <a href="<?= STATIC_URL ?>docs/jan-roede-prijs/juryrapport-jan-roede-prijs-2020.pdf" target="_blank" rel="noopener noreferrer">(bekijk juryrapport)</a></li>
                    <li>2021 Menghua Wu <a href="<?= STATIC_URL ?>docs/jan-roede-prijs/juryrapport-jan-roede-prijs-2021.pdf" target="_blank" rel="noopener noreferrer">(bekijk juryrapport)</a></li>
                    <li>2022 Alexander Koch <a href="<?= STATIC_URL ?>docs/jan-roede-prijs/juryrapport-jan-roede-prijs-2022.pdf" target="_blank" rel="noopener noreferrer">(bekijk juryrapport)</a></li>
                    <li>2023 Jemima de Jonge <a href="<?= STATIC_URL ?>docs/jan-roede-prijs/juryrapport-jan-roede-prijs-2023.pdf" target="_blank" rel="noopener noreferrer">(bekijk juryrapport)</a></li>
                    <li>2024 Hara Athanasopoulou <a href="<?= STATIC_URL ?>docs/jan-roede-prijs/juryrapport-jan-roede-prijs-2024.pdf" target="_blank" rel="noopener noreferrer">(bekijk juryrapport)</a></li>
                    <li>2025 Otso Prunnila <a href="<?= STATIC_URL ?>docs/jan-roede-prijs/juryrapport-jan-roede-prijs-2025.pdf" target="_blank" rel="noopener noreferrer">(bekijk juryrapport)</a></li>
                    <li>2026 <a href="https://graduation.kabk.nl/2026/Kimia-Khedri" target="_blank" rel="noopener noreferrer">Kimia Khedri</a> <a href="<?= STATIC_URL ?>docs/jan-roede-prijs/juryrapport-jan-roede-prijs-2026.pdf" target="_blank" rel="noopener noreferrer">(bekijk juryrapport)</a></li>
                </ul>

                <p>In enkele jaren heeft de Stichting naast de Jan Roëde Prijs ook extra aanmoedigingsprijzen uitgereikt aan afstuderende kunstenaars van de KABK.</p>

                <ul>
                    <li>2016 Edmond Steinbusch <span>(juryrapport volgt)</span></li>
                    <li>2020 Isa van Lier en Danny Choi <span>(juryrapport volgt)</span></li>
                    <li>2021 Laurence Herfs <a href="<?= STATIC_URL ?>docs/jan-roede-prijs/juryrapport-jan-roede-extra-aanmoediging-prijs-2021.pdf" target="_blank" rel="noopener noreferrer">(bekijk juryrapport)</a></li>
                    <li>2024 Narolian Mercelina <a href="<?= STATIC_URL ?>docs/jan-roede-prijs/juryrapport-jan-roede-extra-aanmoediging-prijs-2024.pdf" target="_blank" rel="noopener noreferrer">(bekijk juryrapport)</a></li>
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

