<?php
// RESIZE BY CUTTING OFF
function image_resize_cutoff($src_file, $destination_file, $new_width, $new_height) {
	$type = exif_imagetype($src_file);
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
		$source_image = imageCreateFromGif($src_file);
		break;
		case 2 :
		$source_image = imageCreateFromJpeg($src_file);
		break;
		case 3 :
		$source_image = imageCreateFromPng($src_file);
		break;
		case 6 :
		$source_image = imageCreateFromBmp($src_file);
		break;
		default:
		return null;
	}

	$source_width = imageSX($source_image);
	$source_height = imageSY($source_image);

	$final_image = imagecreatetruecolor($new_width, $new_height);

	// transparantie
	switch ($type) {
		case 1 :
		imagecolortransparent($final_image, imagecolorallocatealpha($final_image, 0, 0, 0, 127));
		imagealphablending($final_image, false);
		imagesavealpha($final_image, true);
		break;
		case 3 :
		imagecolortransparent($final_image, imagecolorallocatealpha($final_image, 0, 0, 0, 127));
		imagealphablending($final_image, false);
		imagesavealpha($final_image, true);
		break;
	}


	$ratio_width = $source_width / $new_width;
	if(($source_height / $ratio_width) < $new_height) {
		//we moeten in de breedte wat afsnijden
		$calculated_width = intval($source_height * $new_width / $new_height);
		$move_x = intval(($source_width - $calculated_width)/2);

		imagecopyresampled(
			$final_image, $source_image,
			0, 0,
			$move_x, 0,
			$new_width, $new_height,
			$calculated_width, $source_height);
	} else {
		//we moeten in de hoogte wat afsnijden
		$calculated_height = intval($source_width * $new_height / $new_width);
		$move_y = intval(($source_height - $calculated_height)/2);

		imagecopyresampled(
			$final_image, $source_image,
			0, 0,
			0, $move_y,
			$new_width, $new_height,
			$source_width, $calculated_height);
	}

	switch ($type) {
		case 1 :
		imagegif($final_image, $destination_file);
		break;
		case 2 :
		imagejpeg($final_image, $destination_file, 100);
		break;
		case 3 :
		imagepng($final_image, $destination_file);
		break;
		case 6 :
		imagebmp($final_image, $destination_file);
		break;
	}

	imagedestroy($source_image);
	imagedestroy($final_image);
	return true;
}