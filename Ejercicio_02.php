<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
    $datos = array(1,8,3);
    $datosOrden = array();
    for ($i=0; $i < count($datos); $i++) { 
        if ($datos[$i]< $datos[$i+1] && $datos[$i+1]!=0) {
            if ($datos[$i]<$datos[$i+2] && $datos[$i+2]!=0) {
                $datosOrden[$i]=$datos[$i];
                if ($datos[$i+1]<$datos[$i+2] && $datos[$i+2]!=0) {
                    # code...
                }
            }   elseif ($datos[$i] > $datos[$i+2] && $datos[$i+2]!=0){
                    $datosOrden[$i]=$datos[$i+2];
                    $datosOrden[$i+1]=$datos[$i];
                    $datosOrden[$i+2]=$datos[$i+1];
            } 
            
        } 
    }
    ?>
</body>
</html>