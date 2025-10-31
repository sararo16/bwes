<?php
session_start();
include "pintar-circulos copy.php";

//asegurarse de que jugada esta creado
if (!isset($_SESSION['jugada'])) {
    $_SESSION['jugada'] = [];
}

//guardar colores en el array jugada
if (isset($_POST['color'])) {
    $color = $_POST['color'];
    $_SESSION['jugada'][] = $color;
}



// pintar circulos según botones pulsados
if (count($_SESSION['jugada']) !== $_SESSION['numero']) {
    // Inicializa todos los colores como 'black'
    $colores = array_fill(0, $_SESSION['numero'], 'black');

    // Sustituye los colores pulsados por el usuario
    for ($i = 0; $i < count($_SESSION['jugada']); $i++) {
        $colores[$i] = $_SESSION['jugada'][$i];
    }

    // Pinta todos los círculos en una sola llamada
    pintar_circulos(...$colores);
}



//llamar script de respuesta
if(count($_SESSION['jugada']) === $_SESSION['numero']){
    if ($_SESSION['jugada'] === $_SESSION['combinacioncorrecta']) {
        header("Location: acierto copy.php");
        exit();
    } else {
        header("Location: fallo copy.php");
        exit();
    }
   
}


echo <<<_END
<html>
    <body>
        <h1>SIMÓN</h1>
            <h2>Pulsa los botones en el orden correspondiente</h2>
_END;


echo <<<_END
    <form action="jugar copy.php" method="post">
        <input type="submit" name="color" value="red" style=background-color:red>
        <input type="submit" name="color" value="green" style=background-color:green>
        <input type="submit" name="color" value="blue" style=background-color:blue>
        <input type="submit" name="color" value="yellow" style=background-color:yellow>
    </form>
    </body>
</html>
_END;





?>