<?php
// MAKE FIXED WIDTH
function resizeImageFixedWidth($src, $dest, $desired_width = '300') {
    /* read the source image */
    $type = exif_imagetype($src); // [] if you don't have exif you could use getImageSize()
    $allowedTypes = array(
        1,  // [] gif
        2,  // [] jpg
        3,  // [] png
        6   // [] bmp
    );
    if (!in_array($type, $allowedTypes)) {
        return false;
    }
    switch ($type) {
        case 1 :
            $source_image = imageCreateFromGif($src);
            break;
        case 2 :
            $source_image = imageCreateFromJpeg($src);
            break;
        case 3 :
            $source_image = imageCreateFromPng($src);
            break;
        case 6 :
            $source_image = imageCreateFromBmp($src);
            break;
        default:
            return null;
    }

    $width = imagesx($source_image);
    $height = imagesy($source_image);

    /* find the "desired height" of this thumbnail, relative to the desired width  */
    $desired_height = floor($height * ($desired_width / $width));

    /* create a new, "virtual" image */
    $virtual_image = imagecreatetruecolor($desired_width, $desired_height);
    $bg_color = imagecolorallocate ($virtual_image, 255, 255, 255);
    imagefill($virtual_image, 0, 0, $bg_color);

    /* copy source image at a resized size */
    imagecopyresampled($virtual_image, $source_image, 0, 0, 0, 0, $desired_width, $desired_height, $width, $height);
    $folder = @str_replace(end(explode('/', $dest)), '', $dest);
    if (!file_exists($folder)) {
        mkdir($folder, 0777, true);
    }
    /* create the physical thumbnail image to its destination */
    switch ($type) {
        case 1 :
            imagegif($virtual_image, $dest);
        break;
        case 2 :
            imagejpeg($virtual_image, $dest);
        break;
        case 3 :
            imagepng($virtual_image, $dest);
            break;
        case 6 :
            imagebmp($virtual_image, $dest);
        break;
    }
}