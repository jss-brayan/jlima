<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práctica 4</title>
    <style type="text/css">
      ol { 
      list-style-type: none;
      }
    </style>
</head>
<body>
    <?php
    require_once __DIR__.'/src/funciones.php';
    ?>
    <div>
        <h3>Ejercicio 1</h3>
        <p>Escribir programa para comprobar si un número es un múltiplo de 5 y 7.</p>
        <p>
            R:
            <?php
            if (!empty($_GET['numero'])) {
                $numero = $_GET['numero'];
                echo multiplo5y7($numero);
            } else {
                echo '(vacío)';
            }
            ?>
        </p>
    </div>
    <hr>
    <div>
        <h3>Ejercicio 2</h3>
        <p>
            Crea un programa para la generación repetitiva de 3 números aleatorios hasta obtener una secuencia compuesta por:
            <br><strong>impar, par, impar</strong>
        </p>
        <p>
            R:
            <?php
            // AQUÍ VA EL CÓDIGO DE SOLUCIÓN EJERCICIO 2
                echo '<br>';
                $matriz;
                $ite=0;
                $filas=0;
                aleatorios($ite);

                

            
            ?>
        </p>
    </div>
    <hr>
    <div>
        <h3>Ejercicio 3</h3>
        <p>Utiliza un ciclo <strong>while</strong> para encontrar el primer número entero obtenido aleatoriamente, pero que además sea múltiplo de un número dado.</p>
        <p>
            R:
            <?php
            // AQUÍ VA EL CÓDIGO DE SOLUCIÓN EJERCICIO 3
            if (!empty($_GET['dado'])) {
                $dado = $_GET['dado'];
                echo multiploaleatorio($dado);
            } else {
                echo '(vacío)';
            }
            ?>
        </p>
    </div>
    <hr>
    <div>
        <h3>Ejercicio 4</h3>
        <p>Crear un arreglo cuyos <strong>índices</strong> van de 97 a 122 y cuyos <strong>valores</strong> son las letras de la 'a' a la 'z'. Usa la función <strong>chr(n)</strong> que devuelve el caracter cuyo código ASCII es <strong>n</strong> para poner el valor en cada índice. Es decir:</p>
        <p>
            [97] => a <br>
            [98] => b <br>
            [99] => c <br>
            … <br>
            [122] => z
        </p>
        <p>
            R:
            <?php
            // AQUÍ VA EL CÓDIGO DE SOLUCIÓN EJERCICIO 4
            
            echo "<br>";
            echo('<pre>');
            var_dump(indicesA());
            echo('</pre>');
            ?>
        </p>
    </div>
    <div>
       
        <h3>Ejercicio 5 SOLUCIONADO</h3>
        <p>
            Usar las variables <strong>$edad</strong> y <strong>$sexo</strong> en una instrucción if para identificar una persona de sexo "femenino", 
            cuya edad oscile entre los 18 y 35 años y mostrar un mensaje de bienvenida apropiado. Por ejemplo:
        </p>
        <p>
            <em>Bienvenida, usted está en el rango de edad permitido.</em>
        </p>
        <p>
            En caso contrario, deberá devolverse otro mensaje indicando el error.
        </p>
        <ul>
            <li>Los valores para $edad y $sexo se deben obtener por medio de un formulario en HTML.</li>
            <li>Utilizar el la Variable Superglobal $_POST (revisar documentación).</li>
        </ul>
        </p>
        <p>
            R:
            <form id="formulario1" action="./src/script1.php" method="post">
                <fieldset>
                    <legend>Información Personal</legend>
                    <ol>
                    <li><label>Edad:</label> <input type="text" name="edad"></li>
                    
                    <select name="sexo" id="lang">
                        <option value="masculino">Masculino</option>
                        <option value="femenino">Femenino</option>
                    </ol>
                </fieldset>
                <p>
                    <br>
                    <input type="submit" value="¡Enviar!">
                </p>
            </form>
        </p>
    </div>
    <h3>Ejercicio 6</h3>
        <p>Crea en código duro un arreglo asociativo que sirva para registrar el parque vehicular de
        una ciudad. Cada vehículo debe ser identificado por: <br></p>
        <p>
             Matricula <br>
             Auto<br>
                &nbsp;&nbsp;&nbsp;&nbsp;o Marca<br>
                &nbsp;&nbsp;&nbsp;&nbsp;o Modelo (año)<br>
                &nbsp;&nbsp;&nbsp;&nbsp;o Tipo (sedan|hachback|camioneta)<br>
             Propietario<br>
                &nbsp;&nbsp;&nbsp;&nbsp;o Nombre<br>
                &nbsp;&nbsp;&nbsp;&nbsp;o Ciudad<br>
                &nbsp;&nbsp;&nbsp;&nbsp;o Dirección<br>
        </p>

        <p>
            La matrícula debe tener el siguiente formato LLLNNNN, donde las L pueden ser letras de
            la A-Z y las N pueden ser números de 0-9.
            Para hacer esto toma en cuenta las siguientes instrucciones:<br>
        </p>
        <p>
                 Crea en código duro el registro para 15 autos<br>
                 Utiliza un único arreglo, cuya clave de cada registro sea la matricula<br>
                 Lógicamente la matricula no se puede repetir.<br>
                 Los datos del Auto deben ir dentro de un arreglo.<br>
                 Los datos del Propietario deben ir dentro de un arreglo.<br>
        </p>
        <p>
            R:
            <?php
            // AQUÍ VA EL CÓDIGO DE SOLUCIÓN
            echo "<br>";
                
                
            $autos=array(
                                "ABC1233" =>    array('auto'=> 
                                                    array("marca"=>"HONDA","modelo"=> 2020,"tipo"=>'Camioneta'),
                                                "propietario"=>
                                                    array("nombre"=>  'Anibal Arce',"ciudad"=> 'Puebla , Pue.',"direccion"=>   'Rufino Tamayo 31 Xaxala Santa Ana Chiautempan')                     
                             ),
                                "DES4565" =>     array('auto'=> 
                                                    array("marca"=>"TOYOTA","modelo"=> 2021,"tipo"=>'Sedan'),
                                                "propietario"=>
                                                    array("nombre"=>  'Xavier Lamas',"ciudad"=> 'Tlaxcala , Tlax.',"direccion"=>   '2da. Priv. Allende Pte. 4 Santa Ana Chiautempan')                     
                            ),
                                "FGH7897" =>     array('auto'=> 
                                                    array("marca"=>"NISSAN","modelo"=> 2022,"tipo"=>'Hachback'),
                                                "propietario"=>
                                                    array("nombre"=>  'Jose-Antonio Crespo',"ciudad"=> 'Veracruz , Ver.',"direccion"=>   'Priv. Los pinos  33 Los volcanes')                     
                            ),
                                "TYU4568" =>     array('auto'=> 
                                                    array("marca"=>"COOPER","modelo"=> 2019,"tipo"=>'Sedan'),
                                                "propietario"=>
                                                    array("nombre"=>  'Youssef Taboada',"ciudad"=> 'San Luis Potosi , SNLP.',"direccion"=>   '20 de Noviembre 3 Tepeyanco')                     
                            ),
                                "JKL1239" =>     array('auto'=> 
                                                    array("marca"=>"TESLA","modelo"=> 2018,"tipo"=>'Camioneta'),
                                                "propietario"=>
                                                    array("nombre"=>  'Marcelo Teruel',"ciudad"=> 'Sonora , Son.',"direccion"=>   'Priv. Tlahuicole 3 Blvd. Beatriz Paredes San Gabriel Cuahutla')                     
                            ),
                                "QWE9516" =>     array('auto'=> 
                                                    array("marca"=>"LAMBO","modelo"=> 2017,"tipo"=>'Sedan'),
                                                "propietario"=>
                                                    array("nombre"=>  'Faustino Garcia',"ciudad"=> 'Monterrey , Mty.',"direccion"=>   'Priv. Villa Cardel 2  Santa Maria Acuitlapilco')                     
                            ),
                                "SDF7535" =>     array('auto'=> 
                                                    array("marca"=>"VW","modelo"=> 2016,"tipo"=>'Hachback'),
                                                "propietario"=>
                                                    array("nombre"=>  'Diego Pinto',"ciudad"=> 'Oaxaca , Oax.',"direccion"=>   'Proegreso 51 Sta. Cruz Guadalupe Ixcotla Chiautempan')                     
                            ),
                                "CVB8522" =>     array('auto'=> 
                                                    array("marca"=>"JEEP","modelo"=> 2015,"tipo"=>'Sedan'),
                                                "propietario"=>
                                                    array("nombre"=>  'Teodora Ferrer',"ciudad"=> 'Michoacan , Mich.',"direccion"=>   'Priv. Rancho San Isidro 9 La Loma Xicotencatl')                     
                            ),
                                "GHJ4564" =>     array('auto'=> 
                                                    array("marca"=>"FIAT","modelo"=> 2017,"tipo"=>'Camioneta'),
                                                "propietario"=>
                                                    array("nombre"=>  'Angeles López',"ciudad"=> 'Merida , Yuc.',"direccion"=>   'Dr. Miguel Hernández 15-A Sta. Ana Chiautempan')                     
                            ),
                                "YUI3511" =>     array('auto'=> 
                                                    array("marca"=>"AUDI","modelo"=> 2016,"tipo"=>'Hachback'),
                                                "propietario"=>
                                                    array("nombre"=>  'Gabriela Rial',"ciudad"=> 'Aguascalientes , AGSCLT.',"direccion"=>   'José Maria Morelos 23 Secc. 7a. Contla de Juan Cuamatzi')                     
                            ),
                                "ASD4264" =>     array('auto'=> 
                                                    array("marca"=>"TOYOTA","modelo"=> 2012,"tipo"=>'Sedan'),
                                                "propietario"=>
                                                    array("nombre"=>  'Lucio Berrocal',"ciudad"=> 'Jalisco , Gua.',"direccion"=>   'Privada Domingo Arenas 3 Blvd. Beatriz Paredes San Gabriel Cuahutla')                     
                            ),
                                "QWD1758" =>     array('auto'=> 
                                                    array("marca"=>"HONDA","modelo"=> 2002,"tipo"=>'Camioneta'),
                                                "propietario"=>
                                                    array("nombre"=>  'Francisco-Jose Jara',"ciudad"=> 'Queretaro , Qtro.',"direccion"=>   'Av. Monterrey 55 San Damian Texoloc')                     
                            ),
                                "ERG1235" =>     array('auto'=> 
                                                    array("marca"=>"VW","modelo"=> 2005,"tipo"=>'Sedan'),
                                                "propietario"=>
                                                    array("nombre"=>  'Antonia Moya',"ciudad"=> 'Mexicalo , BCS.',"direccion"=>   'Independencia 43 Chimalpa Santa Isabel X.')                     
                            ),
                                "TYJ5282" =>     array('auto'=> 
                                                    array("marca"=>"TESLA","modelo"=> 2015,"tipo"=>'Hachback'),
                                                "propietario"=>
                                                    array("nombre"=>  'Severino Gaspar',"ciudad"=> 'Tlaxcala , Tlax.',"direccion"=>   'Dep. 55-D  U Felipe Santiago Xicotencatl')                     
                            ),
                                "BAU8543" =>     array('auto'=> 
                                                    array("marca"=>"NISSAN","modelo"=> 2015,"tipo"=>'Sedan'),
                                                "propietario"=>
                                                    array("nombre"=>  'Francisca Jiménez',"ciudad"=> 'Puebla , Pue.',"direccion"=>   'Calle del canal 1 Panotla')                     
                            ),
            );
            
            echo "<br>";
            echo('<pre>');
            print_r($autos);
            echo('</pre>');
                  
            ?>

        </p>
            <form id="formulario2" action="./src/script2.php" method="post">
                <fieldset>
                    <legend>Consulta Matricula</legend>
                    <ol>
                        <li><label>Matricula:</label> <input type="text" name="matricula"></li>
                    </ol>
                    <input type="hidden" name="autos" value="<?php echo urlencode(serialize($autos)) ?>"/>
                </fieldset>

                <p>
                    <br>
                    <input type="submit" value="¡Consultar!">
                </p>

            </form>


            <form id="formulario3" action="./src/script3.php" method="post">
                <fieldset>
                    <legend>¿deseas ver el catálogo completo de matriculas?</legend>

                    <input type="hidden" name="autos" value="<?php echo urlencode(serialize($autos)) ?>"/>
                </fieldset>

                <p>
                    <br>
                    <input type="submit" value="¡Catalogo completo!">
                </p>

            </form>




            
        
    </div>
</body>
</html>