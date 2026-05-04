<?php
// RESIZE BY ADDUNG TRANSPARANCY
function image_resize_add_transparency($src_file, $destination_file, $new_width, $new_ratio=1.5) {
    $type = exif_imagetype($src_file); // [] if you don't have exif you could use getImageSize()
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
            $src_img = imageCreateFromGif($src_file);
            break;
        case 2 :
            $src_img = imageCreateFromJpeg($src_file);
            break;
        case 3 :
            $src_img = imageCreateFromPng($src_file);
            break;
        case 6 :
            $src_img = imageCreateFromBmp($src_file);
            break;
        default:
            return null;
    }

    $width  = imagesx($src_img); // image width
    $height = imagesy($src_img); // image height

    $current_ratio = $width/$height;

    $new_height = intval($new_width/$new_ratio);

    $desired_height = intval($height * ($new_width / $width));
    $desired_width = intval($width * ($new_height / $height));

    $final_img = imagecreatetruecolor($new_width,$new_height);
    imagealphablending($final_img, true);
    imagesavealpha($final_img, true);
    $bg_color = imagecolorallocatealpha($final_img, 0, 0, 0, 127);
    // $bg_color = imagecolorallocate ($final_img, 255, 255, 255);
    imagefill($final_img, 0, 0, $bg_color);

    // imagestring($image,2, 100, 150, 'Text written on transparent background', $text_color);
    // imagepng($image,'transparent.png');

    if($current_ratio <= $new_ratio ) {
        imagecopyresampled(
            $final_img,
            $src_img,
            intval(($new_width-$desired_width)/2),
            0,
            0,
            0,
            $desired_width, $new_height,
            $width, $height);
    } else {
        imagecopyresampled(
            $final_img, $src_img,
            0,
            intval(($new_height-$desired_height)/2),
            0,
            0,
            $new_width, $desired_height,
            $width, $height);
    }

    switch ($type) {
        case 1 :
            // imagegif($final_img, $destination_file);
            imagepng($final_img, $destination_file);
        break;
        case 2 :
            // imagejpeg($final_img, $destination_file, 90);
            imagepng($final_img, $destination_file);
        break;
        case 3 :
            imagepng($final_img, $destination_file);
            break;
        case 6 :
            // imagebmp($final_img, $destination_file);
            imagepng($final_img, $destination_file);
        break;
    }

    // destroy aux images (free memory)
    imagedestroy($src_img);
    imagedestroy($final_img);
}