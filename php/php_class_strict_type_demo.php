<?php

class Dog {
	private $name;

	public function __construct(string $name) {
		$this->name = $name;	
	}

	public function bark() {
		echo 'my name is '.$this->name;
	}
}

class Person {
	private $name;
	private $age;
	
	public function __construct(string $name, int $age) {
		$this->name = $name;	
		$this->age = $age;
	}

	public function getName(): string {
		return $this->name;
	}

	public function getAge(): int {
		return $this->age;	
	}
}


class ClassRoom {
	private $persons;
	
	// stricted type 
	public function addPerson(Person ...$person) {
		$this->persons[] = $person;
	}

	// manually checking
	/*
	public function addPerson($person) {
		if (!$person instanceof Person) {
			throw new InvalidArgumentException("Person must be instnace of ". Person::class)	;
		}
		$this->persons[] = $person;
	}
	 */

	
	public function getPersons(): array {
		return $this->persons;	
	}
}



$p1 = new Person("James Cook", 140);
$p2 = new Person("Bob Bob", 20);
$p3 = new Person("John Doe", 30);
$d1 = new Dog("Jack");
$d2 = new Dog("Bill");

$classRoom = new ClassRoom();
$classRoom->addPerson($p1, $p2, $p3, $d1, $d2);


var_dump($classRoom->getPersons());
