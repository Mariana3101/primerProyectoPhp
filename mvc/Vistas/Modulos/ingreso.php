<br>
	<h1>INGRESAR</h1>

	<form method="post" action="">
		
		<input type="text" placeholder="Usuario" name="usuarioI" required>

		<input type="password" placeholder="Contraseña" name="claveI" required>

		<input type="submit" value="Ingresar">

	</form>

	<?php

	//llama a la clase AdminC que esta en adminC.php
	// llama a la funcion IngresoC
	$ingreso = new AdminC();
	$ingreso -> IngresoC();
	
	?>