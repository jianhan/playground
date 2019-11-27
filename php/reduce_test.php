<?php

class Person {

    private $name;

    private $age;

    private $hobbys;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function getName(): string {
        return $this->name;
    }

    public function getAge(): int {
        return $this->age;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function myHobbys() {
        if ($this->hobbys === null) {
            echo 'NULL';
        }
        var_dump($this->hobbys);

    }
}

$bob = new Person('bob', 12);

$bobClone1 = $bob;
$bobClone2 = $bobClone1;
$bobClone3 = $bobClone2;

$bobClone3->setName("BOB CLONEEEEE!!!");

var_dump($bob);
exit;
$jim = new Person('jim', 13);
$jake = new Person('jake', 14);
$steve = new Person('steve', 15);

$persons = [
    $bob,
    $jim,
    $jake,
    $steve
];

function extractPerson(Person $person): array {
    return [
        'name' => $person->getName(),
        'age' => $person->getAge(),
    ];
}

$output = array_reduce($persons, function($acc, $curr) {
    $acc[$curr->getAge()] = extractPerson($curr);
    return $acc;
}, []);

// var_dump($output);

$testSubject = new Person('jim', 12);
# $clone = $testSubject;
$clone = clone $testSubject;

$clone->setName('jim clone');
# var_dump($testSubject);
#

function setName(Person $person, $name) {
    $person->setName($name);
}

$person2 = new Person('jill', 32);
$person2->myHobbys();
setName($person2, 'Jilly');

?>
