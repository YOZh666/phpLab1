<?php

trait How{
    public function sayHow(){
        echo 'How ';
    }
}

trait are {
    public function sayAre(){
        echo 'are ';
    }
}

class finalClass {
    use How, are;
    public function sayFinal(){
        echo 'you?';
    }
}

$a = new finalClass();
$a-> sayHow();
$a-> sayAre();
$a-> sayFinal();
