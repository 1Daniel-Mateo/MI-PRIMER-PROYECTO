<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../aplicaciones/css/logeo.css">
    <title>Login</title>
</head>

<body> 

<?php 
			if ($_GET){
				$mensaje=$_GET['error'];
				
				if($mensaje=='errorclave'){
					echo "<div class='alert alert-danger'> <font color='red'> La clave y la confirmación no coinciden, verifique y reintente </div> </font>";
					}
						if($mensaje=='incorrecto'){
					echo "<div class='alert alert-danger'> <font color='red'> El usuario ya existe verifique y reintente </div> ";
					}else{
						echo "<div class='alert alert-danger'> <font color='red'> Contraseña no exite</div>";
				}
			
		}

		 ?>

    <div id="login">
        <form action="../controlador/controllogin.php" method="POST" class="formulario">
                    
                       
                        <h3  class="titulo">  Inicio Sesión </h3> <br>
                        <br>
                    <div class="grupo">
                    
                        <label>Usuario:</label><br>
                        <input type="text" name="txtUsuario" class="form-control"><br>
                        <label>Clave:</label><br>
                        <input type="password" name="txtClave" class="form-control"><br>
                        <div class="boton1">
                        <input type="submit" name="btnIniciarSecion" value="INICIAR SESION" class="boton">
                        </div>
                    </div>
                   
                    <div id="register-link" class="boton2">
                    <a href="formUregistro.php" class="boton">Regístrate aquí</a><br>
                                        </div>
     
</div>
</form>


</body>
</html>
