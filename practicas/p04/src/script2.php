<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html;charset=utf-8" />
		<title>Consulta</title>
		<style type="text/css">
			body {margin: 20px; 
			background-color: WHITE;
			font-family: Verdana, Helvetica, sans-serif;
			font-size: 90%;}
			h1 {color: #005825;
			border-bottom: 1px solid #005825;}
			h2 {font-size: 1.2em;
			color: #4A0048;}
		</style>
	</head>
	<body>
		<h1>Cunsulta de Matricula</h1>

		<?php
        $i=0;
            $matricula = $_POST['matricula'];
            $autos = unserialize(urldecode(stripslashes($_POST["autos"]))); 
                
            foreach($autos as $clave => $valor){
                               
                if($clave==$matricula){
                    echo "Matricula Localizada";
                    foreach($valor as $klave => $balor){
                        echo "<br>";
                        echo $klave;
                        echo ": ";
                        foreach($balor as $qlave => $walor){
                            echo "<br>";
                            echo "---";
                            echo $qlave;
                            echo ": ";
                            echo $walor;
                            echo "<br>";
                            /*foreach($walor as $kei => $val){
                                echo "<br>";
                                echo "++++++";
                                echo $kei;
                                echo ". ";
                            }*/
                        }
                    }
                }
//                echo " ";
//                echo $valor;
            }

        ?>
	</body>
</html>