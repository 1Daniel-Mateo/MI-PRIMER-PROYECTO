<?php
require_once('../modelo/clsUsuario.php');
if ($_GET) {
	$codigo=$_GET['Id'];

	//DOY ACCESO A LAS VARIABLES DE SESION
	session_start();
	//CREAR UNA VARIABLE DE SESION CON EL VALOR DEL CODIGO PARA PODER UTILIZARLO EN EL CONTROLADOR DE EDITARUSUARIO
	$_SESSION['codigoU']=$codigo;

	$objUsuario= new Usuario();
	$objUsuario->setUcodigo($codigo);
	//TRAER LA VARIABLE FILAS DE LA CLASE AL CONTROLADOR Y PARA ESO INVOCO EL MÉTODO
	$filas=$objUsuario->consultarPorCodigo();
	if($filas==null){
		header('Location: ../vistas/formEditarusuaTab.php?mensaje=incorrecto');
	}else{
		foreach ($filas as $fila) {
			$nombre=$fila['Usua_nombre'];
			$tipo=$fila['Usua_Tipo'];
			echo $nombre."<br>";
			echo $tipo;
			header('Location: ../vistas/formEditarusuaTab.php?mensaje=correcto&nombre='.$nombre.'&tipo='.$tipo);
		}
	}

	//echo $objUsuario->getCodigo();
}
?>