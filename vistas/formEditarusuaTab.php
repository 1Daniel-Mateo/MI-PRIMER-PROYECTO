<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../aplicaciones/css/menu.php">
    <link rel="stylesheet" href="../aplicaciones/css/bootstrap.min.css">
    <link rel="stylesheet" href="../aplicaciones/css/menu1.css">
    <title>menu principal</title>
</head>
<body>

<div class="sidebar">
        <a href="menu.php">Menu principal</a>
        <a href="formRegistrarUsuario.php" class="active">Usuario</a>
        <a href="#">Administrador</a>
        <a href="#">Clientes</a>
</div>

<div class="content">
   
<center> <h3>Formulario de edición de Usuario</h3> </center>
<br>
 
<?php 
		if($_GET){
			$mensaje=$_GET['mensaje'];//bajar el mensaje que envía el controlador del enlace
			
				if($mensaje=='errorclave'){
					echo "La clave y la confirmacion no coinciden, verifique y reintente";
				}else{
					if($mensaje=='editarok'){
						echo "<div class='alert alert-success'>Datos Modificados Correctamente</div>";
					}else{

						$nombre=$_GET['nombre'];
						$tipo=$_GET['tipo'];
		?>
		
 <!--FORMULARIO DONDE SE MOSTRARÁN LOS DATOS ASOCIADOS AL CODIGO DIGITADO -->
    <form method="POST" action="../controlador/controlEditarUsuarioDesdeTabla.php">
       <div class="form-group">
       <h4>Si no va a modificar su clave, digite la que tiene actualmente, tanto en el campo de clave como en el de confirmación</h4>
           <label>Nombre:</label>
           <input type="text" name="txtnombre" class="form-control" value="<?php echo $nombre; ?>">
           <label>Tipo:</label>
           <select name="txttipo" class="form-control">
                   <?php if ($tipo=='admin') {echo "selected";}?>>admin</option>
                   <option <?php if ($tipo=='administrador') {echo "selected";}?>>administrador</option>
                   <option <?php if ($tipo=='cliente') {echo "selected";}?>>cliente</option>-->
            </select>
           <label>Clave:</label>
           <input type="password" name="txtclave" class="form-control">
           <label>Confimación:</label>
           <input type="password" name="txtconfirmar"class="form-control">
           <br>
           <input type="submit" name="btnEditarUsuario" value="Modificar los datos" class="btn btn-primary">
       </div>
</form>
<?php
                  }
					}
				
			
		}
		?>
</body>
</html>