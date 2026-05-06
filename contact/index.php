<?php
include __DIR__ . '/../inc/config.inc.php';
include __DIR__ . '/../inc/arrays/faq.inc.php';
include __DIR__ . '/../inc/arrays/schilderijen.php';
include __DIR__ . '/../inc/arrays/zeefdrukken.php';

// HEAD AND NAV VARIABLES
$title = 'Contact | ' . $COMPANY_FULLNAME;
$description  = 'Neem contact op met de Jan Roëde Stichting. Interesse in een werk, vragen over onze activiteiten of een persoonlijk gesprek? We horen graag van je.';
$og_image = STATIC_URL . 'img/headers/contact-header.webp';
$page = "contact";

$preselectedCategory = in_array($_GET['category'] ?? '', ['schilderijen', 'zeefdrukken']) ? $_GET['category'] : '';
$preselectedItem = isset($_GET['item']) ? preg_replace('/[^A-Za-z0-9_\-]/', '', $_GET['item']) : '';

include ABS_PATH . 'inc/head.inc.php';
include ABS_PATH . 'inc/navbar.inc.php';

$interestOptions = [
    'schilderijen' => [],
    'zeefdrukken' => [],
];

foreach (($schilderijen['items'] ?? []) as $item) {
    $inventoryNumber = $item['inventory_number'] ?? '';
    $titleLabel = $item['title'] ?? 'zonder titel';
    $imageName = $item['image_name'] ?? $inventoryNumber;
    if ($inventoryNumber === '') {
        continue;
    }

    $thumbUrl = STATIC_URL . 'img/schilderijen/thumbnails/' . $imageName . '.webp';
    $thumbPath = ABS_PATH . 'static/img/schilderijen/thumbnails/' . $imageName . '.webp';
    if (!file_exists($thumbPath)) {
        $thumbUrl = STATIC_URL . 'img/schilderijen/' . $imageName . '.webp';
    }

    $interestOptions['schilderijen'][] = [
        'value' => $inventoryNumber,
        'label' => $titleLabel . ' (' . $inventoryNumber . ')',
        'title' => $titleLabel,
        'subtitle' => 'Schilderij',
        'preview' => $thumbUrl,
    ];
}

foreach (($zeefdrukken['items'] ?? []) as $item) {
    $inventoryNumber = $item['inventory_number'] ?? '';
    $formatLabel = $item['format_label'] ?? 'onbekend';
    $editionNote = $item['edition_note'] ?? '';
    $imageName = $item['image_name'] ?? $inventoryNumber;
    if ($inventoryNumber === '') {
        continue;
    }

    $thumbUrl = STATIC_URL . 'img/zeefdrukken/thumbnails/' . $imageName . '.webp';
    $thumbPath = ABS_PATH . 'static/img/zeefdrukken/thumbnails/' . $imageName . '.webp';
    if (!file_exists($thumbPath)) {
        $thumbUrl = STATIC_URL . 'img/zeefdrukken/' . $imageName . '.webp';
    }

    $label = $inventoryNumber . ' - ' . ucfirst($formatLabel);
    if ($editionNote !== '') {
        $label .= ' - ' . $editionNote;
    }

    $interestOptions['zeefdrukken'][] = [
        'value' => $inventoryNumber,
        'label' => $label,
        'title' => $inventoryNumber,
        'subtitle' => 'Zeefdruk - ' . ucfirst($formatLabel) . ($editionNote !== '' ? ' - ' . $editionNote : ''),
        'preview' => $thumbUrl,
    ];
}
?>
<section class="single-header single-header--contact" aria-label="Contact">
    <div class="single-header__content">
        <h1>Contact</h1>
    </div>
</section>

<div class="bg-white shadow-sm">
    <div class="container">
        <?php include ABS_PATH . 'inc/breadcrumb.inc.php'; ?>
    </div>
</div>

<section class="bg-light" id="contact">
    <div class="container">
        <div class="col-md-10 my-5 text-center mx-auto">
            <h1>Neem contact op</h1>
        </div>
        <div class="row">
            <div class="col-md-4 my-2">
                <div class="white-box shadow-sm h-100 text-center" data-aos="flip-left" data-aos-duration="1250" data-aos-offset="50">
                    <div>
                        <i class="far fa-phone secondary-color fa-2x mb-2" aria-hidden="true"></i>
                        <h4 class="secondary-color my-2">Telefoon</h4>
                        <a class="fw-bold" href="tel:<?= $COMPANY_PHONE_LINK ?>"></i><?= $COMPANY_PHONE ?></a><br>

                    </div>
                </div>
            </div>

            <div class="col-md-4 my-2">
                <div class="white-box shadow-sm h-100 text-center" data-aos="flip-left" data-aos-duration="950" data-aos-offset="50">
                    <div>
                        <i class="fa fa-envelope secondary-color fa-2x mb-2" aria-hidden="true"></i>
                        <h4 class="secondary-color my-2">Email</h4>
                        <a style="word-break: break-all;" class="fw-bold" href="mailto:<?= $COMPANY_EMAIL ?>" aria-label="<?= $COMPANY_EMAIL ?>"></i> <?= $COMPANY_EMAIL ?></a><br><br>

                    </div>
                </div>
            </div>

            <div class="col-md-4 my-2">
                <div class="white-box shadow-sm h-100 text-center" data-aos="flip-left" data-aos-duration="1250" data-aos-offset="50">
                    <div>
                        <i class="fa fa-map-marker-alt secondary-color fa-2x mb-2" aria-hidden="true"></i>
                        <h4 class="secondary-color my-2">Bezoekadres</h4>
                        <a class="fw-bold" target="blank" href="https://www.google.com/maps/dir/?api=1&destination=<?= $COMPANY_STREET . "," . $COMPANY_CITY ?>">
                            <span><?= $COMPANY_NAME ?></span><br>
                            <?= $COMPANY_STREET ?><br>
                            <?= $COMPANY_ZIP ?> <?= $COMPANY_CITY ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="primary-bg" id="contact-form">
    <div class="container">
        <div class="row align-items-start g-2 g-lg-4 justify-content-between">
            <div class="col-lg-6 col-xl-7">
                <h1 class="text-white">Interesse in een <strong class="secondary-color">werk</strong>, of heb je een <strong class="secondary-color">vraag</strong>? Neem <strong class="secondary-color">contact</strong> op.</h1>
                <form class="form mt-4" data-ajaxurl="<?= SITE_URL ?>ajax/process_contactform.php">

                    <div class="form-check-inline">
                        <input class="form-check-input" type="radio" name="aanhef" id="mr" value="Dhr.">
                        <label class="form-check-label text-white fw-bold" for="mr">
                            Dhr.
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <input class="form-check-input" type="radio" name="aanhef" id="mrs" value="Mevr.">
                        <label class="form-check-label text-white fw-bold" for="mrs">
                            Mevr.
                        </label>
                    </div>
                    <div class="row mt-3">
                        <div class="form-group col-6 col-md-6 pe-1 pe-md-1">
                            <label class="sr-only" for="interest_category">Interesse in</label>
                            <select class="form-control" id="interest_category" name="interest_category">
                                <option value="">Kies categorie</option>
                                <option value="schilderijen">Schilderijen</option>
                                <option value="zeefdrukken">Zeefdrukken</option>
                            </select>
                        </div>
                        <div class="form-group col-6 col-md-6 ps-1 ps-md-1">
                            <label class="sr-only" for="interest_item">Specifiek werk</label>
                            <select class="form-control" id="interest_item" name="interest_item" disabled>
                                <option value="">Welk werk?</option>
                            </select>
                        </div>
                        <div class="form-group col-6 col-md-6 pe-1 pe-md-1">
                            <label class="sr-only" for="firstname">Voornaam <sup>*</sup></label>
                            <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Voornaam*">
                        </div>
                        <div class="form-group col-6 col-md-6 ps-1 ps-md-1">
                            <label class="sr-only" for="lastname">Achternaam <sup>*</sup></label>
                            <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Achternaam*">
                        </div>
                        <div class="form-group col-6 col-md-6 pe-1 pe-md-1">
                            <label class="sr-only" for="email">E-mailadres <sup>*</sup></label>
                            <input type="text" class="form-control" id="email" name="email" placeholder="E-mailadres*">
                        </div>
                        <div class="form-group col-6 col-md-6 ps-1 ps-md-1">
                            <label class="sr-only" for="phone">Telefoonnummer</label>
                            <input type="text" class="form-control" id="phone" name="phone" placeholder="Telefoonnummer">
                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="comment">Opmerking <sup>*</sup></label>
                            <textarea class="form-control" rows="3" id="comment" name="comment" placeholder="Opmerking"></textarea>
                        </div>
                    </div>

                    <p class="mt-3">
                        <button id="btn-contact-submit" type="submit" class="btn btn-client-rounded" aria-label="Verzend contactformulier">Verzenden</button>
                    </p>
                    <input type="text" name="robo" class="robo hidden d-none">

                </form>
            </div>
            <div class="col-lg-6 col-xl-5">
                <div class="contact-art-preview" id="contact-art-preview">
                    <img src="" alt="Preview van geselecteerd werk" id="contact-art-preview-image" loading="lazy" decoding="async">
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        var interestCategory = document.getElementById('interest_category');
        var interestItem = document.getElementById('interest_item');
        var previewCard = document.getElementById('contact-art-preview');
        var previewImage = document.getElementById('contact-art-preview-image');
        var interestOptions = <?= json_encode($interestOptions, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) ?>;
        var preselectedCategory = <?= json_encode($preselectedCategory) ?>;
        var preselectedItem = <?= json_encode($preselectedItem) ?>;

        if (!interestCategory || !interestItem || !previewCard || !previewImage) {
            return;
        }

        function randomAngle() {
            return (Math.random() * 10 - 5).toFixed(1) + 'deg';
        }

        function showDefaultPreview() {
            var defaultItem = (interestOptions['schilderijen'] || []).find(function (item) {
                return item.value === 'JRD203';
            });
            if (!defaultItem) return;
            previewImage.src = defaultItem.preview;
            previewImage.alt = defaultItem.title;
            previewCard.style.transform = 'rotate(' + randomAngle() + ')';
            previewCard.hidden = false;
        }

        function resetPreview() {
            // keep existing preview as-is
        }

        function updatePreview() {
            var category = interestCategory.value;
            var selectedValue = interestItem.value;
            var selectedOption = (interestOptions[category] || []).find(function (option) {
                return option.value === selectedValue;
            });

            if (!selectedOption) {
                resetPreview();
                return;
            }

            previewImage.src = selectedOption.preview;
            previewImage.alt = selectedOption.title;
            previewCard.style.transform = 'rotate(' + randomAngle() + ')';
            previewCard.hidden = false;
        }

        function populateInterestItems() {
            var category = interestCategory.value;
            var options = interestOptions[category] || [];

            interestItem.innerHTML = '';

            var placeholder = document.createElement('option');
            placeholder.value = '';
            placeholder.textContent = category === '' ? 'Kies werk' : 'Welk werk?';
            interestItem.appendChild(placeholder);

            options.forEach(function (option) {
                var element = document.createElement('option');
                element.value = option.value;
                element.textContent = option.label;
                interestItem.appendChild(element);
            });

            interestItem.disabled = category === '';
            interestItem.required = category !== '';
            interestItem.value = '';
            updatePreview();
        }

        interestCategory.addEventListener('change', populateInterestItems);
        interestItem.addEventListener('change', updatePreview);

        if (preselectedCategory && preselectedItem) {
            interestCategory.value = preselectedCategory;
            populateInterestItems();
            interestItem.value = preselectedItem;
            updatePreview();
        } else {
            populateInterestItems();
            showDefaultPreview();
        }
    });
</script>


<?php
    include ABS_PATH . 'inc/faq.inc.php'; 

include ABS_PATH . 'inc/footer.inc.php';
include ABS_PATH . 'inc/scripts.inc.php';
include ABS_PATH . 'inc/closingtags.inc.php';
?>