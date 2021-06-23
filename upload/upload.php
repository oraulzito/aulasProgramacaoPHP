<?php
$erro = false;

if (isset($_REQUEST['erro'])) {
    $erro = $_REQUEST['erro'];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Upload em PHP</title>
    <!-- CSS only -->
    <link crossorigin="anonymous" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" rel="stylesheet">
</head>
<body>
<!--Nome, E-mail, Sexo (radio), Data de Nascimento, Endereço, Bairro, Estado (select), Cidade, CEP e "deseja receber e-mails?" (checkbox).-->
<form action="uploadRequest.php" class="row m-auto" method="post" name="formPhp" enctype="multipart/form-data">
    <label> Nome
        <input class="form-control" name="nome" type="text">
    </label>
    <label> Foto
        <input class="form-control" name="imagem" type="file">
        <?php
        if($erro){
            echo '<p class="alert alert-danger">Sua imagem tem mais de 30kb!</p>';
        }
        ?>
    </label>

    <button class="btn btn-primary" type="submit">Enviar</button>
</form>
</body>
</html>