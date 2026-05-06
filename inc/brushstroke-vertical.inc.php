<?php
// Usage:
//   $brushClass = 'jr-brushstroke--secondary'; // or 'jr-brushstroke--primary'
//   include ABS_PATH . 'inc/brushstroke-vertical.inc.php';
//
// Defaults to secondary color if $brushClass is not set.
$brushClass = $brushClass ?? 'jr-brushstroke--secondary';
global $brushVerticalId;
$brushVerticalId = ($brushVerticalId ?? 0) + 1;
$gradId = 'brushVerticalGrad' . $brushVerticalId;
?>
<div class="jr-brushstroke-vertical <?= htmlspecialchars($brushClass, ENT_QUOTES, 'UTF-8') ?>" aria-hidden="true">
    <svg viewBox="0 0 34 900" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
        <defs>
            <linearGradient id="<?= $gradId ?>" x1="0%" y1="0%" x2="0%" y2="100%">
                <stop offset="0%"   stop-color="currentColor" stop-opacity="1"/>
                <stop offset="25%"  stop-color="currentColor" stop-opacity="1"/>
                <stop offset="45%"  stop-color="currentColor" stop-opacity="0.70"/>
                <stop offset="62%"  stop-color="currentColor" stop-opacity="0.96"/>
                <stop offset="80%"  stop-color="currentColor" stop-opacity="0.76"/>
                <stop offset="94%"  stop-color="currentColor" stop-opacity="0.92"/>
                <stop offset="100%" stop-color="currentColor" stop-opacity="1"/>
            </linearGradient>
        </defs>
        <!-- Brede achtergrondstreek -->
        <path d="M17,4 C9,30 23,65 15,100 C8,135 22,165 13,210 C6,250 21,280 16,320 C11,355 22,385 14,425 C7,460 21,490 15,530 C9,565 22,595 14,640 C7,675 21,710 15,750 C9,785 22,820 16,860 C13,880 18,892 15,896" stroke="url(#<?= $gradId ?>)" stroke-width="9" stroke-linecap="round" fill="none" opacity="0.45"/>
        <!-- Hoofd kwaststreek -->
        <path d="M16,4 C8,30 22,65 14,100 C7,135 21,165 12,210 C5,250 20,280 15,320 C10,355 21,385 13,425 C6,460 20,490 14,530 C8,565 21,595 13,640 C6,675 20,710 14,750 C8,785 21,820 15,860 C12,880 17,892 14,896" stroke="url(#<?= $gradId ?>)" stroke-width="5" stroke-linecap="round" fill="none" opacity="1"/>
        <!-- Dunne linker borstel -->
        <path d="M13,4 C5,30 19,65 11,100 C4,135 18,165 9,210 C3,250 17,280 12,320 C7,355 18,385 10,425 C4,460 17,490 12,530 C6,565 18,595 11,640 C5,675 18,710 12,750 C6,785 19,820 13,860 C10,880 15,892 12,896" stroke="url(#<?= $gradId ?>)" stroke-width="2" stroke-linecap="round" fill="none" opacity="0.7"/>
        <!-- Dunne rechter borstel -->
        <path d="M20,4 C13,35 26,70 18,115 C11,150 24,185 16,230 C9,265 23,300 18,340 C13,375 24,410 16,455 C9,490 23,520 17,560 C11,595 24,630 17,670 C10,705 23,745 17,785 C11,815 22,845 16,878 C13,890 18,896 17,896" stroke="url(#<?= $gradId ?>)" stroke-width="2" stroke-linecap="round" fill="none" opacity="0.5"/>
    </svg>
</div>
<?php unset($brushClass); ?>