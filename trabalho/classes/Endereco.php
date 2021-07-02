<?php


class Endereco{
    private string $cep;
    private string $rua;
    private int $numero;
    private string $complemento;
    private string $bairro;
    private string $cidade;
    private string $uf;
    private string $pais;

    public function __construct()
    {
    }

    public function __destruct()
    {
    }

    public function __get(string $name)
    {
        return $this->$name;
    }

    public function __set(string $name, $value): void
    {
        $this->$name = $value;
    }
}