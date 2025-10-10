<?php

/*Crea el código PHP para inicializar los siguientes arrays y realizar las operaciones
indicadas.
a) Declara un array de enteros de nombre $coches e introduce en él 8 elementos
cuyos valores sean 32, 11, 45, 22, 78, -3, 9, 66, 5. A continuación muestra por
pantalla el elemento con localizador 5. Deberás obtener por pantalla que se
visualiza -3.*/ 
$coche = array(32, 11, 45, 22, 78, -3, 9, 66, 5);
echo $coche[5];
echo "<br>";
/*b) Declara un array de numéricos decimales tipo double de nombre $importe e
introduce en él cuatro elementos que sean 32.583, 11.239, 45.781, 22.237. A
continuación muestra por pantalla el elemento con localizador 1 y el 3..*/
$importe = array(32.583, 11.239, 45.781, 22.237);
echo $importe[1];
echo "<br>";
echo $importe[3];
echo "<br>";

/*c) Declara un array de booleanos de nombre $confirmado e introduce en él seis
elementos que sean true, true, false, true, false, false. A continuación muestra por
pantalla el elemento con localizador cero. Deberás obtener por pantalla que se
muestra “true”.*/
$confirmado=array(true,true,false,true,false,false);
echo $confirmado[0];
echo "<br>";

/*d) Declara un array de strings de nombre $jugador e introduce en él 5 elementos
que sean "Crovic", "Antic", "Malic", "Zulic" y "Rostrich". A continuación usando el
operador de concatenación haz que se muestre la frase: <<La alineación del
equipo está compuesta por Crovic, Antic, Malic, Zulic y Rostrich.>>.*/

$jugador=array("Crovic","Antic","Malic","Zulic","Rostrich");
echo "La alineación del equipo está compuesta por ".$jugador [0].", ". $jugador [1].", ". $jugador [2].",". $jugador [3]." y ". $jugador [4].".";
echo "<br>";

/*Crea el código que dé respuesta al siguiente planteamiento:
Queremos almacenar en una matriz el número de alumnos con el que cuenta una
academia, ordenados en función del nivel y del idioma que se estudia. Tendremos
3 filas que representarán al Nivel básico, medio y de perfeccionamiento y 4
columnas en las que figurarán los idiomas (0 = Inglés, 1 = Francés, 2 = Alemán y 3
= Ruso). Mostrar por pantalla los alumnos que existen en cada nivel e idioma.*/



/* Almacena en un array los 10 primeros números pares. Imprímelos cada uno en
una línea.*/
$pares=array (2,4,6,8,10,12,14,16,18,20);
foreach ($pares as $numero){
    echo $numero."<br>";
}
echo "<br>";

/*Genera una matriz de 4*4 de forma aleatoria con números enteros desordenados
mostrar en un renglón los elementos almacenados en la diagonal principal y en el
siguiente los de la diagonal secundaria.
*/

$matriz = [];
for ($i = 0; $i < 4; $i++) {
    for ($j = 0; $j < 4; $j++) {
        $matriz[$i][$j] = rand(1, 99);
    }
}

// Mostrar la matriz completa
for ($i = 0; $i < 4; $i++) {
    for ($j = 0; $j < 4; $j++) {
        echo str_pad($matriz[$i][$j], 3, " ", STR_PAD_LEFT) . " ";
    }
    echo "<br>";
}

// Mostrar la diagonal principal
for ($i = 0; $i < 4; $i++) {
    echo $matriz[$i][$i] . " ";
}

// Mostrar la diagonal secundaria
for ($i = 0; $i < 4; $i++) {
    echo $matriz[$i][3 - $i] . " ";
}
echo "<br>";
/*Generar de forma aleatoria una matriz de 3x5 con valores numéricos.
a. Imprimir todos los elementos en forma sucesiva tomándolos por fila.
b. Igual al anterior pero por columna.*/
$matriz = [];
for ($i=0; $i < 3; $i++) {
    for ($j=0; $j < 5; $j++) {
        $matriz[$i][$j] = rand(1, 99);
    }
}
echo "<br>";

for ($i=0; $i < 3; $i++) {
    for ($j=0; $j < 5; $j++) {  
        echo $matriz[$i][$j] . " ";
    }

    echo "<br>";
}  


/*Generar de forma aleatoria una matriz de 4*5 con valores numéricos, determinar
fila y columna del elemento mayor*/ 
$matriz = [];
for ($i = 0; $i < 4; $i++) {
    for ($j = 0; $j < 5; $j++) {
        $matriz[$i][$j] = rand(1, 99);
    }
}
$fila=0;
$columna=0;






?>
