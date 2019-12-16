<?php

function compose(...$functions) {

    return function ($x) use ($functions) {
        $functions = array_reverse($functions);
        return array_reduce(
            $functions,
            function($accumulator, $current) {
                var_dump('current is ', $current, 'example input 2 output: '. $current(2));
                var_dump('============================================================');
                return $current($accumulator);
            },
            $x
        );

        return $func($x);
    };
}


$inc = function($x) {
    return $x + 1;
};

$double = function($x) {
    return $x * 2;
};

$dec = function($x) {
    return $x - 1;
};

$final = compose($inc, $double, $double);

var_dump($final(3));
?>
