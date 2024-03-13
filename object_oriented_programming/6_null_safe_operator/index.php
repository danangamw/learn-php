<?php
error_reporting(-1);
ini_set('display_error', 1);


// Documentation for magic method
// https://www.php.net/manual/en/language.oop5.magic.php

require_once 'Account.php';

$myAccount = null;

$myAccount?->deposit(50)->deposit(30);

var_dump($myAccount->balance);
var_dump($myAccount->name);
