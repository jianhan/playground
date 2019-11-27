<?php

class Dog {
    private $name;

    public $age;

    public function __construct(string $name) {
        $this->name = $name;
    }

    public function sayName() {
        echo "I am a dog and my name is ".$this->name;
    }
}

function closureFunc(Closure $closure) {
    $closure();
}

function callableFunc(Callable $callback) {
    $callback();
}

$f = function() {
    echo "Hello";
};

function sayHellowPlain() {
    echo "Hello Plain";
}

// closureFunc('sayHellowPlain'); // this one not working
// callableFunc('sayHellowPlain');// this one works

$dog = new Dog('Jim');

// closureFunc([$dog, 'sayName']); // this one not working
// callableFunc([$dog, 'sayName']);// this one works
//

$dogSayName = [$dog, 'sayName'];

// closureFunc($dogSayName); // this one not working
// callableFunc($dogSayName); // this one works
//
var_dump($dog->{'age'});
?>
