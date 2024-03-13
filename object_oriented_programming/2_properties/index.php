<?php

// Documentation for access modifier
// https://www.php.net/manual/en/language.oop5.visibility.php

require_once 'Account.php';

$myAccount = new Account;
$johnAccount = new Account;

$myAccount->balance = 10;
var_dump($myAccount->balance);
echo "<br>";
var_dump($johnAccount);
