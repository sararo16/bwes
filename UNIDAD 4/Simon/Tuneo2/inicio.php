<?php

session_start();
$hn = 'localhost';
$db = 'bdsimon';
$un = 'root';
$pw = '';

$connection = new mysqli($hn, $un, $pw, $db);
if ($connection->connect_error) die("Fatal Error");

$usuario = $_SESSION['usuario'];
$query = "SELECT Codigo FROM usuarios WHERE Nombre = '$usuario'";
$result = $connection->query($query);
$row = $result->fetch_assoc();
$codigousu = $row['Codigo'];

// Guardar jugada inicial con dificultad elegida
$numcirculos = $_SESSION['numero'];
$numcolores  = $_SESSION['numero-colores'];

$query2 = "INSERT INTO jugadas (codigousu, acierto, numcirculos, numcolor)
           VALUES ($codigousu, 0, $numcirculos, $numcolores)";
if (!$connection->query($query2)) die("Error al insertar jugada");

$connection->close();

unset($_SESSION['colores-escogidos']);
unset($_SESSION['colores-correctos']); 

if (!isset($_POST['numero']) || !isset($_POST['numero-colores'])) {
    echo "Error: No se han recibido los datos del formulario.";
    exit;
}

$_SESSION['numero'] = intval($_POST['numero']);
$_SESSION['numero-colores'] = intval($_POST['numero-colores']);



$todos_colores = array('red','blue','yellow','green','purple','orange','pink','brown');

//seleccionamos solo los colores permitidos por el jugador
$colores_disponibles=array_slice($todos_colores,0,$_SESSION['numero-colores']);
for ($i = 0; $i < $_SESSION['numero']; $i++) {
    $_SESSION['colores-correctos'][$i] = $colores_disponibles[rand(0,count ($colores_disponibles)-1)];
}

echo <<<_END
<html>
    <body>
        <h1>SIMÓN</h1>
            <h2>Memoriza la combinación</h2>

_END;

require 'pintar_circulos.php';
pintar_circulos($_SESSION['colores-correctos']);


echo <<<_END
    <form action="jugar.php" method="post">
        <input type="submit" name="submit" value="Vamos a jugar">
    </form>
    </body>
</html>
_END;
?>