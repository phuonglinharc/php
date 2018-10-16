<?php

function quadraticEquation($a,$b,$c){
    $result = '';
    $delta = pow($b,2)-(4*$a*$c);
    if($a==0){
        $result = 'Vui lòng nhập số a khác 0';
    }
    else if($delta < 0){
        $result = 'Phương trình vô nghiệm';
    }
    else if($delta == 0){
        $result = 'Phương trình có nghiệm kép:<br>x1 = x2 = '.-$b/(2*$a);
    }
    else{
        $x1 = (-$b+sqrt($delta))/(2*$a);
        $x2 = (-$b-sqrt($delta))/(2*$a);
        $result = 'Phương trình có 2 nghiệm phân biệt:<br> x1 = '.$x1.'<br> x2 = '.$x2;
    }
    return $result;

}

echo quadraticEquation(3,4,1);

?>