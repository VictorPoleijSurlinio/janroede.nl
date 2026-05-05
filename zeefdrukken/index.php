<?php
include __DIR__ . '/../inc/config.inc.php';
include __DIR__ . '/../inc/arrays/zeefdrukken.php';

$title = 'Zeefdrukken | Jan Roede Stichting';
$description = 'Overzicht van de zeefdrukken van Jan Roede. Bekijk thumbnails in masonry layout en open elke afbeelding in lightbox op volledig formaat.';
$page = 'zeefdrukken';

include ABS_PATH . 'inc/head.inc.php';
include ABS_PATH . 'inc/navbar.inc.php';

$zeefdrukItems = $zeefdrukken['items'] ?? [];
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

<section class="bg-light" id="zeefdrukken-galerij">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 text-center mb-4 mb-lg-5">
                <h2 class="mb-3">Zeefdrukken van Jan Roede</h2>
                <p class="mb-2">
                    De zeefdrukken van Jan Roede kenmerken zich door een speelse wisselwerking van heldere kleuren en ritmische vlakken. Elk werk is met de hand gedrukt en maakt deel uit van een genummerde oplage.
                </p>
                <p class="mb-0">
                    Bent u geïnteresseerd in het aanschaffen van een werk? <a href="<?= SITE_URL ?>contact/">Neem dan contact op</a> — wij helpen u graag verder.
                </p>
            </div>
        </div>

        <div class="jr-masonry" role="list" aria-label="Overzicht zeefdrukken">
            <?php foreach ($zeefdrukItems as $item): ?>
                <?php
                $inventoryNumber = $item['inventory_number'] ?? '';
                $imageName = $item['image_name'] ?? $inventoryNumber;
                $formatLabel = $item['format_label'] ?? 'onbekend';
                $editionNote = $item['edition_note'] ?? '';
                $note = $item['note'] ?? '';

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
                ?>

                <article class="jr-masonry-item" role="listitem">
                    <a
                        href="<?= htmlspecialchars($fullImageUrl, ENT_QUOTES, 'UTF-8') ?>"
                        data-lightbox="zeefdrukken"
                        data-title="<?= htmlspecialchars($caption, ENT_QUOTES, 'UTF-8') ?>"
                        class="jr-art-link"
                        aria-label="Open zeefdruk <?= htmlspecialchars($inventoryNumber, ENT_QUOTES, 'UTF-8') ?> in lightbox"
                    >
                        <img
                            src="<?= htmlspecialchars($thumbImageUrl, ENT_QUOTES, 'UTF-8') ?>"
                            alt="Zeefdruk <?= htmlspecialchars($inventoryNumber, ENT_QUOTES, 'UTF-8') ?>"
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

<?php
include ABS_PATH . 'inc/footer.inc.php';
include ABS_PATH . 'inc/scripts.inc.php';
include ABS_PATH . 'inc/closingtags.inc.php';
?>
