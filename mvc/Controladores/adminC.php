<?php

class AdminC 
{
	
	public function IngresoC()
	{ //isset = la variable viene con informacion 
		//usuarioI y claveI = asi se llama en el formulario de ingreso.php en name
		if(isset($_POST["usuarioI"])){

			$datosC = array("usuario"=>$_POST["usuarioI"],"clave"=>$_POST["claveI"]);

			$tablaBD = "administradores";

			$respuesta = AdminM::IngresoM($datosC, $tablaBD);

			if($respuesta["usuario"] == $_POST["usuarioI"] && $respuesta["clave"] == $_POST["claveI"]){
				///se crea variable de sesion

				session_start();
				$_SESSION["Ingreso"] = true;

				header("location:index.php?ruta=empleados");
			}else{
				echo "Error al ingresar";
			}
		}
	}
}


?>