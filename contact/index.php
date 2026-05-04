<?php
include __DIR__ . '/../inc/config.inc.php';
include __DIR__ . '/../inc/arrays/faq.inc.php';

// HEAD AND NAV VARIABLES
$title = 'Contact | ' . $COMPANY_FULLNAME;
$description  = 'Neem contact op met Westlandse Glashandel voor advies, inmeten en glasvervanging.';
$page = "contact";

include ABS_PATH . 'inc/head.inc.php';
include ABS_PATH . 'inc/navbar.inc.php';
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
                        <h4 class="secondary-color my-2">Telefoon:</h4>
                        <a href="tel:<?= $COMPANY_PHONE_LINK ?>"></i><?= $COMPANY_PHONE ?></a><br>

                    </div>
                </div>
            </div>

            <div class="col-md-4 my-2">
                <div class="white-box shadow-sm h-100 text-center" data-aos="flip-left" data-aos-duration="950" data-aos-offset="50">
                    <div>
                        <i class="fa fa-envelope secondary-color fa-2x mb-2" aria-hidden="true"></i>
                        <h4 class="secondary-color my-2">Email:</h4>
                        <a style="word-break: break-all;" href="mailto:<?= $COMPANY_EMAIL ?>" aria-label="<?= $COMPANY_EMAIL ?>"></i> <?= $COMPANY_EMAIL ?></a><br><br>

                    </div>
                </div>
            </div>

            <div class="col-md-4 my-2">
                <div class="white-box shadow-sm h-100 text-center" data-aos="flip-left" data-aos-duration="1250" data-aos-offset="50">
                    <div>
                        <i class="fa fa-map-marker-alt secondary-color fa-2x mb-2" aria-hidden="true"></i>
                        <h4 class="secondary-color my-2">Bezoekadres:</h4>
                        <a target="blank" href="https://www.google.com/maps/dir/?api=1&destination=<?= $COMPANY_STREET . "," . $COMPANY_CITY ?>">
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

<section class="primary-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-lg-7">
                <h1 class="text-white">Heb je een <strong class="secondary-color">vraag</strong>? Neem gerust <strong class="secondary-color">contact</strong> op.</h1>
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
                        <div class="form-group col-md-6 pe-md-1">
                            <label class="sr-only" for="firstname">Voornaam <sup>*</sup></label>
                            <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Voornaam*">
                        </div>
                        <div class="form-group col-md-6 ps-md-1">
                            <label class="sr-only" for="lastname">Achternaam <sup>*</sup></label>
                            <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Achternaam*">
                        </div>
                        <div class="form-group col-md-6 pe-md-1">
                            <label class="sr-only" for="email">E-mailadres <sup>*</sup></label>
                            <input type="text" class="form-control" id="email" name="email" placeholder="E-mailadres*">
                        </div>
                        <div class="form-group col-md-6 ps-md-1">
                            <label class="sr-only" for="phone">Telefoonnummer</label>
                            <input type="text" class="form-control" id="phone" name="phone" placeholder="Telefoonnummer">
                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="comment">Vraag <sup>*</sup></label>
                            <textarea class="form-control" rows="4" id="comment" name="comment" placeholder="Wat is je vraag?"></textarea>
                        </div>
                    </div>

                    <p class="mt-3">
                        <button id="btn-contact-submit" type="submit" class="btn btn-client-rounded">Verzenden</button>
                    </p>
                    <input type="text" name="robo" class="robo hidden d-none">

                </form>
            </div>
        </div>

    </div>
</section>


<?php
    include ABS_PATH . 'inc/faq.inc.php'; 

include ABS_PATH . 'inc/footer.inc.php';
include ABS_PATH . 'inc/scripts.inc.php';
include ABS_PATH . 'inc/closingtags.inc.php';
?>