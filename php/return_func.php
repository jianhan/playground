<?php

function genNum() {
    $range = range(1, 10);

    return function(array $r = []) use ($range) {

        $range = empty($r) ? $range : $r;

        return array_reduce($range, static function(array $accumulator, $current): array {
            $n = 'number: '.$current;
            $accumulator[] = $n;

            return $accumulator;
        }, []);
    };


}


$t = genNum()([1,2]);

var_dump($t);

?>
