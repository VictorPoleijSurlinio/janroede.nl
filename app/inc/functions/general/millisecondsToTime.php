<?php
function millisecondsToTime($timeInput) {
	$input = $timeInput;

	$uSec = $input % 1000;
	$input = floor($input / 1000);

	$seconds = $input % 60;
	$input = floor($input / 60);

	$minutes = $input % 60;
	$input = floor($input / 60); 

	$hours = $input % 24;
	$input = floor($input / 24); 

	if(!empty($hours)){
		// return $hours.':'.$minutes.':'.$seconds.','.$uSec;
		return $hours.':'.$minutes.':'.$seconds;
	}elseif(!empty($minutes)){
		// return $minutes.':'.$seconds.','.$uSec;
		return $minutes.':'.$seconds;
	}elseif(!empty($seconds)){
		// return $seconds.','.$uSec;
		return $seconds.'s';
	}elseif(!empty($uSec)){
		// return '0,'.$uSec;
		return '0s';
	}else{
		return '';
	}
}
