<?php

function montaListaArray($values)
{
    $tamanho = count($values);
    $posicao = 0;
    $saida = "";

    foreach ($values as $value) {
        $saida = montaLista($value, $saida, $tamanho, $posicao);
        $posicao++;
    }

    return $saida;
}

function montaListaVariavel(...$values)
{
    $tamanho = count($values);
    $posicao = 0;
    $saida = "";

    foreach ($values as $value) {
        $saida = montaLista($value, $saida, $tamanho, $posicao);
        $posicao++;
    }

    return $saida;
}

function montaLista($value, $saida, $tamanho, $posicao)
{
    if ($posicao == 0) {
        $saida = '<ul>';
    }

    $saida .= '<li>' . $value . '</li>';

    if ($posicao == ($tamanho - 1)) {
        $saida .= '</ul>';
    }
    return $saida;
}

echo "Valores de array:";
echo montaListaArray(array('Item 1', 'Item 2', 'Item 3'));

echo "Valores variáveis:";
echo montaListaVariavel('abc', 'lalala', 42);
?>
