<?php
include __DIR__ . '/../inc/config.inc.php';
include __DIR__ . '/../inc/arrays/zeefdrukken.php';

$title = 'Zeefdrukken | Jan Roede Stichting';
$description = 'Overzicht van de zeefdrukken van Jan Roede. Bekijk thumbnails in masonry layout en open elke afbeelding in lightbox op volledig formaat.';
$og_image = STATIC_URL . 'img/headers/zeefdrukken-header.webp';
$page = 'zeefdrukken';

include ABS_PATH . 'inc/head.inc.php';
include ABS_PATH . 'inc/navbar.inc.php';

$zeefdrukItems = $zeefdrukken['items'] ?? [];

function jrSlugify($value)
{
    $value = strtolower((string) $value);
    $value = preg_replace('/[^a-z0-9]+/', '-', $value);
    return trim($value ?? '', '-');
}

$filterFormatOptions = [];

foreach ($zeefdrukItems as $filterItem) {
    $formatLabel = $filterItem['format_label'] ?? 'onbekend';
    $formatKey = jrSlugify($formatLabel);
    if ($formatKey !== '') {
        $filterFormatOptions[$formatKey] = ucfirst((string) $formatLabel);
    }
}

ksort($filterFormatOptions, SORT_NATURAL);
?>

<section class="single-header single-header--zeefdrukken" aria-label="Zeefdrukken header">
    <div class="single-header__content">
        <h1>Zeefdrukken</h1>
    </div>
</section>

<div class="bg-white shadow-sm">
    <div class="container">
        <?php include ABS_PATH . 'inc/breadcrumb.inc.php'; ?>
    </div>
</div>

<section id="zeefdrukken-galerij">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 text-center mb-4">
                <h2 class="mb-3">Zeefdrukken van Jan Roede</h2>
                <?php $brushClass = 'jr-brushstroke--primary'; include ABS_PATH . 'inc/brushstroke.inc.php'; ?>
                <p class="mb-2">
                    De zeefdrukken van Jan Roede kenmerken zich door een speelse wisselwerking van heldere kleuren en ritmische vlakken. Elk werk is met de hand gedrukt en maakt deel uit van een genummerde oplage.
                </p>
                <p class="mb-0">
                    Bent u geïnteresseerd in het aanschaffen van een werk? <a class="fw-bold" href="<?= SITE_URL ?>contact/">Neem dan contact op</a>.
                </p>
            </div>
        </div>

        <div class="row justify-content-center mb-4">
            <div class="col-lg-12">
                <div class="jr-filter-panel">
                    <div class="row g-3 align-items-end">
                        <div class="col-12 col-md-6">
                            <label class="form-label" for="filter-format">Afmeting/formaat</label>
                            <select class="form-select" id="filter-format">
                                <option value="">Alle formaten</option>
                                <?php foreach ($filterFormatOptions as $formatValue => $formatLabel): ?>
                                    <option value="<?= htmlspecialchars($formatValue, ENT_QUOTES, 'UTF-8') ?>"><?= htmlspecialchars($formatLabel, ENT_QUOTES, 'UTF-8') ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>

                    <div class="d-flex justify-content-between align-items-center mt-3 jr-filter-meta">
                        <small id="filter-results-count"></small>
                        <button type="button" class="btn btn-sm btn-outline-secondary" id="reset-filters" aria-label="Reset filters voor zeefdrukken">Reset filters</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="jr-masonry" role="list" aria-label="Overzicht zeefdrukken" id="zeefdrukken-grid">
            <?php foreach ($zeefdrukItems as $item): ?>
                <?php
                $inventoryNumber = $item['inventory_number'] ?? '';
                $imageName = $item['image_name'] ?? $inventoryNumber;
                $formatLabel = $item['format_label'] ?? 'onbekend';
                $editionNote = $item['edition_note'] ?? '';
                $note = $item['note'] ?? '';

                $formatFilter = jrSlugify($formatLabel);

                $fullImageUrl = STATIC_URL . 'img/zeefdrukken/' . $imageName . '.webp';
                $thumbImageUrl = STATIC_URL . 'img/zeefdrukken/thumbnails/' . $imageName . '.webp';

                $thumbImagePath = ABS_PATH . 'static/img/zeefdrukken/thumbnails/' . $imageName . '.webp';
                if (!file_exists($thumbImagePath)) {
                    $thumbImageUrl = $fullImageUrl;
                }

                $captionParts = [$inventoryNumber, ucfirst($formatLabel)];
                if ($editionNote !== '') {
                    $captionParts[] = $editionNote;
                }
                if ($note !== '') {
                    $captionParts[] = $note;
                }

                $caption = implode(' | ', $captionParts);
                $contactUrl = SITE_URL . 'contact/?category=zeefdrukken&amp;item=' . urlencode($inventoryNumber) . '#contact-form';
                $captionHtml = htmlspecialchars($caption, ENT_QUOTES, 'UTF-8')
                    . ' <br><a href=\'' . $contactUrl . '\' class=\'btn btn-client-rounded primary-color my-2\' style=\'font-size:0.75rem\'>Beschikbaarheid van dit werk opvragen</a>';
                ?>

                <article
                    class="jr-masonry-item js-zeefdruk-item"
                    role="listitem"
                    data-format="<?= htmlspecialchars($formatFilter, ENT_QUOTES, 'UTF-8') ?>"
                >
                    <a
                        href="<?= htmlspecialchars($fullImageUrl, ENT_QUOTES, 'UTF-8') ?>"
                        data-lightbox="zeefdrukken"
                        data-title="<?= $captionHtml ?>"
                        class="jr-art-link"
                        aria-label="Open zeefdruk <?= htmlspecialchars($inventoryNumber, ENT_QUOTES, 'UTF-8') ?> in lightbox"
                    >
                        <?php
                        $altParts = ['Jan Roëde – zeefdruk ' . $inventoryNumber];
                        if ($formatLabel !== null && $formatLabel !== 'onbekend') $altParts[] = ucfirst($formatLabel) . ' formaat';
                        $altText = implode(', ', $altParts);
                        ?>
                        <img
                            src="<?= htmlspecialchars($thumbImageUrl, ENT_QUOTES, 'UTF-8') ?>"
                            alt="<?= htmlspecialchars($altText, ENT_QUOTES, 'UTF-8') ?>"
                            loading="lazy"
                            decoding="async"
                            class="img-fluid"
                        >
                        <span class="jr-art-meta">
                            <strong><?= htmlspecialchars($inventoryNumber, ENT_QUOTES, 'UTF-8') ?></strong>
                            <small><?= htmlspecialchars(ucfirst($formatLabel), ENT_QUOTES, 'UTF-8') ?></small>
                        </span>
                    </a>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function () {
    var formatFilter = document.getElementById('filter-format');
    var resetButton = document.getElementById('reset-filters');
    var countLabel = document.getElementById('filter-results-count');
    var items = document.querySelectorAll('.js-zeefdruk-item');

    if (!formatFilter || !items.length) {
        return;
    }

    function updateCount(visibleCount, totalCount) {
        if (!countLabel) {
            return;
        }

        countLabel.textContent = visibleCount + ' van ' + totalCount + ' werken zichtbaar';
    }

    function applyFilters() {
        var selectedFormat = formatFilter.value;
        var visible = 0;

        items.forEach(function (item) {
            var formatMatch = !selectedFormat || item.dataset.format === selectedFormat;
            var show = formatMatch;

            item.style.display = show ? '' : 'none';

            if (show) {
                visible += 1;
            }
        });

        updateCount(visible, items.length);
    }

    formatFilter.addEventListener('change', applyFilters);

    if (resetButton) {
        resetButton.addEventListener('click', function () {
            formatFilter.value = '';
            applyFilters();
        });
    }

    applyFilters();
});
</script>

<?php
include ABS_PATH . 'inc/footer.inc.php';
include ABS_PATH . 'inc/scripts.inc.php';
include ABS_PATH . 'inc/closingtags.inc.php';
?>
