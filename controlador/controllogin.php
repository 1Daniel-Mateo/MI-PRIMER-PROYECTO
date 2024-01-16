<?php
require_once('../modelo/clsUsuario.php');
   if(isset($_POST) && !empty($_POST)){
       $usuario = $_POST['txtUsuario'];
       $clave = $_POST['txtClave'];
       //crear objeto de la clase
       $objUsuario=new Usuario();
       //envia datos a la clase
       $objUsuario->setUnombre($usuario);
       $objUsuario->setUclave( $clave);
       //VERIFICAR SI EL LOGIN DE LA CLASE ES TRUE O FALSE
       if($objUsuario->login()==true){
           header('location:../vistas/menu.php');
       }else{
           header('location:../vistas/formlogeo.php?fallo=error');
       }
}

?>
