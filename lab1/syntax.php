<?php

//переменные

$var = "5";
$var1 = 5;
echo(gettype($var));
echo "<br>";
echo(gettype($var1));
echo "<br>";
echo "<br>";


//работа со строками

$str = "This is some text";
echo $str, "<br>";

/* Добавление к ней другой строки. */
$str .= " with some extra text";
echo $str, "<br>";


$num = 9;
$str = "<p>Число: $num</p>";
echo $str;


$num = 9;
$str = '<p>Число: $num</p>';
echo $str;


$num = 9;
$str = 'Число:' . $num;
echo $str;
echo "<br>", "<br>";


// Получение первого символа строки
$str = "This is test.";
$first = $str[0];
echo $first, "<br>";

// Получение последнего символа строки.
$str = 'This is test.';
$last = $str[strlen($str) - 2];
echo $last, "<br>", "<br>";

//немного конкатенации
$a = 5;
$b = "5";
$a .= $b;
echo $a, "<br>", "<br>";

//использование foreach
$name_arr = array('Yegor', 'Artem', 'John', 'Steve');
foreach ($name_arr as $name) {
    echo 'Hello, ' . $name;
    echo "<br>";
}

$num_arr = array(1, 3, 7, 9);
foreach ($num_arr as &$num) {
    $num++;
    echo $num . " ";
}

//ассоциативные массивы
echo "<br>", "<br>", "<br>";
$menu = array(
    "Hamburgers" => "3",
    "Pasta" => "2",
    "Cola" => "4",
    "French Fries" => "5"
);

echo $menu['Hamburgers'];
echo "<br>", "<br>";

foreach ($menu as $item => $item_count) {
    echo "Item=" . $item . ", Value=" . $item_count;
    echo "<br>";
}

//использование explode
echo "<br>";
$hamburger = "bread,meat,cheese,cucumber,tomato,sauce";
$ham_elements = explode(",", $hamburger);
echo $ham_elements[0];
echo "<br>";
echo $ham_elements[2];
echo "<br>", "<br>";

//использование implode
$hamburger = array('bread', 'meat', 'cheese', 'cucumber', 'tomato', 'sauce');
$comma_ham = implode(", ", $hamburger);
echo $comma_ham;
echo "<br>", "<br>";
//пример разыменованния
$var = 35;
$var2 = "var";
echo $$var2;

echo "<br>", "<br>";

//сравнение

var_dump(0 == "a"); //строка преобразуется к числу
echo "<br>";
var_dump(11 == "011"); //строка преобразуется к числу
echo "<br>";
var_dump(0 === "a"); //строка преобразуется к числу
echo "<br>";
var_dump(0 == NULL); //строка преобразуется к числу
echo "<br>";
var_dump(0 === NULL); //строка преобразуется к числу
echo "<br>", "<br>", "<br>";

//приведение типов
$test = "1";
echo $test . "<br>";
$test *= 2;
echo $test . "<br>";
$test *= 2.2;
echo $test . "<br>";
$test = 1 * "322 some text";
echo $test . "<br>";
$test = 3 * "322 some text";
echo $test . "<br>";

echo "<br>";

$test = 10;
$test2 = (boolean)$test;
echo $test2;

