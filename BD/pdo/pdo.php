<?php
$con = new PDO('mysql:host=localhost;dbname=phpclass', 'root', '');
try {
    $insert = $con->prepare("INSERT INTO pessoa (nome, endereco, telefone) VALUES (?,?,?)");

    $insert->bindParam(1, $_REQUEST['nome']);
    $insert->bindParam(2, $_REQUEST['endereo']);
    $insert->bindParam(3, $_REQUEST['telefone']);

    if ($insert->execute()) {
        header('Location: index.php');
    } else {
        throw new PDOException("Erro ao inserir");
    }
} catch (PDOException $e) {
    echo $e->getMessage();
    header('Location: index.php?erro=1');
}