<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../aplicaciones/css/menu.php">
    <link rel="stylesheet" href="../aplicaciones/css/formulario/formRusua.css">
    <link rel="stylesheet" href="../aplicaciones/css/bootstrap.min.css">
    <link rel="stylesheet" href="../aplicaciones/css/menu1.css">
    <title>logeo</title>
</head>
<body>

 


<div class="formulrios">

<?php 
			if ($_GET){
				$mensaje=$_GET['mensaje'];
				
				if($mensaje=='errorclave'){
					echo "<div class='alert alert-danger'> <font color='red'> La clave y la confirmación no coinciden, verifique y reintente </div> </font>";
					}else{
						if($mensaje=='incorrecto'){
					echo "<div class='alert alert-danger'> El usuario ya existe verifique y reintente </div> ";
					}else{
						echo "<div class='alert alert-success'> El usuario  fue registrado correctamente</div>";
				}
			}
		}

        
    

		 ?>
    

    <center> 
<form action="../controlador/controlRegistroUsuario.php" method="POST" class="formulario">
<div class="boton1">
<button name="button" class="boton">Ingresar</button>
<button name="button" class="boton">Actualizar</button>
<button name="button" class="boton"> <a href="formConsulUsua.php"> Consultar</button></a>
<button name="button"class="boton">Eliminar</button>

</div>
<br><br>

<h3 class="titulo">Registro de Usuario</h3>

<br><br>


<div class="grupo">
<label>Codigo Usuario</label>
<input type="numeric" name="txtusuario" placeholder="ingrese codigo" maxl  ><br>  
</div>

<div class="grupo">
<label>Nombre de Usuario</label>
<input type="text" name="txtnombre" placeholder="ingrese nombre" require maxl > <br>
</div>

<div class="grupo">
<label>Clave</label>
<input type="password" name="txtclave" placeholder="ingrese clave" require maxl > <br>
</div>

<div class="grupo">
<label>Confimar clave</label>
<input type="password" name="txtconfirmar" placeholder="confirme clave" require maxl > <br>
</div><br>

<div class="boton2">
<select type="text" name="txttipo" >
    <option value="administrador">Administrador</option>
    <option value="cliente">Cliente</option>
<label>Tipo de Usuario</label><br>
</select>
</div>
<br>

<div class="boton3">
      <input type="submit" name="btingresar" value="Registro" class="boton">
      </div>

</form>
</center> 
    </div>
</body>
</html>