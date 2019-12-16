<?php

function to_array(iterable $coll): array
{
    return $coll instanceof Traversable ? iterator_to_array($coll) : $coll;

}

function reduce(callable $fn, iterable $coll, $initial = null)
{
    $acc = $initial;
    foreach ($coll as $key => $value) {
        $acc = $fn($acc, $value, $key);

    }
    return $acc;

}

function reverse(iterable $coll): array
{
    return array_reverse(to_array($coll), true);

}

function pipe(callable ...$fns): callable
{
    $compose = static function ($composition, $fn) {
        return static function (...$args) use ($composition, $fn) {
            return null === $composition
                ? $fn(...$args)
                : $fn($composition(...$args));

        };

    };
    return reduce($compose, $fns);

}

function compose(callable ...$fns): callable
{
    return pipe(...reverse($fns));

}

$inc = function($x) {
    return $x + 1;
};

$double = function($x) {
    return $x * 2;
};

$tripple = function($x) {
    return $x * 3;
};

$finalPipe = pipe($inc, $double, $tripple);
$finalCompose = compose($inc, $double, $tripple);
var_dump($finalPipe(1), $finalCompose(1));

?>
