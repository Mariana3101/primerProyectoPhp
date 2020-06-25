<?php
// Para detectar error
error_reporting(E_ALL);
ini_set('display_errors', '1');


// session 
session_start();
if(!$_SESSION["Ingreso"]){
	
	header("location:index.php?ruta=ingreso");

	exit();
}


?>


	<br>
	<h1>EDITAR EMPLEADO</h1>

	<form method="post" >
	

	

<?php
$editar = new EmpleadosC();
$editar -> EditarEmpleadosC();


$actualizar = new EmpleadosC();
$actualizar -> ActualizarEmpleadoC();
?>

</form>