<?php
$location = realpath(dirname(__FILE__));
require_once $location . '/function.php';
$num1 = '9';
$num2 = '2';
$return = addLargeNumbers($num1, $num2);
var_dump($return);