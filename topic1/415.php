<?php

// Тема 4, задание 1, задача 5
// Написать программы реализующие ниже следующие алгоритмы с использованием if и while.  
// Условие: Вывести на экран кол-во отрицательных, кол-во положительных и кол-во нулей среди n введенных пользователем чисел чисел. Значение n вводится с клавиатуры.
    
    $arr = [-5, 0, -2, 12, 0, 0, 5, -2, -25, 1, 0, 0];
    $i = 0;
    $j = 0;

    $sumMinus = 0;
    $sumPlus = 0;
    $sumNull = 0;

        foreach ($arr as $value) {
            $i++;
        }
        
        while($j < $i ) {
            if($arr[$j] < 0) {
                $sumMinus++;
            } elseif ($arr[$j] == 0) {
                $sumNull++;
            } else {
                $sumPlus++;
            }$j++;
        }

        echo "amount of elements: $i\n";
        echo "positive: $sumPlus\n";
        echo "negative: $sumMinus\n";
        echo "nulls: $sumNull";




