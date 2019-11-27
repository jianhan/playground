<?php

class Person {

    public function mul(int $a): int
    {
        return $a * $a;
    }

    public function add(int $a): int
    {
        return $a + $a;
    }

    public function compose($f1, $f2)
    {
        return function($a) use ($f1, $f2) {
            return $this->{$f1}($this->{$f2}($a));
        };
    }
}

$p = new Person();

var_dump($p->compose('mul', 'add')(1));
?>
