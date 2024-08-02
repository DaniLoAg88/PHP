<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>String 1</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <?php
        include "header.php";
        ?>
    </header>
    <section class="secPrincipal">
        <div>
        <?php
        /**
         * Las comillas dobles muestran variables, cadenas y caracteres especiales
         *
         * La función nl2br(tuCadena) muestra tu cadena permitiendo saltos de línea en html
         */

        //Ejemplo 1, echo sin nl2br
        echo "Ejemplo del salto de línea con el código de escape \\n no se ejecuta sin nl2br \n";

        echo "<br>";

        //Ejemplo 2, echo con nl2br
        echo nl2br("Ejemplo del salto de línea con nl2br \n Aquí otra línea");

        //Ejemplo 3, comillas simples dentro de comillas simples no muestran valor de variable
        $variable = "Contenido";
        echo nl2br('<br>La \'$variable puede tener un texto \' que no se muestra, se muestra el nombre');

        //Ejemplo 4, comillas dobles muestran el valor de la variable
        echo nl2br("\nLa variable tiene un valor que si se muestra con comillas dobles -> $variable");

        echo "<br>";

        //Ejemplo 5, el codigo HTML se muestra tanto en comillas simples ' como dobles "
        echo 'El parrafo tiene muchas líneas en el código HTML';

        /* RESUMEN
         * código de escape \
         * \n -> salto de línea
         * \" -> muestra la comilla doble dentro de un string comenzado con comillas dobles "
         * \' -> muestra la comilla simple dentro de un string comenzado con comillas simples '
         * \\ -> muestra la barra invertida \
         *
         */
        ?>
        </div>
    </section>
<?php
include "footer.php";
?>