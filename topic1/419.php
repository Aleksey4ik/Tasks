<?php

// Тема 4, задание 1, задача 9
// Написать программы реализующие ниже следующие алгоритмы с использованием if и while.  
// Условие: Вывести на экран сумму квадратов всех нечетных чисел из последовательности от a до b. Программа должна проверять что пользователь ввел a < b. 

    $a = 3;
    $b = 61;
    $sum = 0;

    if($a < $b) {
        while ($a <= $b) {
            if($a % 2 != 0) {
                $sum += $a ** 2;
            }
        $a++;    
        }
    echo "Сумма квадратов нечетных чисел равна $sum";    
    } else {
        echo 'Вы ввели неверный диапазон! Надо ввести а меньше b';
    }
