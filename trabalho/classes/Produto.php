<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '\trabalho\utils\DB.php');
require_once('Categoria.php');

class Produto
{
    private string $id;
    private string $nome;
    private string $descricao;
    private string $imagem;
    private string $valor;
    private Categoria $categoria;

//    public function __construct(string $id,
//                                string $nome,
//                                string $descricao,
//                                string $imagem,
//                                string $valor, Categoria $categoria)
//    {
//        $this->id = $id;
//        $this->nome = $nome;
//        $this->descricao = $descricao;
//        $this->imagem = $imagem;
//        $this->valor = $valor;
//        $this->categoria = $categoria;
//    }

    public function __construct()
    {
    }

    public function __destruct()
    {
    }

    public function __get(string $name)
    {
        return $this->$name;
    }

    public function __set(string $name, $value): void
    {
        $this->$name = $value;
    }

    public function enviaRecibo()
    {

    }

    public function pesquisa()
    {

    }

    public function buscaProduto(int $id = -1)
    {
        $db = new DB();
        return $db->findFirst('Produto', 'id = ' . $id)->fetchObject('Produto');
    }

    public function carrinhoProdutos(array $ids)
    {
        $i = 0;
        $inIDs = '';
        foreach ($ids as $id) {
            if ($i != 0) {
                $inIDs .= ',';
            }
            $inIDs .= $id;
            $i++;
        }

        $db = new DB();
        return $db->find('Produto', 'id IN (' . $inIDs . ')')->fetchAll(PDO::FETCH_OBJ);
    }

    public function lista()
    {
        $db = new DB();
        return $db->find('Produto', '')->fetchAll(PDO::FETCH_OBJ);
    }
}