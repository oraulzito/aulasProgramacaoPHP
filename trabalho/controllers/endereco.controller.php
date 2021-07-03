<?php
require_once('../classes/Endereco.php');

$endClass = new Endereco();

if (isset($_REQUEST['idPais'])) {
    echo json_encode($endClass->getEstados($_REQUEST['idPais']));
} elseif (isset($_REQUEST['idEstado'])) {
    echo json_encode($endClass->getCidades($_REQUEST['idEstado']));
} else {

}
