<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="EstiloCirculos.css">
</head>

<body>
    <?php
    session_start();

    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['color'])) {
        $colorClicado = $_POST['color'];
        $_SESSION['colores'][] = $colorClicado; // Añadir el color clicado al array de colores
        header('Location: juego.php'); // Redireccionar a juego.php después de agregar el color
        exit; // Asegurar que no se ejecuta más código después de la redirección
    } else {
        echo 'No se recibió el color correctamente'; 
        // Mensaje de depuración o manejo de error
    }
    ?>
</body>

</html>
