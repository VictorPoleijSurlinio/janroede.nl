<!doctype html>
<html lang="<?= $_SESSION['head_lang'] ?>">

<head>
    <title><?= $title ?></title>
    <meta name="language" content="<?= $_SESSION['language'] ?>">
    <meta charset="UTF-8">
    <meta name="HandheldFriendly" content="True">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta name="description" content="<?= $description ?>">
    <meta name="keywords" content="">
    <meta name="robots" content="index,follow">
    <meta name="author" content="Surlinio">

    <!-- OG Data -->
    <meta property="og:title" content="<?= $title ?>" />
    <meta property="og:url" content="<?php echo (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>">
    <meta property="og:type" content="website" />
    <meta property="og:description" content="<?= $description ?>" />
    <meta property="og:image" content="<?php
                                        if (!isset($og_image)) {
                                            echo STATIC_URL . 'img/og-image/default.jpg';
                                        } else {
                                            echo $og_image;
                                        } ?>">
    <meta property="article:author" content="https://www.facebook.com/surlinio">

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
    <link rel="mask-icon" href="<?= STATIC_URL ?>img/icon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#000000">
    <meta name="theme-color" content="#ffffff">

    <!-- FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,500;0,600;1,500;1,600&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="<?= STATIC_URL ?>css/client.min.css?v=<?= filemtime(__DIR__ . '/../static/css/client.min.css') ?>">
</head>

<body>