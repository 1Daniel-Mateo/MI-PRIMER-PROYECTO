<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../aplicaciones/css/formulario/formRadmin.css">
    <link rel="stylesheet" href="../aplicaciones/css/bootstrap.min.css">
    <link rel="stylesheet" href="../aplicaciones/css/menu1.css">
    <link rel="stylesheet" href="../aplicaciones/css/menu.php">
    <title>logeo</title>
</head>
<body>

<div class="sidebar">
        <a class="active" href="menu.php">Menú principal</a>
        <a href="../index.php">cerrar sesión</a>
        <a href="formRegistrarUsuario.php">Usuario</a>
        <a href="formProducto.php">Productos</a>
        <a href="formcliente.php">Clientes</a>
        <a href="formventa.php">Ventas</a>
        <a href="formadministrador.php">Administrador</a>
</div>
 
<form action="../controlador/controlRegistroUsuario.php" method="POST" class="formulario">


    
    <div class="boton1">
<button name="button" class="boton">Ingresar</button>
<button name="button" class="boton">Actualizar</button>
<button name="button" class="boton">Consular</button>
<button name="button" class="boton">Eliminar</button>

</div>

<h3 class="titulo">Registro de Administrador</h3>

<div class="grupo">
<label>Codigo Usuario</label><br>
<input type="text" name="txtusuario" placeholder="Ingresa usuario"  require maxl >  
</div>

<div class="grupo">
<label>Identificacion</label><br>
<input type="text" name="txtusuario" placeholder="Ingresa Identificacion"  require maxl >  
</div>

<div class="grupo">
<label>Tipo Identificacion</label><br>
<input type="text" name="txtusuario" placeholder="Ingresa Tipo Identificacion"  require maxl >  
</div>

<div class="grupo">
<label>Nombre de Administrador</label><br>
<input type="text" name="txtusuario" placeholder="Ingresa Nombre"  require maxl >  
</div>

<div class="grupo">
<label>Apellido de Administrador</label><br>
<input type="text" name="txtusuario" placeholder="Ingresa Apellido"  require maxl >  
</div>

<div class="grupo">
<label>Codigo Usuario</label><br>
<input type="text" name="txtusuario" placeholder="Ingresa Codigo"  require maxl >  
</div>

<div class="grupo">
<label>Clave</label><br>
<input type="password" name="txtclave" placeholder="Ingresa Clave" > 
</div>

<div class="boton2">
      <input type="submit" name="btingresar" value="Registro" class="boton">
      </div>

</div>

      </form>       
</body>
</html>