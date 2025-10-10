<?php

$personas= array(
 'Hola','Adios','pepe','juan','perro' ,'gato');
$numeros=array(1,9,3,4,5,8,7,6,2,10);

sort ($personas);
sort ($numeros);

foreach ($personas as $persona){
    echo $persona."<br>";
}
echo "<br>";

foreach ($numeros as $numero){
    echo $numero."<br>";
}

?>