<?php

// Task 12
// Дана переменная $n. С помощью цикла while найдите сумму чисел от 0 (включительно) до $n (включительно). Cумма должна быть в переменной $s. Выведите $s;
// Например $n = 5. Нужно найти сумму 0+1+2+3+4+5 

$n = 4;
$s = 0;

# write your code under this line

$i = 0;
while ($i <= $n) {
    $s += $i;
    $i++;
}
echo $s; //10