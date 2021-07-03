<?php
require_once("utils/layout.php");
require_once("classes/Produto.php");

$layout = new Layout();
$prodClass = new Produto();

echo $layout->header([]);
?>
<div class="p-3">
    <table id="carrinho" class="table shadow">
        <thead>
            <tr>
                <th>#</th>
                <th>Produto</th>
                <th>Quantidade</th>
                <th>Valor</th>
                <th>Excluir</th>
            </tr>
        </thead>
        <tbody>

        </tbody>
    </table>
    <button class="btn btn-primary" onclick="finalizar()">Finalizar</button>
</div>

<div id="carrinhoVazio">
    <h1>Seu carrinho está vazio, selecione algum produto e tente novamente.</h1>
</div>
<?php
echo $layout->footer(['js/carrinho.js']);
?>
