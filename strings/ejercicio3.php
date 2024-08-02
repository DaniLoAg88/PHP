<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 3</title>
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
        $hoy = "26 de Julio de 2024";

        //Buscamos posición del primer de
        $de1 = strpos($hoy, "de");

        //Buscamos posición del segundo de
        $de2 = strrpos($hoy, "de");

        echo "La posición del 1 es $de1 y del último es $de2<br>";

        $dia = substr($hoy, 0, $de1 - 1);
        $mes = substr($hoy, $de1 + 3, $de2 - ($de1 + 3));

        echo "Día $dia y Mes $mes<br>";
        ?>
    </div>
</section>
<?php
include "footer.php";
?>