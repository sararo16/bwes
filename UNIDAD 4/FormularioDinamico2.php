<html>
    <body>

<?php
if (isset($_POST['num1'])) {
    // Mostrar resultados
    $cantidad = intval($_POST['cantidad']);
    for ($i = 1; $i <= $cantidad; $i++) {
        if (isset($_POST["num$i"])) {
            $numero = $_POST["num$i"];
            echo "El número $i es: $numero <br>";
        }
    }
} elseif (isset($_POST['cantidad'])) {
    // Mostrar formulario
    $cantidad = intval($_POST['cantidad']);
    
    echo <<< _END
    <form method="post" action="FormularioDinamico2.php">   
    _END;

    $cantidad = intval($_POST['cantidad']);
    for ($i = 1; $i <= $cantidad; $i++) {
        echo "<label for=\"num$i\">Número $i:</label>";
        echo "<input id=\"num$i\" name=\"num$i\">";
        echo "<br><br>";
    }

    echo <<< _END
    <input type="submit" id="button" value="Enviar">
    </form>
    _END;
}
?>

    </body>
</html>
