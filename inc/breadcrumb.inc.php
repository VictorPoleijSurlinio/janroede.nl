<?php
function deslugify($slug)
{
    // Vervang koppeltekens door spaties en maak beginletters hoofdletters
    return ucwords(str_replace('-', ' ', $slug));
}

function applyExceptions($segment)
{
    // Definieer uitzonderingen waarbij het URL-segment aangepast moet worden
    $exceptions = [
        'example' => 'examples',
    ];

    // Controleer of het segment in de uitzonderingenlijst staat
    if (array_key_exists($segment, $exceptions)) {
        return $exceptions[$segment];
    }

    // Geen uitzondering: geef het originele segment terug
    return $segment;
}

function generateBreadcrumbs()
{

    // Haal het huidige pad op en split in segmenten
    $path = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');

    // Detecteer localhost of testdomeinen
    $host = $_SERVER['HTTP_HOST'];
    if (strpos($host, 'localhost') !== false || strpos($host, 'k1jk.nl') !== false || strpos($host, 'kijk8.nl') !== false) {
        // Verwijder op localhost/test de projectmap uit het pad
        $projectFolder = 'janroede.nl'; // Vervang met je lokale/test projectmap indien nodig
        if (strpos($path, $projectFolder) === 0) {
            $path = substr($path, strlen($projectFolder));
            $path = trim($path, '/');
        }
    }

    // Verwerk padsegmenten
    $segments = explode('/', $path);

    // Initialiseer breadcrumbs met "Start"
    $breadcrumbs = ["<li class='breadcrumb-item'><a href='" . SITE_URL . "' class='d-inline-flex align-items-center'><i class='fa-solid fa-home fa-sm me-2'></i>Home</a></li>"];
    $currentPath = SITE_URL;

    // Loop door alle segmenten om breadcrumb-links te maken
    foreach ($segments as $key => $segment) {
        $segmentWithExceptions = applyExceptions($segment);
        $currentPath .= '/' . $segmentWithExceptions;

        // Converteer segment voor weergave
        $title = deslugify($segmentWithExceptions);

        // Alleen het laatste segment is geen link (huidige pagina)
        if ($key !== count($segments) - 1) {
            $breadcrumbs[] = "<li class='breadcrumb-item'><a href='{$currentPath}'>{$title}</a></li>";
        } else {
            $breadcrumbs[] = "<li class='breadcrumb-item active' aria-current='page'>{$title}</li>";
        }
    }

    // Voeg breadcrumbs samen met het Font Awesome chevron-icoon
    return implode('<li class="mx-3"> <i class="fa-light fa-chevron-right fa-sm"></i> </li>', $breadcrumbs);
}
?>

<div class="row pt-3">
    <div class="col-12">
        <ol class="breadcrumb">
            <?php echo generateBreadcrumbs(); ?>
        </ol>
    </div>
</div>