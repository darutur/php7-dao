<?php 

require_once("config.php");


// carrega um usuário
/*
$root = new Usuario();
$root->loadById(4);
echo $root;
*/

// carrega a lista
//$lista = Usuario::getList();
//echo json_encode($lista);


//carrega lista de usuário buscando pelo login
$search = Usuario::search("e");
echo json_encode($search);

 ?>