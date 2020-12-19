<?php

function outputArray ($x)                              // функция для вывода элементов массива в строчку 
{
    echo " массив:";                             
        foreach ($x as $key => $value) {
            echo "  [$key]".'-> '.$x[$key];
        }
}

