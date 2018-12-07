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

$id = $dados['id'];

$catdao = new CategoriaDAO();

if ($catdao->delete($id)){
	header('Content-type: application/json');
	$response['msg'] = "Categoria deletada com sucesso!";
}else{
	header('Content-type: application/json');
	$response['msg'] = "Não foi possivel deletar a categoria!";
}

echo json_encode($response);
