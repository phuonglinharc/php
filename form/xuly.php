<?php
$a = $_GET['txtNumberA'];
$b = $_GET['txtNumberB'];
$result = '';

    if($a == '' || !is_numeric($a)){
        echo "Please insert number A";
    }
    else if($b == '' || !is_numeric($b)){
        echo "Please insert number B";
    }
    else{
        if($_get['pheptinh']= '+'){
            $result =  $a + $b;
        }
        else if($_get['pheptinh']= '-'){
            $result =  $a - $b;
        }
        else if($_get['pheptinh']= '*'){
            $result =  $a*$b;
        }
        else if($_get['pheptinh']= '/'){
            if($b == 0){
                echo "khong co phep chia cho 0";
            }
            $result =  $a/$b;
        }
        else if($_get['pheptinh']= '%'){
            if($b == 0){
                echo "khong co phep chia cho 0";
            }
            $result =  $a%$b;
        }
    }
    echo $result;

    echo $_get['pheptinh'];






?>