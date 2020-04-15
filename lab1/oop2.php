<?php


interface myInterface
{
    public function func1();

    public function func2();
}


class myClass implements myInterface
{
    public function func1()
    {
        echo "Function1 is called" . "<br>";
    }

    public function func2()
    {
        echo "Function2 is called" . "<br>";
    }
}

$obj = new myClass;
$obj->func1();
$obj->func2();