<?php
require('MySQL.php');

$bd = new MySQL('localhost', 'root', '', 'phpclass');

$bd->findFirst('pessoa', '')

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
echo $bd->nome;
$bd->nome = 'Rafaela';
echo $bd->nome;
?>
</body>
