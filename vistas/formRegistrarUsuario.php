<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../aplicaciones/css/menu2.css">
    <link rel="stylesheet" href="../aplicaciones/css/main.css">
    <link rel="stylesheet" href="../aplicaciones/css/bootstrap.min.css">
    
    <title>Registro Usuario</title>
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
<br><br>

<div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">

                    <h2 class="title">Registro de Usuario</h2>
                </div>
                <div class="card-body">
                    <form method="POST" action="../controlador/controlRegistroUsuario.php">
                                            
                         <div class="form-row">
                            <div class="name">Código Usuario</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="txtusuario">
                                </div>
                            </div>
                        </div>
                         <div class="form-row">
                            <div class="name">Nombre Usuario</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="txtnombre">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Clave</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="password" name="txtclave"  require>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Confirmar Clave</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="password" name="txtconfirmar" require>
                                </div>
                            </div>
                        </div>
                     
                        <div class="form-row">
                            <div class="name">Tipo Usuario</div>
                            <div class="value">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="txttipo">
                                            <option disabled="disabled" selected="selected"> option</option>
                                            <option>Administrador</option>
                                            <option>Cliente</option>
                                           
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div>
                            <button class="btn btn--radius-2 btn--red" type="submit">Registro</button>
                        </div>
                    </form>
                </div>
            </div>
   
            
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
</body>
</html>