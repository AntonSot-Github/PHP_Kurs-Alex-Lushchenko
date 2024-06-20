<?php

// Task 03
// Дана переменная $foo. Напишите условие if такое, что если $foo четное - в переменную $r присваивается строка  'even', если нечетное то 'odd'. Если $foo равна нулю, то присваивается 'zero'. Всегда срабатывает только один вариант.
// Напоминаю под словом вывод понимается echo

$foo = 10;
$r;

if ($foo == 0) $r = "zero";
elseif ($foo % 2 != 0) $r = "odd";
elseif ($foo % 2 == 0) $r = "even";

echo $r, "\n";//"even"

//Другое решение с использованием AND
if ($foo % 2 == 0 AND $foo != 0) $r = "even";
elseif ($foo % 2 != 0 AND $foo != 0) $r = "odd";
elseif ($foo == 0) $r = "zero";

echo $r, "\n";//"even"