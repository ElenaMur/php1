<?php
/*
3. Реализовать основные 4 арифметические операции в виде функций с двумя параметрами. Обязательно использовать оператор return.
4. Реализовать функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation), где $arg1, $arg2 – значения аргументов, $operation – строка с названием операции. В зависимости от переданного значения операции выполнить одну из арифметических операций (использовать функции из пункта 3) и вернуть полученное значение (использовать switch).
*/

function Summation($a, $b) {
    return $a + $b;
}

function Subtraction($a, $b) {
    return $a - $b;
}

function Multiplication($a, $b) {
    return $a * $b;
}

function Division($a, $b) {
    return $a / $b;
}

function mathOperation($arg1, $arg2, $operation) {
    switch ($operation){
        case 'Summation': echo Summation($arg1, $arg2); break;
        case 'Subtraction': echo Subtraction($arg1, $arg2); break;
        case 'Multiplication': echo Multiplication($arg1, $arg2); break;
        case 'Division': echo Division($arg1, $arg2); break;
        default: break;
    }
}

//проверка
mathOperation(5, 6, 'Summation'); echo '<br>';
mathOperation(5, 6, 'Subtraction'); echo '<br>';
mathOperation(5, 6, 'Multiplication'); echo '<br>';
mathOperation(5, 6, 'Division'); echo '<br>';

?>