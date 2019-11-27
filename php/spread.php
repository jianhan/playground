<?php

function printMany(int ...$numbers) {
    echo count($numbers);
    array_walk($numbers, function($n) {
        echo $n.'--';
    });
}

printMany(...[1,2]);

$a = ['test' => 'test', 'test1' => 'test1'];

var_dump(!isset($a['test'], $a['test1']));

?>
