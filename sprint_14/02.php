<?php
 
 // Первые несколько задач мы сделаем реально полезными и напишем хелперы (helpers) - функции, которые позволяют упростить работу с массивами. Более того, при дальнейшем изучении фреймворков вы обязательно столкнетесь с такими хелперами. 


// Task 02
// Напишите функцию, которая принимает аргументы - массив, из которого будут извлекаться данные, и имя поля - из которого данные извлекаются. Возвращает результат. Например, если функция getValue запущена так getValue($db, 'name'), то результатом будет:
// Array
// (
//     [0] => Mary
//     [1] => Wade
//     [2] => Dave
//     [3] => Riley
// )
// если функция запущена так: getValue($db, 'age'), то результатом будет:
// Array
// (
//     [0] => 24
//     [1] => 21
//     [2] => 25
//     [3] => 22
// )


$db = array (
    "1b7b" => array ("name" => 'Mary', "age" => 24),
    "412a" => array ("name" => 'Wade', "age" => 21),
    "dc77" => array ("name" => 'Dave', "age" => 25),
    "516b" => array ("name" => 'Riley', "age" => 22),
);

function getValue($arr, $field) {

}

$result = getValue($db, 'name'); 
print_r($result);