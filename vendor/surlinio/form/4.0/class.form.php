<?php

/* Form functions for Bootstrap 4.0.0 */

class Form {

    public function open($name,$action,$data_url='',$return_url='') {
    	echo '<form class="form" autocomplete="off" enctype="multipart/form-data" id="'.$name.'" name="'.$name.'" method="POST" action="'.$action.'"';
        if ($data_url <> '') echo ' data-ajaxurl="'.$data_url.'"';
        if ($return_url <> '') echo ' data-returnurl="'.$return_url.'"';
        echo '>'.PHP_EOL;
    }

    public function textField($name,$label,$col,$placeholder='',$value='',$disabled=0) {
    	echo '<div class="form-group '.$col.'">';
        echo '<label for="'.$name.'">'.$label.'</label>';
        echo '<input type="text" autocomplete="off" class="form-control simplebox" name="'.$name.'" id="'.$name.'"';
        if ($placeholder <> '') echo ' placeholder="'.$placeholder.'"';
        if ($value <> '') echo ' value="'.$value.'"';
        if ($disabled) echo ' disabled';
        echo '>';
        echo '</div>'.PHP_EOL;
    }

    public function dateField($name,$label,$col,$placeholder='',$value='',$disabled=0) {
        echo '<div class="form-group '.$col.'">';
        echo '<label for="'.$name.'">'.$label.'</label>';
        echo '<input type="text" class="form-control simplebox datefield" name="'.$name.'" id="'.$name.'"';
        if ($placeholder <> '') echo ' placeholder="'.$placeholder.'"';
        if ($value <> '') echo ' value="'.$value.'"';
        if ($disabled) echo ' disabled';
        echo '>';
        echo '</div>'.PHP_EOL;
    }

    public function passwordField($name,$label,$col,$placeholder='',$value='',$disabled=0) {
        echo '<div class="form-group '.$col.'">';
        echo '<label for="'.$name.'">'.$label.'</label>';
        echo '<input type="password" class="form-control simplebox" name="'.$name.'" id="'.$name.'"';
        if ($placeholder <> '') echo ' placeholder="'.$placeholder.'"';
        if ($value <> '') echo ' value="'.$value.'"';
        if ($disabled) echo ' disabled';
        echo '>';
        echo '</div>'.PHP_EOL;
    }

    public function textArea($name,$label,$col,$placeholder='',$value='',$rows=4) {
    	echo '<div class="form-group '.$col.'">';
        echo '<label for="'.$name.'">'.$label.'</label>';
        echo '<textarea class="form-control simplebox" rows="'.$rows.'" id="'.$name.'" name="'.$name. '"';
        if ($placeholder <> '') echo ' placeholder="'.$placeholder.'"';
        echo '>';
        if ($value <> '') echo $value;
        echo '</textarea>';
        echo '</div>'.PHP_EOL;
    }

    public function textAreaRich($name,$label,$col,$placeholder='',$value='',$rows=4) {
        echo '<div class="form-group '.$col.'">';
        echo '<label for="'.$name.'">'.$label.'</label>';
        echo '<textarea class="form-control simplebox rich-text" rows="'.$rows.'" id="'.$name.'" name="'.$name. '"';
        if ($placeholder <> '') echo ' placeholder="'.$placeholder.'"';
        echo '>';
        if ($value <> '') echo $value;
        echo '</textarea>';
        echo '</div>'.PHP_EOL;
    }

    public function selectLive($name,$label,$col,$options,$value='',$disabled=false,$width='150') {
        echo '<div class="form-group '.$col.'">';
        echo '<label for="'.$name.'">'.$label.'</label><br>';
        echo '<select class="selectpicker simplebox" data-live-search="true" data-width="'.$width.'" name="'.$name.'" id="'.$name .'"';
        if ($disabled) echo ' disabled';
        echo '>';
        echo '<option value="0">Selecteer</option>';
        foreach ($options as $option) {
            echo '<option value="'.$option[0].'"' ;
            if ($option[0] == $value) echo ' selected';
            echo '>'.$option[1].'</option>';
        }
        echo '</select>';
        echo '</div>'.PHP_EOL; 
    }

    public function select($name,$label,$col,$options,$value='',$disabled=false,$width='150') {
        echo '<div class="form-group '.$col.'">';
        echo '<label for="'.$name.'">'.$label.'</label><br>';
        echo '<select class="selectpicker simplebox" data-width="'.$width.'" name="'.$name.'" id="'.$name .'"';
        if ($disabled) echo ' disabled';
        echo '>';
        echo '<option value="0">Selecteer</option>';
        foreach ($options as $option) {
            echo '<option value="'.$option[0].'"' ;
            if ($option[0] == $value) echo ' selected';
            echo '>'.$option[1].'</option>';
        }
        echo '</select>';
        echo '</div>'.PHP_EOL; 
    }

    public function checkbox($name,$label,$col,$val,$checked,$disabled=false) {
    	echo '<div class="form-group '.$col.'">';
        echo '<div class="custom-control custom-checkbox">';
    	echo '<input type="checkbox" id="'.$name.'" name="'.$name.'" class="custom-control-input"';
    	echo ' value="'.$val.'"';
    	if ($checked) echo ' checked';
        if ($disabled) echo ' disabled';
    	echo '>';
    	echo '<label class="custom-control-label" for="'.$name.'">'.$label.'</label>';
    	echo '</div>'.PHP_EOL;
        echo '</div>'.PHP_EOL;
    }

    public function submitButton($name,$label,$col="col-sm-12") {
        echo '<div class="form-group '.$col.'">';
        echo '<p><button name="'.$name.'" id="'.$name.'" type="submit" class="btn btn-client" value="'.$name.'">'.$label.'</button></p>';
        echo '</div>'.PHP_EOL;
    }              

    public function close() {
        echo '</form>'.PHP_EOL;
    }

}

$frm = new Form();