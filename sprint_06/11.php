<?php

// Task 11
// Дана переменная $n. Сформируйте строку $out в которой выводится следующий код 0_**_1_*_2_**_3_*_ т.е. выводится номер итерации 0 1 2 3 и т.д, если итерация четная то добавляется _**_, если нечетная то _*_ . Конечное выводимое число определяется $n (включительно). Решите с while.
// Например $n = 5, то в $out должна быть строка 0_**_1_*_2_**_3_*_4_**_5_*_

$n = 2;
$out ='';

# write your code under this line

$i = 0;
while ($i <= $n) {
    if ($i % 2 == 0) $out .= $i.'_**_';
    else $out .= $i.'_*_';
    $i++;
}
echo $out; //0_**_1_*_2_**_