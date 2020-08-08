<?php 
    $number1 = 10;
    $number2 = 20;

    function add($num1,$num2){
        return $num1 + $num2;
    }
    function sub($num1,$num2){
        return $num1 - $num2;
    }
    function mult($num1,$num2){
        return $num1 * $num2;
    }
    function div($num1,$num2){
        return $num1 / $num2;
    }

    $operator='/';
    switch($operator){
        case '+':
            add($number1,$number2);
        break;
        case '-':
            sub($number1,$number2);
        break;
        case '*':
            mult($number1,$number2);
        break;
        case '/':
            div($number1,$number2);
        break;
        default:
        echo "Operator not defined";
    
    }
?>