
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="EstiloCirculos.css">
</head>

<body>
    <?php
    if (!function_exists('pintarCirculo')) {
        function pintarCirculo($color)
        {
            echo '<div class="circulo" style="background-color:' . $color . ';"></div>';
        }
    }
    if (!class_exists('Inicio')) {
        class Inicio
        {
            private $combinacion;

            function __construct()
            {
                $this->combinacion = array();
            }

            function getColores()
            {
                return $this->combinacion;
            }


            function crearCombinacionAleatoria()
            {
                echo "<h1>SIMÓN</h1>";
                echo "<h2>Hola, memoriza la combinación</h2>";
                for ($i = 0; $i < 4; $i++) {
                    $al = rand(0, 3);
                    switch ($al) {
                        case 0:
                            pintarCirculo("red");
                            $combinacion[] = "red";
                            break;
                        case 1:
                            pintarCirculo("blue");
                            $combinacion[] = "blue";
                            break;
                        case 2:
                            pintarCirculo("yellow");
                            $combinacion[] = "yellow";
                            break;
                        case 3:
                            pintarCirculo("green");
                            $combinacion[] = "green";
                            break;
                    }
                }
                echo "<form method=post action=juego.php>
                <button type=submit name=jugar value=JUGAR>VAMOS A JUGAR</button>
                </form>
                </body>"; echo json_decode('"\u{1F60A}"');
            }
        }
       
        $inicio = new Inicio();
         $inicio ->crearCombinacionAleatoria(); 
    }
    ?>   