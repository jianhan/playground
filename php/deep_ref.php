<?php

class PlayStation {

    private $numControllers = 0;

    private $name;

    private $make;

    public function setNumControllers(int $numControllers = 0) {
        $this->numControllers = $numControllers;
    }

    public function setName(string $name) {
        $this->name = $name;
    }

    public function setMake(string $make) {
        $this->make = $make;
    }
}

class Car {


    private $make;

    private $playStation;

    public function setMake(string $make) {
        $this->make = $make;
    }

    public function setPlayStation(PlayStation $playStation) {
        $this->playStation = $playStation;
    }

    public function getPlayStation(): PlayStation {
        return $this->playStation;
    }
}

$myPlaystation = new PlayStation();
$myPlaystation->setNumControllers(2);
$myPlaystation->setName("jian's Playstatoin");
$myPlaystation->setMake("Australia");

$jiansCar = new Car();
$jiansCar->setMake('USA');
$jiansCar->setPlayStation($myPlaystation);

$bobsCar = new Car();
$bobsCar->setMake('Australia');
$bobsCar->setPlayStation($myPlaystation);

$copyOfJiansCar = $jiansCar;
$copyOfJiansCar = $bobsCar;
$copyOfJiansCar->setMake('German');

var_dump($jiansCar);



/**
$cloneCar = clone $jiansCar;
$cloneCar->setMake('China');
$cloneCar->getPlayStation()->setMake("Japan");
var_dump(
    '=============CLONE PS============',
    $cloneCar->getPlayStation(),
    '=============Original PS============',
    $jiansCar->getPlayStation(),
    '=============Clone Car============',
    $cloneCar,
    '=============Original Car============',
    $jiansCar
);
**/

?>
