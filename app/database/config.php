<?php
// DATABASE HELPER
try {
	$pdo = new \PDO('sqlite:'.__DIR__.'/../../../database/'.$branchDatabase.'.sqlite3');
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
	$pdo->exec('PRAGMA foreign_keys = ON;');
	$pdo->exec('PRAGMA journal_mode = wal;');
}
catch(PDOException $e) {
	$error = 'PDO INIT Exception: '.$e->getMessage();
	die($error);
	exit;
}
$db = new PDODb($pdo);