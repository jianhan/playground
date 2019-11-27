<?php

class Person {

	public $name;
	public $age;

	public function __construct($name, $age) {
		$this->name = $name;
		$this->age = $age;
	}
}

$bob = new Person("Bob", 12);
var_dump("og Bob", $bob);

$james = clone $bob;
var_dump("og James", $james);

$james->name = "James";
$james->age = 33;

var_dump("Updated James", $james);
var_dump("Bob After Updated James", $bob);


