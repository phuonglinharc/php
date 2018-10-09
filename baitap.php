<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/bt3.css">
    <!-- <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet"> -->
</head>
<body>
<?php

$url = "https://cdn.tgdd.vn/Products/Images/";

$arraySP = [
    [
        'name'=>'Samsung Galaxy J8',
        'price'=>6200000,
        'image'=>'42/153830/samsung-galaxy-j8-400x460.png'
    ],
    [
        'name'=>'OPPO F7 Youth',
        'price'=>5900000,
        'image'=>'42/156586/oppo-f7-youth-2-400x460.png'
    ],
    [
        'name'=>'Huawei Nova 3e',
        'price'=>4200000,
        'image'=>'42/154260/huawei-nova-3e-2-400x460.png'
    ],
    [
        'name'=>'Vivo V7+',
        'price'=>5200000,
        'image'=>'42/112835/vivo-v7-plus-1-400x460.png'
    ],
    [
        'name'=>' iPhone 6 32GB',
        'price'=>7200000,
        'image'=>'42/92962/iphone-6-32gb-vang-400-400x460.png'
    ],
    [
        'name'=>'iPhone 7 Plus 256GB',
        'price'=>25200000,
        'image'=>'42/87840/iphone-7-plus-256gb-jet-black-3-400x460.png'
    ],
    [
        'name'=>'Samsung Galaxy J8',
        'price'=>6200000,
        'image'=>'42/153830/samsung-galaxy-j8-400x460.png'
    ],
    [
        'name'=>'Samsung Galaxy J8',
        'price'=>6200000,
        'image'=>'42/153830/samsung-galaxy-j8-400x460.png'
    ],
    [
        'name'=>'Samsung Galaxy J8',
        'price'=>6200000,
        'image'=>'42/153830/samsung-galaxy-j8-400x460.png'
    ]
];



?>
    <div class="content">
    <?php
    $count = count($arraySP);
    for($i=0; $i<$count; $i++){
    foreach($arraySP as $key => $value){
        
    ?>
        <div class="sanpham">
            <div class="hinhsp">
                <img src="<?php echo $url.$arraySP[$i]['image']; ?>" alt="">
            </div>
            <div class="thongtin">
                <h2><?php echo $arraySP[$i]['name'];  ?></h2>
                <li>Cơ hội trúng 30 xe Wave Alpha khi trả </li>
                <li class="khuyenmai">Khuyến mãi</li>
                <li>Cơ hội trúng 30 xe Wave Alpha khi trả </li>
            </div>
            <div class="tensp"><?php echo $arraySP[$i]['name'];  ?></div>
            <div class="giasp"><?php echo $arraySP[$i]['price'];  ?></div>
        </div>
    <?php }} ?>  
    </div>
</body>
</html>