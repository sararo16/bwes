<?php

session_start();
include "pintar-circulos copy.php";

$colores = array("red", "green", "blue", "yellow");
$combinacion = array();
for ($i = 0; $i < $_SESSION['numero']; $i++) {
    $combinacion[] = $colores[array_rand($colores)];
}

$_SESSION['combinacioncorrecta'] = $combinacion;
$_SESSION['jugada'] = [];



echo <<<_END
<html>
    <body>
        <h1>SIMÓN</h1>
            <h2>Memoriza la combinación</h2>

_END;

pintar_circulos(...$combinacion);

echo <<<_END
    <form action="jugar copy.php" method="post">
        <input type="submit" name="submit" value="Vamos a jugar">
    </form>
    </body>
</html>
_END;
?>