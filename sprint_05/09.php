<?php

// Task 09
// Дана переменная $n и $stamp. Сформируйте строку $out в которой stamp будет повторяться число раз указанное в $n. 
// Например, если $n равен 3 а $stamp = '**_' ,  то в $out должна быть строка '**_**_**_' 

$n = 2;
$stamp = '***_';
$out = '';

for ($i = 0; $i < $n; $i++){
    $out .= $stamp;
}
echo $out;// ***_***_