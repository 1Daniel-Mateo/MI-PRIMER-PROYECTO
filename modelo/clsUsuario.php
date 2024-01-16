<?php
require_once('conexion.php');

class Usuario extends Conexion{
    private $Ucodigo;
    private $Unombre;
    private $Uclave;
    private $Utipo;

    public function __construct(){
        $this->db=parent::__construct();
    
	}
    //buscar en internet el generador de get y set en php
    
	public function getUcodigo(){
		return $this->Ucodigo;
	}

	public function setUcodigo($Ucodigo){
		$this->Ucodigo = $Ucodigo;
	}

	public function getUnombre(){
		return $this->Unombre;
	}

	public function setUnombre($Unombre){
		$this->Unombre = $Unombre;
	}

	public function getUclave(){
		return $this->Uclave;
	}

	public function setUclave($Uclave){
		$this->Uclave = $Uclave;
	}

	public function getUtipo(){
		return $this->Utipo;
	}

	public function setUtipo($Utipo){
		$this->Utipo = $Utipo;
	}

	public function registrarUsuario(){
		$consulta=$this->db->prepare("INSERT INTO usuario (Usua_codigo, Usua_nombre, Usua_clave, Usua_tipo) VALUES (:id, :name, :pass, :type)");
		$consulta->bindParam(':id',$this->Ucodigo);
		$consulta->bindParam(':name',$this->Unombre);
		$consulta->bindParam(':pass',$this->Uclave);
		$consulta->bindParam(':type',$this->Utipo);
		

		if ($consulta->execute()) {
			header('Location: ../vistas/formRegistrarUsuario.php?mensaje=correcto');
		}else{
			header('Location: ../vistas/formRegistrarUsuario.php?mensaje=incorrecto');
		}

	}

	public function login(){
		// CONSULTA ENPHP CON MYSQL
		$consulta=$this->db->prepare("SELECT * FROM usuario WHERE Usua_nombre= :Usuario and Usua_clave= :Clave");
		$consulta->bindParam(':Usuario',$this->Unombre);
		$consulta->bindParam(':Clave',$this->Uclave);
	
		$consulta->execute();

		if ($consulta->rowCount()==1) {
			return true;
		}else{
			return false;
		}

	}

	public function consultarUsuarios(){
		$consulta=$this->db->prepare("SELECT * FROM usuario");
		$filas=null;
		$consulta->execute();
		while($resultado=$consulta->fetch()){
			$filas[]=$resultado;
		}
		return $filas;
	}

	public function consultarTodos(){
		$consulta=$this->db->prepare("SELECT * FROM usuario");
		$filas=null;
		$consulta->execute();
		while($resultado=$consulta->fetch()){
			$filas[]=$resultado;
		}
		return $filas;
	}

	

	public function consultarPorCodigo(){
		$filas=null;
		$consulta=$this->db->prepare("SELECT Usua_nombre, Usua_Tipo FROM `usuario` WHERE usua_codigo= :id");
		$consulta->bindParam(':id', $this->Ucodigo);
		$consulta->execute();
		while ($resultado=$consulta->fetch()) {
			$filas[]=$resultado;
		}
		return $filas;
	}
	


	public function editarUsuario(){
		$consulta=$this->db->prepare("UPDATE usuario SET Usua_nombre= :name, Usua_clave=:pass, Usua_tipo= :type WHERE Usua_codigo=:id");
		$consulta->bindParam(':name',$this->Unombre);
		$consulta->bindParam(':pass',$this->Uclave);
		$consulta->bindParam(':type',$this->Utipo);
		$consulta->bindParam(':id',$this->Ucodigo);

		if($consulta->execute()){
			header('Location: ../vistas/formEditarusua.php?mensaje=editarok');
		}else{
			header('Location: ../vistas/formEditarusu.php?mensaje=editarerror');
		}
	}

	public function editarUsuarioDesdeTabla(){
		$consulta=$this->db->prepare("UPDATE usuario SET Usua_nombre= :name, Usua_clave=:pass, Usua_tipo= :type WHERE Usua_codigo=:id");
		$consulta->bindParam(':name',$this->Unombre);
		$consulta->bindParam(':pass',$this->Uclave);
		$consulta->bindParam(':type',$this->Utipo);
		$consulta->bindParam(':id',$this->Ucodigo);

		if($consulta->execute()){
			header('Location: ../vistas/formEditarusuaTab.php?mensaje=editarok');
		}else{
			header('Location: ../vistas/formEditarusuaTab.php?mensaje=editarerror');
		}
	}

	public function eliminarUsuario(){
		$consulta=$this->db->prepare("CALL PrEliminarUsuario(:name)");
		$consulta->bindParam(':name',$this->Unombre);
		if ($consulta->execute()) {
			header('Location: ../vistas/formEliminarUsuario.php?mensaje=correcto');
		}else{
			header('Location: ../vistas/formEliminarUsuario.php?mensaje=incorrecto');
		}


	}

	public function eliminarUsuarioTabla(){
		$consulta=$this->db->prepare("CALL PrEliminarUsuario(:name)");
		$consulta->bindParam(':name',$this->user);
		if ($consulta->execute()) {
			header('Location: ../vistas/formUsuario.php?mensaje=correcto');
		}else{
			header('Location: ../vistas/formUsuario.php?mensaje=incorrecto');
		}


	}
}




?>