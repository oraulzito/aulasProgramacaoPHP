<?php
require('Funcionario.php');

$funcionario = new Funcionario();

$funcionario->setNome('Raul');
$funcionario->setDataNascimento('07/07/1998');
$funcionario->setEndereco('Rua das Ruas');
$funcionario->setTelefones(array('51-111111111', '51-66666666'));

$funcionario->setCargo('TI');
$funcionario->setSalario('5000');
$funcionario->setDataAdmissao('05/02/2021');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>OO em PHP - Parte 1</title>
    <!-- CSS only -->
    <link crossorigin="anonymous" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" rel="stylesheet">
</head>
<body>
<?php
echo $funcionario->mostrarDados();
?>
</body>
