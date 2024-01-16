<?php
require_once('../Modelo/clsUsuario.php');
if (isset($_POST) && !empty($_POST)) {
	$codigo=$_POST['txtusuario'];
// variables de sesion crear una varia de sesion para llevar el codigo

session_start();
$_SESSION['codigoU'] =$codigo;

	$objUsuario= new Usuario();
	$objUsuario->setUcodigo($codigo);
	//TRAER LA VARIABLE FILAS DE LA CLASE AL CONTROLADOR Y PARA ESO INVOCO EL MÉTODO
	$filas=$objUsuario->consultarPorCodigo();
	if($filas==null){
		header('Location: ../vistas/formConsulUsuaCodigo.php?mensaje=incorrecto');
	}else{
		foreach ($filas as $fila) {
			$nombre=$fila['Usua_nombre'];
			$tipo=$fila['Usua_Tipo'];

			echo $nombre."<br>";
			echo $tipo;
			header('Location: ../vistas/formConsulUsuaCodigo.php?mensaje=correcto&nombre='.$nombre.'&tipo='.$tipo);
		}
	}

	//echo $objUsuario->getCodigo();
}
?>