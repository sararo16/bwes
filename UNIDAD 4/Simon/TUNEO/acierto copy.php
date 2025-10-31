<?php
session_start();
include "pintar-circulos copy.php";

echo "<h2>Enhorabuena, has acertado la combinación!</h2>";

// Pintar la combinación correcta completa
pintar_circulos(...$_SESSION['combinacioncorrecta']);

// Reiniciar para volver a jugar
$_SESSION['jugada'] = [];

echo "<a href='dificultad.php'>Volver a jugar</a>";
?>
