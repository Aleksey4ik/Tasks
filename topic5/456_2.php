<?php

function newRandomArray(int $amountElements, int $minRandom = 0, $maxRandom = 250) {    // Создание рамдомного массива
    $i = 0;
    $bigArray = [];

    for ($i=0;$i<$amountElements;$i++) {
        $bigArray[$i] = mt_rand($minRandom, $maxRandom);    
    }
    return $bigArray;
}

        function outputArray ($x)                                        // функция для вывода элементов массива в строчку 
        {
            echo " массив:";                             
                foreach ($x as $key => $value) {
                    echo "  [$key]".'-> '.$x[$key];
                }
        }

                function outputArrayWithoutKey ($x)                       // функция для вывода элементов массива в строчку без ключа
                {
                    echo " массив:";                             
                        foreach ($x as $key => $value) {
                            echo $x[$key].'  ';
                        }
                }


                        function selectionSort ($arr) {                                     // что писать после ":" если возвращаем массив?
                                                                                            // сортировка выбором
                            $max = 0;
                            $key = 0;
                            
                                for ($i=0; $i < count($arr); $i++) { 
                                        for ($j=1, $max = $arr[0], $key = 0; $j < count($arr) - $i; $j++) { 
                                            
                                                if ($max < $arr[$j]) {
                                                    $max = $arr[$j];
                                                    $key = $j;
                                                }
                                        }
                                            
                                    $arr[$key] = $arr[count($arr) -1 - $i];
                                    $arr[count($arr) -1 - $i]  = $max;  
                                }
                            
                                return $arr;
                            }

$arr = newRandomArray(20, -50, 100);                                        

echo "\n       Исходный";
//outputArray($arr);
outputArrayWithoutKey($arr);

$arrSort = selectionSort($arr); 

echo "\n\nОтсортированный";
// outputArray($arr);
outputArrayWithoutKey($arrSort);