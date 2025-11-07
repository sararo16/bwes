<?php

$hn='localhost';
$db='bdsimon';
$un='root';
$pw='';

require_once 'login.php';
 $conn = new mysqli($hn, $un, $pw, $db);
 if ($conn->connect_error) die("Fatal Error"); 

 $query = "SELECT Nombre FROM usuarios";
 $result = $conn->query($query);
 if (!$result) die("Fatal Error"); 

 if (!$result) die("Fatal Error");
 $rows = $result->num_rows;
 for ($j = 0 ; $j < $rows ; ++$j)
 {

 $result->data_seek($j);
 echo 'Nombre: ' .htmlspecialchars($result-
>fetch_assoc()['Nombre']) .'<br>';
 $result->data_seek($j);
.'<br><br>';
 } 

  $result->close();
 $connection->close(); 
?>