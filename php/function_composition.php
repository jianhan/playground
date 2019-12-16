<?php

function identity($arg) {
    return $arg;
}

function compose2(...$functions)
{
    return \array_reduce(
        $functions,
        function ($carry, $item) {
            return function ($x) use ($carry, $item) {
                return $item($carry($x));

            };

        },
            'identity'

        );

}


function pipe(...$functions) {

    return function ($x) use ($functions) {
        return array_reduce(
            $functions,
            function($accumulator, $current) {
                # var_dump('current is ', $current, 'example input 2 output: '. $current(2));
                # var_dump('============================================================');
                return $current($accumulator);
            },
                $x
            );
    };
}




function compose(...$functions) {

    return function ($x) use ($functions) {
        $functions = array_reverse($functions);
        return array_reduce(
            $functions,
            function($accumulator, $current) {
                # var_dump('current is ', $current, 'example input 2 output: '. $current(2));
                # var_dump('============================================================');
                return $current($accumulator);
            },
                $x
            );
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

var_dump($final);
?>
