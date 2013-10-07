<?php 
	//Conexion a la base de datos
	$con = new mysqli('localhost','cc409_user104','dLcDC9QGmG','cc409_user104');
	if ($con->connect_errno)
	{
		//echo "Error con la conexion a la bd";
		//exit();
		die("Error con la conexion a la bd");
	}

	$_POST;
	$a =$_POST["Ciclo"];
	$b =$_POST["Inicio"];
	$c =$_POST["Fin"];
	$d =$_POST["Festivo"];

	
	$miquerry = "INSERT INTO curso (Ciclo, Inicio, Fin, Festivo)
				VALUES(
					\"$a\",
					\"$b\",
					\"$c\",
					\"$d\"
					)";

	$resultado = $con -> query($miquerry);
	if ($resultado === FALSE){
		echo $con -> errno . $con -> error;
	}
	echo $con -> insert_id;

	
	var_dump($resultado);

?> 