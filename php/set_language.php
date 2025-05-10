<?php

session_start();

$lang = '';

if (isset($_GET['lang'])) {
    $lang = $_GET['lang'];
    if (in_array($lang, ['en', 'es'])) {
        $_SESSION['lang'] = $lang;
    }
}

$lang = $_SESSION['lang'] ?? 'es'; // Default language

// Language file path
$langFile = "assets/lang/{$lang}.php";
$translations = include $langFile;
