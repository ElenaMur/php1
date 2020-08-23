<?php
/*6. *С помощью рекурсии организовать функцию возведения числа в степень. Формат: function power($val, $pow), где $val – заданное число, $pow – степень.*/

function power($val, $pow) {
    if ($pow > 0) {         //целая положительная степень
        return $val * power($val, $pow-1);
    }
    elseif ($pow == 0) {    //степень = 0
        return 1;
    }
    else {                  //целая отрицательная степень
        return power(1/$val, -$pow); 
    }
}
    
//проверка
echo power(2, 3).'<br>';
echo power(2, -2).'<br>';
echo power(2, 0).'<br>';

?>