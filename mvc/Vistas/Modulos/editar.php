<?php
// session 
session_start();
if(!$_SESSION["Ingreso"]){
	
	header("location:index.php?ruta=ingreso");

	exit();
}


?>


	<br>
	<h1>EDITAR UN EMPLEADO</h1>

	<form method="post" >
	

	</form>

<?php
$editar = new EmpleadosC();
$editar -> EditarEmpleadosC();
?>