<?php
function cal_age($dateofbirth) {
 	$age = floor((time() - $dateofbirth) / 31556926);
 	if(is_numeric($age)){
 		return $age;
 	}
}
?>