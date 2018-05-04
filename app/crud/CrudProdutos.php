    <?php

    require_once '../database/Conexao.php';
    require_once '../models/Produto.php';



    class CrudProdutos{
        
        private $conexao;
        private $produto;
        
        public function __construct(){
            $this->conexao = Conexao::getConexao();
        }
        //cadastrar produto - questão 6
        public function cadastrar(Produto $produto){
            $sql = "INSERT INTO produtos 
                    (nome, preco, estoque_min, descricao, estoque, idTipoProduto) 
                    VALUES ('{$produto->nome}', {$produto->preco}, {$produto->estoqueMin}, 
                            '[$produto->descricao}', {$produto->estoque}, NULL);";
            
            return $this->conexao->exec($sql);        
        }

        public function getProduto($idProduto){
            $consulta = $this->conexao->query("SELECT * FROM Produtos WHERE idProduto = $idProduto");
            $produto = $consulta->fetch(PDO::FETCH_ASSOC); //SEMELHANTES JSON ENCODE E DECODE
            return new Produto($produto['idProduto'], $produto['preco'], $produto['estoqueMin'], $produto['descricao'], $produto['estoque'], $produto['idTipoProduto']);
        }
        
        public function getProdutos(){
            $consulta = $this->conexao->query("SELECT * FROM produtos"); //msm coisa q usar a funcao p pegar td em

            $arrayProdutos = $consulta->fetchAll(PDO::FETCH_ASSOC);

            return $arrayProdutos;
        }



        //excluir produto
        public function excluir($idProduto){
            $this->conexao->exec("DELETE FROM Produtos WHERE idProduto = $idProduto");
        }
        //editar produtos
        public function editar($idProduto){
            $this->conexao->exec("UPDATE Produtos SET idProduto = $idProduto, 'preco = $preco', 'estoqueMin = $estoqueMin', 'descricao = $descricao', 'estoque = $estoque', 'idTipoProduto=$idTipoProduto' WHERE idProduto =$idProduto");
        }
    }
