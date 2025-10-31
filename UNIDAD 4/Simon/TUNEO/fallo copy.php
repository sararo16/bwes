<?php
session_start();
include "pintar-circulos copy.php";

echo "<h2>Lo sentimos, has fallado</h2>";

echo "<p>Combinación correcta:</p>";
pintar_circulos(...$_SESSION['combinacioncorrecta']);

echo "<p>Tu combinación:</p>";
pintar_circulos(...$_SESSION['jugada']);

// Reiniciar para volver a jugar
$_SESSION['jugada'] = [];

echo "<a href='dificultad.php'>Volver a jugar</a>";
?>
