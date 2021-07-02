$(document).ready(() => {
    montaCarrinho();
});

function montaCarrinho() {
    let carrinho = localStorage.getItem('carrinho');
    let ids = [];

    if (carrinho.length > 0) {
        carrinho = JSON.parse(carrinho);

        for (let i = 0; i < carrinho.length; i++) {
            ids.push(carrinho[i].id);
        }
    }

    $.get('./controllers/produto.controller.php', {carrinho: true, carrinhoIds: ids}, function (data) {
        console.log(JSON.parse(data));
    });
}