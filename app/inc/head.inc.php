<!doctype html>
<html lang="nl">
<head>
    <title><?=$title .' | '.$branchFullName?></title>
    <meta charset="UTF-8">
    <meta name="HandheldFriendly" content="True">
	<meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <meta name="robots" content="noindex,nofollow">

    <!-- Icons -->
	<link rel="icon" href="<?= SITE_URL ?>favicon.ico">
	<link rel="shortcut icon" href="<?= STATIC_URL ?>img/icon/favicon.ico">
	<link rel="icon" type="image/png" sizes="16x16" href="<?= STATIC_URL ?>img/icon/favicon-16x16.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?= STATIC_URL ?>img/icon/favicon-32x32.png">
	<link rel="apple-touch-icon" href="<?= STATIC_URL ?>img/icon/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="57x57" href="<?= STATIC_URL ?>img/icon/apple-touch-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="<?= STATIC_URL ?>img/icon/apple-touch-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?= STATIC_URL ?>img/icon/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="<?= STATIC_URL ?>img/icon/apple-touch-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?= STATIC_URL ?>img/icon/apple-touch-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="<?= STATIC_URL ?>img/icon/apple-touch-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="<?= STATIC_URL ?>img/icon/apple-touch-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="<?= STATIC_URL ?>img/icon/apple-touch-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="152x152" href="<?= STATIC_URL ?>img/icon/apple-touch-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="<?= STATIC_URL ?>img/icon/apple-touch-icon-180x180.png">
	<link rel="icon" sizes="192x192" href="<?= STATIC_URL ?>img/icon/android-chrome-192x192.png">
	<link rel="icon" sizes="512x512" href="<?= STATIC_URL ?>img/icon/android-chrome-512x512.png">
	<link rel="manifest" href="<?= STATIC_URL ?>img/icon/site.webmanifest">
	<link rel="mask-icon" href="<?= STATIC_URL ?>img/icon/safari-pinned-tab.svg" color="#f36223">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="theme-color" content="#ffffff">

    <!-- FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- CSS -->
    <link rel="stylesheet" href="<?=STATIC_URL?>css/application.min.css?<?=filemtime(__DIR__."/../static/css/application.min.css")?>">
</head>
<body>
