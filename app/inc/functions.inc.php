<?php
// DATABASE
include __DIR__ . "/functions/database/db_log.php";

// GENERAL
include __DIR__ . "/functions/general/access_allowed.php";
include __DIR__ . "/functions/general/add_http.php";
include __DIR__ . "/functions/general/admin_level_required.php";
// include __DIR__ . "/functions/general/bsn_check.php";
include __DIR__ . "/functions/general/cal_age.php";
// include __DIR__ . "/functions/general/check_external_file.php";
include __DIR__ . "/functions/general/cloak_decloak.php";
include __DIR__ . "/functions/general/correct_date.php";
// include __DIR__ . "/functions/general/dump_debug.php";
include __DIR__ . "/functions/general/check_external_file.php";
// include __DIR__ . "/functions/general/format_size_units.php";
include __DIR__ . "/functions/general/iban_check.php";
include __DIR__ . "/functions/general/limit_words.php";
include __DIR__ . "/functions/general/me_id.php";
include __DIR__ . "/functions/general/millisecondsToTime.php";
include __DIR__ . "/functions/general/pagination.class.php";
include __DIR__ . "/functions/general/random_password.php";
include __DIR__ . "/functions/general/recursive_remove.php";
include __DIR__ . "/functions/general/slugify.php";
include __DIR__ . "/functions/general/splitStreet.php";
include __DIR__ . "/functions/general/strpos_arr.php";



// IMAGES
// include __DIR__ . "/functions/images/check_uploaded_file.php";
include __DIR__ . "/functions/images/correct_orientation.php";
include __DIR__ . "/functions/images/resize_fixed_width.php";
include __DIR__ . "/functions/images/resize_max_width.php";
include __DIR__ . "/functions/images/resize_max_width_or_height.php";
// include __DIR__ . "/functions/images/resize_add_transparency.php";
include __DIR__ . "/functions/images/resize_add_whitespace.php";
include __DIR__ . "/functions/images/resize_cutoff.php";
include __DIR__ . "/functions/images/upload_helper.php";


// VIDEOS
include __DIR__ . "/functions/videos/youtube_id_from_url.php";