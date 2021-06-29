<?php
if (@$_GET['excluir']) {
    setcookie('nVisitasCookie', 0, time() - 1);
    header('Location: cookies.php');
} else if (@$_COOKIE['nVisitasCookie'] and !@$_GET['excluir']) {
    $valueCookie = $_COOKIE['nVisitasCookie'] + 1;
    setcookie('nVisitasCookie', $valueCookie);
    echo "<h4>Que bom que voltou!</h4><br>";
    echo "<p>Você já acessou esta página " . $_COOKIE['nVisitasCookie'] . " vez(es)</p><br>";
    echo "<button><a href='cookies.php?excluir=1'>Resetar Acessos</a></button><br>";
} else {
    setcookie('nVisitasCookie', 1);
    echo "<h3>Seja bem-vindo a esta página, este é seu primeiro acesso!</h3><br>";
    echo "<hr><p>Recarregue esta página!</p>";
}
?>