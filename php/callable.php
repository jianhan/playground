<?php

class Person {

    private $name;

    private $age;

    public function __construct(string $name, int $age) {
        $this->name = $name;
        $this->age = $age;
    }

    private function genPrintHello(string $food) {
        return function () use ($food){
            echo "My name is ".$this->name.", and I am ".$this->age." and I like ".$food;
        };
    }

    private function genPrint() {
        return function () {
            echo "nothing to print out actually";
        };
    }

    public function say() {
        $fn = [$this, 'printHello'];
        $s = function(string $something) use ($fn) { return $fn($something); };

        $this->doSomething($this->genPrint());
    }

    public function doSomething($sm) {
        $sm();
    }
}

$p = new Person("Peter", 12);

$p->say();
