<?php

$test = "test";


function genStr(bool $input = true): ?string {
    if ($input) {
        return 'test';
    }

    return null;
}

var_dump(genStr(false), genStr(true));

$test1 = '####';

echo "'{$test1}' is this";
echo PHP_EOL;
echo "$test1 is this";

$t = 0;

var_dump(empty($t));

?>
