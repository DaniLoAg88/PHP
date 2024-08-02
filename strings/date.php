<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fechas</title>
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
        function salto()
        {
            echo "<br>";
        }

        //date_default_timezone_set("Europa/Madrid");

        //A la fecha le pasamos el formato en string dia-mes-año
        //Si pasamos la Y nos da 2024, si pasamos la y nos da 24
        echo "Fecha de hoy -> " . date("d-m-Y");
        salto();

        //Fecha con la hora
        echo "Fecha y hora actual -> " . date("d-m-y _ H:i:s");
        salto();

        //Formato inglés
        echo "Día de la semana en inglés -> " . date("l");
        salto();

        echo "Today is -> " . date("l") . ", " . date("d") . " " . date("F") . " of " . date("Y");

        salto();

        //Establecer la configuración regional de España
        setlocale(LC_TIME, "es_ES.UTF-8");

        //Mostrar la fecha actual con el nuevo formato
        echo strftime("%A, %d de %B de %Y"); //PENDIENTE
        salto();

        //Construir una fecha que nosotros queramos
        $dia = 25;
        $mes = 04;
        $anio = 2023;
        //$fecha = mktime(null, null, null, $mes, $dia, $anio);
        $fecha = mktime(null, null, null, $mes, $dia, $anio);
        echo date("d-m-Y", $fecha);
        salto();

        //Disponemos de funciones para realizar cálculos entre fechas
        //Ejemplo, calcular días que faltan hasta fin de año
        $hoy = date_create(date("m/d/Y")); //Fecha actual
        $finAnio = date_create(date("12/31/Y"));
        $diferencia = date_diff($hoy, $finAnio);
        $diasQueFaltan = $diferencia->format("%a"); //Formato en días
        echo "Faltan " . $diasQueFaltan . " días del año";
        salto();

        $inicioAnio = date_create(date("01-01-Y"));
        $diferencia = date_diff($hoy, $inicioAnio);
        $diasTranscurridos = $diferencia->format("%R%a días");
        echo "Han transcurrido " . $diasTranscurridos . " del año";
        salto();

        //Calcular edad
        $nacimientoAndres = date_create("07-11-2001");
        $diferencia = date_diff($hoy, $nacimientoAndres);
        $edadAndres = $diferencia->format("%y");
        echo $edadAndres;

        ?>
    </div>
</section>
<?php
    include "footer.php";
?>