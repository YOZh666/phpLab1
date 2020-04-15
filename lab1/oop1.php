<?php

class my_class
{
// данные :
    var $my_name;

// методы:
    function setName($name)
    {
        $this->my_name = $name;
    }

    function getName()
    {
        echo "<h2>Hello, $this->my_name</h2>";
    }

}


$obj = new my_class;
$obj->setName("Ivan");
echo $obj->my_name;
$obj->getName();
$obj->setName("Yegor");
$obj->getName();

//полиморфизм
class Base
{
    function funct()
    {
        echo "<h2>This is function of base class</h2>";
    }

    function base_funct()
    {
        $this->funct();
    }
}

class Derivative extends Base
{
    function funct()
    {
        echo "<h3>This is function of child class</h3>";
    }
}

$b = new Base();
$d = new Derivative();

$b->base_funct();
$d->funct();
$d->base_funct();












