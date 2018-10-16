<?php

function linearEquation($a,$b){
    $result = '';
    if($a == 0){
        $result = 'Số a phải khác 0';
    }
    else{
        $result = 'Phương trình có nghiệm là:<br>x = '.-$b/$a;
    }
    return $result;
}

echo linearEquation(2,6);

?>
