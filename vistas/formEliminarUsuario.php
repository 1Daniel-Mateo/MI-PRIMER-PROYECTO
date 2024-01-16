<?php
	//include('privilegios.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../aplicaciones/css/menu2.css">
    <link rel="stylesheet" href="../aplicaciones/css/main.css">
    <link rel="stylesheet" href="../aplicaciones/css/bootstrap.min.css">
    
    <title>Consulta Código Usuario</title>
</head>
<body>
<center>
<nav class="menu"> 
  <a href="menu.php" class="img"><img src="../aplicaciones/img/menu.png" alt=""></a>
  <a href="formRegistrarUsuario.php">Ingresar</button> </a>
  <a href="formConsulUsua.php"> Consul General</button></a>
  <a href="formConsulUsuaCodigo.php"> Consul Código</button></a>
  <a href="formEliminarUsuario.php"> Eliminar</button> </a>
  <a href="reporteUsuario.php">Reporte</button></a>
  </nav>

</center>
	<div class="content">
		<h3>Bienvenido al Sistema: 

		<h4>Formulario de eliminación de usuarios</h4>
		<?php
		if ($_GET) {
			$mensaje=$_GET['mensaje'];
			if ($mensaje=='usuarioigual') {
				echo "<div class='alert alert-danger'>No se puede eliminar al usuario que está en sesión</div>";
			}else{
				if ($mensaje=='incorrecto') {
					echo "<div class='alert alert-danger'>No se puede eliminar al usuario debido a restricciones en la base de datos</div>";
				}else{
					echo "<div class='alert alert-success'>Usuario Eliminado Correctamente</div>";
				}
			}
		}
		?>

		<form method="POST" action="../controlador/controlEliminarUsuario.php">
		<div class="form-group">
			
			<label>Nombre de Usuario</label>
			<input type="text" maxlength="32" required name="txtNombre" class="form-control">
			
			<br>
			<input type="submit" name="btnEliminarUsuario" value="Eliminar Usuario" class="btn btn-primary" onclick="return alerta();">
		</div>
			
		</form>
	</div>

<script type="text/javascript">
	function alerta(){
		var opcion=confirm("Está seguro de que desea eliminar al usuario?");
		return opcion;
	}
</script>	
</body>
</html>