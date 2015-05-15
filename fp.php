<?php
ini_set('display_errors', true);
error_reporting(-1);

require_once 'vendor/autoload.php';
$_ = new \__();

print_r($_->map(array(1, 2, 3), function($n) { return $n * 2; }));