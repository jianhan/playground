<?php

interface Talk {
    public function talk(): void;
}

abstract class Person implements Talk {
    public function talk(): void {
        var_dump("I am talking");
    }

    abstract public function getName(): string;
}

class Male extends Person {

    private $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getName(): string {
        return "Male ".$this->name;
    }
}


class Female extends Person implements Talk {

    private $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getName(): string {
        return "Female ".$this->name;
    }
}

function t(Talk $p) {
    $p->talk();
}

$m = new Male("Jim");
$f = new Female("Jill");

t($m);
t($f);

?>
