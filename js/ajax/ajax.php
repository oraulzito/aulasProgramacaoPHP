<?php
$con = new PDO('mysql:host=localhost;dbname=ajax', 'root', '');

try {

    if (@$_REQUEST['nome']) {
        $insert = $con->prepare("SELECT foto FROM usuario WHERE LOWER (login) = ?");
        $nome = strtolower($_REQUEST['nome']);
        $insert->bindParam(1, $nome, PDO::PARAM_STR);
    } elseif (@$_REQUEST['estados']) {
        $insert = $con->prepare("SELECT id,nome FROM uf");
    } elseif (@$_REQUEST['estado']) {
        $insert = $con->prepare("SELECT id, nome FROM cidade WHERE id_uf = ?");
        $insert->bindParam(1, $_REQUEST['estado'], PDO::PARAM_INT);
    } else {
        return false;
    }

    $insert->execute();
    echo json_encode($insert->fetchAll());
} catch (PDOException $exception) {
    return $exception->getMessage();
}
?>