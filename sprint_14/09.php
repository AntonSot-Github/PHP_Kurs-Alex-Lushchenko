<?php
 
 // Первые несколько задач мы сделаем реально полезными и напишем хелперы (helpers) - функции, которые позволяют упростить работу с массивами. Более того, при дальнейшем изучении фреймворков вы обязательно столкнетесь с такими хелперами. 


// Task 09
// Напишем полезную array_int_generate функцию, которая принимает значение длины массива и возвращает массив со сгенерированными числами от 0 до 100 указанной длинны. Например если запустить array_int_generate(3) то результатом может быть такой массив:
// Array
// (
//     [0] => 3
//     [1] => 87
//     [2] => 25
// )



function array_int_generate($n) {
   
}



$result = array_int_generate(5);
print_r($result);