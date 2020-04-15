<?php

abstract class Animal {
    private $name;

    public function __construct($name) {
        $this->name = $name;
    }

    abstract public function say();

    public function getName() {
        return $this->name;
    }
}

class Cat extends Animal {

    public function __construct($name) {
        parent::__construct($name);
    }

    public function say() {
        echo "meow-meow!";
    }
}

class Dog extends Animal {

    public function __construct($name) {
        parent::__construct($name);
    }

    public function say() {
        echo "auf-auf!";
    }
}

$c = new Cat("Murzik");
$d = new Dog("Sharik");
echo $c->getName();
echo"    ";
$c->say();
echo "<br><br>";
echo $d->getName();
echo"    ";
$d->say();