<?php

class Person {

    private $toys = [];

    private $name;

    private $age;

    public function __construct(string $name, int $age, array $toys = []) {
        $this->name = $name;
        $this->age = $age;
        $this->toys = $toys;
    }

    private function changeToy(string $toy): string {
        return "CHANGED ".$toy;
    }

    private function generateToy($accumulator, $current): array {
        $accumulator[] = 'GEN TOY '.$current;

        return $accumulator;
    }

    public function generateToys(): array {
        $fn = [$this, changeToy];
        return array_reduce(
            range(1, 10),
            static function ($accumulator, $current) use ($fn): array {
                $accumulator[] = $fn('GEN TOY '.$current);

                return $accumulator;
            },
            []
        );
    }
}

$p = new Person("test", 12);
var_dump($p->generateToys());

?>
