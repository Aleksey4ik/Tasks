<?php

// Тема 4, задание 1, задача 8
// Написать программы реализующие ниже следующие алгоритмы с использованием if и while.  
// Условие: Вывести на экран все числа от 0 до N, не превосходящих N и не делящихся ни на одно из чисел 2,3,5.  Значение N вводится с клавиатуры. 

    $a = 0;
    $N = 123;

    while($a <= $N) {
        if($a % 2 != 0 && $a % 3 != 0 && $a % 5 != 0) {
            echo $a.'__';
        }
        $a++;
    }
