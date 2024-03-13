<?php


$fullName = 'John Doe';

const FULL_NAME = "John Smith";


var_dump("Hello, name is {$fullName}");
// Interpolation doesn't support constants 
// so use concatenation for alternative
var_dump("Hello, name is " . FULL_NAME);
