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
        <a href="#">Empleado</a>
        <a href="#">Clientes</a>
</div>

<div class="content">
   
<center> <h3>Formulario de edición de usuario</h3> </center>
<br>
 
<form method="POST" action="../controlador/controlConsultarUsuario1.php">
    <label>codigo</label>
    <input type="number" name="txtusuario" class="form-control">
    <br>
    <input type="submit" name="btnConsultaUsuario" value="Consultar Datos" class="btn btn-primary">
</form>
<?php
  if ($_GET) {
      $mensaje=$_GET['mensaje'];//bajar el mensaje de enlace al controlador
     // echo $mensaje;

      if ($mensaje=='incorrecto') {
          echo "No existen datos de usuario asociados al codigo digitado,
          verefique y reintente";
      }else{
        if($mensaje=='errorclave'){
            echo" la clave y la confirmación no coincide verifique y reintente ";
        }else{
            if($mensaje=='editarok'){
                echo"<div class='alert alert-success'> Datos Modificados Correctamente </div>";
            } else{

          $nombre=$_GET['nombre'];
          $tipo=$_GET['tipo'];
      
  

?>

<!-- Formulario donde se mostraran los datos al codigo asociado a digitos-->

<form method="POST" action="../controlador/controlEditarUsuario.php">
<h4> Si no va a modificar su  clave, ponga la clave actual en los campos de clave y confirmación </h4> <br>
       <div class="form-group">
           <label>Nombre:</label>
           <input type="text" name="txtnombre" class="form-control" vaule="<?php echo $nombre?>">
           <label>Tipo:</label>
           <select name="txttipo" class="form-control">
                   <?php if ($Utipo=='admin') {echo "selected";}?>>admin</option>
                   <option <?php if ($tipo=='empleado') {echo "selected";}?>>empleado</option>
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
}
?> 
</div>
</body>
</html>