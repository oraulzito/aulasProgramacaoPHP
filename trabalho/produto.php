<?php
require_once("utils/layout.php");
require_once("classes/Produto.php");

$layout = new Layout();
$prodClass = new Produto();

if (isset($_REQUEST['idProd']) and $_REQUEST['idProd'] >= 0) {
    $prod = $prodClass->buscaProduto($_REQUEST['idProd']);
    echo $layout->header([], ['js/produto.js']);
    if (!is_bool($prod)) {
        ?>
        <div class="d-flex m-auto h-100">
            <div class="col-md-6 col-sm-12 text-center">
                <img src="<?php echo $prod->imagem; ?>" alt="imagem de vacina">
            </div>
            <div class="col-md-6 col-sm-12">
                <h2>R$<?php echo $prod->valor; ?></h2>
                <h4><?php echo $prod->descricao; ?></h4>

                <label> Quantidade:
                    <input type="number" min="0" class="form-control form-control-sm" id="qtdProd">
                </label>
                <br>
                <br>
                <button class="btn btn-outline-primary" onclick="addCarrinho(<?php echo $prod->id?>)">Adicionar ao carrinho</button>
            </div>
        </div>
        <?php
    } else {
        ?>
        <h1>O produto que você procura não existe!</h1>
        <h3>Tente novamente, trocando o idProd da barra de endereços.</h3>
        <small>Pois, possivelmente, alguém não respondeu algum email.</small>
        <?php
    }
    echo $layout->footer();
} else {
    header('Location: notfound.php');
}
?><?php
