<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Veces números repetidos</title>
</head>
<body>
<?php
    $array = [1, 2, 3, 5, 1, 3, 5, 7, 9, 1, 2, 7, 9, 5, 4];
    echo "Array original: <br>";
    print_r($array);
    echo "<br><br>";

    $arrayContador = array();

    foreach ($array as $valor){
        if(array_key_exists($valor, $arrayContador)){
            $arrayContador[$valor]++;
        }else{
            $arrayContador[$valor] = 1;
        }
    }
    
    ksort($arrayContador);
    echo "Contador de veces repetidas:<br>";
    
    foreach ($arrayContador as $clave => $valor){
        /*if($valor > 1){
            echo "<br>El número $clave se repite $valor veces<br>";
        }else{
            echo "<br>El número $clave se repite $valor vez<br>";
        }*/
        //Alternativa con ternario:
        echo "<br>El número $clave se repite $valor ".($valor==1?"vez":"veces");
    }
    
?>
</body>
</html>
