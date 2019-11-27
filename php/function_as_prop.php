<?php
    class Person {
        private $doSomething;

        private $name;

        public function __construct(string $name, $doSomething) {
            $this->name = $name;
            $this->doSomething = $doSomething;
        }

        public function do() {
            [$this, 'doSomething']($this->name);
        }

    }

$printName = function (string $name) {
    echo $name;
};


$p = new Person('Jim', $printName);

$p->do();

?>
