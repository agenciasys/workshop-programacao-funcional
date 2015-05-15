<?php
// Map 1
$cube = function($n) {
    return ($n * $n * $n);
};

$a = array(1, 2, 3, 4, 5);
$b = array_map($cube, $a);

echo '<pre>';
print_r($b);
echo '</pre>';

// Map 2
$func = function($value) {
    return $value * 2;
};

echo '<pre>';
print_r(array_map($func, range(1, 5)));
echo '</pre>';

// Map 3
$showSpanish = function($n, $m) {
    return('The number ' . $n . ' is called ' . $m . ' in Spanish');
};

$mapSpanish = function($n, $m) {
    return(array($n => $m));
};

$a = array(1, 2, 3, 4, 5);
$b = array('uno', 'dos', 'tres', 'cuatro', 'cinco');

$c = array_map($showSpanish, $a, $b);
echo '<pre>';
print_r($c);
echo '</pre>';

$d = array_map($mapSpanish, $a , $b);
echo '<pre>';
print_r($d);
echo '</pre>';

// Lambda
$square = function ($arg) {
    return $arg * $arg;
};
 
echo $square(2); // 4