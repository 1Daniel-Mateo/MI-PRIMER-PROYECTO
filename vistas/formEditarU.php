<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../aplicaciones/css/menu2.css">
    <link rel="stylesheet" href="../aplicaciones/css/main.css">
    <link rel="stylesheet" href="../aplicaciones/css/bootstrap.min.css">
    
    <title>Consulta Código USUARIO</title>
</head>
<body>


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
<nav class="menu"> 
  <a href="menu.php" class="img"><img src="../aplicaciones/img/menu.png" alt=""></a>
  <a href="formRegistrarUsuario.php">Ingresar</button> </a>
  <a href="formConsulUsua.php"> Consul General</button></a>
  <a href="formConsulUsuaCodigo.php"> Consul Código</button></a>
  <a href=""> Editar</button> </a>
  <a href=""> Eliminar</button> </a>
  <a href="reporteUsuario.php">Reporte</button></a>
  </nav>

</center>


<br><br>

<div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">

                    <h2 class="title">Edicion de Usuario</h2>
                </div>
                
                
                <div class="card-body">
    <?php 
		if($_GET){
			$mensaje=$_GET['mensaje'];//bajar el mensaje que envía el controlador del enlace
			
            if($mensaje == 'errorclave'){
                  echo "la clave y la confirmación no coinciden, verifique y reintente";
              }
                if($mensaje == 'editarok'){
                    echo "<div class='alert alert-success'>tu usuario fue editado</div>"; 
              }else{
				$nombre=$fila['nombre'];
			$tipo=$fila['tipo'];
		?>
		<!--FORMULARIO DONDE SE MOSTRARÁN LOS DATOS ASOCIADOS AL CODIGO DIGITADO -->

        <form method="POST" action="../controlador/controlEditarusuario.php">

                         <div class="form-row">
                            <div class="name">Nombre Usuario</div>
                            <div class="value">
                                <div class="input-group">
                                    <input maxlength="32" class="input--style-5" type="text" name="txtnombre" value="<?php echo $nombre; ?>" >
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Clave</div>
                            <div class="value">
                                <div class="input-group">
                                    <input maxlength="32" class="input--style-5" type="password" name="txtclave">
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">confirmación</div>
                            <div class="value">
                                <div class="input-group">
                                    <input maxlength="32" class="input--style-5" type="password" name="txtconfirmar">
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
                                            
                                            <option <?php if($tipo=='Administrador'){echo "selected";} ?> >Administrador</option>
                                            <option <?php if($tipo=='Cliente'){echo "selected";} ?> >Cliente</option>
                                           
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div>
                            <button class="btn btn--radius-2 btn--red" type="submit">Modificar Datos</button>
                        </div>
                    </form>

      <?php
              }
			}
		?>
                </div>
            </div>
   
</body>
</html>