<?php

class Book {

    private $title;

    public function __construct(string $title) {
        $this->title = $title;
    }

    public function setTitle(string $title) {
        $this->title = $title;
    }

    public function getTitle(): string {
        return $this->title;
    }
}

class Person {
    private $books = [];

    public function __construct(array $books) {
        $this->books = $books;
    }

    public function loopBooks(){
        foreach($this->books as $book) {
            var_dump($book->getTitle());
        }
    }

    public function sayHello() {
        echo "I MA A PERSON";
    }
}

$person = new Person([new Book('Book 1'), new Book('Book 2'), new Book('Book 3')]);

$func = [$person, 'sayHello'];
$func();

$test = [1, 'ONE', 2, [1,2,3]];

list($a, $b, $c, $d, $e) = $test;

var_dump($a, $b, $c, $d, $e);


?>
