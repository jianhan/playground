<?php

class Person {
    public $name;
    public $age;

    public function __construct(string $name, int $age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function setName(string $name) {
        $this->name = $name;
    }

    public function setAge(int $age) {
        $this->age = $age;
    }

}

$james = new Person('James', 12);

$bob = new Person('Bob', 22);

$jamesClone = $james;
$jamesClone = $bob;

$jamesClone->setName("I am clone");

var_dump($james, $bob, $jamesClone);


?>
