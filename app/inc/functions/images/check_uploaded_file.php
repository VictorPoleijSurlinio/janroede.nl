<?php
// CHECK UPLOAD FOR ERRORS
function checkUploadedFile($file) {
    // Sanitize input
    if (preg_match("/([^\w\s\d\-_~,;:\[\]\(\).])|([\.]{2,})/", $file['name'])) {
        $errormsg[] = "Ongeldig bestandanaam: ".$file['name'];
    }
    if (!in_array(strtolower(pathinfo($file['name'], PATHINFO_EXTENSION)), array("gif", "jpg", "png", "jpeg"))) {
        $errormsg[] = $file['name']." is geen afbeelding";
    }
    $extension = @end(explode(".", $file['name']));
    $filename = uniqid().'.'.$extension;
    $filetowrite = $folder . '/' . $filename;
    // $filetowrite = $folder . '/' . str_replace(" ", "-", $file['name']);

    //http://php.net/manual/en/features.file-upload.errors.php

    //groter dan ini size
    if($file['error'] == UPLOAD_ERR_INI_SIZE) {
        $errormsg[] = 'Bestand groter dan in php.ini staat ('.ini_get('upload_maxfilesize').')';
    }
    //bestand groter van MAX_FILE_SIZE
    else if($file['error'] == UPLOAD_ERR_FORM_SIZE) {
        $errormsg[] = $file['name'].' te groot. '.($_POST['MAX_FILE_SIZE']/1024/1024).'MB maximaal toegestaan';
    }
    //gedeeltelijke upload
    else if($file['error'] == UPLOAD_ERR_PARTIAL) {
        $errormsg[] = 'Bestand was maar gedeeltelijk geupload';
    }
    //geen bestand
    else if($file['error'] == UPLOAD_ERR_NO_FILE) {
        $errormsg[] = 'Geen bestand geselecteerd';
    }
    //geen tmp dir
    else if($file['error'] == UPLOAD_ERR_NO_TMP_DIR) {
        $errormsg[] = 'TMP folder ontbreekt';
    }
    //write error
    else if($file['error'] == UPLOAD_ERR_CANT_WRITE) {
        $errormsg[] = 'Geen schrijfrechten';
    }
    //een php extensie heeft de upload afgebroken. zie phpinfo() voor meer info
    else if($file['error'] == UPLOAD_ERR_EXTENSION) {
        $errormsg[] = 'PHP extensie zegt nee';
    }
    //alles gaat goed
    else if($file['error'] == UPLOAD_ERR_OK) {
        return TRUE;
    }
    //onbekende / niet afgevangen fout
    else {
        $errormsg[] = 'Er ging iets fout met het uploaden van '.$file['name'];
    }
    return $errormsg;
}
