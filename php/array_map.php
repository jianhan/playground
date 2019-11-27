<?php
function cube($n)
{
        return($n * $n * $n);

}

$a = array(1, 2, 3, 4, 5);
$b = array_map("cube", $a);
print_r($b);
print_r("*******");
print_r($a);

$c =array_map("cube", []);
var_dump($c);
?>
