<?php
$erro = false;
$caminho = './files/';
//2) Crie uma página PHP para processar o formulário do exercício anterior.
// Caso o arquivo enviado tenha mais de 30KB ou não seja uma imagem, redirecione o usuário de volta para a página do formulário.
// Caso esteja tudo ok (imagem abaixo de 30KB), mostre o nome e a foto enviados.

if ($_FILES['imagem']['size'] < 30000
    && move_uploaded_file($_FILES['imagem']['tmp_name'], $caminho . $_FILES['imagem']['name'])) {
    if ($_FILES['imagem']['type'] == 'image/gif'
        || $_FILES['imagem']['type'] == 'image/jpeg'
        || $_FILES['imagem']['type'] == 'image/jpg'
        || $_FILES['imagem']['type'] == 'image/png') {
        $img = '<img src="./files/' . $_FILES['imagem']['name'] . '">';
    }
} else {
    $erro = true;
}

if ($erro) {
    header('location: upload.php?erro=' . $erro);
} else {
    echo '<!DOCTYPE html>
                <html lang="en">
                <head>
                    <meta charset="UTF-8">
                    <title>Formulário em PHP</title>
                    <!-- CSS only -->
                    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
                </head>
                <body>
                    <div class=" m-auto">';
    echo "<h3>Nome: {$_REQUEST['nome']}</h3>";
    echo "{$img}";
    echo '</div>';
    echo '</body>';
}

?>