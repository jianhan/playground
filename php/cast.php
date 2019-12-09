<?php

class Person {

    private $name;

    private $age;

}

$o = new stdClass();

$o->name = 'john';
$o->age = 11;


$john = (Person) $o;


?>
