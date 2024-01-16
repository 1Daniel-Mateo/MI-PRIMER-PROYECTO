<?php
require_once('../Modelo/clsUsuario.php');
if ($_GET) {
	$codigo=$_GET['Id'];

	//DOY ACCESO A LAS VARIABLES DE SESION
	session_start();
	//CREAR UNA VARIABLE DE SESION CON EL VALOR DEL CODIGO PARA PODER UTILIZARLO EN EL CONTROLADOR DE EDITARUSUARIO
	$_SESSION['codigoU']=$codigo;

	$objUsuario= new Usuario();
	$objUsuario->setUcodigo($Ucodigo);
	//TRAER LA VARIABLE FILAS DE LA CLASE AL CONTROLADOR Y PARA ESO INVOCO EL MÉTODO
	$filas=$objUsuario->consultarPorCodigo();
	if($filas==null){
		header('Location: ../Vista/formEditarUsuarioDesdeTabla.php?mensaje=incorrecto');
	}else{
		foreach ($filas as $fila) {
			$nombre=$fila['usua_nombre'];
			$tipo=$fila['usua_tipo'];
			echo $nombre."<br>";
			echo $tipo;
			header('Location: ../Vista/formEditarUsuarioDesdeTabla.php?mensaje=correcto&nombre='.$nombre.'&tipo='.$tipo);
		}
	}

	//echo $objUsuario->getCodigo();
}
?>