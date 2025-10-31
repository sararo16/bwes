<?php
session_start();

if (isset($_POST['nivel'])) {
    $nivel = intval($_POST['nivel']);
    $_SESSION['numero'] = $nivel;
    header("Location: inicio copy.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Seleccionar Dificultad</title>
</head>
<body>
    <h1>SIMÓN</h1>
    <h2>Selecciona el nivel de dificultad</h2>
    <form method="post" action="dificultad.php">
        <label for="nivel">Número de colores a memorizar:</label>
        <select name="nivel" id="nivel">
            <?php
            for ($i = 4; $i <= 8; $i++) {
                echo "<option value='$i'>$i</option>";
            }
            ?>
        </select>
        <br><br>
        <input type="submit" value="Comenzar">
    </form>
</body>
</html>
