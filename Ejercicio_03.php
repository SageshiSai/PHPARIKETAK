<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
    $v1= 2;
    $v2= 2;
    $v3= 3;
    echo "Los numeros son ".$v1.", ".$v2." +y ".$v3.". <br>";
    if($v1 == $v2){
        echo "Dos de los números son iguales a ".$v1;
    } elseif($v2 == $v3){
        echo "Dos de los números son iguales a ".$v2;
    } elseif($v1 == $v3){
        echo "Dos de los números son iguales a ".$v1;
    } else {
        echo "Ningun numero es igual";
    }
    ?>
</body>
</html>