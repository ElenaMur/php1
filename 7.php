<?php
/*7. *Написать функцию, которая вычисляет текущее время и возвращает его в формате с правильными склонениями, например:
22 часа 15 минут
21 час 43 минуты*/ 

function CurrentTimeRU($h, $m) {
    $time = 'час';
    $minutes = 'минут';
    
if($h == 00 || ($h >= 05 && $h <= 20)) {
    $time = $time.'ов';
}
    elseif (($h >= 02 && $h <= 04) || ($h >= 22 && $h <= 24)) {
        $time = $time.'а';
    }
   
 if($m == 01 || $m == 21) {
    $minutes = $minutes.'а';
 }
    elseif (($m >= 02 && $m <= 04) || ($m >= 22 && $m <= 24)) {
        $minutes = $minutes.'ы';
    }
    
    return $h." ".$time." ".$m." ".$minutes;
}  

$currH = date("H");
$currM = date("m");
echo "Текущее время: ".CurrentTimeRU($currH, $currM); 

?>