<?php

// * Вывести на экран список чисел в диапазоне от a до b которые относятся к                              
// совершенным числам. Значение a, b вводится с клавиатуры. (не                  
// удивляйтесь, ваш компьютер с трудом сможет быстро вычислить даже 5-е из                      
// последовательности ) ) 

include 'functions.php';

    do {
        $a = trim(readline("Введите число - начало диапазона: "));
        $b = trim(readline("Введите число - конец диапазона: "));
    }
    while ($a < 1 || $b < 1 || $a >= $b);

        $start = microtime(true);

        function perfectNumber($s): bool
        {   
            $sum = 0;
            for ($i=1; $i < $s; $i++) { 
                
                if ($s % $i == 0) {$sum+=$i;}
            }

            if ($s == $sum) {return true;}     
            return false;
        }

                $arrayPerfectNumbeers = [];

                for ($i=$a; $i < $b; $i++) { 
                    
                    if (perfectNumber($i)) {$arrayPerfectNumbeers[] = $i;} 
                }


                    outputArray($arrayPerfectNumbeers);
                    echo "\n\n";
                    echo 'Время выполнения скрипта: '.(round(microtime(true) - $start, 2)).' сек.';

