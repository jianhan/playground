<?php

trait SayHello {
	public function say()
	{
		echo "Hello From Say Hello";
	}

	public function sayWithName() {
		echo "Hello".$this->name;
	}
}

trait SayGoodBye {
	public function say() {
		echo "Good Bye From Say Good Bye";
	}
}

class Person {
	use SayHello;
	private $name;

	public function __construct($name) {
		$this->name = $name;
	}

}

$p = new Person("Jim");

$p->sayWithName();
