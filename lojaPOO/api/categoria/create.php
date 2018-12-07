<?php
/**
*
*
*/
require_once "../../model/Categoria.php";
require_once "../../model/CategoriaDAO.php";

$dados_recebidos = file_get_contents('php://input');
//

$dados = json_decode($dados_recebidos, true);

$nome = $dados['nome'];

$descricao = $dados['descricao'];

$categoria = new Categoria($nome,$descricao);

$catdao = new CategoriaDAO();


if ($catdao->insert($categoria)){
	header('HTTP/1.1 201 Created');
	header('Content-type: application/json');
	$response['msg'] = "Categoria criada com sucesso!";
}else{
	header('Content-type: application/json');
	$response['msg'] = "Não foi possivel criar a categoria!";
}

echo json_encode($response);
