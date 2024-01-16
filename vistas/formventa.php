<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../aplicaciones/css/formulario/formRventa.css">
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
    
    
    <form action="../Cont" class="formulario">
    <div class="boton1">
<button name="button" class="boton">Ingresar</button>
<button name="button"class="boton">Actualizar</button>
<button name="button" class="boton">Consular</button>
<button name="button" class="boton">Eliminar</button>

</div>

<h3 class="titulo">Registro de venta</h3>

<div class="grupo">
<label>Codigo de venta</label><br>
<input type="text" name="txtusuario" placeholder="Ingresa codigo" require maxl >  
</div>

<div class="grupo">
<label>Fecha</label><br>
<input type="numeric" name="txtusuario" placeholder="Ingresa fecha" require maxl >  
</div>

<div class="grupo">
<label>cantidad</label><br>
<input type="numeric" name="txtusuario" placeholder="Ingresa cantidad" require maxl >  
</div>

<div class="grupo">
<label>Venta Total</label><br>
<input type="text" name="txtusuario" placeholder="Total de venta" require maxl >  
</div>

<div class="boton2">
      <input type="submit" name="btingresar" value="Registro" class="boton">
      </div>
    

</form>
</body>
</html>