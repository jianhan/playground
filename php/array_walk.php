<?php

$arr = [1,2,3,4,5,6];

array_walk($arr, function($v) {
    var_dump($v);
});

$p = null;

if ($p === null) {
    echo 'is null';
}

$t = function(int $x, int $y): int {
    return $x + $y;
};

var_dump($t);

$a = 1;
$b = 2;

$con = $a < $b;
var_dump($con);

if ($con) {

    var_dump('a < b');
}

if ($con) {
    var_dump('a < b again');
}
?>
