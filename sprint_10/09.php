<?php

// Task 09
// Напишите функцию f09, которая возвращает строку. Строка будучи выведена в консоль выглядит так:
/*

*
**
***
****
*****
******

*/
// Реализуйте вложенными циклами.

# write your code under this line

function f09(){
    $str = "";
    for ($k = 1; $k <= 6; $k++){
        for ($i = 0; $i < $k; $i++){
            $str .= "*";
        }
        $str .= "\n";
    }
    return $str;
}


$res = f09();
echo ($res);
