<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../aplicaciones/css/menu2.css">
    <link rel="stylesheet" href="../aplicaciones/css/main.css">
    <link rel="stylesheet" href="../aplicaciones/css/bootstrap.min.css">

    <title>Consulta Usuario</title>
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

<div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">

                    <h2 class="title">Consulta General Usuario</h2>
                </div>
                <div class="card-body">

  <div class="form-row">
   
   
   <table class="table table-bordered">
     <tr colspan="2" bgcolor="AEE3F7" align="center">

           <th>Codigo</th>
           <th>Nombre Usuario</th>
           <th>Clave</th>
           <th>Tipo</th>
           <th>Acciones</th>
   </tr>

<?php 
    require_once('../modelo/clsUsuario.php');
    $objeto=new Usuario();
    $filas=$objeto->consultarTodos();

    if ($filas !=null) {
        foreach($filas as $fila ){
?>
      <tr>                                                                                                                                                                                                                                                                                  >
         <td> <?php echo $fila['Usua_codigo']; ?> </td>
		 <td> <?php echo $fila['Usua_nombre']; ?> </td>  
         <td> <?php echo $fila['Usua_clave'];?></td>
         <td> <?php echo $fila['Usua_Tipo']; ?></td>
          <td>
          <a href="../controlador/controlOpcion2ConsultarUsuario.php?Id=<?php echo $fila['Usua_codigo'];?>" class="btn btn-primary">Editar</a>
					<a href="../controlador/controlEliminarUsuarioTabla.php?txtNombre=<?php echo $fila['Usua_nombre'];?>" class="btn btn-danger" onclick="return alerta();">Eliminar</a>
          </td>
      </tr>
    
      <?php
				}
			}
			?>
   </table>
</div>
    
</body>
</html>