<?php
// Usage:
//   $brushClass = 'jr-brushstroke--secondary'; // or 'jr-brushstroke--primary'
//   include ABS_PATH . 'inc/brushstroke.inc.php';
//
// Defaults to secondary color if $brushClass is not set.
$brushClass = $brushClass ?? 'jr-brushstroke--secondary';
global $brushId;
$brushId = ($brushId ?? 0) + 1;
$gradId = 'brushGrad' . $brushId;
?>
<div class="jr-brushstroke <?= htmlspecialchars($brushClass, ENT_QUOTES, 'UTF-8') ?>" aria-hidden="true">
    <svg viewBox="0 0 900 34" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
        <defs>
            <linearGradient id="<?= $gradId ?>" x1="0%" y1="0%" x2="100%" y2="0%">
                <stop offset="0%"   stop-color="currentColor" stop-opacity="0"/>
                <stop offset="6%"   stop-color="currentColor" stop-opacity="0.85"/>
                <stop offset="25%"  stop-color="currentColor" stop-opacity="1"/>
                <stop offset="45%"  stop-color="currentColor" stop-opacity="0.65"/>
                <stop offset="62%"  stop-color="currentColor" stop-opacity="0.95"/>
                <stop offset="80%"  stop-color="currentColor" stop-opacity="0.75"/>
                <stop offset="94%"  stop-color="currentColor" stop-opacity="0.9"/>
                <stop offset="100%" stop-color="currentColor" stop-opacity="0"/>
            </linearGradient>
        </defs>
        <!-- Brede achtergrondstreek -->
        <path d="M4,17 C30,9 65,23 100,15 C135,8 165,22 210,13 C250,6 280,21 320,16 C355,11 385,22 425,14 C460,7 490,21 530,15 C565,9 595,22 640,14 C675,7 710,21 750,15 C785,9 820,22 860,16 C880,13 892,18 896,15" stroke="url(#<?= $gradId ?>)" stroke-width="9" stroke-linecap="round" fill="none" opacity="0.45"/>
        <!-- Hoofd kwaststreek -->
        <path d="M4,16 C30,8 65,22 100,14 C135,7 165,21 210,12 C250,5 280,20 320,15 C355,10 385,21 425,13 C460,6 490,20 530,14 C565,8 595,21 640,13 C675,6 710,20 750,14 C785,8 820,21 860,15 C880,12 892,17 896,14" stroke="url(#<?= $gradId ?>)" stroke-width="5" stroke-linecap="round" fill="none" opacity="1"/>
        <!-- Dunne bovenste borstel -->
        <path d="M4,13 C30,5 65,19 100,11 C135,4 165,18 210,9 C250,3 280,17 320,12 C355,7 385,18 425,10 C460,4 490,17 530,12 C565,6 595,18 640,11 C675,5 710,18 750,12 C785,6 820,19 860,13 C880,10 892,15 896,12" stroke="url(#<?= $gradId ?>)" stroke-width="2" stroke-linecap="round" fill="none" opacity="0.7"/>
        <!-- Dunne onderste borstel -->
        <path d="M4,20 C35,13 70,26 115,18 C150,11 185,24 230,16 C265,9 300,23 340,18 C375,13 410,24 455,16 C490,9 520,23 560,17 C595,11 630,24 670,17 C705,10 745,23 785,17 C815,11 845,22 878,16 C890,13 896,18 896,17" stroke="url(#<?= $gradId ?>)" stroke-width="2" stroke-linecap="round" fill="none" opacity="0.5"/>
    </svg>
</div>
<?php unset($brushClass); ?>
