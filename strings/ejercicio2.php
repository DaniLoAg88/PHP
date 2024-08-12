<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 2</title>
    <link rel="stylesheet" href="../css/style.css">
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
        //Tomar fecha de hoy
        $hoy = date("d-m-Y");
        echo "Hoy es $hoy<br>";
        //Calcular fecha ayer
        $ayer = date("d-m-Y", strtotime("-1 day"));
        echo "Ayer fue $ayer<br>";
        //Calcular la fecha de mañana
        $maniana = date("d-m-Y", strtotime("+1 day"));
        echo "Mañana es $maniana<br>";
        //Calcular la fecha dentro de un mes
        $masUnMes = date("d-m-Y", strtotime("+1 month"));
        echo "Dentro de un mes será $masUnMes<br>";
        //Calcular la fecha dentro de un año
        $masUnAnio = date("d-m-Y", strtotime("+1 year"));
        echo "Dentro de un año será $masUnAnio<br>";

        /**
         * En todos los casos pasamos la primera opción en formato String y la segunda opción se pasa de * string a dateTime con strtotime(), y todo ello se encapsula en date().
         */
        ?>
    </div>
</section>
<?php
include "footer.php";
?>