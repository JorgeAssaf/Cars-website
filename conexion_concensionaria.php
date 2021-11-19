<!DOCTYPE html
	PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title> i wanna go to the moon :D</title>

	<!-- El apartado style funciona para personalizar la tabla, la cual se mostrara
     cuando ejecutes la pagina -->

	<style>
		.tabla {
			border: 10px dotted #000000;
			border-bottom: 10px solid #C63;
		}
	</style>

</head>

<body>

	<?php

//asignando los valores a los 4 elementos de las 4 variables
//para obtener el valor de la caja de texto
$search=$_GET["txt"];
$serv="localhost";
$namebd="concesionaria";
$usubd="root";
$pas="";

//realizando la conexion con la BD
//con variables
$conecxion=mysqli_connect($serv,$usubd,$pas);

//se puede ejecutar sin error sin usar las variables solo asignando los valores
//$conecxion=mysqli_connect("localhost","root","","my_agk4_tea");

//se recomienda ejecutar la pagina para asegurarnos de que no existen errores, en caso de su existencia intentar solucionarlos.

//esta indicacion comprueba que no existan errores en el servidor en caso de su existencia
//indica en pantalla y no continua con las indicaciones
if(mysqli_connect_errno()){
	echo "fallo al encontrar el servidor revisa su nombre";
	exit ();
}

//esta sintxis es para declarar los signos que especiales para mostrarlos se coloca antes de la sentencia
mysqli_set_charset($conecxion, "utf8");


//la siguiente indicacion comprueba la ubicacion de la base de datos
mysqli_select_db($conecxion, $namebd) or die ("No se encontro la base de datos revise su nombre");

//consulta 3.1: La consulta indica la tabla de elementos que estamos consultando
//2.3 modificamos la sentencia para una busqueda especifica con comodines
$chequeo="select * from producto WHERE nombre_del_carro LIKE '%$search%' ";

//consulta 3.2   
$registros=mysqli_query($conecxion, $chequeo);

//consulta 3.3


//while ($fila=mysqli_fetch_row($registros)){
while ($fila=mysqli_fetch_array($registros,MYSQL_ASSOC)){
//por ello de acuerdo al numero de columnas (apartir del 0 en adelante) se usa un echo y ."" este ultimo para concatenar 
//echo para visualisar el contenidos de las columnas con los registros en la pagina
echo "<table class=tabla align=center><tr><td>";

echo $fila['numero_de_serie']."</td><td>";
echo $fila['nombre_del_carro']."</td><td>";
echo $fila['modelo']."</td><td>";
echo $fila['color']."</td><td>";
echo $fila['fabricante']."</td><td>";
echo $fila['costo']."</td><td> ";
echo $fila['numero_de_pedido']."</td></td></table> ";

//en  html br refiere a un salto de linea
//echo "<br>" para salto de linea;
echo "<br>";

}

//en esta linea cerramos la base de datos
mysqli_close($conecxion);


?>

</body>

</html>