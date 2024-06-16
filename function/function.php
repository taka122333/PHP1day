<?php
define('TAX', 1.08);

say_hello('matsumoto');
say_hello('tanaka');
say_hello('watanabe');
say_hello('katou');
// say_hello();

say_hello2();
say_hello2('kazuma');
say_hello3('matsumoto', 34);

$price = 1000;
echo $price . '<br>';

$price2 = calc($price);
echo $price2;
echo '<br>';

echo $price . '<br>';



function say_hello($name) {
    echo 'hi ' . $name . '<br>';
    echo 'your name is ' . $name . '<br>';
    echo '<br>';
}

function say_hello2($name = 'hoge') {
    echo 'hi ' . $name . '<br>';
    echo 'your name is ' . $name . '<br>';
    echo '<br>';
}

function say_hello3($name, $age) {
    echo $name . ' is ' . $age . ' yours old' . '<br>';
    echo '<br>';
}

function say_weather($fine_flg) {

}

function calc($price) {
    $price = 1.2 * $price;
    $price2 = $price * TAX;
    return $price2;
}