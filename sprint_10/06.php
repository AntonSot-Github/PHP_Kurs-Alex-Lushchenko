<?php

// Task 06
// Напишите функцию f06, которая возвращает строку. Функция принимает аргумент, который определяет начальное число в строке. Допустим запускаем функцию с аргументом f06(5) то строка будучи выведена в консоль выглядит так:
/*

1_543210
2_543210
3_543210

*/
// Если запустить функцию так f06(9) то возвратиться строка вида:
/*

1_9876543210
2_9876543210
3_9876543210

*/

// Реализуйте вложенными циклами.

# write your code under this line

function f06($fnum){
    for ($k = 1; $k <= 3; $k++){
        echo $k."_";
        for ($i = $fnum; $i >= 0; $i--){
            echo $i;
        }
        echo "\n";
    }
}


$res = f06(6);
echo ($res);