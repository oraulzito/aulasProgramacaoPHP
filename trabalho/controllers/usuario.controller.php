<?php
require_once('../classes/Usuario.php');

$userClass = new Usuario();

if (isset($_REQUEST['login'])) {
    $userClass->autentica();
} else if (isset($_REQUEST['emailCheck'])) {
    echo json_encode($userClass->checaEmail($_REQUEST['emailCheck']));
} else if (isset($_REQUEST['contato'])) {
    echo json_encode($userClass->contato($_REQUEST['nome'], $_REQUEST['email'], $_REQUEST['telefone'], $_REQUEST['mensagem'], 'Contato'));
} else {
    $userClass->cria();
}