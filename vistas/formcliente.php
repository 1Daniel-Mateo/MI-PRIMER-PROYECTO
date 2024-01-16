<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../aplicaciones/css/formulario/formCliente.css">
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
    
<center>
<form action="../controlador/controlRegistroUsuario.php" method="POST" class="formulario">

    <div class="boton1">
<button name="button" class="boton">Ingresar</button>
<button name="button" class="boton">Actualizar</button>
<button name="button" class="boton">Consular</button>
<button name="button" class="boton">Eliminar</button>

</div>

<h3 class="titulo">Registro de cliente</h3>

<br><br>

<div class="grupo">
<label>Codigo de cliente</label><br>
<input type="text" name="txtusuario"  placeholder="Ingresa usuario" require maxl >  
</div>

<div class="grupo">
<label>Identificacion</label><br>
<input type="text" name="txtusuario" placeholder="Ingresa identificacion"  require maxl >  
</div>

<div class="grupo">
<label>Tipo Identificacion</label><br>
<input type="text" name="txtusuario" placeholder="Ingresa tipo"  require maxl >  
</div>

<div class="grupo">
<label>Nombre de cliente</label><br>
<input type="numeric" name="txtusuario" placeholder="Ingresa nombre"  require maxl >  
</div>

<div class="grupo">
<label>Telefono</label><br>
<input type="text" name="txtusuario" placeholder="Ingresa telefono"  require maxl >  
</div>

<div class="grupo">
<label>direccion</label><br>
<input type="numeric" name="txtusuario" placeholder="Ingresa direccion" >  
</div>

<div class="grupo">
<label>Telefono 2</label><br>
<input type="email" name="txtusuario" placeholder="Ingresa telefono 2"  require maxl >  
</div>

<div class="grupo">
<label>Correo</label><br>
<input type="text" name="txtusuario" placeholder="Ingresa correo" require maxl >  
</div>

<div class="grupo">
<label>Clave</label><br>
<input type="password" name="txtclave" placeholder="Ingresa clave" > 
</div>     
    
<div class="boton2">
      <input type="submit" name="btingresar" value="Registro" class="boton">
      </div>

      </form>
      </center>       
      </div>
</body>
</html>