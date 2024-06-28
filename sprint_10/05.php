<?php

// Task 05
// Напишите функцию f05, которая возвращает строку. Функция принимает два аргумента, который определяет количество линий и количество звездочек. Допустим запускаем функцию с аргументом f05(3, 5) то строка будучи выведена в консоль выглядит так:
/*
1_*****
2_*****
3_*****
*/
// Если запустить функцию так f05(2, 9) то возвратиться строка вида:
/*
1_*********
2_*********
*/

// Реализуйте вложенными циклами.

# write your code under this line

function f05($lines, $stars){
    for ($k = 1; $k <= $lines; $k++){
        echo $k."_";
        for ($i = 0; $i < $stars; $i++){
            echo "*";
        }
        echo "\n";
    }    
}


$res = f05(6,3);
echo ($res);