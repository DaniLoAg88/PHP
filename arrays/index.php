    <!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Arrays</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <header>
        <?php
        include "arrays/header.php";
        ?>
    </header>
    <section class="secPrincipal">
    <div>
    <?php
    $docente = array(); //Declaración de un array vacío

    $hombres = array("José Luis","Mónico","Andrés","Dani","Juan","Sergio","Raúl"); //Declaración de un array con datos

    $mujeres = ["Mónica","Marina","Tania","Arantxa","Alba","Ana"];
    //Segunda forma de declaración de Array con datos

    /**
     * Si no declaramos una clave los Arrays utilizan con clave la posición del elemento (tal como lo hemos usado hasta ahora)
     */

    //La función count() nos muestra el número de elementos que tiene el array
    echo "Hombres -> ".count($hombres)."<br>";
    echo "Mujeres -> ".count($mujeres)."<br>";
    echo "Docente -> ".count($docente)."<br>";

    //Podemos meter datos en una posición concreta
    $docente[20] = "Irina";
    //var_dump muestra la información varia de una variable
    echo var_dump($docente)."<br>";
    //Podemos meter datos en el array sin especificar posición, y nos meterá el valor al final
    $hombres[] = "Francisco";
    echo var_dump($hombres)."<br>"; // var_dump no muestra los elementos vacíos
    
    for($i = 0; $i < count($mujeres); $i++){
        echo "Mujer con el índice $i es $mujeres[$i]<br>";
    }
    
    //Se puede tratar una cadena de caracteres como si fuera un Array, por ejemplo en un for
    $vocales = "aeiou";
    for($i = 0; $i < strlen($vocales); $i++){ //Aquí usamos strlen para saber el número de  caracteres del String
        echo $vocales[$i]." - ";
    }

    /**
     * ARRAYS ASOCIATIVOS (CLAVE/VALOR)
     */
    //Hay que asignar el valor a la clave mediante =>
    $alumnoEmpresa = ["Apigon"=>"Andrés", "Elite"=>"Alba", "Ikonox"=>"Marina,Tania","CEAT"=>"Dani","Sergio", "Getecom"=>"Jose Luis, Monico, Raul"]; //Si metemos un valor sin asignar clave (como Sergio) le asigna un número empezando por 0

    $alumnoEmpresa2 = ["Apigon"=>"Andrés", "Elite"=>"Alba", "Ikonox"=>["Marina","Tania"],"CEAT"=>"Dani","Sergio"]; //Si tenemos varios valores para una misma clave podemos hacer una variable array dentro del array (como aquí con Ikonox)
    echo "<br>";
    var_dump($alumnoEmpresa);
    echo "<br>";
    var_dump($alumnoEmpresa2);
    echo "<br>";
    
    echo "<br> El alumno de Elite es ".$alumnoEmpresa['Elite']."<br><br>";
    //echo "<br> El alumno de Ikonox es ".$alumnoEmpresa2['Ikonox']."<br>";
    //Ésto no sería posible porque es un Array, y nos dirá solamente el tipo 'Array'
    //Para poder mostrar los valores hay que recorrer el array con un foreach:
    foreach($alumnoEmpresa as $clave => $valor){
        echo "Empresa: ".$clave." - Alumno: ".$valor."<br>";
    }
    echo "<br>";
    
    
    /* PRÁCTICA crea un array con los meses del año y la estación que le corresponde a cada uno */
    $meses = ["Enero" => "Invierno", "Febrero" => "Invierno", "Marzo" => "Invierno", "Abril" => "Primavera", "Mayo" => "Primavera", "Junio" => "Primavera", "Julio" => "Verano", "Agosto" => "Verano", "Septiembre" => "Verano", "Octubre" => "Otoño", "Noviembre" => "Otoño", "Diciembre" => "otoño"];
    
    foreach ($meses as $clave => $valor){
        echo $clave." - ".$valor."<br>";
    }
    
    
    /*** FUNCIONES DE ARRAYS ***/
    
    // unset() -> elimina un elemento en la posición indicada, si no la indicamos borra el array completo
    $basura = [1,2,3,4,5,6,7,8,9,10];
    echo "<br>";
    var_dump($basura);
    unset($basura[5]); //Eliminamos la posición 5
    var_dump($basura);
    echo "<br>";
    
    foreach ($basura as $numero){
        echo $numero."<br>";
    }
    
    // unset($basura); //Eliminamos el array completo
    // var_dump($basura); //Nos da error porque ya no existe el Array (borrado línea anterior)
    
    
    // print_r() -> muestra el contenido del array en formato string 
    print_r($hombres);
    echo "<br><br>";
    
    // array_values() -> copia un array en otro
    $basura2 = array_values($basura); // Coge los valores del Array y te los mete en el nuevo
    print_r($basura2);
    echo "<br>";
    
    // array_diff() -> compara dos arrays y en un tercero guarda los elementos del primero que NO están en el segundo
    $numeros = [5,10,15,2,8,1];
    $diferenciaArray = array_diff($numeros, $basura);
    // Como es clave->valor te coge también la posición en la que se encuentra
    echo "<br>";
    print_r($diferenciaArray);
    echo "<br>";
    
    // array_fill() -> rellena un array con un valor indicado -> inicio, posiciones, valor. Es para inicializar, si lo haces con un array existente lo machaca
    $docentes = array_fill(0, 19, "Docente");
    print_r($docentes);
    echo "<br>";
    
    // array_key_exists() -> busca un indice(clave) en el array y devuelve TRUE o FALSE si existe o no en el Array. Ej -> Si existe Apigon, la empresa participa en el dual, si no, es que no participa
    if(array_key_exists("Apigon", $alumnoEmpresa)){ //Pasamos 1º la clave y luego el array
        echo "<br>Apigon participa en el dual";
    }else{
        echo "<br>Apigon NO participa en el dual";
    }
    
    // array_search() -> busca en un array la clave de un valor que especificamos
    $clave = array_search("Dani", $alumnoEmpresa); //Pasamos 1º el valor y luego el array
    echo "<br>$clave<br>";
    
    // sort() -> ordena un array alfabeticamente segun los valores. Lo modifica y lo deja con el resultado
    sort($hombres);
    sort($mujeres);
    echo "<br>";
    print_r($hombres);
    echo "<br>";
    print_r($mujeres);
    echo "<br>";
    
    // ksort() -> ordena un array alfabeticamente ascendente segun las claves. Lo modifica y lo deja con el resultado
    ksort($alumnoEmpresa);
    print_r($alumnoEmpresa);
    echo "<br>";

    // krsort() -> ordena un array alfabeticamente descendente segun las claves. Lo modifica y lo deja con el resultado
    krsort($alumnoEmpresa);
    print_r($alumnoEmpresa);
    echo "<br><br>";
    
    // array_slice() -> obtiene una parte de un array indicando la posición (y opcional tamaño)
    print_r(array_slice($hombres, 3, 3)); //Pasamos 1º el array y luego la posición (podemos añadir también cuántos queremos después)
    echo "<br><br>";
    
    // implode() -> devuelve un string sacado de elementos del array (pero no modifica el array)
    $frase = ["En","un","lugar","de","la","mancha"];
    print_r(implode(" ", $frase));//Le pasamos 1º el separador q queremos, luego el array
    echo "<br>";

    // explode() -> devuelve un array hecho a partir de un string (pero no modifica el string)
    $frase2 = "Marina,Pedro,Juan,Luis";
    print_r(explode(",", $frase2));//Le pasamos 1º el separador el cual queremos coger los elementos para el array, luego el String
    echo "<br><br>";
    
    
    /**** ARRAYS BIDIMENSIONALES ****/
    $agenda = ["Dani"=>["Tlfno"=>"654985321","Email"=>"dani@ceatformacion.com"], "Sergio"=>["Tlfno"=>"654972359","Email"=>"sergio@ceatformacion.com"], "Ana"=>["Tlfno"=>"673195321","Email"=>"ana@ceatformacion.com"]];
    
    foreach ($agenda as $clave => $valor){//Clave son los nombres y valor el array de tlf y email
        echo "<br>Nombre de contacto: $clave<br>";
        foreach ($valor as $clave2 => $valor2){//valor es el array y clave2 serán Tlfno y Email
            echo $clave2." - ".$valor2."<br>";
        }
        echo "<br>";
    }
    
    ?>
    </div>
    </section>

    <?php
    include "../footer.php";
    ?>