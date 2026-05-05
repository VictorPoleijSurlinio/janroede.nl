<?php
include __DIR__ . '/../inc/config.inc.php';
include __DIR__ . '/../inc/arrays/schilderijen.php';

$title = 'Schilderijen | Jan Roede Stichting';
$description = 'Overzicht van de schilderijen van Jan Roede. Bekijk thumbnails in masonry layout en open elke afbeelding in lightbox op volledig formaat.';
$page = 'schilderijen';

include ABS_PATH . 'inc/head.inc.php';
include ABS_PATH . 'inc/navbar.inc.php';

$schilderijenItems = $schilderijen['items'] ?? [];
?>

<section class="single-header single-header--schilderijen" aria-label="Schilderijen header">
    <div class="single-header__content">
        <h1>Schilderijen</h1>
    </div>
</section>

<div class="bg-white shadow-sm">
    <div class="container">
        <?php include ABS_PATH . 'inc/breadcrumb.inc.php'; ?>
    </div>
</div>

<section class="bg-light" id="schilderijen-galerij">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 text-center mb-4 mb-lg-5">
                <h2 class="mb-3">Schilderijen van Jan Roede</h2>
                <p class="mb-2">
                    Het schilderwerk van Jan Roede omvat een breed scala aan onderwerpen: portretten, figuurstukken en abstracte composities, uitgevoerd in olie en acryl op linnen.
                </p>
                <p class="mb-0">
                    Bent u geïnteresseerd in het aanschaffen van een werk? <a href="<?= SITE_URL ?>contact/">Neem dan contact op</a> — wij helpen u graag verder.
                </p>
            </div>
        </div>

        <div class="jr-masonry" role="list" aria-label="Overzicht schilderijen">
            <?php foreach ($schilderijenItems as $item): ?>
                <?php
                $inventoryNumber = $item['inventory_number'] ?? '';
                $imageName = $item['image_name'] ?? $inventoryNumber;
                $title_work = $item['title'] ?? null;
                $formatLabel = $item['format_label'] ?? 'onbekend';
                $heightCm = $item['height_cm'] ?? null;
                $widthCm = $item['width_cm'] ?? null;
                $year = $item['year'] ?? null;
                $signed = $item['signed'] ?? false;
                $material = $item['material'] ?? null;

                $fullImageUrl = STATIC_URL . 'img/schilderijen/' . $imageName . '.webp';
                $thumbImageUrl = STATIC_URL . 'img/schilderijen/thumbnails/' . $imageName . '.webp';

                $thumbImagePath = ABS_PATH . 'static/img/schilderijen/thumbnails/' . $imageName . '.webp';
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
                if ($signed) {
                    $captionParts[] = 'gesigneerd';
                }

                $caption = implode(' | ', $captionParts);

                $displayTitle = $title_work ?? $inventoryNumber;
                ?>

                <article class="jr-masonry-item" role="listitem">
                    <a
                        href="<?= htmlspecialchars($fullImageUrl, ENT_QUOTES, 'UTF-8') ?>"
                        data-lightbox="schilderijen"
                        data-title="<?= htmlspecialchars($caption, ENT_QUOTES, 'UTF-8') ?>"
                        class="jr-art-link"
                        aria-label="Open schilderij <?= htmlspecialchars($displayTitle, ENT_QUOTES, 'UTF-8') ?> in lightbox"
                    >
                        <img
                            src="<?= htmlspecialchars($thumbImageUrl, ENT_QUOTES, 'UTF-8') ?>"
                            alt="<?= htmlspecialchars($displayTitle, ENT_QUOTES, 'UTF-8') ?>"
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

<?php
include ABS_PATH . 'inc/footer.inc.php';
include ABS_PATH . 'inc/scripts.inc.php';
include ABS_PATH . 'inc/closingtags.inc.php';
?>
