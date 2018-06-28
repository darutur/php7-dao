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

		$results = $sql->select("SELECT * FROM usuario WHERE idUsuario = :ID", array(":ID" => $id));

		if(isset($results[0])){
			$row = $results[0];

			$this->setIdUsuario($row['idUsuario']);
			$this->setLogin($row['login']);
			$this->setSenha($row['senha']);
		}
	}

	public static function search($login){

		$sql = new Sql();

		return $sql->Select("SELECT * FROM usuario WHERE login LIKE :search", array(
			':search' => "%".$login."%"
		));

	}

	public static function getList(){
		$sql = new Sql();

		return $sql->Select("SELECT * FROM usuario");
	}

	public function __toString(){
		return json_encode(array(
			"idUsuario" => $this->getIdUsuario(),
			"login" => $this->getLogin(),
			"senha" => $this->getSenha()
		));
	}
}

 ?>