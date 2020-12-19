<?php

// Тема 4, задание 1, задача 17
// Написать программы реализующие ниже следующие алгоритмы с использованием if, while и массивов. 
// Условие: Пользователь вводит с клавиатуры последовательность из n чисел. Значение n вводится с клавиатуры. 
// Программа записывает четные числа вводимые пользователем в первый массив, а нечетные во второй. После завершения
// работы, программа выводит пользователю содержимое каждого из массивов. (массивы могут быть избыточного размера, 
// пустые элементы будут заполнены нулями)

$arr = [-5, 2, 4, 0, 25, -3, 7, -1];
$negativeArray = [];
$positiveArray = [];
$i = 0;

while ($i < count($arr)) {
    if ($arr[$i] > 0) {
        $positiveArray[] = $arr[$i];
    } elseif ($arr[$i] < 0) {
        $negativeArray[] = $arr[$i];
    } else { }
$i++;    
}    


$i = 0;
echo "Positive array: \n";
while ($i < count($positiveArray)) {    
    echo "[$i]".'-> '.$positiveArray[$i++].'  '; 
}

$i = 0;
echo "\nNegative array: \n";
while ($i < count($negativeArray)) {    
    echo "[$i]".'-> '.$negativeArray[$i++].'  '; 
}