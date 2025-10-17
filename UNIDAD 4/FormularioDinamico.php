<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Formulario Dinámico</title>
</head>
<body>

<?php
if (isset($_POST['num1'])) {
    // Si el formulario fue enviado, mostramos los resultados
    for ($i = 1; $i <= 10; $i++) {
        if (isset($_POST["num$i"])) {
            $numero = $_POST["num$i"];
            echo "El número $i es: $numero <br>";
        }
    }
} else {
    // Si no se ha enviado, mostramos el formulario
    echo '<form method="post" action="FormularioDinamico.php">';
    for ($i = 1; $i <= 10; $i++) {
        echo "<label for='num$i'>Número $i:</label>";
        echo "<input id='num$i' name='num$i'>";
        echo "<br><br>";
    }
    echo '<input type="submit" id="button" value="Enviar">';
    echo '</form>';
}
?>

</body>
</html>
