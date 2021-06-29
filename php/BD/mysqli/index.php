<?php
$con = mysqli_connect('localhost', 'root', '', 'phpclass');

if (!$con)
    echo mysqli_error($con);

$query = mysqli_query($con, 'select * from pessoa');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MySQL e PHP</title>
    <!-- CSS only -->
    <link crossorigin="anonymous" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" rel="stylesheet">
</head>
<body>
<div class="h-100 w-75 border mx-auto my-5">
    <div class="w-50 m-auto">
        <?php
        if (isset($_GET['erro'])) {
            echo "<p class='alert alert-danger'>Houve um erro, tente novamente</p>";
        }
        ?>
        <form action="mysqli.php" class="row m-auto" method="post" name="formPhp">
            <label> Nome
                <input class="form-control" name="nome" type="text">
            </label>
            <label> Endereço
                <input class="form-control" name="endereco" type="text">
            </label>
            <label> Telefone
                <input class="form-control" name="telefone" type="number" maxlength="11">
            </label>
            <button class="btn my-3 btn-primary" type="submit">Enviar dados</button>
        </form>
    </div>
    <hr>
    <div class="w-75 m-auto">
        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th>#</th>
                <th>Nome</th>
                <th>Enderço</th>
                <th>Telefone</th>
            </tr>
            </thead>
            <tbody>
            <?php
            while ($linha = mysqli_fetch_assoc($query)) {
                echo "
        <tr>
            <td>{$linha['codpessoa'] }</td>
            <td>{$linha['nome'] }</td>
            <td>{$linha['endereco'] }</td>
            <td>{$linha['telefone'] }</td>
        </tr>";
            }
            ?>
            </tbody>
        </table>
    </div>
</div>
