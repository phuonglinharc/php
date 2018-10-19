<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    input{
        height: 30px;
        width: 80px
    }
    button,select{
        height: 35px;
        width: 50px
    }
    button{
        width: 100px
    }
</style>

<body>
    <form action="xuly.php" method="get">
        <input type="text" placeholder="Enter number a" name="txtNumberA">
        <select class="pheptinh" name="pheptinh">
            
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
            <option value="%">%</option>
        </select>
        <input type="text" placeholder="Enter number b" name="txtNumberB">
        <button>Calculate</button>
        <input type="text" placeholder="Result" name="result">
</body>
</html>