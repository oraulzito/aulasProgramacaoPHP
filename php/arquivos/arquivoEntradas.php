<?php
$contador = 0;

if (@$_GET['excluir']) {
    unlink('contador.txt');
    header('Location: arquivoEntradas.php');
}

if (file_exists('contador.txt')) {
    $contador = file_get_contents('contador.txt');
    $contador++;
}

file_put_contents('contador.txt', $contador);

echo '<h4>Essa página já foi acessada ' . $contador . ' vezes</h4>';
echo "<button><a href='arquivoEntradas.php?excluir=1'>Resetar Acessos</a></button><br>";