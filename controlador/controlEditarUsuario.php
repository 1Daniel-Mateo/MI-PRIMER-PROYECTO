<?php
require_once('../modelo/clsUsuario.php');
if (isset($_POST) && !empty($_POST)) {
	$nombre=$_POST['txtnombre'];
	$tipo=$_POST['txttipo'];
	$clave=$_POST['txtclave'];
	$confirmar=$_POST['txtconfirmar'];

	//DOY ACCESO A LAS VARIABLES DE SESION
	session_start();
	//capturo el codigo que esta guardado en esas variables
	$codigo=$_SESSION['codigoU'];

   // echo $codigo()."<br>";
    //echo $nombre()."<br>";
    //echo $tipo()."<br>";
    //echo $clave()."<br>";


	if ($clave==$confirmar) {
		$objUsuario= new Usuario();
		//ENVIO LOS DATOS A LA CLASE usando el metodo set de cada variable
		$objUsuario->setUcodigo($codigo);
		$objUsuario->setUnombre($nombre);
		$objUsuario->setUtipo($tipo);
		$objUsuario->setUclave(md5($clave));
		
        //verifico que los datos hayan llegado a la clase con el metodo get de cada variable
		echo $objUsuario->getUcodigo()."<br>";
		echo $objUsuario->getUnombre()."<br>";
		echo $objUsuario->getUtipo()."<br>";
		echo $objUsuario->getUclave()."<br>";

        //invoca metodo
        $objUsuario->editarUsuario();


    } 
     else{
        header('Location: ../vistas/formEditarusua.php?mensaje==errorclave');
     }

    }
	

?>