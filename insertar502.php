<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Goodbye World</title>
</head>
<body>

<?php

$nomclie = $_GET ["txt1"];
$apell = $_GET ["txt2"];
$email = $_GET ["txt3"];
$phone = $_GET ["txt4"];

//Sacnado los valores de las cajs de texto
$localserv="localhost";
$nomBD="concesionaria";
$usuario="root";
$password="";

$conexion=mysqli_connect("localhost","root","");



if(mysqli_connect_errno()){
	echo "fallo al enpasswordr el servidor revisa su nombre";
	exit ();
	
}

mysqli_select_db($conexion, $nomBD) or die ("No se encontro la base de datos revise su nombre");

//Esta funcion se utilizara para mostrar los caracteres especiales del idioma
mysqli_set_charset($conexion,"utf8");


//consulta 3.1
$registros="INSERT INTO cliente (id,nombre,apellidos,correo,telefono,numero_de_pedido) VALUE ( ,'$nomclie','$apell','$email',$phone, )";
if($registros == true){
	echo "Se agrego con exito";	;
	echo "<table> <tr> <td> $nomclie </tr> </td>"	;
	echo " <tr> <td> $apell </tr> </td>";
	echo " <tr> <td> $email </tr> </td>";
	echo " <tr> <td> $phone </tr> </td>";
}else{
echo "No se realizo el registro revisa la sentencia ";	
}


mysqli_close($conexion);
?>

</body>
</html>
