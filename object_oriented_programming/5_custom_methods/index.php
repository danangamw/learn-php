<?php

// Documentation for magic method
// https://www.php.net/manual/en/language.oop5.magic.php

require_once 'Account.php';

$myAccount = new Account('Mine', 10);

$myAccount->deposit(50)->deposit(30);

var_dump($myAccount->balance);
var_dump($myAccount->name);
