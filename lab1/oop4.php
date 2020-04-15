<?php

class BaseClass {
    function __construct() {
        print "Конструктор класса BaseClass\n";
    }
}

class SubClass extends BaseClass {
    function __construct() {
        parent::__construct();
        print "Конструктор класса SubClass\n";
    }
}

class OtherSubClass extends BaseClass {
    // inherits BaseClass's constructor
}

// In BaseClass constructor
$obj = new BaseClass();

// In BaseClass constructor
// In SubClass constructor
$obj = new SubClass();

// In BaseClass constructor
$obj = new OtherSubClass();

echo "<br><br><br>";
class MyDestructableClass {
    function __construct() {
        print "Конструктор<br>";
        $this->name = "MyDestructableClass";
    }

    function __destruct() {
        print "Уничтожается " . $this->name . "\n";
    }
}

$obj = new MyDestructableClass();