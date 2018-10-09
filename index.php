<?php

// $string = "hello world!"; //kieu chuoi
// $a = 12;//kieu integer
// $a = 12.5;// kieu float
// $bool = false; //kieu boolean
// $arr = [12,34,56,78,'name']; //kieu mang
// class User{
//     var $name = "Linh Pham";
// }
// $user = new User;
// echo gettype($user);



// // var_dump($bool); //in ra gia tri cua bien (bao gom kieu du lieu)
// print_r($arr); //in ra gia tri cua mang

// echo gettype($string);
// echo $string;

// $arr1 = [12,34,56,'LinhPham', true];
// echo $arr1[3];

// $arr1 = [
//     'key1'=>12,
//     'key2'=>34,
//     'key3'=>'LinhPham'
// ];

// $count = count($arr1);
// for($j = 1; $j <= $count; $j++){
//     echo $arr1['key'.$j];
//     echo "<br>";
// }
// // echo $arr1['key3'];

// // $arr2 = array(34,56,78,'PhuongLinh',false);

// // for($i=0;$i<5;$i++){
// //     var_dump($arr2[$i]);
// // }

// // foreach($arr1 as $key => $value){
// //     echo $key. ': '.$value;
// //     echo "<br>";
// // }

// foreach($arr1 as $key => $value){
//     if($key == 'key2'){
//         $arr1['key4'] = $arr1[$key];
//         unset($arr1[$key]); //huy gia tri
//     }
// }


// $arr = ['No', 'description', 'website', 'or', 'topics', 'provided'];

// print_r($arr);
// echo "<br>";

// foreach($arr as $key => $value){
//     echo $value." ";
// }

// echo implode(' ', $arr); // ghep mang thanh chuoi

//echo "<pre>" truoc print_r de mang rot xuong tung dong

// $str = 'No description website or topics provided';
// $arr3 = explode(' ', $str);
// // echo ($arr3); // dang do

// if(array_search('website', $arr3)){//tra ve key cua gia tri trong mang kiem tra phan tu co ton tai trong mang khong
//     echo 'yes';
// }
// else var_dump(array_search('website', $arr3));

array_key_exists('key2', $arr) // kiem tra co ton tai 'key2' trong mang $arr

in_array(99, $arr) // kiem tra so 99 co ton tai trong mang khong => true/false


?>