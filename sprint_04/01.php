<?php

// Task 01
// Дана переменная $foo. Напишите условие if такое, что если $foo равна 5 то переменной $bar присваивается число 100. Протестируйте с разными значениями $foo. Выведите $bar в консоль. 
// Напоминаю под словом вывод понимается echo

$foo = 5;
$bar;

if ($foo == 5) {
    $bar = 100;
    echo $bar, "\n";//100
}

$foo = 10;
if ($foo == 5) $bar = 100;
echo $bar, "\n";//100
