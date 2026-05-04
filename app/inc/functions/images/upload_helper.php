<?php
// UPLOAD TO GIVEN PATH WITH GIVEN FILENAME
function uploadHelper($files, $folder, $filename="unset" ) {
    global $errormsg;
    foreach($files['name'] as $key => $value) {
        // Sanitize input
        if (preg_match("/([^\w\s\d\-_~,;:\[\]\(\).])|([\.]{2,})/", $files['name'][$key])) {
            $errormsg[] = "Ongeldig bestandanaam: ".$files['name'][$key];
            continue;
        }
        if (!in_array(strtolower(pathinfo($files['name'][$key], PATHINFO_EXTENSION)), array("gif", "jpg", "png", "jpeg"))) {
            $errormsg[] = $files['name'][$key]." is geen afbeelding";
            continue;
        }
        $extension = @end(explode(".", $files['name'][$key]));
        if($filename == 'unset'){
            $filename_image = uniqid();
            // $filename_image = uniqid().'.'.$extension;
        }else{
            $filename_image = $filename;
        }
        // $filename_image = uniqid().'.'.$extension;
        $filename_image = strtolower($filename_image.'.'.$extension);
        $filetowrite = $folder . '/' . $filename_image;
        // $filetowrite = $folder . '/' . str_replace(" ", "-", $files['name'][$key]);

        //http://php.net/manual/en/features.file-upload.errors.php

        //groter dan ini size
        if($files['error'][$key] == UPLOAD_ERR_INI_SIZE) {
            $errormsg[] = 'Bestand groter dan in php.ini staat ('.ini_get('upload_maxfilesize').')';
            return false;
        }
        //bestand groter van MAX_FILE_SIZE
        else if($files['error'][$key] == UPLOAD_ERR_FORM_SIZE) {
            $errormsg[] = $files['name'][$key].' te groot. '.($_POST['MAX_FILE_SIZE']/1024/1024).'MB maximaal toegestaan';
            return false;
        }
        //gedeeltelijke upload
        else if($files['error'][$key] == UPLOAD_ERR_PARTIAL) {
            $errormsg[] = 'Bestand was maar gedeeltelijk geupload';
            return false;
        }
        //geen bestand
        else if($files['error'][$key] == UPLOAD_ERR_NO_FILE) {
            $errormsg[] = 'Geen bestand geselecteerd';
            return false;
        }
        //geen tmp dir
        else if($files['error'][$key] == UPLOAD_ERR_NO_TMP_DIR) {
            $errormsg[] = 'TMP folder ontbreekt';
            return false;
        }
        //write error
        else if($files['error'][$key] == UPLOAD_ERR_CANT_WRITE) {
            $errormsg[] = 'Geen schrijfrechten';
            return false;
        }
        //een php extensie heeft de upload afgebroken. zie phpinfo() voor meer info
        else if($files['error'][$key] == UPLOAD_ERR_EXTENSION) {
            $errormsg[] = 'PHP extensie zegt nee';
            return false;
        // } else if(file_exists($filetowrite)) {
        //     $errormsg[] = $files['name'][$key].' bestaat al';
        //     return false;
        }
        //alles gaat goed
        else if($files['error'][$key] == UPLOAD_ERR_OK) {
            if (!file_exists($folder)) {
                mkdir($folder, 0777, true);
            }
            // if (!file_exists($folder.'/thumb')) {
            //     mkdir($folder.'/thumb', 0777, true);
            // }

            //upload picture
            move_uploaded_file($files['tmp_name'][$key], $filetowrite);
            $fileswritten[] = $filename_image;
        }
        //onbekende / niet afgevangen fout
        else {
            $errormsg[] = 'Er ging iets fout met het uploaden van '.$files['name'][$key];
            return false;
        }
    }
    return $fileswritten;
    // return true;
}