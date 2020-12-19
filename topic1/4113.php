<?php

// Тема 4, задание 1, задача 13
// Написать программы реализующие ниже следующие бизнес задачи с использованием if и while.
// Условие: Написать программу для ателье учитывающую расход ткани. При запуске программы, пользователь вводит общий размер имеющейся ткани. Дальше                
// пользователь последовательно вводит размеры кусков которые нужно отрезать. Программа, при каждом “отрезе”, должна выводить количество                
// оставшейся ткани. Если пользователь пытается отрезать больше чем ткани есть - программа предупреждает его об этом. Если запрашиваемый отрез                    
// меньше 1 - программа тоже предупреждает, что отрезать так мало не получится. Программа завершается когда закончена вся ткань. 

        $fabricLength = 98;
        $Segmentlength = [5, 12, 30, 0.5, 20, 29, 55];
        $i = 0;

        echo "Fabric length: $fabricLength\n";

        

        while($i < count($Segmentlength)) {
            if ($Segmentlength[$i] > 1 && $Segmentlength[$i] <= $fabricLength) {
                $fabricLength -= $Segmentlength[$i];
                echo 'Cut a piece №'.($i+1)." length: $Segmentlength[$i]\n";
                echo "Remaining fabric: $fabricLength\n";
            } elseif ($Segmentlength[$i] > $fabricLength) {
                echo 'Cut a piece №'.($i+1)." length: $Segmentlength[$i]\n";
                echo "We cannot cut, the length of the piece is longer than the remainder: $fabricLength";
                break 1;
            } else {
                echo 'Cut a piece №'.($i+1)." length: $Segmentlength[$i]\n";
                echo "We don't cut, the length must be greater 1\n";
            }
                   
        $i++;    
        }
