<?php

function mul($x, $y) {
    return $x * $y;
}

function curried($x) {
    return function($y) use ($x) {
        return $x * $y;
    };
}

$t = curried(1);

var_dump($t);

var_dump($t(3));

$t = new DateTimeImmutable();

$t = new DateTimeImmutable();

var_dump($t);

$s = [1,2,3];

explode('/', $s);

$test1 = [1,2,3,4];
$test2 = [1,2,3,4];

var_dump(array_slice($test1, 1, 3));
