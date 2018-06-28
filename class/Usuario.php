<?php 

class Usuario {

	private $idUsuario;
	private $login;
	private $senha;

	public function getIdUsuario(){
		return $this->idUsuario;
	}

	public function setIdUsuario($value){
		$this->idUsuario = $value;
	}

	public function getLogin(){
		return $this->login;
	}

	public function setLogin($value){
		$this->login = $value;
	}

	public function getSenha(){
		return $this->senha;
	}

	public function setSenha($value){
		$this->senha = $value;
	}

	public function loadById($id){

		$sql = new Sql();

		$results = $sql->select("SELECT * FROM usuario WHERE idUsuario = :ID", array(":ID"=>$id));

		if(isset($results[0])){
			$row = $results[0];
			
		}
	}
}

 ?>