<?php

// Тема 4, задание 1, задача 12
// Написать программы реализующие ниже следующие бизнес задачи с использованием if и while. 
// Условие: Написать программу которая проверяет, является ли введенное пользователем число, числом Фибоначчи. 

    $fibo1 = 0;
    $fibo2 = 1;
    $interFibo = 21;

    
    while ($fibo1 <= $interFibo) {   
        $fibo1 = $fibo1 + $fibo2;         
        $fibo2 = $fibo1 - $fibo2;
            if($fibo1 == $interFibo) {
                echo "Number $interFibo is a fibo1 number!";
                break 1;
            }               
    }   
    
    if($fibo1 > $interFibo) {
        echo 'NO!';
    }
