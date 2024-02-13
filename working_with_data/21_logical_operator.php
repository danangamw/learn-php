<?php

$age = 15;
$permission = "admin";

$data = $permission === "admin" || $permission === "mod";
var_dump($data);
$data = $age > 18 && $age < 65;
var_dump($data);
