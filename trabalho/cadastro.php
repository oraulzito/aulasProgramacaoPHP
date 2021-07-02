<?php
require_once("utils/layout.php");

$layout = new Layout();
echo $layout->header();
?>
<div class="col-8 mx-auto my-4">
    <form id="userForm" class="shadow rounded">
        <div class="w-75 mx-auto py-4">
            <label for="name">Nome</label>
            <input class="form-control my-2" type="text" id="name">
            <label for="email">Email</label>
            <input class="form-control my-2" type="text" id="email" placeholder="name@example.com">
            <label for="senha">Senha</label>
            <input class="form-control my-2" type="password" id="senha">
            <label for="telefone">Telefone</label>
            <input class="form-control my-2" type="text" id="telefone" placeholder="(xx)xxxxx-xxxx">
            <label for="foto"></label>Foto
            <input class="form-control my-2" type="file" id="foto">
            <hr>
            <label for="cep">CEP</label>
            <input class="form-control my-2" type="text" id="cep">
            <label for="rua">Rua</label>
            <input class="form-control my-2" type="text" id="rua">
            <label for="numero">Número</label>
            <input class="form-control my-2" type="text" id="numero">
            <label for="complemento">Complemento</label>
            <input class="form-control my-2" type="text" id="complemento">
            <label for="bairro">Bairro</label>
            <input class="form-control my-2" type="text" id="bairro">
            <label for="pais">País</label>
            <select class="form-select my-2" id="pais"></select>
            <label for="uf">UF</label>
            <select class="form-select my-2" id="uf"></select>
            <label for="cidade">Cidade</label>
            <select class="form-select my-2" id="cidade"></select>
            <br>
            <button onclick="submit()" class="btn btn-primary mb-4">Enviar</button>
        </div>
</div>
<?php
echo $layout->footer();
?>


