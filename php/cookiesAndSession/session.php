<?php
session_start();

if (@$_GET['excluir']) {
    session_unset();
    session_destroy();
    header('Location: session.php');
} else if (@$_SESSION['nVisitasCookie'] and !@$_GET['excluir']) {
    $_SESSION['nVisitasCookie'] = $_SESSION['nVisitasCookie'] + 1;
    echo "<h3>Que bom que voltou!</h3><br>";
    echo "<p>Este é o seu acesso Nº " . $_SESSION['nVisitasCookie'] . "</p><br>";
    echo "<button><a href='session.php?excluir=1'>Resetar Acessos</a></button><br>";
} else {
    $_SESSION['nVisitasCookie'] = 1;
    echo "<h3>Seja bem-vindo a esta página, este é seu primeiro acesso!</h3><br>";
    echo "<hr><p>Recarregue esta página!</p>";
}
?>