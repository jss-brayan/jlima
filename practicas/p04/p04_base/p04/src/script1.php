<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html;charset=utf-8" />
		<title>Registro Completado</title>
		<style type="text/css">
			body {margin: 20px; 
			background-color: #C4DF9B;
			font-family: Verdana, Helvetica, sans-serif;
			font-size: 90%;}
			h1 {color: #005825;
			border-bottom: 1px solid #005825;}
			h2 {font-size: 1.2em;
			color: #4A0048;}
		</style>
	</head>
	<body>
		<h1>RESPUESTA</h1>

		<?php
            $age = $_POST['edad'];
            $sex = $_POST['sexo'];
//commit
            //if (!empty($age)&&!empty($sex)) {
                echo '<p>Edad: '.$age.'<br>';
                echo 'Sexo: '.$sex.'</p>';
            //}

			if($age>17&&$age<36&&($sex=="femenino"||$sex=="Femenino"))
				echo '<p><h1>¡Bienvenida, usted está en el rango de edad permitido!</h1></p><br>';

			if($age>17&&$age<36&&($sex=="masculino"||$sex=="Masculino"))
				echo '<p><h1>Lo lamentamos, cumples con la edad pero solo sexo Femenino.</h1></p><br>';

			if($age<18 || $age>36&&($sex=="femenino"||$sex=="Femenino"))
				echo '<p><h1>Lo siento chica, no entras en el rango de edad.</h1></p><br>';
			
			if($age<18 || $age>36&&($sex=="masculino"||$sex=="Masculino"))
				echo '<p><h1>Lo lamentamos, no cumples con ningun criterio.</h1></p><br>';

        ?>
	</body>
</html>