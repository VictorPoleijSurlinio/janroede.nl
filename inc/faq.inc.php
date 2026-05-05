<?php
include __DIR__ . '/arrays/faq.inc.php';
?>
<section id="faq">
    <div class="container" style="overflow:hidden;">
        <div class="row">
            <h1 class="text-center mb-3">Veelgestelde vragen</h1>
            <div class="col-12 col-lg-6 my-3" data-aos="flip-up" data-aos-duration="1100" data-aos-anchor-placement="top-bottom" data-aos-offset="50">
                <h3 class="secondary-color">Algemeen</h3>
                <div class="accordion" id="accordion-algemeen">
                    <?php
                    $i = 1;
                    foreach ($questions_general as $question) {
                    ?>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="question-algemeen-<?= $i ?>">
                                <button class="accordion-button fw-bold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#answer-algemeen-<?= $i ?>" aria-expanded="false" aria-controls="answer-algemeen-<?= $i ?>" aria-label="Toon antwoord: <?= htmlspecialchars($question['question'], ENT_QUOTES, 'UTF-8') ?>">
                                    <?= $question['question'] ?>
                                </button>
                            </h2>
                            <div id="answer-algemeen-<?= $i ?>" class="accordion-collapse collapse" aria-labelledby="question-algemeen-<?= $i ?>" data-bs-parent="#accordion-algemeen">
                                <div class="accordion-body">
                                    <?= $question['answer'] ?>
                                </div>
                            </div>
                        </div>
                    <?php
                        $i++;
                    }
                    ?>
                </div>
            </div>
            <div class="col-12 col-lg-6 my-3" data-aos="flip-down" data-aos-duration="1100" data-aos-anchor-placement="top-bottom" data-aos-offset="50">
                <h3 class="secondary-color">De Stichting</h3>
                <div class="accordion" id="accordion-anbi">
                    <?php
                    $i = 1;
                    foreach ($questions_anbi as $question) {
                    ?>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="question-anbi-<?= $i ?>">
                                <button class="accordion-button fw-bold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#answer-anbi-<?= $i ?>" aria-expanded="false" aria-controls="answer-anbi-<?= $i ?>" aria-label="Toon antwoord: <?= htmlspecialchars($question['question'], ENT_QUOTES, 'UTF-8') ?>">
                                    <?= $question['question'] ?>
                                </button>
                            </h2>
                            <div id="answer-anbi-<?= $i ?>" class="accordion-collapse collapse" aria-labelledby="question-anbi-<?= $i ?>" data-bs-parent="#accordion-anbi">
                                <div class="accordion-body">
                                    <?= $question['answer'] ?>
                                </div>
                            </div>
                        </div>
                    <?php
                        $i++;
                    }
                    ?>
                </div>

            </div>
            <small>Staat uw vraag er niet tussen? Neem gerust contact op via ons <a class="fw-bold" href="<?= SITE_URL ?>contact#contact-form">contactformulier</a> of bel ons op <a class="fw-bold" href="tel:<?= $COMPANY_PHONE_LINK ?>"><?= $COMPANY_PHONE ?></a>.</small>
        </div>
</section>