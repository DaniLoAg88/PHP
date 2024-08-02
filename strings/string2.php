<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>String 2</title>
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
        //Funciones de las cadenas de caracteres:

        //Conocer la longitud de una cadena
        $cadena = "Hola mundo, ¿cómo estás hoy?";
        echo "La cadena \"$cadena\" tiene una longitud de " . mb_strlen($cadena) . " caracteres.";

        //Mostrar los primeros 12 caracteres de la cadena
        echo "<br>Los primeros 12 caracteres de la cadena son: " . mb_substr($cadena, 0, 13);
        echo "<br>";

        //Convertir la cadena en un Array, hay que indicar el delimitador, por ejemplo ","
        //Elimina el separador que le pongamos y pone cada trozo aparte en el Array
        $array = explode(",", $cadena);
        echo $array[0];
        echo "<br>";
        echo $array[1];
        echo "<br>";

        //Reemplazar una cadena por otra
        echo substr_replace($cadena, "Éste es el reemplazo de la cadena", 12);
        //Le dices que cadena quieres modificar, luego por què cadena quieres cambiarlo, luego desde que posición empezar a cambiar


        //Reemplazar las coincidencias por otra cadena o carácter
        echo "<br>" . str_replace("o", "x", $cadena);
        //Le dices que quieres buscar para cambiar, luego la letra nueva que quieres poner y luego en qué cadena hacer el cambio


        //Mostrar la posición de la primera o (por ejemplo) en el texto
        echo "<br>La primera o está en la posición " . mb_strpos($cadena, "o");

        //Mostrar la posición de la última o (por ejemplo) en el texto
        echo "<br>La última o está en la posición " . mb_strrpos($cadena, "o");

        //El ucfirst cambia la primera letra de una cadena a mayúsculas
        $nombre = "maría pérez";
        echo "<br>El nombre original es $nombre, pero con la función ucfirst cambia a " . ucfirst($nombre);
        echo "<br>El apellido utilizando ucfirst sería " . ucfirst(mb_substr($nombre, mb_strpos($nombre, " ") + 1));

        echo "<br>El nombre completo sería " . ucfirst(mb_substr($nombre, 0, mb_strpos($nombre, " "))) . " " . ucfirst(mb_substr($nombre, mb_strpos($nombre, " ") + 1));

        //Existe una función que pasa de todas las palabras la primera letra a mayúscula UCWORDS
        echo "<br>Con ucword convertimos las primeras de todas las palabras a mayúsculas " . ucwords($nombre);

        //Podemos quitar los espacios del principio y final de la cadena con trim
        $otraCadena = " en un lugar de La Mancha ";
        echo "<br>" . ucwords(trim($otraCadena));

        salto();
        //Convertir una cadena a minúsculas
        echo mb_strtolower($cadena);
        salto();
        //Convertir una cadena a mayúsculas
        echo mb_strtoupper($otraCadena);
        salto();

        //Crear una cadena encriptada MD5 -> Wordpress
        $password = 'Mi$ifu2024';
        echo "La contraseña $password en MD5 es " . md5($password);
        salto();

        //Crear una cadena encriptada SHA1
        echo "La contraseña $password en SHA1 es " . sha1($password);
        salto();

        //strstr busca la primera aparición de una cadena dentro de otra cadena y te devuelve desde ahí hasta el final
        echo "Con strstr mostramos el resto de la cadena a partir del primer 'en' " . strstr($otraCadena, "en");
        salto();

        //strrchr busca la última aparición de una cadena dentro de otra cadena y te devuelve desde ahí hasta el final
        echo "Con strrchr mostramos el resto de la cadena a partir del último 'lugar' " . strstr($otraCadena, "lugar");
        salto();

        function salto()
        {
            echo "<br>";
        }

        ?>
    </div>
</section>
<?php
include "footer.php";
?>