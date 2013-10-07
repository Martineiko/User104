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
	$a =$_POST["Codigo"];
	$b =$_POST["Carrera"];
	$c =$_POST["Nombre"];
	$d =$_POST["ApellidoP"];
	$e =$_POST["ApellidoM"];
	$f =$_POST["Email"];

	
	$miquerry = "INSERT INTO alumno (Codigo, Carrera, Nombre, ApellidoP, ApellidoM, Email)
				VALUES(
					\"$a\",
					\"$b\",
					\"$c\",
					\"$d\",
					\"$e\",
					\"$f\"
					)";

	$resultado = $con -> query($miquerry);
	if ($resultado === FALSE){
		echo $con -> errno . $con -> error;
	}
	echo $con -> insert_id;

	
	var_dump($resultado);

?> 