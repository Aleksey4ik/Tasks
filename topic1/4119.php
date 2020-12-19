<?php

// Тема 4, задание 1, задача 19
// Написать программы реализующие ниже следующие бизнес задачи с использованием if, while и массивов. 
// Условие:  Программа для врача. Врач заполняет возраст всех пациентов на его участке. Программа должна 
// рассчитать врачу средний возраст пациента на участке. Количество пациентов изначально задается врачом.  

//$patientAge = [18, 34, 26, 58, 71, 23, 98, 41];

$patientAge = [];  
$amountPatients = 0;  
$i = 0;
$j = 1;   

while (!is_numeric($amountPatients) || $amountPatients < 1) {
    fwrite(STDOUT, "Enter the amount of patients: ");
    $amountPatients = trim(fgets(STDIN));
        if (is_numeric($amountPatients) && $amountPatients >= 1) break;
    echo 'Вы ввели недопустимое значение! Значение должно быть больше равное или больше 1!'."\n";
    echo 'Попробуйте еще раз!'."\n";
}

    while ($i < $amountPatients) {  
        do {
            fwrite(STDOUT, "Enter patient's age $j: ");
            $n = trim(fgets(STDIN));  
                if (!is_numeric($n)) echo 'Вы ввели недопустимое значение! Попробуйте еще раз!'."\n";
         } while (!is_numeric($n));
    $patientAge[] = $n;
    $i++;
    $j++;
    }    

        $i = 0;
        $sumAge = 0;

            while ($i < count($patientAge)) {
                $sumAge += $patientAge[$i++];    
            }

        $averageAge = round($sumAge / count($patientAge));

        echo 'Введено '.(count($patientAge)).' пациентов. Их средний возраст: '.$averageAge;

