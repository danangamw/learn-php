<?php
// Documentation About namespaces
// https://www.php.net/manual/en/language.namespaces.rules.php
// https://www.php.net/manual/en/language.namespaces.faq.php

error_reporting(-1);
ini_set('display_error', 1);

spl_autoload_register(function ($class) {
    $formattedClass = str_replace("\\", "/", $class);
    $path = "{$formattedClass}.php";

    require_once $path;
});

use App\{Account, SocialMedia, Utility};

$myAccount = new Account("My", 10);
$yourAccount = new Account("My", 10);


$myAccount?->deposit(50)->deposit(30);

var_dump(Account::$count);

Utility::printArr([1, 3, 5, 1, 4]);