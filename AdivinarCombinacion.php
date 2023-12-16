<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="EstiloCirculos.css">
</head>

<body>
    <?php
    // Incluye el archivo que contiene la función pintarCirculo()
    include("GenerarCombinacion.php");
    class Juego
    {
        function jugar()
        {
            if (isset($_POST["jugar"])) {
                echo "<h1>SIMÓN</h1>";
                echo "<h2>pulsa los botones en el orden correspondiente</h2>";

                for ($i = 0; $i < 4; $i++) {
                    pintarCirculo('black');
                }
              $this ->  escogerColor();

            }

        }

        function escogerColor()
        {
            for ($i = 0; $i < 3; $i++) {
                if (isset($_POST['color'])) {
                    $colorClicado = $_POST['color'];
                    
                }
            }

            echo '<form method="post" action="resultado.php">
                    <button type="submit" name="color" value="rojo" class="boton-rojo">ROJO</button>
                    <button type="submit" name="color" value="azul" class="boton-azul">AZUL</button>
                    <button type="submit" name="color" value="amarillo" class="boton-amarillo">AMARILLO</button>
                    <button type="submit" name="color" value="verde" class="boton-verde">VERDE</button>';
                    if(isset($colorClicado)) {
                        echo '<input type="hidden" name="combinacionColores" value="' . $colorClicado . '">';
                    }
                    echo  '</form>';
        }
    }

    $jugar = new Juego();
    $jugar->jugar();

    ?>
</body>

</html>