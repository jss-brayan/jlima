
<?php

//Ejercicio 1

$_myvar; // Válido x inicio _
$_7var; //Válido x inicio _ , el numero es irrelevante
myvar; // Inválido, no inicia con prefijo "$"
$myvar; //Válido, inicia con letra
$var7; // Válido, inicia con letra
$_element1; // Válido inicia con _
$house*5; // Válida , si la variable fue previamente definida, en caso contrario aun el resultado dará 0

echo"$_myvar";
echo"$_7var";
echo"$myvar";
echo"$var7";
echo"$_element1";
echo"$house";


unset($_myvar);
unset($_7var);
unset($myvar);
unset($var7);
unset($_element1);
unset($house);


?>

<?php
//Ejercicio 2

$a = "ManejadorSQL";
$b = 'MySQL';
$c = &$a;

echo"$a";
echo"$b";
echo"$c";

//En este primer bloque se observan
//ManejadorSQL
//MySQL
//Manejador SQL 
//Ya que la variable c esta referenciando a la variable a)

$a = "PHP server";
$b = &$a;

echo"$a";
echo"$b";
echo"$c";

//El este segundo bloque se observa
// Que la variable a cambia a "PHP server"
// esto significa que la variable C que la referenciaba, tiene el mismo contenido
//Terminabos haciendo que b, tambien haga referencia a la variable a
//por lo que el resultado sera:
//PHP server
//PHP server
//PHP server

unset($a);
unset($b);
unset($c);


?>