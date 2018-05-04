<?php 

require_once '../crud/CrudProdutos.php';
require_once '../models/Produto.php';


function cadastrar(){
	header('location: ../views/cadastro_produtos.php');
}

function salvarCadastro(){

	$produto = new Produto($_POST['nome'], $_POST['cor']);

	$crud = new CrudProdutos();
	$resultado = $crud->cadastrar($produto);

	if ($resultado == 1) {
		getProdutos();
	} else {

	}
} 

function getProdutos(){

	$crud = new CrudProdutos();
	$listaProdutos = $crud->getProdutos();

	require '../views/tela_catalogo.php';
}

function excluir($idProduto){
    require_once "../crud/CrudProdutos.php";
}

//ROTAS

if (isset($_GET['acao']) && !empty($_GET['acao']) ) {

	if ($_GET['acao'] == 'cadastrar') {
		echo "chegou na rota";
		cadastrar();
	
	} elseif ($_GET['acao'] == 'salvar') {
		salvarCadastro();

	} elseif ($_GET['acao'] == 'editar') {
		//editar()
	} elseif ($_GET['acao'] == 'excluir') {
		//excluir($idProduto);
	} elseif ($_GET['acao'] == 'listar') {
		getProdutos();
	} else {
		echo "sera redirecionado pra lista";
	}

} else {
	getProdutos();
	// header('location: ../views/tela_catalogo.html');
}