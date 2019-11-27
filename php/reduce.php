<?php

function myfunction($value, $key)
{
        echo "The key $key has the value $value \n";

}


$ss = function(string $s) {
    echo $s;
};


class Person {

    private $name;

    private $age;

    private $coins;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
        $this->coins = ["1 cent", "5 cents", "10 cents"];
    }

    public function getNameAge(): string {
        return sprintf("my name is %s, my age is %d", $this->name, $this->age);
    }

    public function sayHello(): string {
        return "hi";
    }

    public function myfunction($value, $key)
    {
        echo "IN CLASS The key $key has the value $value \n";
    }

    public function combine() {
        array_walk($this->coins, [$this, 'myfunction']);
    }
}

$james = new Person("James", 12);
$james->combine();
?>
