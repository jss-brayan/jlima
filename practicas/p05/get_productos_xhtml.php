<?php
    //header("Content-Type: application/json; charset=utf-8"); 
    $data = array();

	if(isset($_GET['tope']))
    {
		$tope = $_GET['tope'];
    }
    else
    {
        die('Parámetro "tope" no detectado...');
    }

	if (!empty($tope))
	{
		/** SE CREA EL OBJETO DE CONEXION */
		@$link = new mysqli('localhost', 'root', 'Password', 'marketzone');
        /** NOTA: con @ se suprime el Warning para gestionar el error por medio de código */

		/** comprobar la conexión */
		if ($link->connect_errno) 
		{
			die('Falló la conexión: '.$link->connect_error.'<br/>');
			//exit();
		}

		/** Crear una tabla que no devuelve un conjunto de resultados */
		if ( $result = $link->query("SELECT * FROM productos WHERE unidades <= $tope") ) 
		{
            /** Se extraen las tuplas obtenidas de la consulta */
            echo('<pre>');
			print_r($row = $result->fetch_all(MYSQLI_ASSOC));
            echo('</pre>');

            /** Se crea un arreglo con la estructura deseada */
            //foreach($row as $num => $registro) {            // Se recorren tuplas
              //  echo $num.' ';
                //foreach($registro as $key => $value) {      // Se recorren campos
                  //      echo $key.' ';
                   // $data[$num][$key] = utf8_encode($value);
               // }
            //}

			/** útil para liberar memoria asociada a un resultado con demasiada información */
			$result->free();
		}

		$link->close();

        /** Se devuelven los datos en formato JSON */
        echo json_encode($data, JSON_PRETTY_PRINT);
	}
	?>