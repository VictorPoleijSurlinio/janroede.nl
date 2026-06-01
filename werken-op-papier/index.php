<?php
include __DIR__ . '/../inc/config.inc.php';
include __DIR__ . '/../inc/arrays/werken-op-papier.php';

$title = 'Werken op papier | Jan Roede Stichting';
$description = 'Overzicht van de werken op papier van Jan Roede: tekeningen, aquarellen en gouaches op papier, ingelijst of in passe-partout.';
$og_image = STATIC_URL . 'img/headers/werken-op-papier-header.webp';
$page = 'werken-op-papier';

include ABS_PATH . 'inc/head.inc.php';
include ABS_PATH . 'inc/navbar.inc.php';

$werkenOpPapierItems = $werkenOpPapier['items'] ?? [];

function jrWopSlugify($value)
{
    $value = strtolower((string) $value);
    $value = preg_replace('/[^a-z0-9]+/', '-', $value);
    return trim($value ?? '', '-');
}

function jrWopExtractYear($value)
{
    if (!is_string($value) && !is_numeric($value)) {
        return null;
    }

    if (preg_match('/(19|20)\d{2}/', (string) $value, $match)) {
        return (int) $match[0];
    }

    return null;
}

function jrWopPeriodFromYear($year)
{
    if ($year === null) {
        return ['key' => 'unknown', 'label' => 'Onbekend'];
    }

    $decade = (int) (floor($year / 10) * 10);
    return [
        'key' => $decade . 's',
        'label' => 'Jaren ' . $decade,
    ];
}

$filterYearOptions    = [];
$filterPeriodOptions  = [];
$filterFramingOptions = [];
$filterMaterialOptions = [];

foreach ($werkenOpPapierItems as $filterItem) {
    $yearRaw = $filterItem['year'] ?? null;
    $yearInt = jrWopExtractYear($yearRaw);
    if ($yearInt !== null) {
        $filterYearOptions[(string) $yearInt] = (string) $yearInt;
    }

    $period = jrWopPeriodFromYear($yearInt);
    if ($period['key'] !== 'unknown') {
        $filterPeriodOptions[$period['key']] = $period['label'];
    }

    $framingLabel = $filterItem['framing'] ?? 'onbekend';
    $framingKey   = jrWopSlugify($framingLabel);
    if ($framingKey !== '') {
        $filterFramingOptions[$framingKey] = ucfirst((string) $framingLabel);
    }

    $materialLabel = $filterItem['material'] ?? 'onbekend';
    $materialKey   = jrWopSlugify($materialLabel);
    if ($materialKey !== '') {
        $filterMaterialOptions[$materialKey] = (string) $materialLabel;
    }
}

ksort($filterYearOptions, SORT_NATURAL);
ksort($filterPeriodOptions, SORT_NATURAL);
ksort($filterFramingOptions, SORT_NATURAL);
ksort($filterMaterialOptions, SORT_NATURAL);
?>

<section class="single-header single-header--werken-op-papier" aria-label="Werken op papier header">
    <div class="single-header__content">
        <h1>Werken op papier</h1>
    </div>
</section>

<div class="bg-white shadow-sm">
    <div class="container">
        <?php include ABS_PATH . 'inc/breadcrumb.inc.php'; ?>
    </div>
</div>

<section id="werken-op-papier-galerij">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 text-center mb-4">
                <h2 class="mb-3">Werken op papier van Jan Roede</h2>
                <div class="mb-3"><?php $brushClass = 'jr-brushstroke--primary'; include ABS_PATH . 'inc/brushstroke.inc.php'; ?></div>
                <p class="mb-2">
                    De werken op papier van Jan Roede omvatten tekeningen, aquarellen en gouaches – van kleine schetsjes tot grotere composities, uitgevoerd in inkt, potlood, viltstift en waterverf.
                </p>
                <p class="mb-0">
                    Bent u geïnteresseerd in het aanschaffen van een werk? <a class="fw-bold" href="<?= SITE_URL ?>contact/">Neem dan contact op</a>.
                </p>
            </div>
        </div>

        <div class="row justify-content-center mb-4">
            <div class="col-lg-12">
                <div class="jr-filter-panel">
                    <div class="row align-items-end">
                        <div class="col-12 col-md-4">
                            <label class="form-label" for="filter-year-period">Jaar/periode</label>
                            <select class="form-select" id="filter-year-period">
                                <option value="">Alle jaren en periodes</option>
                                <optgroup label="Jaar">
                                    <?php foreach ($filterYearOptions as $yearValue => $yearLabel): ?>
                                        <option value="year:<?= htmlspecialchars($yearValue, ENT_QUOTES, 'UTF-8') ?>"><?= htmlspecialchars($yearLabel, ENT_QUOTES, 'UTF-8') ?></option>
                                    <?php endforeach; ?>
                                </optgroup>
                                <optgroup label="Periode">
                                    <?php foreach ($filterPeriodOptions as $periodValue => $periodLabel): ?>
                                        <option value="period:<?= htmlspecialchars($periodValue, ENT_QUOTES, 'UTF-8') ?>"><?= htmlspecialchars($periodLabel, ENT_QUOTES, 'UTF-8') ?></option>
                                    <?php endforeach; ?>
                                    <option value="unknown">Onbekend</option>
                                </optgroup>
                            </select>
                        </div>

                        <div class="col-12 col-md-4">
                            <label class="form-label" for="filter-framing">Presentatie</label>
                            <select class="form-select" id="filter-framing">
                                <option value="">Alle presentaties</option>
                                <?php foreach ($filterFramingOptions as $framingValue => $framingLabel): ?>
                                    <option value="<?= htmlspecialchars($framingValue, ENT_QUOTES, 'UTF-8') ?>"><?= htmlspecialchars($framingLabel, ENT_QUOTES, 'UTF-8') ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <div class="col-12 col-md-4">
                            <label class="form-label" for="filter-material">Materiaal</label>
                            <select class="form-select" id="filter-material">
                                <option value="">Alle materialen</option>
                                <?php foreach ($filterMaterialOptions as $materialValue => $materialLabel): ?>
                                    <option value="<?= htmlspecialchars($materialValue, ENT_QUOTES, 'UTF-8') ?>"><?= htmlspecialchars(ucfirst($materialLabel), ENT_QUOTES, 'UTF-8') ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>

                    <div class="d-flex justify-content-between align-items-center mt-3 jr-filter-meta">
                        <small id="filter-results-count"></small>
                        <button type="button" class="btn btn-sm btn-outline-secondary" id="reset-filters" aria-label="Reset filters voor werken op papier">Reset filters</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="jr-masonry" role="list" aria-label="Overzicht werken op papier" id="werken-op-papier-grid">
            <?php foreach ($werkenOpPapierItems as $index => $item): ?>
                <?php
                $inventoryNumber = $item['inventory_number'] ?? '';
                $imageName       = $item['image_name'] ?? $inventoryNumber;
                $title_work      = ($item['title'] ?? null) !== 'zonder titel' ? ($item['title'] ?? null) : null;
                $framing         = $item['framing'] ?? 'onbekend';
                $heightCm        = $item['height_cm'] ?? null;
                $widthCm         = $item['width_cm'] ?? null;
                $year            = $item['year'] ?? null;
                $signed          = $item['signed'] ?? false;
                $material        = $item['material'] ?? null;
                $editionNote     = $item['edition_note'] ?? null;

                $fullImageUrl  = STATIC_URL . 'img/werken-op-papier/' . $imageName . '.webp';
                $thumbImageUrl = STATIC_URL . 'img/werken-op-papier/thumbnails/' . $imageName . '.webp';

                $thumbImagePath = ABS_PATH . 'static/img/werken-op-papier/thumbnails/' . $imageName . '.webp';
                if (!file_exists($thumbImagePath)) {
                    $thumbImageUrl = $fullImageUrl;
                }

                $captionParts = [$inventoryNumber];
                if ($title_work !== null) {
                    $captionParts[] = $title_work;
                }
                if ($year !== null) {
                    $captionParts[] = $year;
                }
                if ($material !== null) {
                    $captionParts[] = $material;
                }
                if ($heightCm !== null && $widthCm !== null) {
                    $captionParts[] = $heightCm . ' × ' . $widthCm . ' cm';
                }
                if ($editionNote !== null) {
                    $captionParts[] = $editionNote;
                }
                if ($signed) {
                    $captionParts[] = 'gesigneerd';
                }

                $caption    = implode(' | ', $captionParts);
                $contactUrl = SITE_URL . 'contact/?category=werken-op-papier&amp;item=' . urlencode($inventoryNumber) . '#contact-form';
                $captionHtml = htmlspecialchars($caption, ENT_QUOTES, 'UTF-8')
                    . ' <br><a href=\'' . $contactUrl . '\' class=\'btn btn-client-rounded primary-color my-2\' style=\'font-size:0.75rem\'>Beschikbaarheid van dit werk opvragen</a>';

                $displayTitle = $title_work ?? $inventoryNumber;

                $yearInt    = jrWopExtractYear($year);
                $period     = jrWopPeriodFromYear($yearInt);
                $yearFilter = $yearInt !== null ? (string) $yearInt : 'unknown';
                $periodFilter   = $period['key'];
                $framingFilter  = jrWopSlugify($framing);
                $materialFilter = jrWopSlugify($material ?? 'onbekend');
                ?>

                <article
                    class="jr-masonry-item js-art-item"
                    role="listitem"
                    data-aos="fade-up"
                    data-aos-duration="550"
                    data-aos-delay="<?= (int) (($index % 4) * 28) ?>"
                    data-aos-once="true"
                    data-year="<?= htmlspecialchars($yearFilter, ENT_QUOTES, 'UTF-8') ?>"
                    data-period="<?= htmlspecialchars($periodFilter, ENT_QUOTES, 'UTF-8') ?>"
                    data-framing="<?= htmlspecialchars($framingFilter, ENT_QUOTES, 'UTF-8') ?>"
                    data-material="<?= htmlspecialchars($materialFilter, ENT_QUOTES, 'UTF-8') ?>"
                >
                    <a
                        href="<?= htmlspecialchars($fullImageUrl, ENT_QUOTES, 'UTF-8') ?>"
                        data-lightbox="werken-op-papier"
                        data-title="<?= $captionHtml ?>"
                        class="jr-art-link"
                        aria-label="Open werk <?= htmlspecialchars($displayTitle, ENT_QUOTES, 'UTF-8') ?> in lightbox"
                    >
                        <?php
                        $altParts = ['Jan Roëde – ' . $displayTitle];
                        if ($material !== null) $altParts[] = $material;
                        if ($year !== null)     $altParts[] = $year;
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
                            <strong><?= htmlspecialchars($displayTitle, ENT_QUOTES, 'UTF-8') ?></strong>
                            <small><?= htmlspecialchars($year ?? 'jaartal onbekend', ENT_QUOTES, 'UTF-8') ?></small>
                        </span>
                    </a>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function () {
    var yearPeriodFilter = document.getElementById('filter-year-period');
    var framingFilter    = document.getElementById('filter-framing');
    var materialFilter   = document.getElementById('filter-material');
    var resetButton      = document.getElementById('reset-filters');
    var countLabel       = document.getElementById('filter-results-count');
    var items            = document.querySelectorAll('.js-art-item');

    if (!yearPeriodFilter || !framingFilter || !materialFilter || !items.length) {
        return;
    }

    function updateCount(visibleCount, totalCount) {
        if (!countLabel) {
            return;
        }
        countLabel.textContent = visibleCount + ' van ' + totalCount + ' werken zichtbaar';
    }

    function matchesYearPeriod(item, value) {
        if (!value) {
            return true;
        }
        if (value === 'unknown') {
            return item.dataset.year === 'unknown';
        }
        if (value.indexOf('year:') === 0) {
            return item.dataset.year === value.replace('year:', '');
        }
        if (value.indexOf('period:') === 0) {
            return item.dataset.period === value.replace('period:', '');
        }
        return true;
    }

    function applyFilters() {
        var selectedYearPeriod = yearPeriodFilter.value;
        var selectedFraming    = framingFilter.value;
        var selectedMaterial   = materialFilter.value;
        var visible = 0;

        items.forEach(function (item) {
            var yearPeriodMatch = matchesYearPeriod(item, selectedYearPeriod);
            var framingMatch    = !selectedFraming  || item.dataset.framing   === selectedFraming;
            var materialMatch   = !selectedMaterial || item.dataset.material  === selectedMaterial;

            var show = yearPeriodMatch && framingMatch && materialMatch;
            item.style.display = show ? '' : 'none';

            if (show) {
                visible += 1;
            }
        });

        updateCount(visible, items.length);
    }

    yearPeriodFilter.addEventListener('change', applyFilters);
    framingFilter.addEventListener('change', applyFilters);
    materialFilter.addEventListener('change', applyFilters);

    if (resetButton) {
        resetButton.addEventListener('click', function () {
            yearPeriodFilter.value = '';
            framingFilter.value    = '';
            materialFilter.value   = '';
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
