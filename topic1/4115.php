<?php

// Тема 4, задание 1, задача 15
// Написать программы реализующие ниже следующие алгоритмы с использованием if, while и массивов. 
// Условие: Пользователь вводит с клавиатуры n чисел (n вводится с клавиатуры). Программа должна выбрать из них самое большое и 
// самое маленькое из введенных и вывести на экран. 

$inputValues = [25, 5, 0, 25, 101, 17, -8, 5, 205];
$i = 0;
$max = 0;
$min = 0;
//$j = count($inputValues) - 1;

while ($i < count($inputValues)) {
    if ($max < $inputValues[$i]) {
        $max = $inputValues[$i];
    }    
    if ($min > $inputValues[$i]) {
        $min = $inputValues[$i];
    }
$i++;
}

echo "Maximum number: $max\n";
echo "Minimum number: $min"; 