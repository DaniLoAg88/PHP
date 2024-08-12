<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Funciones PHP</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<header>
    <?php
    include "header.php";
    ?>
</header>
<?php
    /**
    * PHP como todos los lenguajes tiene mas de 1000 funciones integradas, pero tú puedes crear tus propias funciones.
    */

    // Función básica... Tiene un identificador o nombre (no distingue mayúsculas y minúsculas, pero es recomendable no usarlas y llamar tal cuál se llama. Ej. más adelante)
    function saltar()
    {
        echo "<br>";
    }

    echo "Antes del salto";
    saltar();
    echo "Después del salto";
    Saltar(); //Con mayúscula también funciona


    // Función con parámetros
    function saltarYescribir($texto){
        echo "<br>$texto";
    }

    $linea = 5;
    saltarYescribir("En un lugar de La Mancha. Línea $linea");

    /* PRÁCTICA... Crea dos funciones que al pasar un texto una devuelva en mayúsculas y otra en minúsculas */
    function pasarAminusculas($texto){
        return strtolower($texto);
    }
    function pasarAmayusculas($texto){
        return strtoupper($texto);
    }
    
    $mensaje = "Es una prueba de las funciones PHP";
    saltarYescribir(pasarAminusculas($mensaje));
    saltarYescribir(pasarAmayusculas($mensaje));
    
    // En las funciones se pueden enviar varios parámetros
    function registro($nombre, $apellido, $telefono){
        $registroAlumno = ["nombre"=>$nombre, "apellido"=>$apellido, "telefono"=>$telefono];
        return $registroAlumno;
    }
    
    $registroGeneral[] = registro("Francisco", "González", "645301895");
    saltar();
    print_r($registroGeneral);
    // array_push() -> inserta al final del array especificado los valores que le pasamos
    array_push($registroGeneral, registro("Luis", "Perez", "645690548"));
    saltar();
    print_r($registroGeneral);
    // Pero también podemos meterlo directamente asignando valor
    $registroGeneral[] = registro("Alfredo", "García", "645192395");
    saltar();
    print_r($registroGeneral);
    saltarYescribir("Sólo 1 alumno => ");
    print_r($registroGeneral[1]);
    saltar();
    saltar();
    
    echo "
        <table>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Teléfono</th>
            </tr>
    ";
    
    foreach($registroGeneral as $indice=>$valor){
        echo "
            <tr>
                <td>$indice</td>
        ";
        foreach($valor as $dato){
            echo "<td>$dato</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
    
    
    saltarYescribir("<hr>");
    include "mensaje.php";
    saltarYescribir("<hr>");
    include_once "mensaje.php";
    saltarYescribir("<hr>");
    require "mensaje2.php";
    saltarYescribir("<hr>");
    require_once "mensaje2.php";
    saltarYescribir("<hr>");
    function tabla4col($col1,$col2,$col3,$col4,$array):void{ //El void se refiere al tipo de    valor que devulve la función, en éste caso no devuelve nada
        echo "
        <table>
            <tr>
                <th>$col1</th>
                <th>$col2</th>
                <th>$col3</th>
                <th>$col4</th>
            </tr>
    ";

        foreach($array as $indice=>$valor){
            echo "
            <tr>
                <td>$indice</td>
        ";
            foreach($valor as $dato){
                echo "<td>$dato</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }
    saltarYescribir("*** TABLA CON FUNCIÓN ***");
    tabla4col("ID", "NOMBRE", "APELLIDO", "TELÉFONO", $registroGeneral);
    
    
    
    // En las funciones podemos asignar un valor por defecto al parámetro en caso de que al llamar a esa función no se le pase ningún parámetro
    function sumar($a=5, $b=8){
        return $a + $b;
    }
    //Si la llamamos sin parámetros coge el 5 y el 8 por defecto
    saltarYescribir(sumar());
    //Si la llamamos con parámetros éstos serán los que usará la función
    saltarYescribir(sumar(12,9));
    //Si la llamamos con un sólo parámetro te asigna el valor al primer parámetro
    saltarYescribir(sumar(15));
    
    
    // FUNCIONES PARA LOS PARAMETROS DE LAS FUNCIONES
    function sumarVarios(){
        $total = 0;
        for($i = 0; $i < func_num_args(); $i++){
            $total = $total + func_get_arg($i); //Sin s le puedes pasar la posición del Array
            //$total = $total + func_get_args()[$i]; OTRA OPCIÓN VÁLIDA (con s devuelve Array completo, así que pasamos posición con corchetes como a cualquier Array)
        }
        return $total;
    }
    
    saltarYescribir(sumarVarios(5, 9, 15, 9, 21));
    
    
    // Si pasamos un parámetro y lo recibimos con un & quiere decir que esa variable toma ámbito global, osea que si cambiamos su valor dentro de la función también cambiará el valor de la variable que pasamos desde fuera. Ejemplo:
    function unirCadenas(&$cad1, $cad2){
        $cad1 = "Cambio ésta variable";
        $cadenaUnida = $cad1." ".$cad2;
        return $cadenaUnida;
    }
    
    $cadena1 = "Hola";
    $cadena2 = "mundo";
    
    unirCadenas($cadena1, $cadena2);
    //Si ahora mostramos cadena1 tendrá el valor que le damos dentro de la función
    saltar();    
    saltarYescribir($cadena1);
    
    
    $aula = "AT1";
    function mostrarModificarAula(){
        global $aula; // Ese valor puede ser manipulado dentro de la función si la declaramos como global de ésta manera, y cambiará el valor de la variable de fuera también
        $aula = "AT1 pasillo 1";
    }
    // Mostramos fuera de la función el valor de $aula
    mostrarModificarAula();
    saltarYescribir($aula);
    
    
?>

<?php
include "../footer.php";
?>
