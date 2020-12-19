<?php

// Пользователь вводит с клавиатуры слово. Программа выводит на экран                  
// сообщение “Polindrom” если введенное пользователем слово является              
// палиндромом или “NE Polindrom” в противном случае.  

function wordContrary ($word): string
{
    $wordNew = '';
    //$word = trim($word);

        for ($i=mb_strlen($word); $i >= 0; $i--) { 
            $wordNew .= mb_substr($word, $i, 1); 
        }
     return $wordNew;
}

$word = readline("Введите слово: ");

$wordContrary = wordContrary($word);

    if ($word == $wordContrary) {
        echo 'Polidrom';
    } else {
        echo 'no Polidrom!';
    }

    
