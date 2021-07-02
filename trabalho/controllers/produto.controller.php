<?php
require_once ('../classes/Produto.php');

$prodClass = new Produto();

if (isset($_REQUEST['carrinho']) and isset($_REQUEST['carrinhoIds'])) {
    echo json_encode($prodClass->carrinhoProdutos($_REQUEST['carrinhoIds']));
}