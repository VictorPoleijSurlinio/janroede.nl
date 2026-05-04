<?php
function db_log($message, $section = 'admin', $department_id = '') {
	global $db;

	$log_insert = array();
	$log_insert['section']			= $section;
	$log_insert['message']			= $message;
	$log_insert['ip']				= $_SERVER['REMOTE_ADDR'];
	$log_insert['useragent']		= $_SERVER['HTTP_USER_AGENT'];

	$db->insert('log', $log_insert);
}