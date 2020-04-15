<?php

class User {
    private $name;
    private $city;
    private $id;

    function __construct($name, $city){
        $this->name = $name;
        $this->city=$city;
    }
    function setId($id){
        $this->id = $id;
    }

    public function __clone(){
        $this->id=0;
    }
}

$user1 = new User("Yegor", "Skadovsk");
$user1 -> setId(322);
$user2 = clone $user1;
var_dump($user1);
echo "<br>";
var_dump($user2);


class GetSet {
    private $num = 1;

    public function __get($name){
        echo "You get {$name}";
    }

    public function __set($name, $val){
        echo "You set {$name} to ";
    }
}
echo "<br><br>";
$obj = new GetSet();
echo $obj->number;
echo $obj->number = 322;