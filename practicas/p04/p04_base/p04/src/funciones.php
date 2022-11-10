<?php

function multiplo5y7($numero) {
    // AQUÍ VA EL CÓDIGO DE LA FUNCIÓN
    if($numero%5==0  && $numero%7==0 )
    return 'El numero: '.$numero.' es multiplo de 5 y 7';

    if($numero%5==0 )
    return 'El numero: '.$numero.' es multiplo de 5 pero NO de 7';

    if($numero%7==0 )
    return 'El numero: '.$numero.' es multiplo de  7 pero NO de 5';
 
}

function domultiploaleatorio($dado){
    $num=0;
    $ciclo=false;
   
    do{     
        echo 'Numero aleatorio '.$num;
        echo '<br>';
        $num=mt_rand(0,100);

            if($num%$dado==0){
                
                return 'El numero aleatorio '.$num.' si es multiplo de '.$dado;
                
            }
    }while(!$ciclo);

}

function multiploaleatorio($dado){
    $num=0;
    $ciclo=false;
   
    while(!$ciclo):
        
        echo 'Numero aleatorio '.$num;
        echo '<br>';
        $num=mt_rand(0,100);

            if($num%$dado==0){
                return 'El numero aleatorio '.$num.' si es multiplo de '.$dado;
                
            }

    endwhile;

}

function aleatorios($ite){
    $ite++;
    GLOBAL $filas;
    $uno=mt_rand(100,1000);
    $dos=mt_rand(100,1000);
    $tres=mt_rand(100,1000);

    $matriz[$filas]=[$uno,$dos,$tres];
    $filas++;

    echo $uno." ".$dos." ".$tres;
    echo '<br>';
    
    if(($uno % 2) != 0 && ($dos % 2) == 0 && ($tres % 2) != 0){
        $num=$ite*3;
        echo $num.' numeros obtenidos en '.$ite." interacciones." ;
        echo '<br>';
        echo('<pre>');
            var_dump($matriz);
        echo('</pre>');
        return $ite;
    }
    
    aleatorios($ite);

}

function indicesA(){
    $indices;
    echo "Impreso en el ciclo FOR";
    echo "<br>";
    for($i=97;$i<123;$i++){
        $indices[$i]=chr($i);
        echo "<br>";
        echo 'Vector['.$i.'] = '.$indices[$i].' ';
        
    }
    echo "<br>";
    echo "<br>";
    echo "Impreso con FOREACH";
    echo "<br>";
    echo "<br>";

    foreach ($indices as $i => $i) {
        echo "{$i} => {$i} ";
        print_r($indices);
    }

    echo "<br>";
    echo "<br>";
    echo "Impreso con VAR_DUMP";
    echo "<br>";
    echo "<br>";
    return $indices;
}
/*
function leerArchivo(){
 //$i=0;
    $file = fopen("matriculas.txt","r");
    if($file){
        while(!feof($file)) {

            echo "Hola";

            $F1[] = fgets($file);
            //echo $i.' ';
            //$i++;
        }
        if (!feof($file)) {
            echo "Txt Vacio";
            fclose($file);
        }

        
    }

    
    echo stream_get_contents($file, -1);
    return $F1;



}*/ //NO FUNCIONA



?>