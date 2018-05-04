
<?php


class Produto {

    public $idProduto = null;
    
    public $nome = '';
    public $cor = 'incolar';
    
    public $preco;
    public $estoqueMin;
    public $descricao;
    public $estoque;
    public $idTipoProduto;

    function __construct($nome, $cor) {

    	$this->nome = $nome;
    	$this->cor  = $cor;

    }

}


// public $preco = 0;
//public $estoqueMin = 0;
//public $descricao = '';
//public $estoque = '1';
//public $idTipoProduto = null;