<?php

function PTBacNhat($a,$b){
    $result = '';
    if($a == 0){
        $result = 'Phuong trinh bac nhat so a phai khac )';
    }
    else{
        $result = 'Phuong trinh bac nhat co nghiem la:<br>x = '.-$b/$a;
    }
    return $result;
}

$ngiem = PTBacNhat(2,6);
echo $ngiem;
echo '<br>';
echo '<br>';

function PTBacHai($a,$b,$c){
    $result = '';
    $delta = pow($b,2)-(4*$a*$c);
    if($a==0){
        $result = 'Phuong trinh bac 2 so a phia khac 0';
    }
    else if($delta < 0){
        $result = 'Phuong trinh bac 2 vo nghiem';
    }
    else if($delta == 0){
        $result = 'Phương trình bac 2 có nghiệp kép x1 = x2 = '.-$b/(2*$a);
    }
    else{
        $x1 = (-$b+sqrt($delta))/(2*$a);
        $x2 = (-$b-sqrt($delta))/(2*$a);
        $result = 'Phuong trinh bac 2 co 2 nghiem phan biet la:<br> x1 = '.$x1.'<br> x2 = '.$x2;
    }
    return $result;

}

echo PTBacHai(3,4,1);
echo '<br>';
echo '<br>';

function SNT($n){
    $value = '';
    $sqrt = sqrt($n);
    if($n<2){
        return 0;
    }
    for($i=2;$i<$sqrt;$i++){
        if($n%$i == 0){
            return 0;
        }
    }
    return 1;
}
$n = 100;
echo "Day so nguyen to nho hon $n la:<br>";
if($n >= 2){
    echo '2';
}
for($i=3; $i<=$n; $i+=2){
    if(SNT($i)){
        echo (' '.$i);
    }
}


?>