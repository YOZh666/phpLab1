<?php

class imOne {
    private static $instance;
    private $field;

    private function __construct()
    {
    }

    public static function getInstance() : imOne
    {
        if (self::$instance === null){
            self::$instance = new self();
        }

        return self::$instance;
    }

    private function __clone()
    {
        // TODO: Implement __clone() method.
    }

    private function __wakeup()
    {
        // TODO: Implement __wakeup() method.
    }

    public function getField(){
        return $this->field;
    }
    public function setField($field){
        $this->field = $field;
    }

}



$instance = imOne::getInstance();
$instance->setField(100);
$instance2 =imOne::getInstance();
var_dump($instance2);
echo "<br><br>";
var_dump($instance === $instance2);