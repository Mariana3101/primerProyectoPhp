<?php
// session 
session_start();
if(!$_SESSION["Ingreso"]){
	
	header("location:index.php?ruta=ingreso");

	exit();
}


?>

	<br>
	<h1>Empleados</h1>

	<table id="t1" border="1">
		
		<thead>
			
			<tr>
				<th>Nombre</th>
				<th>Apellido</th>
				<th>Email</th>
				<th>Puesto</th>
				<th>Salario</th>
				
			</tr>

		</thead>

		<tbody>
			
			

			<?php

			$mostrar = new EmpleadosC();
			$mostrar -> MostrarEmpleadoC();


			?>


		</tbody>

	</table>

<?php

$elimimar = new EmpleadosC();
$elimimar -> BorrarEmpleadoC();

?>
