<?php
$con = mysqli_connect('localhost', 'root', '', 'phpclass');

if (!$con)
    echo mysqli_error($con);

$retorno = mysqli_query($con, "INSERT INTO pessoa (nome, endereco, telefone) VALUES ('{$_REQUEST['nome']}','{$_REQUEST['endereco']}','{$_REQUEST['telefone']}' )");

if ($retorno == 1) {
    header('Location: index.php');
} else {
    header('Location: index.php?erro=1');
}