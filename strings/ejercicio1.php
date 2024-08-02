<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 1</title>
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
        $cadena = "Bienvenido a mi pagina web.";
        $cadena = trim($cadena);

        $posicion = strpos($cadena, ".");

        $primeraLetra = substr($cadena, 0, 1);
        $ultimaLetra = substr($cadena, $posicion - 1, 1);

        echo "Tomando la frase $cadena tomamos los siguientes resultados:<br>";
        echo "Primera letra: <b>" . $primeraLetra . "</b><br>" . "Última letra: <b>" . $ultimaLetra . "</b><br>";
        ?>
    </div>
</section>
<?php
include "footer.php";
?>