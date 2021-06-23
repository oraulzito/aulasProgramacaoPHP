<?php
$erroDob = false;
$erroEmail = false;


if (isset($_REQUEST['erroDob'])) {
    $erroDob = $_REQUEST['erroDob'];
}

if (isset($_REQUEST['erroEmail'])) {
    $erroEmail = $_REQUEST['erroEmail'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Formulário em PHP</title>
    <!-- CSS only -->
    <link crossorigin="anonymous" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" rel="stylesheet">
</head>
<body>
<!--Nome, E-mail, Sexo (radio), Data de Nascimento, Endereço, Bairro, Estado (select), Cidade, CEP e "deseja receber e-mails?" (checkbox).-->
<form action="formRequest.php" class="row m-auto" method="post" name="formPhp">

    <label> Nome
        <input class="form-control" name="nome" type="text">
    </label>


    <label> E-mail
        <input class="form-control" name="email" type="text">
        <?php
        if($erroEmail){
            echo '<p class="alert alert-danger">Seu email não é válido</p>';
        }
        ?>
    </label>


    <div> Sexo
        <input class="form-check-label" id="masculino" name="sexo" type="radio" value="M">
        <label for="masculino">Masculino</label>
        <input class="form-check-label" id="feminino" name="sexo" type="radio" value="F">
        <label for="feminino">Feminino</label>
        <input class="form-check-label" id="outro" name="sexo" type="radio" value="O">
        <label for="outro">Outro</label>
    </div>


    <label> Data de nascimento
        <input class="form-control" name="dataNascimento" type="date">
        <?php
        if($erroDob){
            echo '<p class="alert alert-danger">Erro na data de nascimento, tem que ser maior que 01-01-1900 e menor que a data atual!</p>';
        }
        ?>
    </label>


    <hr class="my-5">

    <label> Endereço
        <input class="form-control" name="endereco" type="text">
    </label>


    <label> Bairro
        <input class="form-control" name="bairro" type="text">
    </label>


    <label> Estado
        <select class="form-select" name="estado">
            <option value="AC">Acre</option>
            <option value="AL">Alagoas</option>
            <option value="AP">Amapá</option>
            <option value="AM">Amazonas</option>
            <option value="BA">Bahia</option>
            <option value="CE">Ceará</option>
            <option value="DF">Distrito Federal</option>
            <option value="ES">Espírito Santo</option>
            <option value="GO">Goiás</option>
            <option value="MA">Maranhão</option>
            <option value="MT">Mato Grosso</option>
            <option value="MS">Mato Grosso do Sul</option>
            <option value="MG">Minas Gerais</option>
            <option value="PA">Pará</option>
            <option value="PB">Paraíba</option>
            <option value="PR">Paraná</option>
            <option value="PE">Pernambuco</option>
            <option value="PI">Piauí</option>
            <option value="RJ">Rio de Janeiro</option>
            <option value="RN">Rio Grande do Norte</option>
            <option value="RS">Rio Grande do Sul</option>
            <option value="RO">Rondônia</option>
            <option value="RR">Roraima</option>
            <option value="SC">Santa Catarina</option>
            <option value="SP">São Paulo</option>
            <option value="SE">Sergipe</option>
            <option value="TO">Tocantins</option>
        </select>
    </label>


    <label> Cidade
        <input class="form-control" name="cidade" type="text">
    </label>


    <label> CEP
        <input class="form-control" maxlength="8" name="cep" type="text">
    </label>


    <hr class="my-5">

    <label> Deseja receber e-mails de comunicação?
        <input class="form-check-input" name="emailsComunicacao" type="checkbox" value="true">
    </label>

    <button class="btn btn-primary" type="submit">Enviar</button>

</form>
</body>
</html>