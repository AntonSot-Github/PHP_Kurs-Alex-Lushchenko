<?php

// Task 03
// Напишите функцию f03, которая возвращает строку. Строка будучи выведена в консоль выглядит так:
/*
1_***
2_***
3_***
*/
// Реализуйте вложенными циклами.

# write your code under this line

function f03(){
    for($k = 1; $k <= 3; $k++){
        echo $k."_";
        for ($i = 0; $i < 3; $i++){
            echo "*";
        }
        echo "\n";
    }
}


$res = f03();
echo ($res);