<?php

class Person {

    private $age;

    public function __construct(int $age) {
        $this->age = $age;
    }

    public function getAge(): ?int {
        return $this->age;
    }
}

$t = 'Person';

$p = new $t(12);
var_dump($p->getAge());

?>
