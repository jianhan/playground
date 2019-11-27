<?php

class x {

    function __invoke($b) {
        return strtoupper($b);
    }
}

$x = new x();


$arr = ['a', 'b', 'c'];

$toUpperFunc = function($b) {
    return strtoupper($b);
};

$t = array_map($toUpperFunc, $arr);

var_dump($t);

class Person {

    private $toys;

    public function __construct($toys = []) {
        $this->toys = $toys;
    }

    private function toUpper($b) {
        return strtoupper($b);
    }

    public function printToys() {
        $t = array_map([$this, 'toUpper'], $this->toys);
        var_dump($t);
    }
}

$toys = ['t1', 't2', 't3', 't4'];

$p = new Person($toys);

$p->printToys();

[$a, $b] = [100 ,200];

[$c, $d] = [];

var_dump($a, $b);
?>
