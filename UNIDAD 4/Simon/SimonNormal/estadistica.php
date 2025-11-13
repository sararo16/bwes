<?php
session_start();

$hn = 'localhost';
$db = 'bdsimon';
$un = 'root';
$pw = '';

    $connection = new mysqli($hn, $un, $pw, $db);
    if ($connection->connect_error) die("Fatal Error");
    $query = "SELECT Codigo,Nombre FROM usuarios";
    $result = $connection->query($query);
    if (!$result) die("Fatal Error");
    $query2 = "SELECT codigousu,COUNT(*) AS acierto FROM jugadas WHERE acierto=1 GROUP BY codigousu";
    $result2 = $connection->query($query2);
    if (!$result2) die("Fatal Error");
echo <<<_END
<html>
    <body>
        <h1>SIMÓN</h1>
            <h2>Estadistica</h2>
_END;
echo <<<_END
   <table border=1 >
        <tr>
            <th>Código usuario</th>
            <th>Nombre</th>
            <th>Número aciertos</th>
        </tr>
_END;
            $rows = $result->num_rows;
            for ($j = 0 ; $j < $rows ; ++$j)
                {
                    echo "<tr>";
                    $result->data_seek($j);
                    echo '<td>' .htmlspecialchars($result->fetch_assoc()['Codigo']) .'</td>'; 
                    $result->data_seek($j);
                    echo '<td>' .htmlspecialchars($result->fetch_assoc()['Nombre']) .'</td>';
                    $result2->data_seek($j);
                    echo '<td>' .htmlspecialchars($result2->fetch_assoc()['acierto']) .'</td>';
                    $result2->data_seek($j);
                
                }
        
        $result->close();
        $result2->close();
    echo<<<_END
    </table>
    <a href="inicio.php">VOLVER AL INICIO</a>
</body>
</html>
_END;
    
    $connection->close();

?>