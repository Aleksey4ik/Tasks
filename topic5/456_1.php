<?php

function newRandomArray(int $amountElements, int $minRandom = 0, $maxRandom = 250) {    // Создание рамдомного массива
    $i = 0;
    $bigArray = [];

    for ($i=0;$i<$amountElements;$i++) {
        $bigArray[$i] = mt_rand($minRandom, $maxRandom);    
    }
    return $bigArray;
}

        function outputArray ($x)                              
        {
            echo " массив:";                             
                foreach ($x as $key => $value) {
                    echo "  [$key]".'-> '.$x[$key];
                }
        }

                function sortingBubble($arr)                        // Сортировка пузырьком по убыванию
                {
                for ($i=1; $i < count($arr); $i++) { 

                    for ($j=count($arr) - 1; $j >= 1; $j--) { 

                        if($arr[$j] > $arr[$j-1]) {
                            $temporary = $arr[$j];
                            $arr[$j] = $arr[$j-1];
                            $arr[$j-1] = $temporary;
                        }
                    }
                }
                    return $arr;
                }


$arr = newRandomArray(5, -100, 100);
echo 'Исходный';
outputArray($arr);
echo "\n\nОтсортированный";
outputArray(sortingBubble($arr));
//var_dump($arr);