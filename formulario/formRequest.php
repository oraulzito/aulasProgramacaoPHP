<?php
$erroDob = false;
$erroEmail = false;

//2) Crie uma página PHP para receber todas as informações da questão anterior e mostrar na tela de forma organizada
// (sem usar print_r). (na outra questão, o action da tag form deve apontar para esta página)
// Verifique se o e-mail e a data de nascimento estão em um formato correto. Caso contrário,
// redirecione o usuário de volta ao formulário.
if (!isset($_REQUEST['email']) || !filter_var($_REQUEST['email'], FILTER_VALIDATE_EMAIL)) {
    $erroEmail = true;
}

$today = new DateTime();
$dob = DateTime::createFromFormat("Y-m-d", $_REQUEST['dataNascimento']);
$minDate = DateTime::createFromFormat("Y-m-d", '1900-01-01');

if ($dob < $minDate && $dob < $today) {
    $erroDob = true;
}

if ($erroDob == false && $erroEmail == false) {
    echo '<!DOCTYPE html>
                <html lang="en">
                <head>
                    <meta charset="UTF-8">
                    <title>Formulário em PHP</title>
                    <!-- CSS only -->
                    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
                </head>
                <body>
                    <ul>';
    echo "<li>Nome: {$_REQUEST['nome']}</li>";
    echo "<li>E-mail: {$_REQUEST['email']}</li>";
    echo "<li>Sexo: {$_REQUEST['sexo']}</li>";
    echo "<li>Data de Nascimento: {$_REQUEST['dataNascimento']}</li>";
    echo "<li>Endereço: {$_REQUEST['endereco']}</li>";
    echo "<li>Bairo: {$_REQUEST['bairro']}</li>";
    echo "<li>Estado: {$_REQUEST['estado']}</li>";
    echo "<li>Cidade: {$_REQUEST['cidade']}</li>";
    echo "<li>CEP: {$_REQUEST['cep']}</li>";
    echo "<li>Deseja receber e-mails de comunicação: " . (isset($_REQUEST['emailsComunicacao']) ? "Sim" : "Não") . "</li>";
    echo '</ul>';
    echo '</body>';
}

if ($erroDob && $erroEmail) {
    header('location: form.php?erroDob=' . $erroDob . '&erroEmail=' . $erroEmail);
} else if ($erroDob) {
    header('location: form.php?erroDob=' . $erroDob);
} else if ($erroEmail) {
    header('location: form.php?erroEmail=' . $erroEmail);
}

?>